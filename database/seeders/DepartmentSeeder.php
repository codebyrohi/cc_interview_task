<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departMents = [
            "Software Development",
            "Information Security",
            "Network and Infrastructure",
            "Data Science and Analytics",
            "IT Support/Helpdesk",
            "Project Management",
            "Sales and Marketing",
            "Human Resources and Administration",
            "Research and Development (R&D)",
            "Product Management"
        ];

        foreach ($departMents as $departMent) {
            Department::firstOrCreate(['employee_id'=>1,'name' => $departMent], ['employee_id'=>2,'name' => $departMent]);
        }
    }
}
