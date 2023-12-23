<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use DB;
class Test7 extends Test
{
    public $description = "return those orders with Order collection where order details are more than two";

    public function run(): Collection
    {
        $obj_result = DB::table("orders")
        ->join("order_details","orders.id",'=','order_details.order_id')
        ->select('orders.*',DB::raw('count(order_details.order_id) as order_details_count'))
        ->groupBy("order_details.order_id")
        ->having("order_details_count",'>',2)
        ->orderBy("order_details_count","desc")
        ->get();
        dd($obj_result->toArray());
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test7 "
    }
}
