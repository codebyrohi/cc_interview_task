<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use DB;
class Test8 extends Test
{
    public $description = "return the total spending in 2022 on order of customer id 5";

    public function run(): float
    {
        $obj_result = DB::table("customers")
        ->join("orders","customers.id",'=','orders.customer_id')
        ->select('orders.total_selling_price as spending','customers.name')
        ->where("customers.id",'=',5)
        ->whereYear("orders.created_at",'=',"2022")
        ->get();
         dd($obj_result->toArray());
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test8 "
    }
}
