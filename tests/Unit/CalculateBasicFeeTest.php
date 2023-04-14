<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Enums\VehicleType;
use App\Helpers\FeeHelper;

class CalculateBasicFeeTest extends TestCase
{
    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_1000()
    {
        $vehicleBasePrice = 1000;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_1000()
    {
        $vehicleBasePrice = 1000;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_398()
    {
        $vehicleBasePrice = 398;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_398()
    {
        $vehicleBasePrice = 398;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_501()
    {
        $vehicleBasePrice = 501;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_501()
    {
        $vehicleBasePrice = 501;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_57()
    {
        $vehicleBasePrice = 57;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_57()
    {
        $vehicleBasePrice = 57;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_1800()
    {
        $vehicleBasePrice = 1800;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_1800()
    {
        $vehicleBasePrice = 1800;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_1100()
    {
        $vehicleBasePrice = 1100;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_1100()
    {
        $vehicleBasePrice = 1100;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_common_and_price_is_1000000()
    {
        $vehicleBasePrice = 1000000;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.common.min')), config('fees.common.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Common->value);

        $this->assertEquals($expectedFee, $actualFee);
    }

    public function test_basic_fee_when_vehicle_type_is_luxury_and_price_is_1000000()
    {
        $vehicleBasePrice = 1000000;

        $expectedFee = min(max(0.1 * $vehicleBasePrice, config('fees.luxury.min')), config('fees.luxury.max'));
        $actualFee = FeeHelper::calculateBasicFee($vehicleBasePrice, VehicleType::Luxury->value);

        $this->assertEquals($expectedFee, $actualFee);
    }
}
