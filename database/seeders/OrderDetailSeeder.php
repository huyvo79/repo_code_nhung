<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    const MAX_RECORDS = 400;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table
        DB::table('order_detail')->truncate();

        // Get all orders and products

        // Insert sample data
        for ($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('order_detail')->insert([
                'order_id' => rand(1, 100), // Random order ID
                'product_id' => rand(1, 100), // Random product ID
                'quantity' => rand(1, 10), // Random quantity between 1 and 10
                'notes' => rand(100, 1000), // Random price between 100 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}