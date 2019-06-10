<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Booking extends Model
{
    protected $fillable = [
        'pickUp', 'dropOff','status','car_id','user_id'];


 public function user()
   {

       return $this->belongsTo(User::class);

   }

   public function car()

   {
       return $this->belongsTo(Car::class);

   }


}
