<?php

namespace App\Http\Controllers;

use App\order;

use Illuminate\Http\Request;

class orders extends Controller
{
    function save(Request $req)
    {
        $order=new order;
        $order->first_name=$req->first_name;
        $order->last_name=$req->last_name;
        $order->phone=$req->phone;
        $order->order_id=$req->order_id;
        $order->order_date=$req->order_date;
        $order->status=$req->status;
        $order->product=$req->product;
        $order->product_line=$req->product_line;
        $order->unit_price=$req->unit_price;
        $order->qty=$req->qty;
        $order->line_total=$req->line_total;
        $order->country_code=$req->country_code;
        $order->bill_amount=$req->bill_amount;
        $order->save();
    }
    function show()
    {
        return order::all();
    }
}
