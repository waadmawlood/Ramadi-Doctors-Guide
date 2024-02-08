<?php

namespace App\Models;

use App\Enums\Roles;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => 'boolean',
        'phones' => 'array',
    ];

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
}
