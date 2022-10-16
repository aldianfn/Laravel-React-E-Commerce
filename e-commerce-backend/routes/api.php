<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// USER ROUTE
Route::get('/users', [UserController::class, 'index']);
Route::post('/auth/register', [UserController::class, 'store']);
// TODO: Masih kosong
Route::post('/auth/login', [UserController::class, 'login']);

// TODO: Tambah middleware auth
Route::get('/users/{user}', [UserController::class, 'show']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
// TODO: Masih kosong
Route::put('/users/{user}', [UserController::class, 'update']);


// PRODUCT ROUTE
// TODO: Update product
Route::resource('/products', ProductController::class);

// Product Category Route
// TODO: Update category
Route::resource('/products/categories', ProductCategoryController::class);
