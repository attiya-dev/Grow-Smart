<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ __('messages.weather_info') }} - {{ __('messages.grow_smart') }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* ===== Layout same as dashboard ===== */
body {
    display: flex;
    min-height: 100vh;
    background: #f9f9f9;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    margin: 0;
}
#sidebar {
    width: 260px;
    background: #f0f4f9;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
    padding: 12px;
    border-right: 1px solid #e0e0e0;
    position: sticky;
    top: 0;
    height: 100vh;
}
#sidebar.collapsed { width: 80px; }
#sidebar .logo { padding: 20px 10px; font-size: 1.2rem; display: flex; align-items: center; }
#sidebar.collapsed .logo span { display: none; }
#sidebar ul { list-style: none; padding: 0; margin-top: 10px; }
#sidebar ul li a {
    display: flex; align-items: center; padding: 10px 16px;
    border-radius: 25px; color: #444746; text-decoration: none; transition: 0.2s; white-space: nowrap;
}
#sidebar ul li a i { font-size: 18px; min-width: 30px; text-align: center; }
#sidebar.collapsed ul li a span { display: none; }
#sidebar ul li a:hover { background-color: #e1e5e9; }
#sidebar ul li a.active { background-color: #d3e3fd; color: #041e49; }
.separator { border-bottom: 1px solid #ccc; margin: 10px 0; }
.toggle-btn { background: none; border: none; font-size: 20px; cursor: pointer; }

#content { flex: 1; padding: 30px; background: #fff; overflow-x: hidden; }
.topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
.site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
.site-name img { width: 48px; height: 48px; border-radius: 8px; }

/* ===== Weather Specific Styles ===== */
.weather-hero {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    border-radius: 20px;
    color: white;
    padding: 35px;
    margin-bottom: 25px;
    box-shadow: 0 8px 30px rgba(30,60,114,0.3);
    position: relative;
    overflow: hidden;
}
.weather-hero::before {
    content: '';
    position: absolute;
    top: -50px; right: -50px;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
}
.weather-hero::after {
    content: '';
    position: absolute;
    bottom: -80px; left: 30%;
    width: 300px; height: 300px;
    border-radius: 50%;
    background: rgba(255,255,255,0.04);
}
.temp-big { font-size: 72px; font-weight: 300; line-height: 1; }
.weather-icon-big { font-size: 80px; }
.weather-meta span {
    display: inline-block;
    margin-right: 20px;
    font-size: 14px;
    opacity: 0.85;
}
.weather-meta i { margin-right: 5px; }

/* Forecast Cards */
.forecast-card {
    background: #f8f9ff;
    border: 1px solid #e0e7ff;
    border-radius: 14px;
    padding: 16px 10px;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
    cursor: default;
}
.forecast-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}
.forecast-day { font-size: 13px; font-weight: 600; color: #555; margin-bottom: 8px; }
.forecast-icon img { width: 50px; height: 50px; }
.forecast-temp { font-size: 15px; font-weight: 700; color: #222; }
.forecast-temp span { font-size: 13px; color: #888; font-weight: 400; }
.forecast-desc { font-size: 11px; color: #666; margin-top: 4px; }

/* Tips Section */
.tips-section {
    background: linear-gradient(135deg, #f0fdf4, #dcfce7);
    border: 1px solid #bbf7d0;
    border-radius: 16px;
    padding: 25px;
}
.tips-section h5 { color: #166534; margin-bottom: 15px; }
.tip-item {
    background: white;
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;
    border-left: 4px solid #22c55e;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

/* Loading Spinner */
#loadingSection {
    text-align: center;
    padding: 60px 20px;
    border: 1px dashed #c5d7f2;
    border-radius: 18px;
    background: #f8fbff;
    color: #1f2937;
}
#loadingSection i { font-size: 52px; }
#loadingSection h5 { margin-top: 20px; font-weight: 600; }
.location-btn {
    background: linear-gradient(135deg, #ff477e, #ff6b9d);
    border: none;
    border-radius: 30px;
    color: white;
    padding: 14px 30px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 4px 15px rgba(255,71,126,0.4);
}
.location-btn:hover {
    transform: translateY(-1px);
}
</style>
</head>
<body>

{{-- ===== SIDEBAR (same as dashboard) ===== --}}
<div id="sidebar">
    <div class="logo">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <span class="ms-2">{{ __('messages.grow_smart_panel') }}</span>
    </div>
    <hr>
    <ul>
        <li><a href="/"><i class="bi bi-house-door"></i><span>{{ __('messages.home') }}</span></a></li>
        <li><a href="/grid"><i class="bi bi-bar-chart"></i><span>{{ __('messages.crops_data') }}</span></a></li>
        <li><a href="/garden"><i class="bi bi-bug"></i><span>{{ __('messages.pest_management') }}</span></a></li>
        <li><a href="/register"><i class="bi bi-people"></i><span>{{ __('messages.community') }}</span></a></li>
        <li class="separator"></li>
        <li><a href="/soil"><i class="bi bi-cpu"></i><span>{{ __('messages.ai_soil_analysis') }}</span></a></li>
        <li><a href="/weather" class="active"><i class="bi bi-cloud-sun"></i><span>{{ __('messages.weather_info') }}</span></a></li>
    </ul>
</div>

{{-- ===== MAIN CONTENT ===== --}}
<div id="content">
    <div class="topbar">
        <div class="site-name">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            {{ __('messages.grow_smart') }}
        </div>
        <div>
            <i class="bi bi-search me-3"></i>
            <i class="bi bi-bell"></i>
        </div>
    </div>
    <hr>

    <h4 class="mb-1"><i class="bi bi-cloud-sun-fill text-warning me-2"></i>{{ __('messages.weather_dashboard') }}</h4>
    <p class="text-muted mb-4">{{ __('messages.weather_dashboard_description') }}</p>

    {{-- Loading / Permission Section --}}
    <div id="loadingSection">
        <i class="bi bi-geo-alt-fill text-danger" style="font-size:48px;"></i>
        <h5 class="mt-3 mb-2">{{ __('messages.weather_permission_required') }}</h5>
        <p class="text-muted mb-4">{{ __('messages.allow_location_weather') }}</p>
        <button class="location-btn" onclick="getLocation()">
            <i class="bi bi-geo-alt me-2"></i>{{ __('messages.show_weather_using_location') }}
        </button>
        <p class="text-danger mt-3 small" id="locationError" style="display:none;"></p>
    </div>

    {{-- Weather Data Section (hidden until data loads) --}}
    <div id="weatherSection" style="display:none;">

        {{-- Current Weather Hero Card --}}
        <div class="weather-hero mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt-fill me-2" style="font-size:18px;"></i>
                        <h4 class="mb-0" id="cityName">—</h4>
                    </div>
                    <div class="d-flex align-items-end gap-3 mb-3">
                        <span class="temp-big" id="currentTemp">—</span>
                        <div>
                            <img id="currentIcon" src="" alt="weather" style="width:60px;">
                            <div id="currentDesc" style="font-size:16px; opacity:0.9;">—</div>
                        </div>
                    </div>
                    <div class="weather-meta">
                        <span><i class="bi bi-thermometer-half"></i>{{ __('messages.feels_like') }}: <span id="feelsLike">—</span>°C</span>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="label"><i class="bi bi-droplet me-1"></i>{{ __('messages.humidity') }}</div>
                                <div class="value" id="humidityVal">—</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="label"><i class="bi bi-wind me-1"></i>{{ __('messages.wind') }}</div>
                                <div class="value" id="windVal">—</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="label"><i class="bi bi-eye me-1"></i>{{ __('messages.visibility') }}</div>
                                <div class="value" id="visibilityVal">—</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="label"><i class="bi bi-calendar3 me-1"></i>{{ __('messages.today') }}</div>
                                <div class="value" style="font-size:14px;" id="todayDate">—</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 7-Day Forecast --}}
        <h5 class="mb-3"><i class="bi bi-calendar-week me-2 text-primary"></i>{{ __('messages.seven_day_forecast') }}</h5>
        <div class="row g-3 mb-4" id="forecastContainer">
            {{-- JS se yahan cards aayenge --}}
        </div>

        {{-- Farming Tips --}}
        <div class="tips-section">
            <h5><i class="bi bi-lightbulb-fill me-2"></i>“🌾 Farmer Tips — For This Weather”</h5>
            <div id="tipsContainer">
                {{-- JS se tips aayenge --}}
            </div>
        </div>

        {{-- Refresh button --}}
        <div class="text-center mt-4">
            <button class="location-btn" onclick="getLocation()" style="font-size:14px; padding:10px 24px;">
                <i class="bi bi-arrow-clockwise me-2"></i>{{ __('messages.refresh_weather_data') }}
            </button>
        </div>
    </div>
</div>

<script>
// ===== Sidebar toggle =====
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}

// ===== STEP 1: Browser se location lo =====
function getLocation() {
    document.getElementById('locationError').style.display = 'none';

    if (!navigator.geolocation) {
        showError('Yeh browser geolocation support nahi karta.');
        return;
    }

    document.getElementById('loadingSection').innerHTML = `
        <div class="spinner-border text-primary" role="status"></div>
        <p class="mt-3 text-muted">Finding your location....</p>
    `;

    navigator.geolocation.getCurrentPosition(
        function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            fetchWeather(lat, lon);
        },
        function(error) {
            showError('Location access nahi mili. Browser settings mein allow karein.');
            document.getElementById('loadingSection').innerHTML = `
                <i class="bi bi-geo-alt-fill text-danger" style="font-size:48px;"></i>
                <h5 class="mt-3">Location Permission Chahiye</h5>
                <button class="location-btn mt-3" onclick="getLocation()">
                    <i class="bi bi-geo-alt me-2"></i>Dobara Try Karein
                </button>
                <p class="text-danger mt-2 small" id="locationError"></p>
            `;
        }
    );
}

// ===== STEP 2: Laravel backend ko lat/lon bhejo =====
function fetchWeather(lat, lon) {
    fetch('/weather/data', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ lat: lat, lon: lon })
    })
    .then(res => res.json())
    .then(data => {
        if (data.error) {
            showError(data.error);
            return;
        }
        displayWeather(data);
    })
    .catch(err => {
        showError('Server se data nahi aya. Internet connection check karein.');
    });
}

