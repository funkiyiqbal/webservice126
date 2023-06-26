<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'p1'], function () {

    Route::get('customer', [CustomerController::class, 'index']);
    Route::get('customer/{id}', [CustomerController::class, 'show']);
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('categories', [CategoryController::class, 'index']);
});



Route::post('/register', [AuthController::class, 'registeri']);
Route::post('/login', [AuthController::class, 'registeri']);
Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user();
});
