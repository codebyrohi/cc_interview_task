<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;

class Test4 extends Test
{
    public $description = "return Employee Collection where Employee's name started with letter 'a'";

    public function run(): Collection
    {
        $obj_result = Employee::where('name','like','a%')->get();           
        dd($obj_result->toArray());
        // * write your code here *
        
        // ---------------

        // * Run your code by " php artisan run:test Test4 "
    }
}
