<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/transaction-history', [DashboardController::class, 'transactionHistory'])->name('dashboard.transaction-history');

Route::get('/', function () {
    return view('welcome');
});
