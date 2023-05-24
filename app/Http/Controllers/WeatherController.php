<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\WeatherHistory;
use Illuminate\Support\Facades\View;

class WeatherController extends Controller
{
    public function getHumidity()
    {
        $apiKey = env('API_WEATHER'); // Clave de API de OpenWeatherMap
        $cities = [
            'Miami' => ['lat' => 25.7617, 'lon' => -80.1918],
            'Orlando' => ['lat' => 28.5383, 'lon' => -81.3792],
            'New York' => ['lat' => 40.7128, 'lon' => -74.0060],
        ];

        $humidityData = [];

        foreach ($cities as $city => $coordinates) {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$coordinates['lat']}&lon={$coordinates['lon']}&appid={$apiKey}&exclude=hourly,daily");
            $data = $response->json();

            // Se Extrae la humedad de la respuesta y se la almacena en el arreglo $humidityData.
            $humidity = $data['main']['humidity'];
            $humidityData[$city] = $humidity;

            // Almacena la consulta en el historial
            WeatherHistory::create([
                'city' => $city,
                'humidity' => $humidity
            ]);
        }

        return response()->json($humidityData);
    }


    public function getHistory()
    {
        $history = WeatherHistory::orderBy('created_at', 'desc')->get();

        return View::make('history', compact('history'));
    }
}


//Diego Fernando Yama Andrade
