<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;

class VehicleSwaggerController extends Controller
{
  /**
   * @OA\Info(
   * version="1.0.0",
   * title="Vehicle Price Calculator App",
   * description="API documentation for Vehicle Price Calculator App Test",
   * )
   *   @OA\Post(
   *     path="/api/calculate-vehicle-price",
   *     summary="Calculate the total vehicle price",
   *     description="",
   *     operationId="calculateVehicle price",
   *     tags={"Vehicle Price"},
   *     @OA\RequestBody(
   *         required=true,
   *         description="Vehicle data",
   *         @OA\JsonContent(
   *             @OA\Property(property="price", type="number", format="float", example="10000.00"),
   *             @OA\Property(property="type", type="string", example="common")
   *         ),
   *     ),
   *     @OA\Response(
   *         response=201,
   *         description="Vehicle price calculated successfully",
   *         @OA\JsonContent(
   *             @OA\Property(property="price", type="number", format="float", example="10000.00"),
   *             @OA\Property(property="type", type="string", example="common")
   *         ),
   *     ),
   *     @OA\Response(
   *         response=422,
   *         description="Validation error",
   *         @OA\JsonContent(
   *             @OA\Property(property="message", type="string", example="The given data was invalid."),
   *             @OA\Property(
   *                 property="errors",
   *                 type="object",
   *                 example={
   *                     "price": {
   *                         "The price field is required.",
   *                         "The price must be a number.",
   *                         "The price must be greater than 1."
   *                     },
   *                     "type": {
   *                         "The type field is required.",
   *                         "The selected type is invalid. Must be of type: common or luxury",
   *                         "The selected type must be in lowercase"
   *                     }
   *                 }
   *             )
   *         )
   *     )
   * )
   */

  public function getSwagger()
  {
    $swagger = \OpenApi\Generator::scan([
      app_path(),
      base_path('vendor/laravel/framework/src/Illuminate/Support/Facades'),
    ]);

    return $swagger;
  }
}
