<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\Transaction;

class Fee extends Model
{
    protected $table = 'fees';

    protected $fillable = [
        'type',
        'amount',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    use HasFactory;
}
