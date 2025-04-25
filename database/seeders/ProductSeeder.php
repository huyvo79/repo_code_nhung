<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    const MAX_RECORDS = 50;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table
        DB::table('products')->truncate();

        // Insert sample data
        for ($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('products')->insert([
                'product_name' => 'Product ' . $i,
                'price' => rand(100, 1000), // Random price between 100 and 1000
                'quantity' => rand(1, 50), // Random quantity between 1 and 50
                'desc' => Str::random(20), // Random description
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
