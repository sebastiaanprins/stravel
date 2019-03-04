<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            ['languageName' => 'English',],
            ['languageName' => 'French',],
            ['languageName' => 'Spanish',],
            ['languageName' => 'Papiamento',],
        ]);
    }
}
