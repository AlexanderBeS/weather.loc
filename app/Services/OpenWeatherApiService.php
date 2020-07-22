<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 22.07.2020
 * Time: 19:50
 */

namespace App\Services;
//use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class OpenWeatherApiService implements OpenWeatherApiServiceInterface
{

    private $client;

    public function __construct()
    {
        //$client = new Client();
    }

    public function getCurrentWeatherByCity(string $city): array
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/onecall', [
            'lat' => '48.45',
            'lon' => '34.98',
            'appid' => '0467cae21c01f3bf16cdddb83180fdc8',
            'units' => 'metric',
            'lang' => 'ru',
        ]);

        $result = $response->json()['current'];

        return $result;
    }
}