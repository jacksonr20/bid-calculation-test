<?php

function format_fees($basicFee, $specialFee, $associationFee, $storageFee)
{
  return [
    [
      "type" => "Basic",
      "amount" => $basicFee,
    ],
    [
      "type" => "Special",
      "amount" => $specialFee,
    ],
    [
      "type" => "Association",
      "amount" => $associationFee,
    ],
    [
      "type" => "Storage",
      "amount" => $storageFee,
    ],
  ];
}
