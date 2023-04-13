<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\VehicleType;

class ValidateVehicleType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $typeOfTheVehicle = $request->input('type');
        if (!isset($typeOfTheVehicle)) {
            return response()->json(['error' => 'Missing vehicle type'], 400);
        }

        $allowedTypes = array_map(
            fn ($type) => strtolower($type->value),
            VehicleType::cases()
        );

        if (empty($typeOfTheVehicle) || !in_array(strtolower($typeOfTheVehicle), $allowedTypes)) {
            return response()->json(['error' => 'Invalid vehicle type. Try one of these: Common, Luxury'], 400);
        }

        return $next($request);
    }
}
