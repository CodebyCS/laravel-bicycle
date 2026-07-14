<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            $countries = [
                ['name' => 'Portugal'],
                ['name' => 'Espanha'],
                ['name' => 'França'],
                ['name' => 'Polónia']
            ];

            foreach ($countries as $country){
            Country::create($country);
            }
        }

}
