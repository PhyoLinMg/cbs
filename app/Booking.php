<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'name','phno','seats','mid'
    ];

    protected $casts=[
    	'seats'=>'array'
    ];
}
