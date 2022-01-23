<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web", "auth" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('home');
Route::resource('products', \App\Http\Controllers\Admin\ProductsController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
