<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'mark_id', 'model','people','doors','mileage', 'price','transmission','photo'
    ];


     public function bookings()

   {
       return $this->hasMany(Booking::class);
   }

   public function mark()

   {
       return $this->belongsTo(Mark::class);

   }
}
