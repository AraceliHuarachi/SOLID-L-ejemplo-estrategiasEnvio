<?php

use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shipping-test', [ShippingController::class, 'showForm'])->name('shipping.form');
Route::post('/shipping-test', [ShippingController::class, 'calculateShipping'])->name('shipping.calculate');