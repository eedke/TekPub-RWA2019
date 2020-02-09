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

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/increase/{id}', 'ProductController@getIncreaseByOne')->name('product.increaseByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.removeItem');

Route::get('/removeAll', 'ProductController@getRemoveAll')->name('product.removeAll');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout')->middleware('auth');

Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

Route::get('/user/profile', 'UserController@getProfile')->name('user.profile')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'ProductController@getIndex')->name('product.index');

Route::get('user/view/{id}', 'UserController@getView');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
