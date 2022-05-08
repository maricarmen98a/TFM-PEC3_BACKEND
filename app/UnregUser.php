<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

// JWT contract
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;


class UnregUser extends Model {
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  /*   protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
   

  /*   public function Reservation() {
        return $this->hasMany('App\Models\Reservation');
    }
 */
    public function Booking() {
        return $this->hasMany('App\Models\Booking');
    }
    /* public function FlightUser() {
        return $this->hasMany('App\Models\FlightUser');
    }
    public function Flight() {
        return $this->hasMany('App\Models\Flights');
    } */
}
