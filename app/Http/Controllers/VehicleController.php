<?php

namespace App\Http\Controllers;

use App\Enums\VehicleType;
use App\Models\Fee;
use Error;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function calculateVehiclePrice(Request $request)
    {
        try {
            $basePriceOfTheVehicle = $request->input('price');
            $typeOfTheVehicle = strtolower($request->input('type'));

            $fees = Fee::all();

            foreach ($fees as $fee) {
                var_dump("Type: " . $fee->type . ", Amount: " . $fee->amount);
            }

            $basicUserFee = ($typeOfTheVehicle == VehicleType::Common->value)
                ? min(max(0.1 * $basePriceOfTheVehicle, 10), 50)
                : min(max(0.1 * $basePriceOfTheVehicle, 25), 200);

            $sellerFee = ($typeOfTheVehicle == VehicleType::Common->value)
                ? 0.02 * $basePriceOfTheVehicle
                : 0.04 * $basePriceOfTheVehicle;

            $associationFee = ($basePriceOfTheVehicle <= 500)
                ? 5
                : ($basePriceOfTheVehicle <= 1000
                    ? 10
                    : ($basePriceOfTheVehicle <= 3000 ? 15 : 20)
                );
            $storageFee = 100;

            $totalCost = $basePriceOfTheVehicle + $basicUserFee + $sellerFee + $associationFee + $storageFee;

            return response()->json([
                'vehicle_price' => $basePriceOfTheVehicle,
                'vehicle_type' => $typeOfTheVehicle,
                'basic_user_fee' => $basicUserFee,
                'seller_fee' => $sellerFee,
                'association_fee' => $associationFee,
                'storage_fee' => $storageFee,
                'total_cost' => $totalCost,
            ]);
        } catch (\Throwable) {
            throw new Error('There was an error with the calculation');
        }
    }
}
