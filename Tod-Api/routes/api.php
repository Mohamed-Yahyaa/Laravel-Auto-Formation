<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::get('index',[TodolistController::class,'index']);
Route::post('store',[TodolistController::class,'store']);
Route::put('update/{id}',[TodolistController::class,'update']);
Route::delete('destroy/{id}',[TodolistController::class,'destroy']);
