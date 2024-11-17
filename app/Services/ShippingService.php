<?php
namespace App\Services;

use App\Contracts\ShippingStrategy;

class ShippingService
{
    protected ShippingStrategy $shippingStrategy;

    public function __construct(ShippingStrategy $shippingStrategy)
    {
        $this->shippingStrategy = $shippingStrategy;
    }

    public function calculateShipping(array $orderDetails): array
    {
        $cost = $this->shippingStrategy->calculateCost($orderDetails);
        $time = $this->shippingStrategy->getDeliveryTime($orderDetails);

        return [
            'cost' => $cost,
            'time' => $time,
        ];
    }
}
