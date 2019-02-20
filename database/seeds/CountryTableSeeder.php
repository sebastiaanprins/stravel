<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['countryName' => 'Belgium',],
            ['countryName' => 'France',],
            ['countryName' => 'Germany',],
            ['countryName' => 'Spain',],
            ['countryName' => 'Italy',],
        ]);
    }
}
