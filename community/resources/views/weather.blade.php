@extends('layouts.app')

@section('title', 'Weather Info - GrowSmart')

@push('styles')
<style>
.weather-page {
    padding-bottom: 30px;
}

.weather-header {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, var(--dark-green), var(--green));
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 12px 30px rgba(23, 59, 50, 0.14);
}

.weather-header::before {
    content: "";
    position: absolute;
    width: 230px;
    height: 230px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
    top: -120px;
    right: -50px;
}

.weather-header::after {
    content: "";
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: rgba(176,138,75,0.12);
    bottom: -80px;
    left: 25%;
}

.weather-header-content {
    position: relative;
    z-index: 2;
}

.weather-header-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: rgba(255,255,255,0.12);
    color: white;
    font-size: 23px;
    margin-bottom: 14px;
}

.weather-header h1 {
    color: white;
    font-size: 30px;
    font-weight: 800;
    margin: 0 0 7px;
}

.weather-header p {
    color: #c8d9d1;
    font-size: 14px;
    margin: 0;
    max-width: 700px;
    line-height: 1.6;
}

.location-box {
    background: white;
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 45px 25px;
    text-align: center;
    box-shadow: var(--card-shadow);
}

.location-icon {
    width: 75px;
    height: 75px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--soft-green);
    color: var(--green);
    border-radius: 22px;
    font-size: 32px;
}

.location-box h4 {
    color: var(--dark-green);
    font-weight: 700;
    margin-top: 18px;
}

.location-box p {
    color: var(--gray);
    font-size: 14px;
    margin-bottom: 22px;
}

.location-btn {
    border: none;
    background: var(--green);
    color: white;
    padding: 12px 22px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s;
}

.location-btn:hover {
    background: var(--dark-green);
    transform: translateY(-2px);
}

.weather-hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #173b32, #39785d);
    border-radius: 20px;
    color: white;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 12px 30px rgba(23,59,50,0.16);
}

.weather-location {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 12px;
}

.temperature {
    font-size: 65px;
    font-weight: 300;
    line-height: 1;
}

.weather-description {
    font-size: 15px;
    color: #d7e5df;
    margin-top: 5px;
}

.weather-main-icon {
    width: 85px;
    height: 85px;
    object-fit: contain;
}

.weather-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.weather-stat {
    background: rgba(255,255,255,0.10);
    border: 1px solid rgba(255,255,255,0.10);
    border-radius: 14px;
    padding: 15px;
}

.weather-stat-label {
    color: #c8d9d1;
    font-size: 11px;
    margin-bottom: 5px;
}

.weather-stat-value {
    color: white;
    font-size: 17px;
    font-weight: 700;
}

.section-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 25px 0 15px;
}

.section-heading-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: var(--very-light-green);
    color: var(--green);
}

.section-heading h3 {
    margin: 0;
    color: var(--dark-green);
    font-size: 20px;
    font-weight: 700;
}

.section-heading p {
    margin: 3px 0 0;
    color: var(--gray);
    font-size: 12px;
}

.forecast-card {
    height: 100%;
    background: white;
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 18px 10px;
    text-align: center;
    box-shadow: var(--card-shadow);
    transition: 0.25s;
}

.forecast-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--hover-shadow);
}

.forecast-day {
    color: var(--dark-green);
    font-size: 13px;
    font-weight: 700;
}

.forecast-icon img {
    width: 55px;
    height: 55px;
    margin: 8px 0;
}

.forecast-temp {
    color: var(--dark-green);
    font-size: 16px;
    font-weight: 700;
}

.forecast-temp span {
    color: var(--gray);
    font-size: 13px;
    font-weight: 400;
}

.forecast-desc {
    color: var(--gray);
    font-size: 11px;
    margin-top: 5px;
    min-height: 30px;
}

.forecast-info {
    color: var(--gray);
    font-size: 11px;
    margin-top: 10px;
}

