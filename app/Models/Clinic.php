<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Waad\Observer\HasObserver;

class Clinic extends Model
{
    use HasObserver;

    protected $guarded = [];

    protected $appends = ['rate'];

    protected $casts = [
        'status' => 'boolean',
        'phones' => 'array',
    ];

    public function getRateAttribute()
    {
        $counts = $this->rates()
            ->groupBy('rate')
            ->addSelect(DB::raw('rate,COUNT(*) as rate_count'))
            ->orderBy('rate_count', 'desc')
            ->get();

        if ($counts->isEmpty()) {
            return 0;
        }

        return $counts->first()->rate;
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
        return $this->hasMany(ClinicRate::class);
    }
}
