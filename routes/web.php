<?php

// gates and policies 

use App\Http\Controllers\sessionController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home',
// $product = Product::all();
// );

Route::get('/',function(){
    $product = Product::all();
    return view('home',['products' => $product]);
});
Route::get('/products',function(){
    $products = Product::all();
    return view('products',['products' => $products]);
});
Route::view('/contact', ['contact']);
Route::view('/login', ['login']);
Route::view('/signup', ['sign-up']);
Route::view('/about','aboutus');
Route::view('/orders','orders');

Route::controller(sessionController::class)->group(function () {

    Route::post('/signup', 'store');
    Route::post('/login', 'login')->name('login');
    Route::get('users/{id}', 'edit')->middleware('auth','verified');
    Route::patch('users/{id}', 'update');
    Route::delete('/logout', 'destroy');
});
