<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FeedbackController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\CakeController;

//namespaces


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

Route::get('/', [CakeController::class,'index']);


Route::get('/about-us', function () {
    return view('about');
});

Route::get('/customise', function () {
    return view('customize');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/locate-us', function () {
    return view('locate-us');
});

Route::post('/feedback',[FeedbackController::class,'index']);
Route::get('/feedback',function(){
    return redirect('locate-us');
});


Route::view('login','login');
Route::post('login/auth',[LoginController::class,'index']);
Route::get('/order-online/{id}',[CakeController::class,'showDetails']);
Route::get('/add-to-cart/{id}',[CakeController::class,'addToCart']);
Route::get('/mycart',[CakeController::class,'showCart']);
Route::delete('/delete-item',[CakeController::class,'deleteItem']);
Route::get('/buy-now/{cake_id}/{cart_id?}',[CakeController::class,'buyNow']);
Route::post('/placeorder',[CakeController::class,'FinalOrder']);



