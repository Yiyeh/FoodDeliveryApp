<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id','DESC')->paginate();

        $orders->each(function($orders){
            $orders->user;
        });

        return view('user.order.index', compact('orders'));
    }


    public function orderCreate($order)
    {
        $id = $order;
        return view('user.order.create', compact('id'));
    }

}
