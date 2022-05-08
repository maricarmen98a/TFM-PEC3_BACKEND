<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;
use App\Models\Flight;
use App\Models\City;
use App\Models\Reservation;
use DateInterval;
use DateTime;
use Carbon\Carbon;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$city = new \App\Models\City;

$factory->define(Flight::class, function (Faker $faker) use ($city) {

    $origin = $faker->randomElement($city->airports);
    $destination = $faker->randomElement(array_diff($city->airports, [$origin]));
    $flightHours = $faker->numberBetween(1, 8);

    $flightTime = new DateInterval('PT' . $flightHours . 'H');
    $arrival = $faker->dateTimeBetween('0 week', '+10 week'); 
    $depart = clone $arrival;
    $hourBoarding = $faker->dateTimeBetween('9:00:00', '21:00:00')->format('H:i'); 
    $hourArrival = $faker->dateTimeBetween( $hourBoarding , '23:00:00')->format('H:i'); 

    return [
        'flight_number' => $faker->numberBetween(150, 1500),
        'airline' =>  'Aer Iolar',
        'origin' => $origin,
        'destination' => $destination,
        'price' => $faker->randomFloat(2, 90, 500),
        'boarding_time' => $depart,
        'arrival_time' => $arrival,
        'boarding_hour' => $hourBoarding,
        'arrival_hour' =>  $hourArrival,
        'reservation_code' => Str::random(10),
        
    ];
});


/* $factory->define(City::class, function (Faker $faker) {
    return [
        'origin' => $faker->name,
        'destination' => $faker->name,
    ];
}); */

/* factory(Flight::class, 10)->make()->each(function ($flight) {
    $flight->user()->associate(User::inRandomOrder()->first());
    $flight->city()->associate(City::inRandomOrder()->first());
    $flight->save();
}); */
/* $factory->define(App\Models\Airport::class, function (Faker $faker) {
    return [
        'iataCode' => Str::random(3),
        'city' => $faker->city,
        'country' => $faker->country
    ];
});

$factory->define(App\Models\Flight::class, function (Faker $faker) {

    $flightHours = $faker->numberBetween(1, 8);

    $flightTime = new DateInterval('PT' . $flightHours . 'H');

    $arrival = $faker->dateTime;

    $depart = clone $arrival;
    $depart->sub($flightTime);

    return [

        'flightNumber' => Str::random(3) . $faker->randomNumber(5), 
        'arrivalAirport_id' => Str::random(3), 
        'arrivalDatetime' => $arrival,
        'departureAirport_id' => Str::random(3),
        'departureDatetime' => $depart,
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName
    ];
}); */
