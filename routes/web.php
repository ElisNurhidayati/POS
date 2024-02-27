<?php

use Illuminate\Support\Facades\Route;
// Home
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

// Products
use App\Http\Controllers\ProductController;
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// User
use App\Http\Controllers\UserController;
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Transaksi

use App\Http\Controllers\SalesController;
Route::get('/sales', [SalesController::class, 'index']);
