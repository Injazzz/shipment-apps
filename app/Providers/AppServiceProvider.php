<?php

namespace App\Providers;

use App\Events\ShipUpdated;
use App\Listeners\UpdateReportAfterShipUpdate;
use App\Models\Ship;
use App\Observers\ShipObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('user', Auth::user());

          // Registrasi Event dan Listener
        Event::listen(
            ShipUpdated::class,
            [UpdateReportAfterShipUpdate::class, 'handle']
        );

         Ship::observe(ShipObserver::class);
    }
}
