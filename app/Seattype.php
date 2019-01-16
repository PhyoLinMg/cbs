<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seattype extends Model
{
    protected $fillable = [
        'room_id', 'seatrow', 'seatprice','quantity'
    ];
}
