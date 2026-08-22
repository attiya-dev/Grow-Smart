<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather');
    }

    public function getWeather(Request $request)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        if (!$lat || !$lon) {
            return response()->json([
                'error' => 'Location coordinates are missing.'
            ], 400);
        }

        $apiKey = env('OPENWEATHER_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'error' => 'OpenWeather API key is missing.'
            ], 500);
        }

        try {

            // Current weather
            $currentUrl = "https://api.openweathermap.org/data/2.5/weather"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $currentResponse = Http::timeout(10)->get($currentUrl);

            // Weather forecast
            $forecastUrl = "https://api.openweathermap.org/data/2.5/forecast"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $forecastResponse = Http::timeout(10)->get($forecastUrl);

            if ($currentResponse->failed() || $forecastResponse->failed()) {
                return response()->json([
                    'error' => 'Unable to fetch weather data.'
                ], 500);
            }

            $current = $currentResponse->json();
            $forecastData = $forecastResponse->json();

         
            $dailyForecast = [];
            $usedDates = [];

            foreach ($forecastData['list'] as $item) {

                $date = gmdate('Y-m-d', $item['dt']);
                $today = gmdate('Y-m-d');

               
                if ($date == $today) {
                    continue;
                }

                // Skip duplicate dates
                if (in_array($date, $usedDates)) {
                    continue;
                }

                $usedDates[] = $date;

                $dailyForecast[] = [
                    'date' => gmdate('D, d M', $item['dt']),

                    'temp_max' => round(
                        $item['main']['temp_max']
                    ),

                    'temp_min' => round(
                        $item['main']['temp_min']
                    ),

                    'description' => ucfirst(
                        $item['weather'][0]['description']
                    ),

                    'icon' => $item['weather'][0]['icon'],

                    'humidity' => $item['main']['humidity'],

                    'wind' => $item['wind']['speed'],
                ];

                
                if (count($dailyForecast) >= 7) {
                    break;
                }
            }

            $tips = $this->generateFarmingTips($current);

          
            return response()->json([

                'current' => [

                    'city' => $current['name'],

                    'country' => $current['sys']['country'],

                    'temp' => round(
                        $current['main']['temp']
                    ),

                    'feels_like' => round(
                        $current['main']['feels_like']
                    ),

                    'humidity' => $current['main']['humidity'],

                    'wind' => $current['wind']['speed'],

                    'pressure' => $current['main']['pressure'],

                    'description' => ucfirst(
                        $current['weather'][0]['description']
                    ),

                    'icon' => $current['weather'][0]['icon'],

                    'visibility' => isset($current['visibility'])
                        ? round($current['visibility'] / 1000, 1) . ' km'
                        : 'N/A',
                ],

                'forecast' => $dailyForecast,

                'tips' => $tips,
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'error' => 'Something went wrong.',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    private function generateFarmingTips(array $weather): array
    {
        $tips = [];

        $temp = $weather['main']['temp'];

        $humidity = $weather['main']['humidity'];

        $windSpeed = $weather['wind']['speed'];

        $description = strtolower(
            $weather['weather'][0]['description']
        );


       
        if (
            str_contains($description, 'rain') ||
            str_contains($description, 'drizzle') ||
            str_contains($description, 'thunderstorm')
        ) {

            $tips[] = 'Avoid spraying pesticides or fertilizers during rainy weather.';

            $tips[] = 'Check field drainage and make sure excess water can flow away properly.';

            $tips[] = 'Reduce irrigation because rainfall is already providing water to the crops.';
        }


        if ($temp > 35) {

            $tips[] = 'Temperature is very high at ' . round($temp) . '°C. Protect crops from heat stress.';

            $tips[] = 'Water crops early in the morning or in the evening to reduce water loss.';

            $tips[] = 'Use shade nets where necessary to protect sensitive crops.';
        }


        if ($temp < 10) {

            $tips[] = 'Temperature is low at ' . round($temp) . '°C. Protect sensitive crops from cold weather.';

            $tips[] = 'Cover sensitive crops if the temperature is expected to fall further.';

            $tips[] = 'Keep an eye on the weather for possible frost conditions.';
        }

        if ($humidity > 80) {

            $tips[] = 'Humidity is high at ' . $humidity . "%. Monitor crops carefully for fungal diseases.";

            $tips[] = 'Keep good airflow between plants by avoiding overcrowding.';

            $tips[] = 'Check crops regularly for signs of fungal infection and use suitable fungicides when necessary.';
        }

        if ($humidity < 30) {

            $tips[] = 'The air is very dry. Crops may lose water quickly.';

            $tips[] = 'Increase irrigation when necessary and monitor the soil moisture regularly.';
        }


        if ($windSpeed > 10) {

            $tips[] = 'Strong winds are expected. Protect young and weak plants.';

            $tips[] = 'Avoid spraying pesticides during strong winds because the spray may drift away.';

            $tips[] = 'Use plant supports or stakes to protect crops from wind damage.';
        }


        if (str_contains($description, 'cloud')) {

            $tips[] = 'Cloudy weather may reduce sunlight. Monitor crop growth and soil moisture.';
        }

        if (empty($tips)) {

            $tips[] = 'Weather conditions look favorable for normal farming activities.';

            $tips[] = 'This can be a good time to carry out routine field work and fertilizer application.';
        }


        return $tips;
    }
}
