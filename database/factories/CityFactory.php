<?php

namespace Database\Factories;
use App\Models\City;

class CityFactory 
{
    protected $model = City::class;

    public function definition()
    {
    return [
        ['name' => 'Amberes', 'city_code' => 'ANR', 'country_name' => 'Bélgica',  'country_code' => 'BE'],
        ['name' => 'Hamilton', 'city_code' => 'BDA', 'country_name' => 'Canadá',  'country_code' => 'CA'],
        ['name' => 'Rio de Janeiro', 'city_code' => 'GIG', 'country_name' => 'Brasil',  'country_code' => 'BR'],
        ['name' => 'Quebec', 'city_code' => 'YQB', 'country_name' => 'Canadá',  'country_code' => 'CA'],
        ['name' => 'San Salvador', 'city_code' => 'SAL', 'country_name' => 'El Salvador',  'country_code' => 'SV'],
        ['name' => 'Medellín', 'city_code' => 'MDE', 'country_name' => 'Colombia',  'country_code' => 'CO'],
        ['name' => 'San José', 'city_code' => 'SJO', 'country_name' => 'Costa Rica',  'country_code' => 'CR'],
        ['name' => 'La Romana', 'city_code' => 'LRM', 'country_name' => 'República Dominicna',  'country_code' => 'DO'],
        ['name' => 'Quito', 'city_code' => 'EC', 'country_name' => 'Ecuador',  'country_code' => 'EC'],
        ['name' => 'Helsinki', 'city_code' => 'HEL', 'country_name' => 'Finlandia',  'country_code' => 'FI'],
        ['name' => 'París', 'city_code' => 'CDG', 'country_name' => 'Francia',  'country_code' => 'FR'],
        ['name' => 'Tegucigalpa	', 'city_code' => 'TGU', 'country_name' => 'Honduras',  'country_code' => 'HN'],
        ['name' => 'Dublín', 'city_code' => 'DUB', 'country_name' => 'Irlanda',  'country_code' => 'IE'],
        ['name' => 'Roma', 'city_code' => 'CIA', 'country_name' => 'Italia',  'country_code' => 'IT'],
        ['name' => 'Kingston', 'city_code' => 'KIN', 'country_name' => 'Jamaica',  'country_code' => 'JC'],
        ['name' => 'Cancún', 'city_code' => 'CUN', 'country_name' => 'México',  'country_code' => 'MX'],
        ['name' => 'Oporto', 'city_code' => 'OPO', 'country_name' => 'Portugal',  'country_code' => 'PT'],
        ['name' => 'Madrid', 'city_code' => 'MAD', 'country_name' => 'España',  'country_code' => 'ES'],
        ['name' => 'Londres', 'city_code' => 'LHR', 'country_name' => 'Reino Unido',  'country_code' => 'GB'],
        ['name' => 'Nueva York', 'city_code' => 'NY', 'country_name' => 'Estados Unidos',  'country_code' => 'US'],
        ['name' => 'Montevideo', 'city_code' => 'MVD', 'country_name' => 'Uruguay',  'country_code' => 'UY'],

    ];
    }
}

