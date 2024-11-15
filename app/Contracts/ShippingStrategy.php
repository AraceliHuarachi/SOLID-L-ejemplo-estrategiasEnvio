<?php

namespace App\Contracts;

interface ShippingStrategy
{
    public function calculateCost(array $orderDetails): float;

    public function getDeliveryTime(array $orderDetails): string;
}
