<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::post('/calculate-vehicle-price', [VehicleController::class, 'calculateVehiclePrice'])->middleware('calculate.fee');
