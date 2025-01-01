<?php

namespace App\Observers;

use App\Models\Ship;
use Illuminate\Support\Facades\DB;

class ShipObserver
{
    /**
     * Handle the Ship "created" event.
     */
    public function created(Ship $ship): void
    {
        $year = $ship->created_at->format('Y');

        if (!DB::table('ships')->whereYear('created_at', $year)->exists()) {
            DB::table('reports')->insert([
                'report_type' => 'yearly',
                'report_date' => "{$year}-01-01"
            ]);
        }
    }

    /**
     * Handle the Ship "updated" event.
     */
    public function updated(Ship $ship): void
    {
        //
    }

    /**
     * Handle the Ship "deleted" event.
     */
    public function deleted(Ship $ship): void
    {
        //
    }

    /**
     * Handle the Ship "restored" event.
     */
    public function restored(Ship $ship): void
    {
        //
    }

    /**
     * Handle the Ship "force deleted" event.
     */
    public function forceDeleted(Ship $ship): void
    {
        //
    }
}
