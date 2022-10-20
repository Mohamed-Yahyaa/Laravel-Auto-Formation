<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $user = DB::table('promotion')->get();
 
        return view('userId',compact('user'));
    }


    public function FindId($id)
    {
        $user = DB::table('promotion')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }

    public function FindName()
    {
        $user = DB::table('promotion')->first();
        return $user->Name;
    }

    public function orderBy()
    {   
        $user = DB::table('promotion')->orderBy("Name")->get();
 
        return view('userId',compact('user'));
    }

    public function select()
    {
        $user = DB::table('promotion')
        ->select('Name','id')
        ->get();
 
        return view('userId',compact('user'));
    }

    public function join(){
        $users = DB::table('student')
            ->join('promotion', 'promotion.idStudent', '=', 'student.id')
            ->select('*')
            ->get();
            return view('join',compact('users'));
    }
}
