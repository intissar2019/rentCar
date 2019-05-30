<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'mark_id', 'model','people','doors','mileage', 'price','transmission','photo'
    ];
}
