<?php

namespace App\Http\Requests;

use App\Enums\VehicleType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CalculateFeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', 'string', 'lowercase', new Enum(VehicleType::class)],
            'price' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'type.required' => 'The vehicle type field is required.',
            'type.string' => 'The vehicle type field must be a string.',
            'type.enum' => 'The selected vehicle type is invalid, must be common or luxury',
            'type.lowercase' => 'The vehicle type must be lowercase',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price field must be a number.',
            'price.min' => 'The price field must be at least 1.',
        ];
    }
}
