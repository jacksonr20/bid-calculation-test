<?php

namespace App\Services;

use App\Helpers\FeeHelper;
use App\Enums\FeeType;
use App\Http\Requests\CalculateFeeRequest;

class VehicleService
{
  public function calculateVehiclePrice(CalculateFeeRequest $request)
  {
    $vehicleBasePrice = $request['price'];
    $vehicleType = strtolower($request['type']);
    $feeType = FeeType::cases();

    $basicFee = FeeHelper::calculateBasicFee($vehicleBasePrice, $vehicleType);
    $sellerFee = FeeHelper::calculateSellerFee($vehicleBasePrice, $vehicleType);
    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);
    $storageFee = FeeHelper::calculateStorageFee();

    $totalCost = $vehicleBasePrice + $basicFee + $sellerFee + $associationFee + $storageFee;

    return response()->json([
      'fees' => [
        [
          "type" => $feeType,
          "amount" => $sellerFee, $associationFee, $storageFee,
          "totalCost" => $totalCost,
        ],
      ],
    ]);
  }
}
