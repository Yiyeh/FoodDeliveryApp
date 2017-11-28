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


Route::prefix('admin')->group(function () {  
	Route::resource('delivery' , 'admin\FoodPlaceAdminController');
	Route::resource('category' , 'admin\CategoryAdminController');
	Route::resource('user' , 'admin\UserAdminController');
	Route::resource('order' , 'admin\OrderAdminController');
	Route::resource('comment' , 'admin\CommentAdminController');
	Route::resource('fanpage' , 'admin\FanPageAdminController');
	Route::resource('promotion' , 'admin\PromotionAdminController');
	
});