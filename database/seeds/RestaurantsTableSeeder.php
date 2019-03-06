<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurants')->insert(
        [
            [
            'restName' => "Tonino's",
            'restKitchen' => 'Mediterranean',
            'restLocation' => 'Gildehauser Str. 27',
            'restCity' => 'Bad Bentheim',
            'restWebsite' => 'www.hotelristorantetonino.de',
            ],

            [
            'restName' => 'Pier99',
            'restKitchen' => 'Mediterranean, diverse',
            'restLocation' => 'Heseper Weg 40',
            'restCity' => 'Nordhorn',
            'restWebsite' => 'www.pier99.de',
            ],

            [
            'restName' => 'Else am See',
            'restKitchen' => 'Mediterranean',
            'restLocation' => 'Drievordener Straße 95',
            'restCity' => 'Schüttorf',
            'restWebsite' => 'elseamsee.de',
            ],

        ]);

    }
}
