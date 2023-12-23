<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        if (Customer::count() == 100) return;

        foreach (range(1, 100) as $index) {
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
