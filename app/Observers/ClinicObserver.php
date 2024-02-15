<?php

namespace App\Observers;

use App\Models\Clinic;

class ClinicObserver
{
    /**
     * Handle the Clinic "creating" event.
     */
    public function creating(Clinic $clinic): void
    {
    }

    /**
     * Handle the Clinic "created" event.
     */
    public function created(Clinic $clinic): void
    {
        $clinic->times()->createMany([
            [
                'day' => 1,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 2,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 3,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 4,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 5,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 6,
                'status' => true,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
            [
                'day' => 7,
                'status' => false,
                'open' => '15:00:00',
                'close' => '19:00:00',
            ],
        ]);
    }

    /**
     * Handle the Clinic "updated" event.
     */
    public function updated(Clinic $clinic): void
    {
        //
    }

    /**
     * Handle the Clinic "deleted" event.
     */
    public function deleted(Clinic $clinic): void
    {
        //
    }

    /**
     * Handle the Clinic "restored" event.
     */
    public function restored(Clinic $clinic): void
    {
        //
    }

    /**
     * Handle the Clinic "force deleted" event.
     */
    public function forceDeleted(Clinic $clinic): void
    {
        //
    }
}
