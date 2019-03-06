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
            ['restName' => "Tonino's",
            'restLocation' => 'Bad Bentheim, Germany'],
            
            ['restName' => "Pier 99",
            'restLocation' => 'xxx, Germany'],
            
            ['restName' => "Else am See",
            'restLocation' => 'yyy, Germany']

            ]);
        
    }
}
