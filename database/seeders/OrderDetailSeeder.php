<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        if (OrderDetail::count() == 100) return;

        foreach (range(1, 100) as $index) {
            OrderDetail::create([
                'order_id' => $faker->numberBetween(1, 100),
                'product_id' =>  $faker->numberBetween(1, 100),
                'quantity' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('2020-01-01', '2023-12-31')->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeBetween('2020-01-01', '2023-12-31')->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
