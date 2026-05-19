<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agriculture Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
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
    display: flex;
    align-items: center;
    padding: 10px 16px;
    border-radius: 25px;
    color: #444746;
    text-decoration: none;
    transition: 0.2s;
    white-space: nowrap;
}
#sidebar ul li a i { font-size: 18px; min-width: 30px; text-align: center; }
#sidebar.collapsed ul li a span { display: none; }
#sidebar ul li a:hover { background-color: #e1e5e9; }
#sidebar ul li a.active { background-color: #d3e3fd; color: #041e49; }
.separator { border-bottom: 1px solid #ccc; margin: 10px 0; }


#content {
    flex: 1;
    padding: 30px;
    background: #ffffff;
    overflow-x: hidden;
}

.topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
.site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
.site-name img { width: 48px; height: 48px; border-radius: 8px; }


.filter-container {
    display: flex;
    gap: 10px;
    margin-bottom: 25px;
    overflow-x: auto;
    padding-bottom: 10px;
    color: #ff477e; 
}
.filter-pill {
    padding: 6px 20px;
    border-radius: 20px;
    border: 1px solid #ff477e;
    background: white;
    background-color: #fff0f5;
    font-size: 14px;
    cursor: pointer;
    white-space: nowrap;
    transition: 0.3s;
}
.filter-pill.active {
    border-color: #ff477e;
    color: #ff477e;
    background-color: #fff0f5;
    font-weight: 600;
}


.slider-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
.horizontal-slider {
    display: flex;
    gap: 15px;
    overflow-x: hidden; 
    padding-bottom: 15px;
    scroll-behavior: smooth;
}
.crop-card {
    min-width: 220px;
    max-width: 220px;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    transition: transform 0.3s ease;
    border: 1px solid #eee;
}
.crop-card:hover { transform: translateY(-5px); }
.crop-card img { width: 100%; height: 140px; object-fit: cover; border-radius: 15px; }
.card-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #ff0000;
    color: white;
    font-size: 10px;
    font-weight: bold;
    padding: 2px 8px;
    border-radius: 4px;
    text-transform: uppercase;
}

