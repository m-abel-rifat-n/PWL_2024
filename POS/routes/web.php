<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// // Halaman Home
// Route::get('/', [HomeController::class, 'index']);

// // Halaman Products dengan route prefix
// Route::prefix('category')->group(function () {
//     Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('home-care', [ProductController::class, 'homeCare']);
//     Route::get('baby-kid', [ProductController::class, 'babyKid']);
// });

// // Halaman User dengan route parameter
// Route::get('user/{id}/name/{name}', [UserController::class, 'profile']);

// // Halaman Penjualan
// Route::get('sales', [SalesController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman Products dengan route prefix
Route::prefix('category')->group(function () {
    Route::get('food-beverage', function () {
        return view('products.food-beverage');
    });

    Route::get('beauty-health', function () {
        return view('products.beauty-health');
    });

    Route::get('home-care', function () {
        return view('products.home-care');
    });

    Route::get('baby-kid', function () {
        return view('products.baby-kid');
    });
});

// Halaman User dengan route parameter
Route::get('user/{id}/name/{name}', function ($id, $name) {
    return view('profile', ['id' => $id, 'name' => $name]);
});

// Halaman Penjualan
Route::get('sales', function () {
    return view('sales');
});
