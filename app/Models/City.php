<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  
    protected $fillable = [
        'name', 'city_code', 'country_name', 'country_code'
    ];
   public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
    public function booking()
{
    return $this->belongsTo(Booking::class,'origin');
}
    public function getAirportsAttribute()
    {
        
        return [
            'Amberes', 'Hamilton','Rio de Janeiro', 'Quebec', 'San Salvador', 'Medellín', 'San José', 'La Romana', 'Quito', 'Helsinki', 'París', 'Tegucigalpa', 'Dublín', 'Roma', 'Kingston', 'Cancún', 'Oporto', 'Madrid', 'Londres', 'Nueva York', 'Montevideo'];
    
        
    }
}