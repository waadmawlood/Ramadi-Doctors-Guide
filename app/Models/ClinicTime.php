<?php

namespace App\Models;

use App\Enums\Days;
use Illuminate\Database\Eloquent\Model;

class ClinicTime extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    protected $casts = [
        'open' => 'datetime:H:i:s',
        'close' => 'datetime:H:i:s',
        'status' => 'boolean',
        'day' => Days::class,
    ];

    public function clinics(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }
}
