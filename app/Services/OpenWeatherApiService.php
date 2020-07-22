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
    private $utcZone = 3;

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

        $data = $response->json();
        $currentData = $data['current'];

//        array:14 [▼
//                  "dt" => 1595438425
//                  "sunrise" => 1595383340
//                  "sunset" => 1595439023
//                  "temp" => 20.78
//                  "feels_like" => 16.05
//                  "pressure" => 1014
//                  "humidity" => 43
//                  "dew_point" => 7.76
//                  "uvi" => 7.78
//                  "clouds" => 11
//                  "visibility" => 10000
//                  "wind_speed" => 6
//                  "wind_deg" => 330
//                  "weather" => array:1 [▼
//                    0 => array:4 [▼
//                      "id" => 801
//                      "main" => "Clouds"
//                      "description" => "небольшая облачность"
//                      "icon" => "02d"
//                    ]
//                  ]
//                ]

        $currentData['dt'] += $this->utcZone * 60 * 60;
        $currentData['sunrise'] += $this->utcZone * 60 * 60;
        $currentData['sunset'] += $this->utcZone * 60 * 60;

        $currentData['dt'] = date('d/m/Y H:i', $currentData['dt']);
        $currentData['sunrise'] = date('H:i:s', $currentData['sunrise']);
        $currentData['sunset'] = date('H:i:s', $currentData['sunset']);
        $currentData['temp'] = round($currentData['temp'], 1);
        $currentData['feels_like'] = round($currentData['feels_like'], 1);
        $currentData['weather'] = $currentData['weather']['0'];


        //dd($currentData);
        return $currentData;
    }
}