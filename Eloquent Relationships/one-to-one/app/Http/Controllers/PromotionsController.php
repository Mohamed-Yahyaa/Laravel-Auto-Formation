<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotions;
use App\Models\Apprenants;


class PromotionsController extends Controller
{
    //
    public function index(){
       $data = promotions::find(1)->Oneapprenants;
       return $data;
    }
}
