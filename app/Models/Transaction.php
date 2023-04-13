<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'vehicle_id',
        'total_price'
    ];

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    use HasFactory;
}
