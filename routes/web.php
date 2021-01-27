<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/certificate', 'PagesController@certificate')->name('certificate');

Route::get('/goal', 'PagesController@goal')->name('goal');

// Route::get('/cart', 'PagesController@cart')->name('cart');]

Route::get('/checkout', 'PagesController@checkout')->name('checkout');

// Routes for orders

Route::get('/products', 'ProductsController@index')->name('products.index');

Route::get('/products/{product}', 'ProductsController@show')->name('products.show');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart/{product}', 'CartController@store')->name('cart.store');

Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');


// END Orders

Route::get('/product', 'PagesController@product')->name('product');

Route::get('/custom', 'PagesController@custom')->name('custom');

Route::get('/packing', 'PagesController@packing')->name('packing');

Route::get('/demos', 'PagesController@demos')->name('demos');

Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::get('/test', 'PagesController@test')->name('test');

Route::post('/contacts', 'PagesController@postContact');

