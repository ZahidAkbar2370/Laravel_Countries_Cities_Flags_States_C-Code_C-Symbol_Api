<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Json;

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

Route::get('/countries', function () {

     //get country name
    $countries = Http::get('https://countriesnow.space/api/v0.1/countries')->json();

    echo "<pre>";
    print_r($countries);
    echo "</pre>";
    exit;
});

Route::get('/countries-states-symbol', function () {

    //get country name, states, system
   $countries = Http::get('https://countriesnow.space/api/v0.1/countries/states')->json();

   echo "<pre>";
   print_r($countries);
   echo "</pre>";
   exit;
});

Route::get('/cities', function () {

    //get cities through country name
    $values = '{
        "country": "pakistan"
    }';

    $cities = Http::post('https://countriesnow.space/api/v0.1/countries/cities',json_decode($values));

    return $cities;
});
