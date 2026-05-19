<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * ✅ Show Weather Page
     */
    public function index()
    {
        return view('weather');
    }

    /**
     * ✅ Get Weather Data Based on Current Location
     */
    public function getWeather(Request $request)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        // Validate coordinates
        if (!$lat || !$lon) {
            return response()->json([
                'error' => 'Location coordinates are missing.'
            ], 400);
        }

        // OpenWeather API Key
        $apiKey = env('OPENWEATHER_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'error' => 'OpenWeather API key is missing.'
            ], 500);
        }

        try {

            /**
             * ✅ Current Weather API
             */
            $currentUrl = "https://api.openweathermap.org/data/2.5/weather"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $currentResponse = Http::timeout(10)->get($currentUrl);

            /**
             * ✅ Forecast API
             */
            $forecastUrl = "https://api.openweathermap.org/data/2.5/forecast"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $forecastResponse = Http::timeout(10)->get($forecastUrl);

            // Check API Errors
            if ($currentResponse->failed() || $forecastResponse->failed()) {
                return response()->json([
                    'error' => 'Unable to fetch weather data.'
                ], 500);
            }

            $current = $currentResponse->json();
            $forecastRaw = $forecastResponse->json();

            /**
             * ✅ Daily Forecast
             */
            $dailyForecast = [];
            $seenDates = [];

            foreach ($forecastRaw['list'] as $item) {

                $date = gmdate('Y-m-d', $item['dt']);
                $today = gmdate('Y-m-d');

                // Skip today & duplicate dates
                if ($date === $today || in_array($date, $seenDates)) {
                    continue;
                }

                $seenDates[] = $date;

                $dailyForecast[] = [
                    'date'        => gmdate('D, d M', $item['dt']),
                    'temp_max'    => round($item['main']['temp_max']),
                    'temp_min'    => round($item['main']['temp_min']),
                    'description' => ucfirst($item['weather'][0]['description']),
                    'icon'        => $item['weather'][0]['icon'],
                    'humidity'    => $item['main']['humidity'],
                    'wind'        => $item['wind']['speed'],
                ];

                // Maximum 7 days
                if (count($dailyForecast) >= 7) {
                    break;
                }
            }

            /**
             * ✅ Generate Farming Tips
             */
            $tips = $this->generateFarmingTips($current);

            /**
             * ✅ Final Response
             */
            return response()->json([
                'current' => [
                    'city'        => $current['name'],
                    'country'     => $current['sys']['country'],
                    'temp'        => round($current['main']['temp']),
                    'feels_like'  => round($current['main']['feels_like']),
                    'humidity'    => $current['main']['humidity'],
                    'wind'        => $current['wind']['speed'],
                    'pressure'    => $current['main']['pressure'],
                    'description' => ucfirst($current['weather'][0]['description']),
                    'icon'        => $current['weather'][0]['icon'],
                    'visibility'  => isset($current['visibility'])
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

    /**
     * ✅ Generate Farming Tips According To Weather
     */
    private function generateFarmingTips(array $weather): array
    {
        $tips = [];

        $temp = $weather['main']['temp'];
        $humidity = $weather['main']['humidity'];
        $windSpeed = $weather['wind']['speed'];

        // Detailed weather condition
        $description = strtolower($weather['weather'][0]['description']);

        /**
         * 🌧️ Rain Tips
         */
        if (
            str_contains($description, 'rain') ||
            str_contains($description, 'drizzle') ||
            str_contains($description, 'thunderstorm')
        ) {

            $tips[] = __('messages.tip_rain_avoid_spray');
            $tips[] = __('messages.tip_rain_check_drainage');
            $tips[] = __('messages.tip_rain_reduce_irrigation');
        }

        /**
         * ☀️ Hot Weather Tips
         */
        if ($temp > 35) {

            $tips[] = __('messages.tip_extreme_heat', ['temp' => round($temp)]);
            $tips[] = __('messages.tip_heat_water_early');
            $tips[] = __('messages.tip_heat_shade_nets');
        }

        /**
         * ❄️ Cold Weather Tips
         */
        if ($temp < 10) {

            $tips[] = __('messages.tip_cold_weather', ['temp' => round($temp)]);
            $tips[] = __('messages.tip_cold_cover_crops');
            $tips[] = __('messages.tip_frost_risk');
        }

        /**
         * 💧 High Humidity Tips
         */
        if ($humidity > 80) {

            $tips[] = __('messages.tip_high_humidity', ['humidity' => $humidity]);
            $tips[] = __('messages.tip_high_humidity_airflow');
            $tips[] = __('messages.tip_fungicide');
        }

        /**
         * 🏜️ Dry Weather Tips
         */
        if ($humidity < 30) {

            $tips[] = __('messages.tip_dry_air');
            $tips[] = __('messages.tip_dry_increase_irrigation');
        }

        /**
         * 🌬️ Strong Wind Tips
         */
        if ($windSpeed > 10) {

            $tips[] = __('messages.tip_strong_wind');
            $tips[] = __('messages.tip_wind_no_spray');
            $tips[] = __('messages.tip_wind_support_crops');
        }

        /**
         * ☁️ Cloudy Weather Tips
         */
        if (str_contains($description, 'cloud')) {

            $tips[] = __('messages.tip_cloudy_monitor');
        }

        /**
         * ✅ Default Tips
         */
        if (empty($tips)) {

            $tips[] = __('messages.tip_favorable_weather');
            $tips[] = __('messages.tip_good_time_fertilize');
        }

        return $tips;
    }
}