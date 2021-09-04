<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendDashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BackendProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Logincontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@home')->name('home');
Route::get('/customer','CustomerController@index')->name('customer');
Route::post('/customer/store','CustomerController@store')->name('customer.store');
Route::post('/add/to/cart/{id}','CartController@addCart')->name('add.to.cart');
Route::get('/cart/view','CartController@cartView')->name('cart.view');
Route::get('/cart/delete/{id}','CartController@cartDestroy')->name('cart.delete');
Route::get('/cart/update/','CartController@cartUpdate')->name('cart.update');
Route::get('/product/search','ProductSearchController@search')->name('product.search');



Route::get('/backend/login','Logincontroller@login')->name('admin.login');
Route::post('/backend/loginConfirm','Logincontroller@loginConfirm')->name('login.confirm');


Route::middleware(['auth'])->group(function () {
	Route::get('/backend/logout','Logincontroller@logout')->name('admin.logout');
	Route::get('/backend/dashboard','BackendDashboardController@index')->name('dashboard');
	Route::get('/backend/headertop','BackendHeaderTopController@edit')->name('headertop.edit');
	Route::post('/backend/headertop/update','BackendHeaderTopController@update')->name('headertop.update');

	Route::get('/backend/product/all','BackendProductController@index')->name('product');
	Route::get('/backend/product/create','BackendProductController@create')->name('product.create');
	Route::post('/backend/product/store','BackendProductController@store')->name('product.store');
});


