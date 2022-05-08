<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
      'user_id',
      'booking_id',
      'flight_id',
      'passenger_name',
      'passenger_email',
      'reservation_code',
      'origin',
      'destination',
      'airline',
      'status',
      'seat',
      'price',
      'tax',
      'assigned_flight_id'
    ];


    public function User() {
      return $this->belongsTo('App\User');
    }
    
   /*  public function getReservationCodeAttribute()
    {
      return $this->reservation_code;
    } */
}
