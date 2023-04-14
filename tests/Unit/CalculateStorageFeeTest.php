<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\FeeHelper;

class CalculateStorageFeeTest extends TestCase
{
    public function test_calculate_storage_fee()
    {
        $fee = FeeHelper::calculateStorageFee();
        $this->assertEquals(100, $fee);
    }
}
