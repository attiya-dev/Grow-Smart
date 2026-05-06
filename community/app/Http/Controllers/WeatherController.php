<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // ✅ STEP 1: Weather page show karo (blade view return karo)
    public function index()
    {
        return view('weather');
    }

    // ✅ STEP 2: Frontend se lat/lon aaye to weather API call karo
    public function getWeather(Request $request)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        // OpenWeatherMap API key - .env se uthao
        $apiKey = env('OPENWEATHER_API_KEY');

        // --- Current Weather API Call ---
        $currentUrl = "https://api.openweathermap.org/data/2.5/weather"
            . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

        $currentResponse = Http::get($currentUrl);

        // --- 7-Day Forecast API Call (free plan mein 5 days milte hain, 3-hour interval) ---
        $forecastUrl = "https://api.openweathermap.org/data/2.5/forecast"
            . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

        $forecastResponse = Http::get($forecastUrl);

        if ($currentResponse->failed() || $forecastResponse->failed()) {
            return response()->json(['error' => 'Weather data fetch karne mein masla hua.'], 500);
        }

        $current = $currentResponse->json();
        $forecastRaw = $forecastResponse->json();

        // --- 7 din ka daily forecast nikalo (har din ka ek record) ---
        $dailyForecast = [];
        $seenDates = [];

        foreach ($forecastRaw['list'] as $item) {
            $date = date('Y-m-d', $item['dt']);
            $today = date('Y-m-d');

            // Aaj ka skip karo, aur sirf ek entry per day lo
            if ($date === $today || in_array($date, $seenDates)) continue;

            $seenDates[] = $date;
            $dailyForecast[] = [
                'date'        => date('D, d M', $item['dt']),
                'temp_max'    => round($item['main']['temp_max']),
                'temp_min'    => round($item['main']['temp_min']),
                'description' => ucfirst($item['weather'][0]['description']),
                'icon'        => $item['weather'][0]['icon'],
                'humidity'    => $item['main']['humidity'],
                'wind'        => $item['wind']['speed'],
            ];

            if (count($dailyForecast) >= 7) break;
        }

        // --- Farming Tips generate karo weather ke basis par ---
        $tips = $this->generateFarmingTips($current);

        return response()->json([
            'current'  => [
                'city'        => $current['name'],
                'country'     => $current['sys']['country'],
                'temp'        => round($current['main']['temp']),
                'feels_like'  => round($current['main']['feels_like']),
                'humidity'    => $current['main']['humidity'],
                'wind'        => $current['wind']['speed'],
                'description' => ucfirst($current['weather'][0]['description']),
                'icon'        => $current['weather'][0]['icon'],
                'visibility'  => isset($current['visibility']) ? round($current['visibility'] / 1000, 1) : 'N/A',
            ],
            'forecast' => $dailyForecast,
            'tips'     => $tips,
        ]);
    }

    // ✅ STEP 3: Weather ke hisaab se farming tips generate karo
    private function generateFarmingTips(array $weather): array
    {
        $tips = [];
        $temp        = $weather['main']['temp'];
        $humidity    = $weather['main']['humidity'];
        $windSpeed   = $weather['wind']['speed'];
        $description = strtolower($weather['weather'][0]['main']); // Rain, Clear, Clouds etc.

        // 🌧️ Barish ke tips
        if (str_contains($description, 'rain') || str_contains($description, 'drizzle')) {
            $tips[] = '🌧️ Barish ho rahi hai — aaj spray ya pesticides mat karo, ye kaam nahi karte barish mein.';
            $tips[] = '💧 Zaidi paani se fasal kharab ho sakti hai — drainage check karo.';
            $tips[] = '🌱 Barish ke baad zameen mein naami rehti hai, isliye agle 1-2 din irrigation rokh lo.';
        }

        // ☀️ Garmi ke tips
        if ($temp > 35) {
            $tips[] = '🌡️ Shadeed garmi hai (' . round($temp) . '°C) — dopahar mein irrigation ya koi bhari kaam se bachao.';
            $tips[] = '💦 Subah suwere ya shaam ko paani do — din mein paani jald ud jata hai.';
            $tips[] = '🧴 Seedlings ko garmi se bachao — shade net use karo agar mumkin ho.';
        }

        // ❄️ Thandi ke tips
        if ($temp < 10) {
            $tips[] = '🥶 Thandk hai (' . round($temp) . '°C) — nazuk faslein jaise tamatar ya mirch ko cover karo raat mein.';
            $tips[] = '🌿 Frost ka khatra hai — seeds germinate nahi hote itni thandi mein, intezaar karo.';
        }

        // 💧 Umidgi ke tips
        if ($humidity > 80) {
            $tips[] = '💨 Humidity bohot zyada hai (' . $humidity . '%) — fungal disease ka khatra hai, fungicide spray karo.';
            $tips[] = '🍃 Paudo ke darmiyan hawa guzarne ki jagah rakho taake fungus na lage.';
        }

        if ($humidity < 30) {
            $tips[] = '🏜️ Hawa bohot khushk hai — faslein jaldi murjha sakti hain, regular irrigation zaroori hai.';
        }

        // 💨 Tez hawa ke tips
        if ($windSpeed > 10) {
            $tips[] = '🌬️ Tez hawa chal rahi hai — chhidkao (spray) mat karo, chemical idhar udhar ja sakti hai.';
            $tips[] = '🌾 Unche paudo ko sahara (stakes) do taake girein na.';
        }

        // ☁️ Aam tips agar koi specific condition nahi
        if (empty($tips)) {
            $tips[] = '✅ Mausam theek hai — fasal ki routine care jaari rakho.';
            $tips[] = '📋 Aaj fertilizer ya pesticide spray karne ka acha waqt hai.';
        }

        return $tips;
    }
}