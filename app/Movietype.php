<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movietype extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public function movies(){
    	return $this->belongsToMany('App\Movie');
    }

}
