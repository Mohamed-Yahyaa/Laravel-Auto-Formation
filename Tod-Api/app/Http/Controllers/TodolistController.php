<?php

namespace App\Http\Controllers;

use App\models\task;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
  
    public function index()
    {
        //
        $tasks = task::all();
        return response()->json($tasks);
    }

    
    public function store(Request $request)
    {
        //
        $tasks = task::create([
            'Task' =>$request->nom
            ])->save();
            if($tasks){
                return response()->json(["status" => "success"]);
            }
             else{
               return response()->json(["status" => "error"]);
        }
        
    }

  
    public function update(Request $request, $id)
    {
        //
        $tasks = task::find($id)
        ->update([
            'Task' =>$request->nom
        ]);
        if($tache){
            return response()->json(["status" => "edit success"]);
        }
         else{
           return response()->json(["status" => "error "]);
         }
    
        }
  
    public function destroy($id){ 
    
        //
        task ::find($id)
        ->delete();
    }

    }
