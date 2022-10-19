<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',function () {
    return view('index');
});

//Route avec controller
Route::get('/hello',[TestController::class,'afficher']);

// Methode match 

Route::match(['get','post'],'/page',function(){
  return('yahya');
});

// // Methode any

Route::any(('/pages'),function(){
 return('helle tous le monde');
});

// //Route request
Route::any(('/input'),function(){
    return view('input');
   });



//Protection CSRF
Route::get('/profile',function(){
    return view('csrf');
});

Route::any('/csrf',function(request $request){
    return  $request->input("name");
    
 });



