<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\UrduTranslationService;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather');
    }

    public function getWeather(Request $request, UrduTranslationService $translator)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        if (!$lat || !$lon) {
            return response()->json([
                'error' => session('language') === 'ur' ? $translator->translate('Location coordinates are missing.') : 'Location coordinates are missing.'
            ], 400);
        }

        $apiKey = env('OPENWEATHER_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'error' => session('language') === 'ur' ? $translator->translate('OpenWeather API key is missing.') : 'OpenWeather API key is missing.'
            ], 500);
        }

        try {

            $currentUrl = "https://api.openweathermap.org/data/2.5/weather"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $currentResponse = Http::timeout(10)->get($currentUrl);

            $forecastUrl = "https://api.openweathermap.org/data/2.5/forecast"
                . "?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

            $forecastResponse = Http::timeout(10)->get($forecastUrl);

            if ($currentResponse->failed() || $forecastResponse->failed()) {
                return response()->json([
                    'error' => session('language') === 'ur' ? $translator->translate('Unable to fetch weather data.') : 'Unable to fetch weather data.'
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

                if (in_array($date, $usedDates)) {
                    continue;
                }

                $usedDates[] = $date;

                $dailyForecast[] = [
                    'date' => session('language') === 'ur'
                        ? $this->translateWeatherText(gmdate('D, d M', $item['dt']))
                        : gmdate('D, d M', $item['dt']),

                    'temp_max' => round(
                        $item['main']['temp_max']
                    ),

                    'temp_min' => round(
                        $item['main']['temp_min']
                    ),

                    'description' => session('language') === 'ur'
                        ? $this->translateWeatherText(ucfirst($item['weather'][0]['description']))
                        : ucfirst($item['weather'][0]['description']),

                    'icon' => $item['weather'][0]['icon'],

                    'humidity' => $item['main']['humidity'],

                    'wind' => $item['wind']['speed'],
                ];

                
                if (count($dailyForecast) >= 7) {
                    break;
                }
            }

            $tips = $this->generateFarmingTips($current);

            if (session('language') === 'ur') {
                $tips = array_map(fn ($tip) => $this->translateWeatherText($tip), $tips);
            }

          
            return response()->json([

                'current' => [

                    'city' => session('language') === 'ur'
                        ? $translator->translate($current['name'])
                        : $current['name'],

                    'country' => session('language') === 'ur'
                        ? $translator->translate($current['sys']['country'])
                        : $current['sys']['country'],

                    'temp' => round(
                        $current['main']['temp']
                    ),

                    'feels_like' => round(
                        $current['main']['feels_like']
                    ),

                    'humidity' => $current['main']['humidity'],

                    'wind' => $current['wind']['speed'],

                    'pressure' => $current['main']['pressure'],

                    'description' => session('language') === 'ur'
                        ? $this->translateWeatherText(ucfirst($current['weather'][0]['description']))
                        : ucfirst($current['weather'][0]['description']),

                    'icon' => $current['weather'][0]['icon'],

                    'visibility' => isset($current['visibility'])
                        ? round($current['visibility'] / 1000, 1) . (session('language') === 'ur' ? ' کلومیٹر' : ' km')
                        : (session('language') === 'ur' ? 'دستیاب نہیں' : 'N/A'),
                ],

                'forecast' => $dailyForecast,

                'tips' => $tips,
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'error' => session('language') === 'ur' ? $translator->translate('Something went wrong.') : 'Something went wrong.',
                'message' => session('language') === 'ur' ? $translator->translate($e->getMessage()) : $e->getMessage()
            ], 500);
        }
    }


    
    private function translateWeatherText(string $text): string
    {
        $text = trim($text);
        if ($text === '') return '';

        $exact = [
            'Clear' => 'صاف موسم',
            'Clouds' => 'ابر آلود موسم',
            'Cloudy' => 'ابر آلود موسم',
            'Rain' => 'بارش',
            'Rainy' => 'بارش والا موسم',
            'Light rain' => 'ہلکی بارش',
            'Moderate rain' => 'درمیانی بارش',
            'Heavy rain' => 'تیز بارش',
            'Drizzle' => 'بوندا باندی',
            'Thunderstorm' => 'گرج چمک کے ساتھ بارش',
            'Mist' => 'ہلکی دھند',
            'Fog' => 'کہرا',
            'Haze' => 'دھندلا پن',
            'Snow' => 'برف باری',
            'Monday' => 'پیر', 'Mon' => 'پیر',
            'Tuesday' => 'منگل', 'Tue' => 'منگل',
            'Wednesday' => 'بدھ', 'Wed' => 'بدھ',
            'Thursday' => 'جمعرات', 'Thu' => 'جمعرات',
            'Friday' => 'جمعہ', 'Fri' => 'جمعہ',
            'Saturday' => 'ہفتہ', 'Sat' => 'ہفتہ',
            'Sunday' => 'اتوار', 'Sun' => 'اتوار',
            'Jan' => 'جنوری', 'Feb' => 'فروری', 'Mar' => 'مارچ',
            'Apr' => 'اپریل', 'May' => 'مئی', 'Jun' => 'جون',
            'Jul' => 'جولائی', 'Aug' => 'اگست', 'Sep' => 'ستمبر',
            'Oct' => 'اکتوبر', 'Nov' => 'نومبر', 'Dec' => 'دسمبر',
            'Weather conditions look favorable for normal farming activities.' => 'موسمی حالات معمول کی زرعی سرگرمیوں کے لیے سازگار ہیں۔',
            'This can be a good time to carry out routine field work and fertilizer application.' => 'یہ معمول کے کھیت کے کام اور کھاد کے استعمال کے لیے مناسب وقت ہو سکتا ہے۔',
            'Avoid spraying pesticides or fertilizers during rainy weather.' => 'بارش کے موسم میں کیڑے مار ادویات یا کھادوں کا چھڑکاؤ کرنے سے گریز کریں۔',
            'Check field drainage and make sure excess water can flow away properly.' => 'کھیت کی نکاسی آب کی جانچ کریں اور یقینی بنائیں کہ اضافی پانی مناسب طریقے سے باہر نکل سکے۔',
            'Reduce irrigation because rainfall is already providing water to the crops.' => 'آبپاشی کم کریں کیونکہ بارش پہلے ہی فصلوں کو پانی فراہم کر رہی ہے۔',
            'Water crops early in the morning or in the evening to reduce water loss.' => 'پانی کے ضیاع کو کم کرنے کے لیے فصلوں کو صبح سویرے یا شام کے وقت پانی دیں۔',
            'Use shade nets where necessary to protect sensitive crops.' => 'حساس فصلوں کو بچانے کے لیے ضرورت کے مطابق سایہ دار جال استعمال کریں۔',
            'Cover sensitive crops if the temperature is expected to fall further.' => 'اگر درجہ حرارت مزید گرنے کا امکان ہو تو حساس فصلوں کو ڈھانپ دیں۔',
            'Keep an eye on the weather for possible frost conditions.' => 'ممکنہ پالے کی صورتحال کے لیے موسم پر نظر رکھیں۔',
            'Keep good airflow between plants by avoiding overcrowding.' => 'پودوں کے درمیان مناسب ہوا کی آمدورفت برقرار رکھنے کے لیے بہت زیادہ گنجان کاشت سے گریز کریں۔',
            'The air is very dry. Crops may lose water quickly.' => 'ہوا بہت خشک ہے۔ فصلیں تیزی سے پانی کھو سکتی ہیں۔',
            'Increase irrigation when necessary and monitor the soil moisture regularly.' => 'ضرورت کے مطابق آبپاشی بڑھائیں اور مٹی کی نمی کی باقاعدگی سے نگرانی کریں۔',
            'Strong winds are expected. Protect young and weak plants.' => 'تیز ہوائیں چلنے کا امکان ہے۔ نئی اور کمزور فصلوں کو محفوظ رکھیں۔',
            'Avoid spraying pesticides during strong winds because the spray may drift away.' => 'تیز ہواؤں کے دوران کیڑے مار ادویات کا چھڑکاؤ نہ کریں کیونکہ دوا ہوا کے ساتھ دور جا سکتی ہے۔',
            'Use plant supports or stakes to protect crops from wind damage.' => 'فصلوں کو ہوا سے ہونے والے نقصان سے بچانے کے لیے پودوں کے سہارے یا کھونٹے استعمال کریں۔',
            'Cloudy weather may reduce sunlight. Monitor crop growth and soil moisture.' => 'ابر آلود موسم دھوپ کی مقدار کم کر سکتا ہے۔ فصل کی نشوونما اور مٹی کی نمی کی نگرانی کریں۔',
        ];

        if (isset($exact[$text])) return $exact[$text];

        $rules = [
            '/^Temperature is very high at (.+)°C\. Protect crops from heat stress\.$/i' => 'درجہ حرارت $1°سینٹی گریڈ تک بہت زیادہ ہے۔ فصلوں کو شدید گرمی کے دباؤ سے محفوظ رکھیں۔',
            '/^Temperature is low at (.+)°C\. Protect sensitive crops from cold weather\.$/i' => 'درجہ حرارت $1°سینٹی گریڈ تک کم ہے۔ حساس فصلوں کو سرد موسم سے محفوظ رکھیں۔',
            '/^Humidity is high at (.+)%. Monitor crops carefully for fungal diseases\.$/i' => 'نمی $1 فیصد ہے اور بہت زیادہ ہے۔ فصلوں میں پھپھوندی کی بیماریوں کی احتیاط سے نگرانی کریں۔',
            '/^Check crops regularly for signs of fungal infection and use suitable fungicides when necessary\.$/i' => 'فصلوں میں پھپھوندی کے انفیکشن کی علامات باقاعدگی سے دیکھیں اور ضرورت کے وقت مناسب پھپھوندی کش ادویات استعمال کریں۔',
        ];
        foreach ($rules as $pattern => $replacement) {
            $out = preg_replace($pattern, $replacement, $text);
            if ($out !== null && $out !== $text) return $out;
        }

        if (preg_match('/^(Mon|Tue|Wed|Thu|Fri|Sat|Sun),\s*(\d{1,2})\s+(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)$/i', $text, $m)) {
            $days = ['Mon'=>'پیر','Tue'=>'منگل','Wed'=>'بدھ','Thu'=>'جمعرات','Fri'=>'جمعہ','Sat'=>'ہفتہ','Sun'=>'اتوار'];
            $months = ['Jan'=>'جنوری','Feb'=>'فروری','Mar'=>'مارچ','Apr'=>'اپریل','May'=>'مئی','Jun'=>'جون','Jul'=>'جولائی','Aug'=>'اگست','Sep'=>'ستمبر','Oct'=>'اکتوبر','Nov'=>'نومبر','Dec'=>'دسمبر'];
            return ($days[$m[1]] ?? $m[1]) . '، ' . $m[2] . ' ' . ($months[$m[3]] ?? $m[3]);
        }

        return $text;
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