.crop-data .card {
    height: 250px;           
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.crop-data .card img {
    height: 140px;           
    width: 100%;
    object-fit: cover;
    border-radius: 12px 12px 0 0;
}

.crop-data .card-body {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}
.crop-data-wrapper {
    border: 1px solid #ddd;    
    border-radius: 12px;       
    background: #fdfdfd;      
    padding: 20px;            
    box-shadow: 0 2px 6px rgba(0,0,0,0.05); 
}

.crop-data-wrapper.services .card {
    height: 420px; 
}
.filter-container a {
    text-decoration: none !important;
    color: inherit;
}

.filter-container a:hover {
    text-decoration: none !important;
}
.card-info { padding: 10px 10px; }
.crop-title { font-weight: 600; font-size: 15px; color: #333; }
.toggle-btn { background: none; border: none; font-size: 20px; cursor: pointer; }
</style>
</head>
<body>

<div id="sidebar">
    <div class="logo">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <span class="ms-2">@lang('messages.grow_smart_panel')</span>
    </div>
    <hr>
    <ul>
    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}"><i class="bi bi-house-door"></i><span>@lang('messages.home')</span></a></li>
    
    <li><a href="/grid" class="{{ request()->is('grid') ? 'active' : '' }}"><i class="bi bi-bar-chart"></i><span>@lang('messages.crops_data')</span></a></li>
    
    <li><a href="/garden" class="{{ request()->is('garden') ? 'active' : '' }}"><i class="bi bi-bug"></i><span>Pest Management</span></a></li>
    
    <li><a href="/register" class="{{ request()->is('register') ? 'active' : '' }}"><i class="bi bi-people"></i><span>@lang('messages.community')</span></a></li>
    
    <li class="separator"></li>
    
    <li><a href="/soil" class="{{ request()->is('soil') ? 'active' : '' }}"><i class="bi bi-cpu"></i><span>@lang('messages.ai_soil_analysis')</span></a></li>
    
    <li><a href="/weather" class="{{ request()->is('weather') ? 'active' : '' }}"><i class="bi bi-cloud-sun"></i><span>@lang('messages.weather_info')</span></a></li>
    </ul>
</div>

<div id="content">
    <div class="topbar">
        <div class="site-name">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            @lang('messages.grow_smart')
        </div>
        <div>
            <!-- Language Toggle Button -->
            <style>
                .language-toggle {
                    display: inline-flex;
                    gap: 4px;
                    align-items: center;
                }
                .language-toggle a {
                    padding: 4px 10px;
                    border-radius: 6px;
                    text-decoration: none;
                    font-size: 12px;
                    font-weight: 500;
                    transition: all 0.2s;
                    border: 1px solid transparent;
                }
                .language-toggle a.active {
                    background-color: #041e49;
                    color: white;
                }
                .language-toggle a:not(.active) {
                    background-color: #f0f4f9;
                    color: #444746;
                    border: 1px solid #ddd;
                }
                .language-toggle a:hover {
                    background-color: #e1e5e9;
                }
            </style>
            <div class="language-toggle me-3">
                <a href="{{ route('language.switch', 'en') }}" 
                   class="{{ app()->getLocale() === 'en' ? 'active' : '' }}"
                   title="Switch to English">
                    EN
                </a>
                <a href="{{ route('language.switch', 'ur') }}" 
                   class="{{ app()->getLocale() === 'ur' ? 'active' : '' }}"
                   title="اردو میں تبدیل کریں">
                    UR
                </a>
            </div>
            <i class="bi bi-search me-3"></i>
            <i class="bi bi-bell"></i>
        </div>
    </div>

    <hr>

    <div class="filter-container" id="filterContainer">
    <div class="filter-pill active" onclick="updateCategory('all')">@lang('messages.all_crops')</div>
    <a href="summer" class="filter-pill">Summer Season</a>
    <a href="winter" class="filter-pill">Winter Season</a>
    <a href="grains" class="filter-pill">Grains</a>
    <a href="/vegetable" class="filter-pill">Vegetables</a>
    <a href="fruit" class="filter-pill">Fruits</a>
    </div>

    <div class="slider-header">
        <h3 id="sliderTitle">@lang('messages.all_crops')</h3>
    </div>

    <div class="horizontal-slider" id="cropSlider"></div>
   <br> <h3 style="display:inline-block; margin-right:730px;">Crops Data</h3>
<a href="/grid" style="color:#ff477e; text-decoration:none; display:inline-block;">See All</a>
    <div class="crop-data-wrapper p-3 mb-4">
<div class="row mt-3 g-3 crop-data">
    <!-- Crop Box Template -->
    <div class="col-md-3 col-6">
        <a href="wheat.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/wheat.jpg') }}" class="card-img-top" alt="Wheat">
                <div class="card-body">
                    <h6 class="card-title mb-0">Wheat</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="rice.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/rice.jpg') }}" class="card-img-top" alt="Rice">
                <div class="card-body">
                    <h6 class="card-title mb-0">Rice</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="potatoes.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/cotton.jpg') }}" class="card-img-top" alt="Potatoes">
                <div class="card-body">
                    <h6 class="card-title mb-0">Cotton</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="corn.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/Sugarcane.jpg') }}" class="card-img-top" alt="Corn">
                <div class="card-body">
                    <h6 class="card-title mb-0">SugarCane</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="soybeans.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/mustard.jpg') }}" class="card-img-top" alt="Soybeans">
                <div class="card-body">
                    <h6 class="card-title mb-0">Mustard</h6>
                </div>
            </div>
        </a>
    </div>

    <!-- Add 3 more crops -->
    <div class="col-md-3 col-6">
        <a href="tomatoes.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/sunflower.jpg') }}" class="card-img-top" alt="Tomatoes">
                <div class="card-body">
                    <h6 class="card-title mb-0">SunFlower</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="apples.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/pumpkin.jpg') }}" class="card-img-top" alt="Apples">
                <div class="card-body">
                    <h6 class="card-title mb-0">Pumpkin</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="carrots.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/cucumber.jpg') }}" class="card-img-top" alt="Carrots">
                <div class="card-body">
                    <h6 class="card-title mb-0">Cucumber</h6>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
 <br> <h3 style="display:inline-block; margin-right:645px;">Pest Management</h3>
<a href="garden" style="color:#ff477e; text-decoration:none; display:inline-block;">See All</a>
    <div class="crop-data-wrapper p-3 mb-4">
<div class="row mt-3 g-3 crop-data">
    <!-- Crop Box Template -->
    <div class="col-md-3 col-6">
        <a href="wheat.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/canola.jpg') }}" class="card-img-top" alt="Wheat">
                <div class="card-body">
                    <h6 class="card-title mb-0">Canola</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="rice.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/radish.jpg') }}" class="card-img-top" alt="Rice">
                <div class="card-body">
                    <h6 class="card-title mb-0">Radish</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="potatoes.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/potato.jpg') }}" class="card-img-top" alt="Potatoes">
                <div class="card-body">
                    <h6 class="card-title mb-0">Potato</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="corn.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/spinach.jpg') }}" class="card-img-top" alt="Corn">
                <div class="card-body">
                    <h6 class="card-title mb-0">Spinach</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="soybeans.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/peas.jpg') }}" class="card-img-top" alt="Soybeans">
                <div class="card-body">
                    <h6 class="card-title mb-0">Peas</h6>
                </div>
            </div>
        </a>
    </div>

    <!-- Add 3 more crops -->
    <div class="col-md-3 col-6">
        <a href="tomatoes.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/carrots.jpg') }}" class="card-img-top" alt="Tomatoes">
                <div class="card-body">
                    <h6 class="card-title mb-0">Carrots</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="apples.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/onion.jpg') }}" class="card-img-top" alt="Apples">
                <div class="card-body">
                    <h6 class="card-title mb-0">Onion</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-6">
        <a href="carrots.html" class="text-decoration-none">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/cabbage.jpg') }}" class="card-img-top" alt="Carrots">
                <div class="card-body">
                    <h6 class="card-title mb-0">Cabbage</h6>
                </div>
            </div>
        </a>
    </div>
</div>
</div>

<br><h3 class="mt-4">Services</h3>
<div class="crop-data-wrapper p-3 mb-4">
  <div class="row mt-3 g-3 crop-data">
      <div class="col-md-4 col-6" style="min-height: 300px;">
    <a href="register" class="text-decoration-none">
        <div class="card h-100 text-center shadow-sm" style="height: 350px; overflow: hidden; border-radius: 12px;">
            <img src="{{ asset('images/weather.avif') }}" 
                 class="card-img-top" 
                 alt="Weather Forecast" 
                 style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column justify-content-between">
                <h6 class="card-title fw-bold">Weather Forecast</h6>
                <p class="text-muted small mt-auto mb-0">Stay updated with precise weather forecasts anytime.Make better farming decisions with accurate weather information.
                </p>

            </div>
        </div>
    </a>
</div>

     <div class="col-md-4 col-6" style="min-height: 300px;">
    <a href="register" class="text-decoration-none">
        <div class="card h-100 text-center shadow-sm" style="height: 350px; overflow: hidden; border-radius: 12px;">
            <img src="{{ asset('images/community.jpg') }}" 
                 class="card-img-top" 
                 alt="Community Forum" 
                 style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column justify-content-between">
                <h6 class="card-title fw-bold">Community Forum</h6>
                <p class="text-muted small mt-auto mb-0">Have questions about crops? Ask our experts anytime. We’re here to respond and support you within 24 hours.
                </p>

            </div>
        </div>
    </a>
</div>

 <div class="col-md-4 col-6" style="min-height: 300px;">
    <a href="/soil" class="text-decoration-none">
        <div class="card h-100 text-center shadow-sm" style="height: 350px; overflow: hidden; border-radius: 12px;">
            <img src="{{ asset('images/soil.avif') }}" 
                 class="card-img-top" 
                 alt="Community Forum" 
                 style="height: 200px; object-fit: cover;">

            <!-- Content -->
            <div class="card-body d-flex flex-column justify-content-between">

                <!-- Title (Top) -->
                <h6 class="card-title fw-bold">AI Soil Analysis</h6>

                <!-- Bottom Text -->
                <p class="text-muted small mt-auto mb-0">
                   Upload a soil image and let our AI analyze its condition.Get instant insights and smart suggestions to improve soil health.
                </p>

            </div>
        </div>
    </a>
</div>

  </div>

<script>
// Crop Data
const cropData = {
    all: [
        { name: "Wheat", img: "{{ asset('images/wheat.jpg') }}" },
        { name: "Rice", img: "{{ asset('images/rice.jpg') }}" },
        { name: "Potatoes", img: "{{ asset('images/potato.jpg') }}" },
        { name: "Corn", img: "{{ asset('images/corn.jpg') }}" },
        { name: "Soybeans", img: "{{ asset('images/soybeans.jpg') }}" }
    ]
};

// Sidebar toggle
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}

