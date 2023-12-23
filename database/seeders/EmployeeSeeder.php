<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        if (Employee::count() == 100) return;

        foreach (range(1, 100) as $index) {
            Employee::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'salary_per_annum' => $faker->numberBetween(100000, 1000000),
                'joining_date' => $faker->dateTimeBetween('2010-01-01', '2023-12-31')->format('Y-m-d H:i:s'),
                //'department_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
