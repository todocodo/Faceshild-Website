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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/image', 'PagesController@image')->name('image');

Route::get('/goal', 'PagesController@goal')->name('goal');

Route::get('/order', 'PagesController@order')->name('order');

Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::post('/contacts', 'PagesController@postContact');

Route::post('/orders', 'PagesController@orders');