// Update category
function updateCategory(category) {
    const pills = document.querySelectorAll('.filter-pill');
    pills.forEach(p => p.classList.remove('active'));
    event.target.classList.add('active');

    const titles = { all: "{{ __('messages.all_crops') }}" };
    document.getElementById('sliderTitle').innerText = titles[category];
    renderCrops(category);
}

// Render crops
function renderCrops(category) {
    const slider = document.getElementById('cropSlider');
    slider.innerHTML = '';
    cropData[category].forEach(item => {
        const card = document.createElement('div');
        card.className = 'crop-card';
        card.innerHTML = `
            <div class="card-badge">Most Common Crops</div>
            <img src="${item.img}" alt="${item.name}">
            <div class="card-info">
                <div class="crop-title">${item.name}</div>
                <div style="font-size:12px; color:#888;">Commonly grown crops</div>
            </div>
        `;
        slider.appendChild(card);
    });

    // Start auto-scroll
    startAutoScroll();
}

// Auto-scroll slider
let scrollInterval;
function startAutoScroll() {
    const slider = document.getElementById('cropSlider');
    if (scrollInterval) clearInterval(scrollInterval);

    scrollInterval = setInterval(() => {
        if (slider.children.length > 0) {
            const first = slider.children[0];
            slider.appendChild(first.cloneNode(true)); // move first to end
            slider.removeChild(first);
        }
    }, 2000); // every 2 seconds
}
renderCrops('all');
</script>

</body>
</html>