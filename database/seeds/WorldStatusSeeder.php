<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        State::select('states.*')
            ->whereHas('cities')
            ->join('countries', 'states.country_id', '=', 'countries.id')
            ->where('countries.status', 1)
            ->update(['states.status' => true]);

        City::select('cities.*')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->where('states.status', 1)
            ->update(['cities.status' => true]);
        
    }
}
