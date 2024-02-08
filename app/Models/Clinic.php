<?php

namespace App\Models;

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
        return $this->belongsToMany(User::class)->withPivot(['role', 'notes', 'added_by_id'])->using(ClinicUser::class);
    }
}
