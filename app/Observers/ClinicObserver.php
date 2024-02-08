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
        $clinic->times()->createMany([
            [
                'day' => 1,
            ],
            [
                'day' => 2,
            ],
            [
                'day' => 3,
            ],
            [
                'day' => 4,
            ],
            [
                'day' => 5,
            ],
            [
                'day' => 6,
            ],
            [
                'day' => 7,
            ],
        ]);
    }

    /**
     * Handle the Clinic "created" event.
     */
    public function created(Clinic $clinic): void
    {
        //
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
