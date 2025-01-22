<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = storage_path('app/cars.csv');
        $file = fopen($filePath, 'r');

        // Skip the header row
        $header = fgetcsv($file);

        // Insert each row into the database
        while ($row = fgetcsv($file)) {
            // Find the manufacturer ID based on the manufacturer name
            $manufacturer = DB::table('manufacturers')
                ->where('manufacturer', $row[1])
                ->first();

            if ($manufacturer) {
                DB::table('cars')->insert([
                    'id' => $row[0],
                    'manufacturer_id' => $manufacturer->id,
                    'model' => $row[2],
                    'year' => $row[3],
                    'colour' => $row[4],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        fclose($file);
    }
}
