<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function afficher(){
        return'hello world';
    }

    public function index(){
        $name= " Yahya";
        $age=20;
        return view('index',compact('name','age'));
        
      }
}
