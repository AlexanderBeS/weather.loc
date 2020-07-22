<?php

namespace App\Http\Controllers;

use App\Services\OpenWeatherApiServiceInterface;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    private $openWeatherApiService;

    public function __construct(OpenWeatherApiServiceInterface $openWeatherApiService)
    {
        $this->openWeatherApiService = $openWeatherApiService;
    }

    public function getWeather()
    {

        $weather = $this->openWeatherApiService->getCurrentWeatherByCity('Dnipro');

        //dd($weather);
        //return view('weather/region');
        return view('weather/current', compact('weather'));
    }

    public function sendWeather()
    {

    }
}
