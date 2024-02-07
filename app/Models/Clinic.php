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
}
