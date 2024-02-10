<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Roles;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Waad\Observer\HasObserver;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    use HasObserver;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role !== Roles::Customer->name;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'gender',
        'birthday',
        'role',
        'is_banned',
        'image',
        'parent_id',
        'category_id',
        'certificate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_banned' => 'boolean',
        'birthday' => 'date:Y-m-d',
    ];

    public function getImageAttribute()
    {
        return $this->attributes['image'] ?? asset('images/avatar1.png');
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id')->select('id', 'name', 'gender',  'phone', 'birthday', 'role');
    }

    public function children()
    {
        return $this->hasMany(User::class, 'parent_id')->select('id', 'name', 'gender', 'phone', 'birthday', 'role');
    }

    public function clinics(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Clinic::class)->withPivot(['role', 'notes', 'added_by_id'])->using(ClinicUser::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
