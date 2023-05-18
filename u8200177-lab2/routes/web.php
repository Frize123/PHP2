<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('products', [ProductController::class, 'products']);
Route::get('categories', [CategoryController::class, 'categories']);
Route::get('products/{symbol_code}', [ProductController::class, 'productsSymbol']);
Route::get('categories/{symbol_code}', [CategoryController::class, 'filterByPrice']);
