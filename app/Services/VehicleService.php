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

    $basicFee = FeeHelper::calculateBasicFee($vehicleBasePrice, $vehicleType);
    $specialFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, $vehicleType);
    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);
    $storageFee = FeeHelper::calculateStorageFee();

    $totalCost = $vehicleBasePrice + $basicFee + $specialFee + $associationFee + $storageFee;

    $fees = self::generateFees($basicFee, $specialFee, $associationFee, $storageFee);

    return response()->json([
      'fees' => $fees,
      'vehicle_price' => $vehicleBasePrice,
      'total_price' => $totalCost,
    ]);
  }

  private static function generateFees($basicFee, $specialFee, $associationFee, $storageFee)
  {
    $basicFeeType = FeeType::Basic->value;
    $specialFeeType = FeeType::Special->value;
    $associationFeeType = FeeType::Association->value;
    $storageFeeType = FeeType::Storage->value;

    return [
      [
        "type" => $basicFeeType,
        "amount" => $basicFee,
      ],
      [
        "type" => $specialFeeType,
        "amount" => $specialFee,
      ],
      [
        "type" => $associationFeeType,
        "amount" => $associationFee,
      ],
      [
        "type" => $storageFeeType,
        "amount" => $storageFee,
      ],
    ];
  }
}
