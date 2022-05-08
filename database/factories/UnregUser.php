<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UnregUser;
use Faker\Generator as Faker;

$factory->define(UnregUser::class, function (Faker $faker) use ($factory)  {

    return [
        'name'=> $faker->name,
        'email'=> $faker->unique()->safeEmail,
/*         'email_verified_at' => now()
 *//*         'reservation_code' => Str::random(10)
 */        
    ];
});