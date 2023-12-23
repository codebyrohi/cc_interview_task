<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        
        if (Order::count() == 100) return;

        foreach (range(1, 100) as $index) {
            Order::create([
                'total_selling_price' =>  $faker->numberBetween(10, 1000),
                'customer_id' => $faker->numberBetween(1, 20),
                'status' => $faker->randomElement(['DRAFT', 'SUBMITTED', 'DELIVERED', 'CANCELLED', 'REFUNDED']),
                'payment_method' => $faker->randomElement(['CASH ON DELIVERY', 'UPI', 'CREDIT CARD']),
                'created_at' => $faker->dateTimeBetween('2020-01-01', '2023-12-31')->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeBetween('2020-01-01', '2023-12-31')->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
