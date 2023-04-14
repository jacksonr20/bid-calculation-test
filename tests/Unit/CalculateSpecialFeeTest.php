<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Enums\VehicleType;
use App\Helpers\FeeHelper;

class CalculateSpecialFeeTest extends TestCase
{
    public function test_special_fee_when_vehicle_type_is_common_and_price_is_1000()
    {
        $vehicleBasePrice = 1000;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_1000()
    {
        $vehicleBasePrice = 1000;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }
    public function test_special_fee_when_vehicle_type_is_common_and_price_is_398()
    {
        $vehicleBasePrice = 398;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_398()
    {
        $vehicleBasePrice = 398;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_common_and_price_is_501()
    {
        $vehicleBasePrice = 501;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_501()
    {
        $vehicleBasePrice = 501;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_common_and_price_is_57()
    {
        $vehicleBasePrice = 57;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_57()
    {
        $vehicleBasePrice = 57;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_common_and_price_is_1800()
    {
        $vehicleBasePrice = 1800;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_1800()
    {
        $vehicleBasePrice = 1800;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_common_and_price_is_1100()
    {
        $vehicleBasePrice = 1100;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_1100()
    {
        $vehicleBasePrice = 1100;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_common_and_price_is_1000000()
    {
        $vehicleBasePrice = 1000000;
        $expectedFee = config('fees.common.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Common->value);
        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_special_fee_when_vehicle_type_is_luxury_and_price_is_1000000()
    {
        $vehicleBasePrice = 1000000;
        $expectedFee = config('fees.luxury.percentage') * $vehicleBasePrice;
        $actualFee = FeeHelper::calculateSpecialFee($vehicleBasePrice, VehicleType::Luxury->value);
        $this->assertEquals($expectedFee, $actualFee);
    }
}
