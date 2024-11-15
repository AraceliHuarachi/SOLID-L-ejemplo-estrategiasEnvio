<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Shipping\HomeDeliveryShipping;
use App\Services\Shipping\PickupInStoreShipping;
use App\Contracts\ShippingStrategy;


class ShippingTest extends Command
{
    protected $signature = 'shipping:test';
    protected $description = 'Test the shipping strategy flow';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $orderDetails = [
            'distance' => 15, // Distancia en km
            'weight' => 10,   // Peso en kg
        ];

        // Puedes cambiar entre las estrategias fácilmente
        $shippingStrategy = new PickupInStoreShipping();

        $cost = $shippingStrategy->calculateCost($orderDetails);
        $time = $shippingStrategy->getDeliveryTime($orderDetails);

        $this->info("Shipping Cost: $cost");
        $this->info("Delivery Time: $time");
    }
    public function handle2()
    {
        $orderDetails = [
            'distance' => 15, // Distancia en km
            'weight' => 10,   // Peso en kg
        ];

        // Puedes cambiar entre las estrategias fácilmente
        $shippingStrategy = new HomeDeliveryShipping();

        $cost = $shippingStrategy->calculateCost($orderDetails);
        $time = $shippingStrategy->getDeliveryTime($orderDetails);

        $this->info("Shipping Cost: $cost");
        $this->info("Delivery Time: $time");
    }
}
