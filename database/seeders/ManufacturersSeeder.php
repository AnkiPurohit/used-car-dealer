<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = database_path('seeds/data/manufacturers.csv');
        $file = fopen($filePath, 'r');

        // Skip the header row
        $header = fgetcsv($file);

        // Insert each row into the database
        while ($row = fgetcsv($file)) {
            DB::table('manufacturers')->insert([
                'id' => $row[0],
                'manufacturer' => $row[1],
                'description' => $row[2],
                'origin_country' => $row[3],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        fclose($file);
    }
}
