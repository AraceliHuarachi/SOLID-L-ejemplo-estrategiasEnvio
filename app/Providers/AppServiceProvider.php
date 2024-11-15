<?php

namespace App\Providers;

use App\Contracts\ShippingStrategy;
use App\Services\Shipping\HomeDeliveryShipping;
use App\Services\Shipping\PickupInStoreShipping;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Cambia entre las estrategias según tus pruebas
        $this->app->bind(ShippingStrategy::class, PickupInStoreShipping::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
