<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Employee;

class Test3 extends Test
{
    public $description = "return all those employee's names who had joined between 2020 - 2023";

    // * example: return value  ['John', 'sam']

    public function run(): array
    {
        $obj_result = Employee::whereBetween('joining_date',['2020-01-01','2023-01-01'])->get();           
        dd($obj_result->toArray());
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test3 "
    }
}
