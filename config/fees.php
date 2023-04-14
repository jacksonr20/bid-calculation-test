<?php

return [
    'common' => [
        'min' => env('MIN_BASIC_FEE', 10),
        'max' => env('MAX_BASIC_FEE', 50),
        'percentage' => env('COMMON_SPECIAL_PERCENTAGE', 0.02),
    ],
    'luxury' => [
        'min' => env('MIN_LUXURY_FEE', 25),
        'max' => env('MAX_LUXURY_FEE', 200),
        'percentage' => env('LUXURY_SPECIAL_PERCENTAGE', 0.04),
    ],

    'associationFeeRanges' => [
        'limits' => [
            'minimum' => env('MINIMUM_LIMIT_ASSOCIATION_FEE'), 500,
            'medium' => env('MEDIUM_LIMIT_ASSOCIATION_FEE'), 1000,
            'large' => env('LARGE_LIMIT_ASSOCIATION_FEE'), 3000,
        ],
        'price' => [
            'under_500' => env('MINIMUM_PRICE_ASSOCIATION_FEE'), 5,
            'between_500_and_1000' => env('MEDIUM_PRICE_ASSOCIATION_FEE'), 10,
            'between_1000_and_3000' => env('LARGE_PRICE_ASSOCIATION_FEE'), 15,
            'over_3000' => env('EXTRA_LARGE_PRICE_ASSOCIATION_FEE'), 20,
        ],
    ],
];
