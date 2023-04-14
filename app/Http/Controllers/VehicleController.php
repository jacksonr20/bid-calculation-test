<?php

namespace App\Http\Controllers;

use App\Services\VehicleService;
use App\Http\Requests\CalculateFeeRequest;

class VehicleController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function calculateVehiclePrice(CalculateFeeRequest $request)
    {
        $result = $this->vehicleService->calculateVehiclePrice($request);

        return $result;
    }
}
