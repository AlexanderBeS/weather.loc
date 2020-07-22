<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 22.07.2020
 * Time: 19:51
 */

namespace App\Services;


interface OpenWeatherApiServiceInterface
{
    /**
     * @param string $city
     * @return array
     *
     */
    public function getWeatherByCity(string $city): array;
}