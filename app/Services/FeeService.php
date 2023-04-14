<?php

namespace App\Services;

use App\Enums\FeeType;

class FeeService
{
  public static function generateFees($basicFee, $specialFee, $associationFee, $storageFee)
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
