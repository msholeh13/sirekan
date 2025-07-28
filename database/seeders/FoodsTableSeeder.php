<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = database_path('data/data_with_local_images.csv');
        $file = fopen($csvFile, 'r');

        $isHeader = true;
        $batchData = [];

        while (($row = fgetcsv($file, 1000, ',')) !== false) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }

            $batchData[] = [
                'calories'      => $row[1],
                'proteins'      => $row[2],
                'fat'           => $row[3],
                'carbohydrate'  => $row[4],
                'name'          => $row[5],
                'image'         => 'images/' . $row[7],
                'created_at'    => now(),
                'updated_at'    => now()
            ];
        }

        fclose($file);

        Food::insert($batchData);
    }
}
