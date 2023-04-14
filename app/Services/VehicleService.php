<?php

namespace App\Services;

use App\Helpers\FeeHelper;
use App\Services\FeeService;
use App\Http\Requests\CalculateFeeRequest;

class VehicleService
{
  public function calculateVehiclePrice(CalculateFeeRequest $request)
  {
    $vehicleBasePrice = $request['price'];
    $vehicleType = strtolower($request['type']);

    $basicFee = FeeHelper::calculateBasicFee($vehicleBasePrice, $vehicleType);
    $specialFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, $vehicleType);
    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);
    $storageFee = FeeHelper::calculateStorageFee();

    $totalCost = $vehicleBasePrice + $basicFee + $specialFee + $associationFee + $storageFee;

    $fees = FeeService::generateFees($basicFee, $specialFee, $associationFee, $storageFee);

    return response()->json([
      'fees' => $fees,
      'vehicle_price' => $vehicleBasePrice,
      'total_price' => $totalCost,
    ]);
  }
}
