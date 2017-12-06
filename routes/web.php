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

// Guest
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/d/list', ['as' => 'guest.delivery.list', 'uses' => 'guest\GuestController@deliveryIndex']);
Route::get('/d/{id}', ['as' => 'guest.delivery.show', 'uses' => 'guest\GuestController@deliveryShow']);
Route::get('/c/{id}', ['as' => 'guest.category.show', 'uses' => 'guest\GuestController@categoryShow']);


// User
Route::prefix('user')->name('user.')->group(function () { 
	Route::get('d' , [
		'as' 	=> 'delivery.mydelivery', 
		'uses' 	=> 'user\DeliveryController@MyDelivery'
	]);

	Route::resource('delivery' , 'user\DeliveryController');
	Route::resource('comment' , 'user\CommentController');
	Route::resource('promotion' , 'user\PromotionController');
	
});


// Admin 
Route::prefix('admin')->name('admin.')->group(function () {  
	Route::resource('delivery' , 'admin\DeliveryAdminController');
	Route::resource('category' , 'admin\CategoryAdminController');
	Route::resource('user' , 'admin\UserAdminController');
	Route::resource('order' , 'admin\OrderAdminController');
	Route::resource('comment' , 'admin\CommentAdminController');
	Route::resource('fanpage' , 'admin\FanPageAdminController');
	Route::resource('promotion' , 'admin\PromotionAdminController');
	
});

Auth::routes();


