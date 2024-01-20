<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\FoodController;
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
Route::post('/regester', [UserController::class,'rigester']);
Route::post('/login/user', [UserController::class,'login']);
Route::post('/logout/user', [UserController::class,'logout']);
//____________________________________________________________________//
Route::get('/resturant', [ResturantController::class, 'index']);
Route::get('/food', [FoodController::class, 'index']);

Route::get('/users/order/{id}', [UserController::class, 'userOrder']);