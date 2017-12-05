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

//Delivery
Route::resource('delivery' , 'user\DeliveryController', ['as' => 'user']);
Route::get('/mydelivery' , ['as' => 'user.delivery.mydelivery', 'uses' => 'user\DeliveryController@MyDelivery']);


Route::resource('category' , 'user\CategoryController', ['as' => 'user']);
Route::resource('comment' , 'user\CommentController', ['as' => 'user']);
Route::resource('promotion' , 'user\PromotionController', ['as' => 'user']);

//Admin Panel
Route::prefix('admin')->group(function () {  
	Route::resource('delivery' , 'admin\DeliveryAdminController', ['as' => 'admin']);
	Route::resource('category' , 'admin\CategoryAdminController', ['as' => 'admin']);
	Route::resource('user' , 'admin\UserAdminController', ['as' => 'admin']);
	Route::resource('order' , 'admin\OrderAdminController', ['as' => 'admin']);
	Route::resource('comment' , 'admin\CommentAdminController', ['as' => 'admin']);
	Route::resource('fanpage' , 'admin\FanPageAdminController', ['as' => 'admin']);
	Route::resource('promotion' , 'admin\PromotionAdminController', ['as' => 'admin']);
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
