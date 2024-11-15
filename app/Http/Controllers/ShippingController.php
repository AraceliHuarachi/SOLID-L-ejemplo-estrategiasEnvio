<?php

namespace App\Http\Controllers;

use App\Contracts\ShippingStrategy;
use App\Services\Shipping\HomeDeliveryShipping;
use App\Services\Shipping\PickupInStoreShipping;

class ShippingController extends Controller
{
    protected ShippingStrategy $shippingStrategy;

    // Inyección de dependencia en el constructor
    public function __construct(ShippingStrategy $shippingStrategy)
    {
        $this->shippingStrategy = $shippingStrategy;
    }

    public function calculateShipping(array $orderDetails)
    {
        $cost = $this->shippingStrategy->calculateCost($orderDetails);
        $time = $this->shippingStrategy->getDeliveryTime($orderDetails);

        return response()->json([
            'shipping_cost' => $cost,
            'delivery_time' => $time,
        ]);
    }
}
