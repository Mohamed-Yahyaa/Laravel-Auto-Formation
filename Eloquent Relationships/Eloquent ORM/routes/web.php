<?php

use App\Http\Controllers\PromotionsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PromotionsController::class,"index"]);

Route::get('index2',[PromotionsController::class,"index2"]);

Route::get('index3',[PromotionsController::class,"index3"]);


