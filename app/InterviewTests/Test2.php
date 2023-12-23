<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use DB;
class Test2 extends Test
{
    public $description = "return the department name from the departments table that has the most no of employees";

    // * example: return value "Data Science and Analytics"

    public function run(): string
    {
        $obj_result = DB::table("departments")
                        ->join("employees","departments.employee_id",'=','employees.id')
                        ->select('departments.name',DB::raw('count(departments.employee_id) as count'))
                        ->groupBy("departments.employee_id")
                        ->orderBy("count","desc")
                        //->toSql();
                        ->get();
                       // dd($obj_result);
        dd($obj_result->toArray());
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test2 "
    }
}
