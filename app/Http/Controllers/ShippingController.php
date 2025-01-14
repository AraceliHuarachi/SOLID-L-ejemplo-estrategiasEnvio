<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShippingService;

class ShippingController extends Controller
{
    protected ShippingService $shippingService;

    // Constructor to initialize the shipping service
    public function __construct(ShippingService $shippingService)
    {
        $this->shippingService = $shippingService;
    }

    // Displays the shipping calculation form
    public function showForm()
    {
        return view('shipping-test');
    }

    // Calculates the shipping cost and delivery time based on order details
    public function calculateShipping(Request $request)
    {
        // Retrieve order details from the request
        $orderDetails = [
            'distance' => (float)$request->input('distance'),
            'weight' => (float)$request->input('weight'),
        ];

        // Calculate the shipping cost and time using the service
        $results = $this->shippingService->calculateShipping($orderDetails);

        // Return the view with the shipping results
        return view('shipping-test', [
            'delivery_type' => $request->input('delivery_type'),
            'distance' => $orderDetails['distance'],
            'weight' => $orderDetails['weight'],
            'cost' => $results['cost'],
            'time' => $results['time'],
        ]);
    }
}
