# Weather Feature Setup Guide

## Overview
The weather feature allows users to check real-time weather information for their location and receive localized farming tips based on current weather conditions.

## Features
✅ Real-time weather data from OpenWeather API  
✅ 7-day weather forecast  
✅ Localized farming tips (English & Urdu)  
✅ Current weather metrics (temperature, humidity, wind, visibility)  
✅ Location-based weather detection  
✅ Responsive design with RTL support for Urdu  

---

## Setup Instructions

### 1. Get OpenWeather API Key

1. Visit: https://openweathermap.org/api
2. Sign up for a free account
3. Copy your API key from the API keys section
4. **Free tier includes:**
   - Current weather data
   - 5-day weather forecast
   - No credit card required

### 2. Update .env File

Open `.env` file and update:

```env
OPENWEATHER_API_KEY=your_api_key_here
```

Replace `your_api_key_here` with your actual API key from OpenWeather.

### 3. Start the Development Server

```bash
cd community
php artisan serve
```

The server will run at `http://127.0.0.1:8000`

---

## How to Use Weather Feature

### Access Weather Page
1. Navigate to: `http://127.0.0.1:8000/weather`
2. Click "Show Weather Using My Location" button
3. Grant location permission in your browser
4. Weather data will load automatically

### Language Support
- **English**: Click "English" button in the navbar
- **Urdu (اردو)**: Click "اردو" button in the navbar

When you switch language:
- Layout direction changes (RTL for Urdu, LTR for English)
- All text content translates to selected language
- Farming tips appear in selected language

### What You'll See

#### Current Weather Card
- Location (City, Country)
- Current temperature
- Weather condition with icon
- "Feels like" temperature
- Humidity percentage
- Wind speed
- Visibility distance
- Current date

#### 7-Day Forecast
- Date
- High/Low temperatures
- Weather condition with icon
- Humidity and wind for each day

#### Localized Farming Tips
Tips are dynamically generated based on current weather:

**Rain Conditions:**
- Avoid pesticide spraying
- Check field drainage
- Reduce irrigation

**Extreme Heat (>35°C):**
- Water crops early morning/evening
- Use shade nets for young plants

**Cold Weather (<10°C):**
- Cover sensitive crops
- Delay seed sowing if frost risk

**High Humidity (>80%):**
- Monitor for fungal diseases
- Ensure proper airflow

**Dry Air (<30% humidity):**
- Increase irrigation frequency

**Strong Wind (>10 m/s):**
- Avoid chemical spraying
- Support tall crops with stakes

**Cloudy Weather:**
- Monitor for excess moisture

---

## API Endpoints

### GET /weather
- **Description**: Display weather page
- **Response**: Renders `weather.blade.php` view

### POST /weather/data
- **Description**: Fetch weather data for coordinates
- **Request Body**:
  ```json
  {
    "lat": 24.8607,
    "lon": 67.0011
  }
  ```
- **Response**:
  ```json
  {
    "current": {
      "city": "Karachi",
      "country": "PK",
      "temp": 28,
      "feels_like": 30,
      "humidity": 65,
      "wind": 5,
      "pressure": 1013,
      "description": "Clear sky",
      "icon": "01d",
      "visibility": "10 km"
    },
    "forecast": [
      {
        "date": "Mon, 20 May",
        "temp_max": 32,
        "temp_min": 24,
        "description": "Partly cloudy",
        "icon": "02d",
        "humidity": 60,
        "wind": 4
      }
    ],
    "tips": [
      "✅ Weather conditions look favorable for normal farming activities.",
      "📋 This is a good time for fertilizer or pesticide application."
    ]
  }
  ```

---

## Translation Keys

### Weather Tips (Available in English & Urdu)
- `tip_rain_avoid_spray` - Rain warning
- `tip_extreme_heat` - High temperature warning
- `tip_cold_weather` - Low temperature warning
- `tip_high_humidity` - Humidity warning
- `tip_strong_wind` - Wind warning
- And 15+ more localized tips

All tips are stored in:
- `resources/lang/en/messages.php` - English translations
- `resources/lang/ur/messages.php` - Urdu translations

---

## Troubleshooting

### "Unable to fetch weather data"
- ✓ Check your OPENWEATHER_API_KEY is correct
- ✓ Verify internet connection
- ✓ Check API quota limits (free tier: 60 calls/minute)
- ✓ Restart `php artisan serve`

### "Location Permission Required"
- ✓ Enable location in browser settings
- ✓ Try a different browser
- ✓ Use HTTPS (required for some browsers)
- ✓ Check browser's location permission status

### "Content still in English after switching to Urdu"
- ✓ Verify `SetLocale` middleware is in `bootstrap/app.php`
- ✓ Check session settings in `config/session.php`
- ✓ Clear browser cache and session
- ✓ Restart `php artisan serve`

### Tips not translating
- ✓ Ensure `OPENWEATHER_API_KEY` is set
- ✓ Verify translation keys exist in `resources/lang/{locale}/messages.php`
- ✓ Check current locale with: `app()->getLocale()`

---

## Free API Limitations

**OpenWeather Free Tier Includes:**
- Current weather (unlimited calls)
- 5-day forecast (unlimited calls)
- Rate limit: 60 calls/minute
- 1 month data history
- No archived data

For production use, consider upgrading to a paid plan.

---

## Files Modified/Created

✅ **Weather Controller**: `app/Http/Controllers/WeatherController.php`
✅ **Weather View**: `resources/views/weather.blade.php`
✅ **English Translations**: `resources/lang/en/messages.php`
✅ **Urdu Translations**: `resources/lang/ur/messages.php`
✅ **Configuration**: `.env` (OPENWEATHER_API_KEY)
✅ **Routes**: `routes/web.php`

---

## Next Steps

1. ✅ Get API key from OpenWeather
2. ✅ Update `.env` with API key
3. ✅ Start dev server: `php artisan serve`
4. ✅ Test at: `http://127.0.0.1:8000/weather`
5. ✅ Switch languages and verify tips translate
6. ✅ Test with different locations to see varied tips

---

**Weather feature is now fully localized and ready to use!** 🌾🌧️☀️
