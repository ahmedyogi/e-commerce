<?php


use App\Http\Controllers\sessionController;
use App\Http\Controllers\admin;
use App\Http\Middleware\adminMiddleware;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(sessionController::class)->group(function () {
    
    Route::get('/', 'home');
        Route::get('/products', 'showProducts');
            Route::post('/signup', 'store');
            Route::post('/login', 'login')->name('login');
            Route::get('users/{id}', 'edit')->middleware('auth', 'verified');
            Route::patch('users/{id}', 'update');
            Route::delete('/logout', 'destroy');
            Route::view('/contact', ['contact']);
            Route::view('/login', ['login']);
            Route::view('/signup', ['sign-up']);
            Route::view('/about', 'aboutus');
            Route::view('/orders', 'orders');
});


Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function () {

    Route::controller(admin::class)->group(function () {

        //products routes
        Route::get('/home', 'home')->name('admin.home');
        Route::get('/edit_product/{id}', 'edit_product');
        Route::patch('/edit_products/{id}', 'update_product');
        Route::get('/products', 'productsIndex')->name('admin.products');
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
    })->middleware(adminMiddleware::class);
});


