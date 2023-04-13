<?php

namespace App\Models;

use App\Enums\VehicleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fee;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'type',
        'base_price'
    ];

    protected $casts = [
        'type' => VehicleType::class
    ];

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    use HasFactory;
}