// ===== STEP 3: Data display karo =====
function displayWeather(data) {
    document.getElementById('loadingSection').style.display = 'none';
    document.getElementById('weatherSection').style.display = 'block';

    const c = data.current;

    // Current weather
    document.getElementById('cityName').textContent = c.city + ', ' + c.country;
    document.getElementById('currentTemp').textContent = c.temp + '°C';
    document.getElementById('currentDesc').textContent = c.description;
    document.getElementById('currentIcon').src = `https://openweathermap.org/img/wn/${c.icon}@2x.png`;
    document.getElementById('feelsLike').textContent = c.feels_like;
    document.getElementById('humidityVal').textContent = c.humidity + '%';
    document.getElementById('windVal').textContent = c.wind + ' m/s';
    document.getElementById('visibilityVal').textContent = c.visibility + ' km';
    document.getElementById('todayDate').textContent = new Date().toLocaleDateString('en-PK', {day:'numeric', month:'short'});

    // 7-day forecast
    const forecastContainer = document.getElementById('forecastContainer');
    forecastContainer.innerHTML = '';
    data.forecast.forEach(day => {
        forecastContainer.innerHTML += `
            <div class="col-6 col-md-3 col-lg">
                <div class="forecast-card">
                    <div class="forecast-day">${day.date}</div>
                    <div class="forecast-icon">
                        <img src="https://openweathermap.org/img/wn/${day.icon}@2x.png" alt="${day.description}">
                    </div>
                    <div class="forecast-temp">
                        ${day.temp_max}° <span>/ ${day.temp_min}°</span>
                    </div>
                    <div class="forecast-desc">${day.description}</div>
                    <div class="mt-2 small text-muted">
                        <i class="bi bi-droplet"></i> ${day.humidity}%
                        &nbsp;
                        <i class="bi bi-wind"></i> ${day.wind} m/s
                    </div>
                </div>
            </div>
        `;
    });

    // Farming tips
    const tipsContainer = document.getElementById('tipsContainer');
    tipsContainer.innerHTML = '';
    data.tips.forEach(tip => {
        tipsContainer.innerHTML += `<div class="tip-item">${tip}</div>`;
    });
}

function showError(msg) {
    const el = document.getElementById('locationError');
    if (el) { el.style.display = 'block'; el.textContent = msg; }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>