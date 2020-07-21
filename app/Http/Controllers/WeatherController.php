<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function __construct()
    {
    }

    public function getWeather()
    {

        //return view('weather/region');
        return view('weather/region');
    }

    public function sendWeather()
    {

    }
}
