<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    protected $fillable = [
        'name','phno','seats','mid'
    ];

    protected $casts=[
    	'seats'=>'array'
    ];
}
