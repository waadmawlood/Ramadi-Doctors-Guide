<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Waad\Observer\HasObserver;

class ClinicBooking extends Model
{
    use HasObserver;

    protected $guarded = [];

    protected $casts = [
        'date_at' => 'datetime',
        'status' => 'boolean',
        'seen' => 'boolean',
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
