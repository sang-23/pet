<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PragmaRX\Countries\Package\Countries;

class CitySeeder extends Seeder
{
    public function run()
    {
        $countries = new Countries();

        $country = 'US'; // Replace with the desired country code (e.g., 'US' for United States)

        $cities = $countries->where('cca2', $country)->first()->hydrateStates()->states->flatMap(function ($state) {
            return $state->cities;
        });

        $cityData = [];

        foreach ($cities as $city) {
            $cityData[] = [
                'name' => $city->name,
                'state_id' => $city->state->id,
            ];
        }

        DB::table('cities')->insert($cityData);
    }
}