.tips-section {
    background: linear-gradient(135deg, #f1f8e9, #f8fcf5);
    border: 1px solid #d8e8d7;
    border-radius: 18px;
    padding: 22px;
    margin-top: 25px;
}

.tips-title {
    display: flex;
    align-items: center;
    gap: 9px;
    color: var(--dark-green);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.tip-item {
    background: white;
    border-radius: 12px;
    padding: 13px 16px;
    margin-bottom: 9px;
    color: #444;
    font-size: 13px;
    border-left: 4px solid var(--green);
    box-shadow: 0 2px 7px rgba(0,0,0,0.04);
}

.tip-item:last-child {
    margin-bottom: 0;
}

.refresh-wrapper {
    text-align: center;
    margin-top: 22px;
}

#locationError {
    display: none;
    color: #dc3545;
    font-size: 13px;
    margin-top: 15px;
}

.loading-box {
    text-align: center;
    padding: 45px 20px;
}

.loading-box .spinner-border {
    color: var(--green);
}

@media (max-width: 768px) {
    .weather-header {
        padding: 24px 20px;
        border-radius: 17px;
    }

    .weather-header h1 {
        font-size: 24px;
    }

    .weather-header p {
        font-size: 12px;
    }

    .weather-hero {
        padding: 22px;
    }

    .temperature {
        font-size: 52px;
    }

    .weather-details {
        margin-top: 20px;
    }

    .section-heading h3 {
        font-size: 18px;
    }
}

@media (max-width: 576px) {
    .weather-header {
        padding: 21px 16px;
    }

    .weather-header h1 {
        font-size: 22px;
    }

    .weather-header-icon {
        width: 44px;
        height: 44px;
        font-size: 20px;
    }

    .location-box {
        padding: 35px 18px;
    }

    .weather-hero {
        padding: 20px;
    }

    .temperature {
        font-size: 45px;
    }

    .weather-main-icon {
        width: 65px;
        height: 65px;
    }

    .weather-stat {
        padding: 12px;
    }

    .weather-stat-value {
        font-size: 15px;
    }

    .forecast-card {
        padding: 14px 7px;
    }
}
</style>
@endpush

@section('content')

<div class="weather-page" data-no-translate>

    <div class="weather-header">
        <div class="weather-header-content">

            <div class="weather-header-icon">
                <i class="bi bi-cloud-sun-fill"></i>
            </div>

            <h1>{{ is_urdu() ? 'موسم کی معلومات' : 'Weather Info' }}</h1>

            <p>
                {{ is_urdu() ? 'اپنے علاقے کے موجودہ موسم اور آئندہ دنوں کی پیش گوئی دیکھیں۔ اس معلومات کی مدد سے اپنی زرعی سرگرمیوں کی بہتر منصوبہ بندی کریں۔' : 'Check the current weather and forecast for your area. Use this information to plan your farming activities.' }}
            </p>

        </div>
    </div>

    <div id="loadingSection">

        <div class="location-box">

            <div class="location-icon">
                <i class="bi bi-geo-alt-fill"></i>
            </div>

            <h4>{{ is_urdu() ? 'موسم دیکھنے کے لیے مقام کی اجازت درکار ہے' : 'Weather Permission Required' }}</h4>

            <p>
                {{ is_urdu() ? 'اپنے علاقے کا موجودہ موسم دیکھنے کے لیے اپنے مقام تک رسائی کی اجازت دیں۔' : 'Allow your location to see the current weather in your area.' }}
            </p>

            <button class="location-btn" onclick="getLocation()">
                <i class="bi bi-geo-alt me-2"></i>
                {{ is_urdu() ? 'مقام کی مدد سے موسم دیکھیں' : 'Show Weather Using Location' }}
            </button>

            <div id="locationError"></div>

        </div>

    </div>

    <div id="weatherSection" style="display:none;">

        <div class="weather-hero">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="weather-location">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span id="cityName">—</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">

                        <div>
                            <div class="temperature" id="currentTemp">
                                —
                            </div>

                            <div class="weather-description" id="currentDesc">
                                —
                            </div>
                        </div>

                        <img
                            id="currentIcon"
                            class="weather-main-icon"
                            src=""
                            alt="Weather"
                        >

                    </div>

                    <div class="mt-3" style="font-size:13px;color:#c8d9d1;">
                        <i class="bi bi-thermometer-half me-1"></i>
                        {{ is_urdu() ? 'محسوس ہونے والا درجہ حرارت:' : 'Feels Like:' }}
                        <span id="feelsLike">—</span>°C
                    </div>

                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">

                    <div class="weather-details">

                        <div class="weather-stat">
                            <div class="weather-stat-label">
                                <i class="bi bi-droplet me-1"></i>
                                {{ is_urdu() ? 'نمی' : 'Humidity' }}
                            </div>

                            <div class="weather-stat-value" id="humidityVal">
                                —
                            </div>
                        </div>

                        <div class="weather-stat">
                            <div class="weather-stat-label">
                                <i class="bi bi-wind me-1"></i>
                                {{ is_urdu() ? 'ہوا' : 'Wind' }}
                            </div>

                            <div class="weather-stat-value" id="windVal">
                                —
                            </div>
                        </div>

                        <div class="weather-stat">
                            <div class="weather-stat-label">
                                <i class="bi bi-eye me-1"></i>
                                {{ is_urdu() ? 'حدِ نگاہ' : 'Visibility' }}
                            </div>

                            <div class="weather-stat-value" id="visibilityVal">
                                —
                            </div>
                        </div>

                        <div class="weather-stat">
                            <div class="weather-stat-label">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ is_urdu() ? 'آج' : 'Today' }}
                            </div>

                            <div class="weather-stat-value" id="todayDate">
                                —
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-heading">

            <div class="section-heading-icon">
                <i class="bi bi-calendar-week"></i>
            </div>

            <div>
                <h3>{{ is_urdu() ? 'پانچ دن کی موسم کی پیش گوئی' : 'Five Day Forecast' }}</h3>

                <p>
                    {{ is_urdu() ? 'آنے والے دنوں کے موسمی حالات' : 'Weather conditions for the coming days' }}
                </p>
            </div>

        </div>

        <div class="row g-3" id="forecastContainer"></div>

        <div class="tips-section">

            <div class="tips-title">
                <i class="bi bi-lightbulb-fill"></i>
                {{ is_urdu() ? 'کسانوں کے لیے مفید مشورے' : 'Farmer Tips' }}
            </div>

            <div id="tipsContainer"></div>

        </div>

        <div class="refresh-wrapper">


        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>
