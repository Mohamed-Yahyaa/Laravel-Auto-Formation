<?php

namespace App\Models;
use App\Models\Apprenants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
      use HasFactory;
      
   protected $table ='promotions';

   public function HasOneapprenants(){
    return $this-> hasOne(apprenants::class);
   }

  

   public function HasManyapprenants(){
      return $this-> hasMany(apprenants::class);
   }

   
   public function apprenants(){
      return $this->belongsToMany(apprenants::class);
   }
}
