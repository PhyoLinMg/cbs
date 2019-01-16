<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'name', 'movie_type_id', 'room_id','description','startdate','enddate'
    ];
}
