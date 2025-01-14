<?php

namespace App\Services\Shipping;

use App\Contracts\ShippingStrategy;

/**
 * Class that implements the interface.
 * Takes care of home delivery orders.
 */
class HomeDeliveryShipping implements ShippingStrategy
{
    // Calculate the shipping cost based on the distance and weight of the order.
    public function calculateCost(array $orderDetails): float
    {
        return $orderDetails['distance'] * 1.5 + $orderDetails['weight'] * 0.5;
    }

    // Calculate the estimated delivery time based on distance.
    public function getDeliveryTime(array $orderDetails): string
    {
        return $orderDetails['distance'] / 2;
    }
}
