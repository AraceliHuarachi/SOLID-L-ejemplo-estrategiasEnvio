<?php

namespace App\Contracts;

/**
 * Interface to define shipping strategies.
 */
interface ShippingStrategy
{
    public function calculateCost(array $orderDetails): float;

    public function getDeliveryTime(array $orderDetails): string;
}
