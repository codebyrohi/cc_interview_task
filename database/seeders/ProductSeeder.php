<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        if (Product::count() == 100) return;

        foreach (range(1, 100) as $index) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 1000),
            ]);
        }
    }
}
