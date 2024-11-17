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
        $this->app->bind(ShippingStrategy::class, function () {
            $deliveryType = request()->input('delivery_type', 'home');

            if ($deliveryType === 'pickup') {
                return new PickupInStoreShipping();
            }

            return new HomeDeliveryShipping();
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
