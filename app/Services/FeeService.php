<?php

namespace App\Services;

use App\Enums\FeeType;

class FeeService
{
  public static function generateFees($basicFee, $specialFee, $associationFee, $storageFee)
  {
    $basicFeeType = FeeType::Basic;
    $specialFeeType = FeeType::Special;
    $associationFeeType = FeeType::Association;
    $storageFeeType = FeeType::Storage;

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
