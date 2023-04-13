<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
    public function run(): void
    {
        Fee::create([
            'type' => 'Basic',
            'amount' => 50,
        ]);

        Fee::create([
            'type' => 'Special',
            'amount' => 20,
        ]);

        Fee::create([
            'type' => 'Association',
            'amount' => 10,
        ]);

        Fee::create([
            'type' => 'Storage',
            'amount' => 100,
        ]);
    }
}
