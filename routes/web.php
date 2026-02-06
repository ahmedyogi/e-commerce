<?php

// gates and policies 

use App\Http\Controllers\sessionController;
use App\Http\Controllers\admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/contact', ['contact']);
Route::view('/login', ['login']);
Route::view('/signup', ['sign-up']);
Route::view('/about','aboutus');
Route::view('/orders','orders');

Route::get('/',function(){
    $product = Product::all();
    return view('home',['products' => $product]);
});
Route::get('/products',function(){
    $products = Product::all();
    return view('products',['products' => $products]);
});

Route::prefix('/admin')->group(function () {
    Route::controller(admin::class)->group(function(){
        Route::view('/home', 'admin.home');
        Route::view('/create', 'admin.create');
        Route::post('/create', 'create');
        Route::get('/users', 'index');
        Route::get('/edit_user/{id}', 'edit');
        Route::patch('/edit_user/{id}', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});


Route::controller(sessionController::class)->group(function () {

    Route::post('/signup', 'store');
    Route::post('/login', 'login')->name('login');
    Route::get('users/{id}', 'edit')->middleware('auth','verified');
    Route::patch('users/{id}', 'update');
    Route::delete('/logout', 'destroy');
});
