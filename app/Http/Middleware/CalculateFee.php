<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CalculateFeeRequest;

class CalculateFee
{
  public function handle(Request $request, Closure $next)
  {
    $validator = Validator::make($request->all(), (new CalculateFeeRequest())->rules(), (new CalculateFeeRequest())->messages());

    if ($validator->fails()) {
      return response()->json([
        'errors' => $validator->errors(),
      ], 422);
    }

    return $next($request);
  }
}
