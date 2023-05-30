<?php

use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('backend_dashboard');

// Route for product

Route::get('/add/product', [ProductController::class, 'create'])->name('add.product');
Route::post('/insert/product', [ProductController::class, 'store'])->name('insert.product');
