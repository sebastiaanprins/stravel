<?php

namespace App\Http\Controllers;

use App\Country;
use App\Language;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    // Automatic fill-in:
        // Create country & assign language
        // $country = new Country;
        // $country->countryName = 'Canada';

        // $country->save();

        // $language = Language::find([1, 2]);
        // $country->languages()->attach($language);

        // return 'Success';
        // return view('country.create');

        // go to create blade /form
        //was: return view('countries.index', compact('countries'));

        return view('countries.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'countryName' => ['required', 'string']
        ]);

        // $request->validate([
        //     'name' => ['required', 'string', new Uppercase],
        // ]);
        
        $country = new Country([
            'countryName' => $request->get('countryName')
        ]);

        $country->save();
        return redirect('/countries')->with('Success', 'Youve created a new country');
        

        // return view('countries.index', compact('countries'));


        //
        // Create country & assign language

        // $request->validate([
        //     'countryName'=>'required'
        //      ]);

        // $country = new Country([
            
// GET THE POST INFO FROM FORM >>
        //     'countryName' => $request->get()
        // ]);

    // Automatic fill-in:
        // Create country & assign language
        // $country = new Country;
        // $country->countryName = 'Canada';

        // $country->save();

        // $language = Language::find([1, 2]);
        // $country->languages()->attach($language);

        // return 'Success';
        // return view('country.create');
    // END auto-fill
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
