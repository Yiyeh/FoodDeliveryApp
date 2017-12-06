<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use App\Delivery;
use App\Category;
use App\Comment;
use App\Promotion;

class DeliveryController extends Controller
{

    public function myDelivery()
    {
        $deliveries = Delivery::orderBy('name','ASC')->where('user_id', \Auth::user()->id)->paginate();
        $categories = Category::orderBy('name','ASC')->get();
        $cities = Delivery::distinct()->select('city')->get();

        return view('user.delivery.mydelivery', compact('deliveries','categories','cities'));
    }


    public function deliveryList()
    {
        $deliveries = Delivery::orderBy('id','DESC')->where('published','PUBLISHED')->paginate();
        $categories = Category::orderBy('name','ASC')->get();
        $cities = Delivery::distinct()->select('city')->get();

        return view('user.delivery.index', compact('deliveries','categories','cities'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('user.delivery.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $delivery = new Delivery;
        $delivery->user_id      = \Auth::user()->id;
        $delivery->category_id  = $request->category;
        $delivery->name         = $request->name;
        $delivery->slug         = str_slug($request->name);
        $delivery->short        = $request->short;
        $delivery->body         = $request->body;
        $delivery->phone        = $request->phone;
        $delivery->sector       = $request->sector;
        $delivery->logo         = 'http://lorempixel.com/640/480/food/';
        $delivery->fbPage       = $request->fbPage;
        $delivery->commune      = $request->commune;
        $delivery->city         = $request->city;
        $delivery->premium      = 'FALSE';
        $delivery->published    = $request->published;
        $delivery->save();

        flash('El delivery se ha creado.')->success();
        return redirect()->route('user.delivery.mydelivery');
    }

    public function edit($id)
    {
        $categories = Category::pluck('name','id');
        $delivery = Delivery::findOrFail($id);
        return view('user.delivery.edit',compact('delivery','categories'));
    }

    public function update(Request $request, $id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->fill($request->all());
        $delivery->logo         = 'http://lorempixel.com/640/480/food/';
        $delivery->save();

        flash('El delivery se ha modificado.')->warning();
        return redirect()->route('user.delivery.mydelivery');
    }

    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->delete();

        flash('El delivery ha sido eliminado')->error();
        return redirect()->route('user.delivery.mydelivery');
    }
}
