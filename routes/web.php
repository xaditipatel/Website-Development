<?php

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

Route::get('/index',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

Route::get('index','menuController@index')->name('welcome');
Route::get('admin', 'adminController@index')->name('admin');
Route::post('admin', 'adminController@savemenu');

// CRUD
Route::get('editMenu/{item_no}','adminController@show');
Route::post('editMenu/{item_no}','adminController@edit');
Route::get('deleteMenu/{item_no}','adminController@destroy');
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/user', 'userController@index')->name('user');
Route::get('/aboutus', 'aboutusController@index')->name('aboutus');


Route::get('menu', 'BurgerstoreController@index')->name('menu');
Route::get('/cart', 'BurgerstoreController@cart')->name('cart.index');
Route::post('/add', 'BurgerstoreController@add')->name('cart.store');
Route::post('/update', 'BurgerstoreController@update')->name('cart.update');
Route::post('/remove', 'BurgerstoreController@remove')->name('cart.remove');
Route::post('/clear', 'BurgerstoreController@clear')->name('cart.clear');