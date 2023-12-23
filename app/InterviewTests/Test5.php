<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use DB;
class Test5 extends Test
{
    public $description = "Retrieve the Department Collection sorted in descending order based on the number of employees.";

    public function run(): Collection
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

        // * Run your code by " php artisan run:test Test5 "
    }
}