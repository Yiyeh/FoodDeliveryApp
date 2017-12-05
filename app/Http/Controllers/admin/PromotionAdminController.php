<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Delivery;
use App\Promotion;

class PromotionAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::orderBy('id','DESC')->paginate();
        $promotions->each(function($promotions){
            $promotions->user;
        });
        return view('admin.promotion.index',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deliveries = Delivery::orderBy('name')->pluck('name','id');

        return view('admin.promotion.create',compact('deliveries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = new Promotion;
        $promotion->user_id     = \Auth::user()->id;
        $promotion->delivery_id = $request->delivery;
        $promotion->title       = $request->title;
        $promotion->photo       = 'http://lorempixel.com/200/200/food/';
        $promotion->description = $request->description;
        $promotion->price       = $request->price;
        $promotion->save();

        Flash('La promoción se guardo con exito');
        return redirect()->route('admin.promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotion.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliveries = Delivery::orderBy('name')->pluck('name','id');
        $promotion = Promotion::findOrFail($id);

        return view('admin.promotion.edit', compact('promotion','deliveries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->fill($request->all());
        $promotion->photo       = 'http://lorempixel.com/200/200/food/';
        $promotion->save();

        Flash('La promocion se ha modificado con exito')->warning();
        return redirect()->route('admin.promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        Flash('La Promocion se elimino con exito')->error();
        return redirect()->route('admin.promotion.index');
    }
}
