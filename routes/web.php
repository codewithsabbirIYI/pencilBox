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

//All Route for products

// for product add page
Route::get('/add/product', [ProductController::class, 'create'])->name('add.product');
// for product insert on database
Route::post('/insert/product', [ProductController::class, 'store'])->name('insert.product');
// for product show or manage page
Route::get('/all/product', [ProductController::class, 'index'])->name('all.product');
// for product delete
Route::get('/delete/product/{id}', [ProductController::class, 'destroy'])->name('delete.product');
