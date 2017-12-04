<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Delivery;
use App\Category;

class DeliveryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::orderBy('id','DESC')->paginate();

        $deliveries->each(function($deliveries){
            $deliveries->user;
        });
        
        return view('admin.delivery.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delivery = new Deliver;
        $delivery->user_id      = $request->user;
        $delivery->category_id  = $request->category;
        $delivery->name         = $request->name;
        $delivery->slug         = str_slug($request->name);
        $delivery->short        = $request->short;
        $delivery->body         = $request->body;
        $delivery->phone        = $request->phone;
        $delivery->sector       = $request->sector;
        $delivery->logo         = 'http://lorempixel.com/200/200';
        $delivery->fbPage       = $request->fbPage;
        $delivery->commune      = $request->commune;
        $delivery->city         = $request->city;
        $delivery->premium      = $request->premium;
        $delivery->published    = $request->published;
        $delivery->save();

        flash('El delivery se ha creado.')->success();
        return redirect()->route('delivery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('admin.delivery.show',compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('admin.delivery.edit',compact('delivery'));
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
        $delivery = Delivery::findOrFail($id);
        $delivery->fill($request->all());
        $delivery->save();

        flash('El delivery se ha modificado.')->warning();
        return redirect()->route('delivery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->delete();

        flash('El delivery ha sido eliminado')->warning();
        return redirect()->route('delivery.index');
    }
}
