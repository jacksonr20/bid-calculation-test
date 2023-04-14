<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\FeeHelper;

class CalculateAssociationFeeTest extends TestCase
{
  public function test_association_fee_when_vehicle_price_is_between_1_and_500(): void
  {
    $vehicleBasePrice = 398;
    $expectedAssociationFee = 5;

    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);

    $this->assertEquals($expectedAssociationFee, $associationFee);
  }

  public function test_association_fee_when_vehicle_price_is_between_500_and_1000(): void
  {
    $vehicleBasePrice = 501;
    $expectedAssociationFee = 10;

    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);

    $this->assertEquals($expectedAssociationFee, $associationFee);
  }

  public function test_association_fee_when_vehicle_price_is_between_1000_and_3000(): void
  {
    $vehicleBasePrice = 1800;
    $expectedAssociationFee = 15;

    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);

    $this->assertEquals($expectedAssociationFee, $associationFee);
  }

  public function test_association_fee_when_vehicle_price_is_over_3000(): void
  {
    $vehicleBasePrice = 1000000;
    $expectedAssociationFee = 20;

    $associationFee = FeeHelper::calculateAssociationFee($vehicleBasePrice);

    $this->assertEquals($expectedAssociationFee, $associationFee);
  }
}
