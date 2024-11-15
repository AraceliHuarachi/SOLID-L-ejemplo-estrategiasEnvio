<?php

namespace App\Services\Shipping;

use App\Contracts\ShippingStrategy;

class HomeDeliveryShipping implements ShippingStrategy
{
    public function calculateCost(array $orderDetails): float
    {
        $distance = $orderDetails['distance'];
        $baseCost = 50.00;
        return $baseCost + ($distance * 5);
    }

    public function getDeliveryTime(array $orderDetails): string
    {
        $distance = $orderDetails['distance'];
        $time = ceil($distance / 10);
        return "{$time} horas";
    }
}
