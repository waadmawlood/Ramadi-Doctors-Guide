<?php

namespace App\Observers;

use App\Models\ClinicBooking;
use Carbon\Carbon;

class ClinicBookingObserver
{
    /**
     * Handle the ClinicBooking "creating" event.
     */
    public function creating(ClinicBooking $clinic_booking): void
    {
        $clinic_booking->time_str = '15:00:00';
    }

    /**
     * Handle the ClinicBooking "created" event.
     */
    public function created(ClinicBooking $clinic_booking): void
    {
        //
    }

    /**
     * Handle the ClinicBooking "updated" event.
     */
    public function updating(ClinicBooking $clinic_booking): void
    {
        if (filled($clinic_booking->date_str) && filled($clinic_booking->time_str)) {
            $clinic_booking->date_at = Carbon::parse($clinic_booking->date_str . ' ' . $clinic_booking->time_str);
        }

        if (!$clinic_booking->status && filled($clinic_booking->date_at)) {
            $clinic_booking->status = true;
        }
    }

    /**
     * Handle the ClinicBooking "updated" event.
     */
    public function updated(ClinicBooking $clinic_booking): void
    {
        //
    }

    /**
     * Handle the ClinicBooking "deleted" event.
     */
    public function deleted(ClinicBooking $clinic_booking): void
    {
        //
    }

    /**
     * Handle the ClinicBooking "restored" event.
     */
    public function restored(ClinicBooking $clinic_booking): void
    {
        //
    }

    /**
     * Handle the ClinicBooking "force deleted" event.
     */
    public function forceDeleted(ClinicBooking $clinic_booking): void
    {
        //
    }
}
