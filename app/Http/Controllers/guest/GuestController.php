<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Delivery;
use App\Category;
use App\Comment;
use App\Promotion;

class GuestController extends Controller
{
    public function deliveryindex()
    {
        $deliveries = Delivery::orderBy('id','DESC')->where('published','PUBLISHED')->paginate();
        $categories = Category::orderBy('name','ASC')->get();
        $cities = Delivery::distinct()->select('city')->get();

        return view('user.delivery.index', compact('deliveries','categories','cities'));
    }

    public function deliveryShow($id)
    {
        $delivery   = Delivery::findOrFail($id);
        $comments   = Comment::where('delivery_id', '=', $id)->get();
        $comments->each(function($comments){
            $comments->user;
        });
        
        $promotions   = Promotion::where('delivery_id', '=', $id)->get();
        $categories = Category::orderBy('name','ASC')->get();
        $cities = Delivery::distinct()->select('city')->get();


        return view('user.delivery.show', compact('delivery','categories', 'comments','cities','promotions'));
    }

    public function categoryShow($id)
    {
        $categories = Category::orderBy('name','ASC')->get();
        $cities = Delivery::distinct()->select('city')->get();
        $deliveries = Delivery::orderBy('name')->where('category_id', $id)->paginate();
        return view('user.category.show', compact('deliveries','categories','cities'));
    }
}
