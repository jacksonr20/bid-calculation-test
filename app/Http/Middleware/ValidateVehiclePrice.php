<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateVehiclePrice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $priceOfTheVehicle = $request->input('price');

        if (!isset($priceOfTheVehicle)) {
            return response()->json(['error' => 'Missing vehicle price'], 400);
        }

        return $next($request);
    }
}
