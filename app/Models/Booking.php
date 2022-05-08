<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'status',
        'passengers',
        'airline',
        'reservation_time',
        'origin',
        'destination',
        'price',
        'tax',
        'promo_code'
     ];

    protected $hidden = [
      //  'user_id'
    ];

    public function User() {
        return $this->belongsTo('App\User');
    }
    public function Flight() {
        return $this->belongsTo('App\Models\Flight');
    }
    public function UnregUser() {
        return $this->belongsTo('App\UnregUser');
    }
    public function city()
{
    return $this->hasMany(City::class,'city_code');
}
}
