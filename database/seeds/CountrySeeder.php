<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
  
        $countries = [
           
           
            ['name' => 'Bélgica', 'country_code' => 'BE'],
            ['name' => 'Bermuda', 'country_code' => 'BM'],
            ['name' => 'Brasil', 'country_code' => 'BR'],
            ['name' => 'Canadá', 'country_code' => 'CA'],
            ['name' => 'Chile', 'country_code' => 'CL'],
            ['name' => 'Colombia', 'country_code' => 'CO'],
            ['name' => 'Costa Rica', 'country_code' => 'CR'],
            ['name' => 'Reública Dominicana', 'country_code' => 'DO'],
            ['name' => 'Ecuador', 'country_code' => 'EC'],
            ['name' => 'El Salvador', 'country_code' => 'SV'],
            ['name' => 'Finlandia', 'country_code' => 'FI'],
            ['name' => 'Francia', 'country_code' => 'FR'],
            ['name' => 'Honduras', 'country_code' => 'HN'],
            ['name' => 'Irlanda', 'country_code' => 'IE'],
            ['name' => 'Italia', 'country_code' => 'IT'],
            ['name' => 'Jamaica', 'country_code' => 'JM'],
            ['name' => 'México', 'country_code' => 'MX'],
            ['name' => 'Portugal', 'country_code' => 'PT'],
            ['name' => 'España', 'country_code' => 'ES'],
            ['name' => 'Reino Unido', 'country_code' => 'GB'],
            ['name' => 'Estados Unidos', 'country_code' => 'US'],
            ['name' => 'Uruguay', 'country_code' => 'UY'],

        ];
          
        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}