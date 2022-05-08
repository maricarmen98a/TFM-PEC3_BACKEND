<?php

use Illuminate\Database\Seeder;
use App\Models\Flight;
use Carbon\Carbon;
use Faker\Generator as Faker;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
      factory(App\Models\Flight::class, 500)->create();
    

       /* 
      function generateRandomString($length = 3) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }

      $arrays = range(0,20);
        
      foreach ($arrays as $valor) {
          $flightHours =  rand(1, 24);

          $flightTime = new DateInterval('PT' . $flightHours . 'H');  
          $arrival = Carbon::today()->subDays(rand(0, 365))->sub($flightTime); 
  
          $depart = clone $arrival;
          $depart->sub($flightTime);

          DB::table('flights')->insert([	            
            'flightNumber' => generateRandomString(2)  . rand(1000, 9999), 
            'arrivalAirport_id' => generateRandomString(), 
            'arrivalDatetime' => $arrival,
            'departureAirport_id' => generateRandomString(), 
            'departureDatetime' => $depart
          ]); 
        }
         $cities = App\Models\City::all();

        foreach ($cities as $city) {
            $city = App\Models\City::where('city_code', $city->id)->get()->first();
            
            DB::table('flights')->update([
                'arrivalAirport_id' => $city->city
            ]);
        } */
        }
       
    }

