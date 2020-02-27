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

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\ContactMail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/increase/{id}', 'ProductController@getIncreaseByOne')->name('product.increaseByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.removeItem');

Route::get('/removeAll', 'ProductController@getRemoveAll')->name('product.removeAll');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout')->middleware('auth');

Route::post('/search', 'ProductController@getSearch')->name('product.search');

Route::get('/sortPriceAsc', 'ProductController@getSortAsc')->name('product.sortAsc');

Route::get('/sortPriceDesc', 'ProductController@getSortDesc')->name('product.sortDesc');

Route::get('/sortNameAsc', 'ProductController@getSortNameAsc')->name('product.sortNameAsc');

Route::get('/sortNameDesc', 'ProductController@getSortNameDesc')->name('product.sortNameDesc');

Route::get('/search/{id}', 'ProductController@getSearchCategory')->name('productCategory.search');

Route::get('/orderAccept/{id}', 'ProductController@getOrderAccept');

Route::get('/orderReject/{id}', 'ProductController@getOrderReject');

Route::get('/orderComplete/{id}', 'ProductController@getOrderComplete');

Route::get('/AllOrders', 'ProductController@getAllOrders')->name('allOrders.view');

Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

Route::get('/menu', 'ProductController@getIndex')->name('product.index');

Route::get('/user/profile', 'UserController@getProfile')->name('user.profile')->middleware('auth');

Route::get('user/view/{id}', 'UserController@getView');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('contact-us', 'ContactUSController@contactUS');

Route::post('contact-us', 'ContactUSController@contactSaveData')->name('contactus.store');

Route::get('posts', 'HomeController@posts')->name('posts');

Route::post('posts', 'HomeController@postPost')->name('posts.post');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/{id}', 'HomeController@show')->name('posts.show');

Route::get('/about-us', 'UserController@getAboutUs')->name('about-us');
