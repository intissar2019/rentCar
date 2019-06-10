<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
     protected $fillable = [
        'name'
    ];

     public function cars()
   {
       return $this->hasMany(Car::class);
   }
}
