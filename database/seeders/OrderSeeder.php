<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    const MAX_RECORDS = 20;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table
        DB::table('orders')->truncate();

        // Insert sample data
        for ($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('orders')->insert([
                'user_id' => rand(1, 100), // Assuming user IDs range from 1 to 100
                'address' => 'Address' . $i,
                'total_amount' => rand(100, 1000), // Random total amount between 100 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
