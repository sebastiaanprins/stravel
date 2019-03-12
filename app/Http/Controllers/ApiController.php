<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index() {

      $response = \Unirest\Request::get("https://restcountries-v1.p.rapidapi.com/all",
        array(
          "X-RapidAPI-Key" => "928a1ff05dmshff92b67545025f6p1cac25jsn577d164e9eb1"
        )
      );

// print_r($response);
// dd($response->body);

      foreach($response->body as $countries){
        echo $countries->name ." - " .$countries->capital ."<br />";
      }
      
    }
}


// @foreach($statuses as $index => $status)

// $apis = Api::all();
// return view('api', compact('apis'));
