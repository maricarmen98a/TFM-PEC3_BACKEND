<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call([FlightSeeder::class, CitySeeder::class, CountrySeeder::class, UserSeed::class]); */
        $this->call([FlightSeeder::class, CitySeeder::class, CountrySeeder::class, UserSeed::class]);
    }
}
