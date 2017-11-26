<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users' , 'UserController');
Route::resource('delivery' , 'FoodPlaceController');
Route::resource('categorias' , 'CategoryController');
Route::resource('orders' , 'OrderController');


Route::prefix('admin')->group(function () {  
	Route::resource('deliveries' , 'admin\FoodPlaceAdminController');
	Route::resource('categories' , 'admin\CategoryAdminController');
	Route::resource('users' , 'admin\UserAdminController');
	Route::resource('orders' , 'admin\OrderAdminController');
	
});