<?php

namespace App\Services\Shipping;

use App\Contracts\ShippingStrategy;

class PickupInStoreShipping implements ShippingStrategy
{
    public function calculateCost(array $orderDetails): float
    {
        return 0.00;
    }

    public function getDeliveryTime(array $orderDetails): string
    {
        return "Disponible inmediatamente";
    }
}
