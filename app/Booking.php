<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'customer_id', 'movie_id', 'movie_time','ticket_price','no_of_seat','target_date','booking_date'
    ];
}
