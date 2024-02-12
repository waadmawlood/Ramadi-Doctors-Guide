<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicBooking extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_at' => 'datetime',
        'status' => 'boolean',
    ];

    public function clinic(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
