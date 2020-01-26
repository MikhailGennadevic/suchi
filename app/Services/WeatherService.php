<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 24.01.2020
 * Time: 22:11
 */

namespace App\Services;
use Zttp\Zttp;

class WeatherService
{
    public function get()
    {
        $response = Zttp::withHeaders(['X-Yandex-API-Key' => config('weather.api_key')])->get(config('weather.url'), [
            'lat' => config('weather.lat'), 'lon' => config('weather.lon')
        ])->json();

        return $response['fact']['temp'];
    }
}