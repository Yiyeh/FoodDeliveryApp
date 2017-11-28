<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FoodPlace;
use App\Category;
use App\Comment;

class FoodPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = FoodPlace::orderBy('id','DESC')->paginate();
        $categories = Category::get();
        $cities = DB::table('food_places')->distinct()->select('city')->get();

        return view('users.delivery.deliveryIndex', compact('deliveries','categories','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery   = FoodPlace::findOrFail($id);
        $comments   = DB::table('comments')->where('foodplace_id', '=', $id)->get();
        $promotions   = DB::table('promotions')->where('foodplace_id', '=', $id)->get();
        $categories = Category::get();
        $cities = DB::table('food_places')->distinct()->select('city')->get();


        return view('users.delivery.deliveryShow', compact('delivery','categories', 'comments','cities','promotions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
