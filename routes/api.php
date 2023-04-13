<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Middleware\ValidateVehiclePrice;
use App\Http\Middleware\ValidateVehicleType;

Route::middleware(
  [ValidateVehicleType::class, ValidateVehiclePrice::class],
)
  ->group(function () {
    Route::post('/calculate-vehicle-price', [VehicleController::class, 'calculateVehiclePrice']);
  });