const weatherUrdu = @json(is_urdu());

function getLocation() {

    const errorBox = document.getElementById('locationError');

    if (errorBox) {
        errorBox.style.display = 'none';
    }

    if (!navigator.geolocation) {
        showError(weatherUrdu ? 'آپ کا براؤزر مقام کی خدمات کو سپورٹ نہیں کرتا۔' : 'Your browser does not support location services.');
        return;
    }

    document.getElementById('loadingSection').innerHTML = `
        <div class="location-box loading-box">
            <div class="spinner-border" role="status"></div>
            <p class="mt-3 mb-0">{{ is_urdu() ? 'آپ کا مقام تلاش کیا جا رہا ہے...' : 'Finding your location...' }}</p>
        </div>
    `;

    navigator.geolocation.getCurrentPosition(
        function(position) {

            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            fetchWeather(lat, lon);
        },
        function() {

            document.getElementById('loadingSection').innerHTML = `
                <div class="location-box">

                    <div class="location-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <h4>{{ is_urdu() ? 'مقام کی اجازت درکار ہے' : 'Location Permission Required' }}</h4>

                    <p>
                        {{ is_urdu() ? 'اپنے مقامی موسم کو دیکھنے کے لیے براہِ کرم اپنے براؤزر میں مقام تک رسائی کی اجازت دیں۔' : 'Please allow location access from your browser to see your local weather.' }}
                    </p>

                    <button class="location-btn" onclick="getLocation()">
                        <i class="bi bi-arrow-clockwise me-2"></i>
                        {{ is_urdu() ? 'دوبارہ کوشش کریں' : 'Try Again' }}
                    </button>

                    <div id="locationError"></div>

                </div>
            `;

            showError(weatherUrdu ? 'مقام تک رسائی کی اجازت نہیں دی گئی۔ براہِ کرم اپنے براؤزر میں مقام تک رسائی کی اجازت دیں۔' : 'Location access was not allowed. Please allow location access in your browser.');
        }
    );
}

