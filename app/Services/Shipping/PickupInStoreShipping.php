<?php

namespace App\Services\Shipping;

use App\Contracts\ShippingStrategy;

/**
 * Class that implements the interface
 * Takes care of orders that are picked up in the store.
 */
class PickupInStoreShipping implements ShippingStrategy
{
    // Method to calculate shipping cost
    // In this case, the cost is always 0, since the customer picks up the order at the store.
    public function calculateCost(array $orderDetails): float
    {
        return 0.00;
    }
    // Method to obtain delivery time.
    // Since the order is available for in-store pickup, it is always "Available Immediately".
    public function getDeliveryTime(array $orderDetails): string
    {
        return "Disponible inmediatamente";
    }
}
