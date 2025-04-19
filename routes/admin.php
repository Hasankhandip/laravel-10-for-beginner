<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Route Grouping Example in Laravel
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'admin_home'])->name('admin_home');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/menu', [AdminController::class, 'menu'])->name('menu');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
});