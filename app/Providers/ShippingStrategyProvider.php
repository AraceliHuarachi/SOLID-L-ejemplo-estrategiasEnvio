<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\ShippingStrategy;
use App\Services\Shipping\HomeDeliveryShipping;
use App\Services\Shipping\PickupInStoreShipping;


class ShippingStrategyProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(ShippingStrategy::class, function ($app) {
            // Usar configuración o lógica para decidir la estrategia
            $strategy = config('shipping.strategy'); // Recuperamos la estrategia desde la configuración

            if ($strategy === 'pickup') {
                return new PickupInStoreShipping();
            }

            return new HomeDeliveryShipping(); // Valor por defecto
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
