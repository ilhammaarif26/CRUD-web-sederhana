<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route for page navigation
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/allproducts', [ProductController::class, 'index']);

//route for product    
Route::get('product/store', [ProductController::class, 'store']);
Route::get('product/create', [ProductController::class, 'create']);

//update product
Route::get('product/{product:id}/update', [ProductController::class, 'edit']);
Route::patch('product/{product:id}/update', [ProductController::class, 'update']);

Route::get('product/{product:id}/delete', [ProductController::class, 'destroy']);

//user 
Route::get('user/login', [UsersController::class, 'login']);
