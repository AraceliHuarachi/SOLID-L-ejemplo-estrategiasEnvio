<?php

namespace App\Services\Shipping;

use App\Contracts\ShippingStrategy;

class HomeDeliveryShipping implements ShippingStrategy
{
    public function calculateCost(array $orderDetails): float
    {
        return $orderDetails['distance'] * 1.5 + $orderDetails['weight'] * 0.5;
    }

    public function getDeliveryTime(array $orderDetails): string
    {
        return $orderDetails['distance'] / 2;
    }
}
