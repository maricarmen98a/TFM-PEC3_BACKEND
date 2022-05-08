<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Booking;
use App\Models\City;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;


$city = new App\Models\City;

$factory->define(Booking::class, function (Faker $faker) use ( $city) {
    $flightHours =  rand(1, 24);

    $flightTime = new DateInterval('PT' . $flightHours . 'H');  
    $arrival = Carbon::today()->subDays(rand(0, 365))->sub($flightTime); 

    $depart = clone $arrival;
    $depart->sub($flightTime);
    $origin = $faker->randomElement($city->airports);
    $destination = $faker->randomElement(array_diff($city->airports, [$origin])); 

    return [
        'user_id' => rand(1, 1000),
        'reservation_time' => $arrival,
        'status' => 'active',
/*         'price' => $faker->randomFloat(2, 90, 500),
 */     'tax' => $faker->biasedNumberBetween(2, 8),
        'name' => $faker->name,
        'email' => $faker->email,
        'passengers' => 1
    ];
});