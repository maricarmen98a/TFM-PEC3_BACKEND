<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FlightUser;
use Faker\Generator as Faker;

$factory->define(FlightUser::class, function (Faker $faker) use ($factory)  {

    return [
        'flight_id'=> $faker->numberBetween(150, 1500),
        'user_id'=>  rand(1, 1000),
/*         'reservation_code' => Str::random(10)
 */        
    ];
});