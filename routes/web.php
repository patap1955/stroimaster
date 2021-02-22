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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('/');
Route::get('/contact', 'App\Http\Controllers\PagesController@contacts')->name('contact');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery')->name('gallery');
Route::get('/price', 'App\Http\Controllers\PagesController@price')->name('price');
Route::get('/services/{service}', 'App\Http\Controllers\ServicesController@show')->name('service.show');
Route::post('/feedback/contact', 'App\Http\Controllers\FeedbackController@storeContact')->name('feedback.contact.store');
Route::post('/feedback/order', 'App\Http\Controllers\FeedbackController@storeOrder')->name('feedback.order.store');
Route::post('/feedback/order-tel', 'App\Http\Controllers\FeedbackController@storeTel')->name('feedback.tel.store');
