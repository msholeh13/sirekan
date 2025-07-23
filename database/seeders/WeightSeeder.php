<?php

namespace Database\Seeders;

use App\Models\Weight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weight::insert([
            [
                'name'          => 'calorie',
                'value'         => 0.25,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'protein',
                'value'         => 0.25,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'fat',
                'value'         => 0.25,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'carbohydrate',
                'value'         => 0.25,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
