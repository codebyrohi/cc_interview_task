<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Employee;
use DB;
class Test1 extends Test
{
    public $description = "return the name of the employee from the employees table who is receiving the second highest salary";

    // * example: return value "john"

    public function run():string
    {
        $arr_result = [];
        $obj_employee = Employee::orderBy("salary_per_annum","desc")->limit(1)->offset(1)->first();
        if($obj_employee)
        {
            $arr_result = $obj_employee->toArray();
        }
        dd($arr_result);
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test1 "
    }
}
