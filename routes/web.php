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
Route::view('/about', 'aboutus');
Route::view('/orders', 'orders');

Route::get('/', function () {
    $product = Product::all();
    return view('home', ['products' => $product]);
});
Route::get('/products', function () {
    $products = Product::all();
    return view('products', ['products' => $products]);
});

Route::prefix('/admin')->group(function () {
    Route::controller(admin::class)->group(function () {

        //products routes
        $products = Product::all();
        $usersCount = User::count();
        $productsCount = Product::count();
        Route::view('/home', 'admin.home',['productsCount' => $productsCount,'usersCount' => $usersCount]);
        Route::get('/edit_product/{id}', 'edit_product');
        Route::patch('/edit_products/{id}', 'update_product');
        route::view('/products', 'admin.products', ['products' => $products, 'productsCount' => $productsCount]);
        Route::delete('/products/{id}', 'delete_product')->name('products.destroy');
        route::view('/create_product', 'admin.create_product');
        Route::post('/create_product', 'create_product');

        //user routes
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
    Route::get('users/{id}', 'edit')->middleware('auth', 'verified');
    Route::patch('users/{id}', 'update');
    Route::delete('/logout', 'destroy');
});
