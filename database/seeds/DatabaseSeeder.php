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
        // $this->call(UsersTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
    }
}
