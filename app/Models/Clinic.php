<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Nicolaslopezj\Searchable\SearchableTrait;
use Waad\Observer\HasObserver;

class Clinic extends Model
{
    use HasObserver;
    use SearchableTrait;

    protected $guarded = [];

    protected $appends = ['rate', 'logo_url'];

    protected $casts = [
        'status' => 'boolean',
        'phones' => 'array',
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'clinics.name' => 10,
            'clinics.description' => 5,
            'clinics.address' => 5,
            'users.name' => 10,
            'users.certificate' => 6,
            'categories.name' => 7,
        ],
        'joins' => [
            'clinic_user' => ['clinics.id', 'clinic_user.clinic_id'],
            'users' => ['users.id', 'clinic_user.user_id'],
            'categories' => ['users.category_id', 'categories.id'],
        ],
    ];

    public function getRateAttribute()
    {
        $counts = $this->rates()
            ->groupBy('rate')
            ->addSelect(DB::raw('rate,COUNT(*) as rate_count'))
            ->orderBy('rate_count', 'desc')
            ->get();

        if ($counts->isEmpty()) {
            return 1;
        }

        return $counts->first()->rate;
    }

    public function getLogoUrlAttribute()
    {
        return $this->attributes['logo'] ? asset('storage/' . $this->attributes['logo']) : asset('images/clinic.png');
    }

    public function getLogoAttribute()
    {
        return $this->attributes['logo'] ?? asset('images/clinic.png');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['role', 'notes', 'added_by_id'])
            ->using(ClinicUser::class)
            ->whereIn('users.role', [Roles::Doctor->name, Roles::Secretary->name]);
    }

    public function usersDoctor(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['role', 'notes', 'added_by_id'])
            ->using(ClinicUser::class)
            ->where('users.role', Roles::Doctor->name);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->using(CategoryClinic::class);
    }

    public function times(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClinicTime::class);
    }

    public function rates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClinicRate::class)->latest();
    }

    public function bookings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClinicBooking::class);
    }
}
