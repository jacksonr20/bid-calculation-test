<?php

namespace App\Helpers;

use App\Enums\VehicleType;

class FeeHelper
{
  public static function calculateBasicFee(float $vehicleBasePrice, string $vehicleType): float
  {
    $commonType = VehicleType::Common->value;
    $luxuryType = VehicleType::Luxury->value;

    if ($vehicleType === $commonType) {
      return min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
    } elseif ($vehicleType === $luxuryType) {
      return min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
    }

    throw new \InvalidArgumentException('Invalid vehicle type');
  }

  public static function calculateSpecialFee(float $vehicleBasePrice, string $vehicleType): float
  {
    $fee = $vehicleType === VehicleType::Common->value ? config('fees.common.special_percentage') : config('fees.luxury.special_percentage');

    return $fee * $vehicleBasePrice;
  }

  public static function calculateAssociationFee(float $vehicleBasePrice): float
  {
    $associationFee = config('fees.associationFeeRanges.price.over_3000');

    if ($vehicleBasePrice <= config('fees.associationFeeRanges.limits.minimum')) {
      $associationFee = config('fees.associationFeeRanges.price.under_500');
    } elseif ($vehicleBasePrice <= config('fees.associationFeeRanges.limits.medium')) {
      $associationFee = config('fees.associationFeeRanges.price.between_500_and_1000');
    } elseif ($vehicleBasePrice <= config('fees.associationFeeRanges.limits.large')) {
      $associationFee = config('fees.associationFeeRanges.price.between_1000_and_3000');
    }

    return $associationFee;
  }

  public static function calculateStorageFee(): float
  {
    return 100;
  }
}
