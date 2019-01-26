<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Movie extends Model implements HasMedia
{
    //
    use HasMediaTrait;
    protected $fillable = [
        'name', 'room_id','descrption','time','startdate','enddate'
    ];
     public function types(){
    	return $this->belongsToMany('App\Movietype');
    }

}
