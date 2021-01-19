<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\RawMessage;

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
Route::get('product/index', [ProductController::class, 'index']);
Route::get('product/viewdetail/{product:id}', [ProductController::class, 'viewdetail']);
Route::get('product/create', [ProductController::class, 'create']);
Route::get('product/store', [ProductController::class, 'store']);


//update product
Route::get('product/{product:id}/update', [ProductController::class, 'edit']);
Route::patch('product/{product:id}/update', [ProductController::class, 'update']);

Route::get('product/{product:id}/delete', [ProductController::class, 'destroy']);

// category 
Route::get('category/index', [CategoryController::class, 'index']);
Route::get('category/create', [CategoryController::class, 'showCreate']);
Route::post('category/create', [CategoryController::class, 'create']);

Route::get('category/{category:id}/update', [CategoryController::class, 'showUpdate']);
Route::patch('category/{category:id}/update', [CategoryController::class, 'update']);

Route::get('category/{category:id}/delete', [CategoryController::class, 'delete']);

// filter catgegory
Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
