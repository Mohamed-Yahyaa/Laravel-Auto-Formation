<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotions;
use App\Models\Apprenants;


class PromotionsController extends Controller
{
    // One To One

    public function index(){
       $data = promotions::find(1)->HasOneapprenants;
       return $data;
    }
    // One To Many

    public function index2(){
        $data = promotions::find(2)->HasManyapprenants;
        return $data;
    }

    public function index3(){
        $data = promotions::find(3)->apprenants;
        return $data;
    }
}
