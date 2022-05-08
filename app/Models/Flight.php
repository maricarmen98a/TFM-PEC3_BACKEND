<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 
class Flight extends Model
{
    protected $fillable = [
        'flight_number',
        'airline',
        'origin',
        'destination',
        'boarding_time', 
        'arrival_time',
        'boarding_hour',
        'arrival_hour',
        'reservation_code'
/*         'arrival_time',
        'arrival_time', */
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    /* public $fillable = [
        'flightNumber',
        'arrivalAirport_id',
        'arrivalDatetime',
        'departureAirport_id',
        'departureDatetime'
    ]; */
/*     protected $dateFormat = 'd/m/Y';
 */
    public function city() {
        return $this->hasMany(City::class);
    } 
   /*  public function User() {
        return $this->belongsTo('App\User');
    } */
    /* public function reservation_code()
{
    return $this->belongsTo('App\Models\Reservation', 'reservation_code');
} */
    /* public function getReservationCodeAttribute()
    {
      return $this->reservation_code;
    } */
    public function Booking() {
        return $this->belongsTo('App\Models\Booking');
      }
}
