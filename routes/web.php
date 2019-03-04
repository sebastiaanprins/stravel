<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route for view & db querying
Route::resource('countries', 'CountryController');

// route for view & db querying
Route::resource('languages', 'LanguageController');

// Route to CountryController.php
Route::get('country/create', 'CountryController@create')->name('country.create');