function fetchWeather(lat, lon) {

    fetch('/weather/data', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            lat: lat,
            lon: lon
        })
    })
    .then(response => response.json())
    .then(data => {

        if (data.error) {
            showError(data.error);
            return;
        }

        displayWeather(data);
    })
    .catch(() => {
        showError(weatherUrdu ? 'موسم کی معلومات لوڈ نہیں ہو سکیں۔ براہِ کرم اپنے انٹرنیٹ کنکشن کی جانچ کریں اور دوبارہ کوشش کریں۔' : 'Weather data could not be loaded. Please check your internet connection and try again.');
    });
}

function displayWeather(data) {

    document.getElementById('loadingSection').style.display = 'none';
    document.getElementById('weatherSection').style.display = 'block';

    const current = data.current;

    document.getElementById('cityName').textContent =
        current.city + ', ' + current.country;

    document.getElementById('currentTemp').textContent =
        current.temp + '°C';

    document.getElementById('currentDesc').textContent =
        current.description;

    document.getElementById('currentIcon').src =
        `https://openweathermap.org/img/wn/${current.icon}@2x.png`;

    document.getElementById('feelsLike').textContent =
        current.feels_like;

    document.getElementById('humidityVal').textContent =
        current.humidity + '%';

    document.getElementById('windVal').textContent =
        current.wind + ' m/s';

    document.getElementById('visibilityVal').textContent =
        current.visibility + ' km';

    document.getElementById('todayDate').textContent =
        new Date().toLocaleDateString('en-PK', {
            day: 'numeric',
            month: 'short'
        });

    const forecastContainer =
        document.getElementById('forecastContainer');

    forecastContainer.innerHTML = '';

    data.forecast.forEach(day => {

        forecastContainer.innerHTML += `
            <div class="col-6 col-md-4 col-lg">

                <div class="forecast-card">

                    <div class="forecast-day">
                        ${day.date}
                    </div>

                    <div class="forecast-icon">
                        <img
                            src="https://openweathermap.org/img/wn/${day.icon}@2x.png"
                            alt="${day.description}"
                        >
                    </div>

                    <div class="forecast-temp">
                        ${day.temp_max}°
                        <span>/ ${day.temp_min}°</span>
                    </div>

                    <div class="forecast-desc">
                        ${day.description}
                    </div>

                    <div class="forecast-info">
                        <i class="bi bi-droplet"></i>
                        ${day.humidity}%
                        &nbsp;&nbsp;
                        <i class="bi bi-wind"></i>
                        ${day.wind} m/s
                    </div>

                </div>

            </div>
        `;
    });

    const tipsContainer =
        document.getElementById('tipsContainer');

    tipsContainer.innerHTML = '';

    data.tips.forEach(tip => {

        tipsContainer.innerHTML += `
            <div class="tip-item">
                <i class="bi bi-check-circle-fill me-2"></i>
                ${tip}
            </div>
        `;
    });
}

function showError(message) {

    const errorBox = document.getElementById('locationError');

    if (errorBox) {
        errorBox.style.display = 'block';
        errorBox.textContent = message;
    }
}
</script>
@endpush
