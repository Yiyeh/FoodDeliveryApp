<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use App\Promotion;
use App\Delivery;

class PromotionController extends Controller
{
    
    public function index()
    {
        $promotions = Promotion::orderBy('id','DESC')->where('user_id', \Auth::user()->id)->paginate();
        $promotions->each(function($promotions){
            $promotions->delivery;
        });
        return view('user.promotion.index', compact('promotions'));
    }

    public function create()
    {
        $deliveries = Delivery::orderBy('name')->where('user_id', \Auth::user()->id)->pluck('name','id');

        return view('user.promotion.create',compact('deliveries'));
    }
 
    public function store(Request $request)
    {
        $promotion = new Promotion;
        $promotion->user_id     = \Auth::user()->id;
        $promotion->delivery_id = $request->delivery;
        $promotion->title       = $request->title;
        $promotion->photo       = 'http://lorempixel.com/640/480/food/';
        $promotion->description = $request->description;
        $promotion->price       = $request->price;
        $promotion->save();

        Flash('La Promoción se ha guardado con exito')->success();
        return redirect()->route('user.promotion.index');
    }

    public function edit($id)
    {
        $deliveries = Delivery::orderBy('name')->where('user_id', \Auth::user()->id)->pluck('name','id');
        $promotion = Promotion::findOrFail($id);

        return view('user.promotion.edit', compact('promotion','deliveries'));
    }

    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->fill($request->all());
        $promotion->photo       = 'http://lorempixel.com/200/200/food/';
        $promotion->save();

        Flash('La promocion se ha modificado con exito')->warning();
        return redirect()->route('user.promotion.index');
    }

    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        Flash('La Promocion se elimino con exito')->error();
        return redirect()->route('user.promotion.index');
    }
}
