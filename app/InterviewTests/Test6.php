<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Collection;

class Test6 extends Test
{
    public $description = "save the following requestArray Data into orders and order_details table and return the Order object";

    public function run(): Order
    {

        $requestArray = [
            'customer_id' => 3,
            'status' => 'SUBMITTED',
            'total_selling_price' => 0, // * have to calculate right selling price by the price of the product and quantity of the product
            'payment_method' => 'CASH ON DELIVERY',
            'order_details' => [
                [
                    'product_id' => 1,
                    'quantity' => 5
                ],
                [
                    'product_id' => 7,
                    'quantity' => 2
                ]
            ]
        ];
    
        $arr_order_details = $requestArray['order_details'];
        $arr_order['customer_id'] = $requestArray['customer_id'];
        $arr_order['status'] = $requestArray['status'];
        $arr_order['total_selling_price'] = $requestArray['total_selling_price'];
        $arr_order['payment_method'] = $requestArray['payment_method'];
        $obj_order = Order::create($arr_order);
        if($obj_order)
        {
            $order_id = $obj_order->id;
            foreach($arr_order_details as $order_details)
            {
                OrderDetail::create(['order_id'=>$order_id,'product_id'=>$order_details['product_id'],'quantity'=>$order_details['quantity']]);
            }
        }
        dd($obj_order);
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test6 "
    }
}
