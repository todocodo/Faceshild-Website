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

Route::get('/cart', 'PagesController@cart')->name('cart');

Route::get('/checkout', 'PagesController@checkout')->name('checkout');

Route::get('/products', 'PagesController@products')->name('products');

Route::get('/product', 'PagesController@product')->name('product');

Route::get('/custom', 'PagesController@custom')->name('custom');

Route::get('/packing', 'PagesController@packing')->name('packing');

Route::get('/demos', 'PagesController@demos')->name('demos');

Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::get('/test', 'PagesController@test')->name('test');

Route::post('/contacts', 'PagesController@postContact');

