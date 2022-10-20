<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::any("/userId",[Controller::class,"index"]);


Route::any("person/{id}",[Controller::class,"FindId"]);



Route::any("/findName",[Controller::class,"FindName"]);

Route::any("/orderBy",[Controller::class,"orderBy"]);

Route::any("/select",[Controller::class,"select"]);

Route::any("/innerJoin",[Controller::class,"join"]);