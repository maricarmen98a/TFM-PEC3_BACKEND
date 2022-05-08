<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightUser extends Model
{
    protected $fillable = [
      'flight_id',
      'user_id',
      'reservation_code',
    ];


    public function User() {
      return $this->belongsTo('App\User');
    }
    
   
}
