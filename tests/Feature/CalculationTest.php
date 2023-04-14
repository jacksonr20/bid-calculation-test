<?php

namespace Tests\Feature;

use App\Enums\FeeType;
use Tests\TestCase;

class CalculationTest extends TestCase
{
    public function test_calculation(): void
    {
        $vehicleType = 'common';
        $vehicleBasePrice = 1000;

        $basicFee = 50;
        $specialFee = 20;
        $associationFee = 10;
        $storageFee = 100;

        $fees = self::generate_fees($basicFee, $specialFee, $associationFee, $storageFee);
        $totalCost = $vehicleBasePrice + $basicFee + $specialFee + $associationFee + $storageFee;

        $response = $this->post(
            env('APP_URL') . ':' . env('APP_PORT') . '/api/calculate-vehicle-price',
            ['price' => $vehicleBasePrice, 'type' => $vehicleType]
        );

        $response->assertStatus(200);

        $response->assertJson([
            'fees' => $fees,
            'vehicle_price' => $vehicleBasePrice,
            'total_price' => $totalCost,
        ]);
    }

    private static function generate_fees($basicFee, $specialFee, $associationFee, $storageFee): array
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
