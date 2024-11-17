<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShippingService;

class ShippingController extends Controller
{
    protected ShippingService $shippingService;

    public function __construct(ShippingService $shippingService)
    {
        $this->shippingService = $shippingService;
    }

    public function showForm()
    {
        return view('shipping-test');
    }

    public function calculateShipping(Request $request)
    {
        $orderDetails = [
            'distance' => (float)$request->input('distance'),
            'weight' => (float)$request->input('weight'),
        ];

        $results = $this->shippingService->calculateShipping($orderDetails);

        return view('shipping-test', [
            'delivery_type' => $request->input('delivery_type'),
            'distance' => $orderDetails['distance'],
            'weight' => $orderDetails['weight'],
            'cost' => $results['cost'],
            'time' => $results['time'],
        ]);
    }
}
