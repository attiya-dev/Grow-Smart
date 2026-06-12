<!DOCTYPE html>
<html lang="en">
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
    overflow-x: hidden;
}

#sidebar {
    width: 260px;
    background: #f0f4f9;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    padding: 12px;
    border-right: 1px solid #e0e0e0;
    position: sticky;
    top: 0;
    height: 100vh;
    z-index: 1040;
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
    min-width: 0;
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
    -webkit-overflow-scrolling: touch;
}
.filter-container::-webkit-scrollbar {
    height: 5px;
}
.filter-container::-webkit-scrollbar-thumb {
    background: #ff477e40;
    border-radius: 10px;
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

/* Horizontal slider container adjustments */
.horizontal-slider {
    display: flex;
    gap: 15px;
    overflow-x: hidden; 
    padding-bottom: 15px;
}

/* Master unified layout rule matching original slider boxes */
.crop-card {
    width: 100%;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    transition: transform 0.3s ease, margin-left 0.5s ease;
    border: 1px solid #eee;
    background: #fff;
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
    z-index: 2;
}

.crop-data-wrapper {
    border: 1px solid #ddd;    
    border-radius: 12px;      
    background: #fdfdfd;      
    padding: 20px;            
    box-shadow: 0 2px 6px rgba(0,0,0,0.05); 
}

.filter-container a {
    text-decoration: none !important;
    color: inherit;
}

.filter-container a:hover {
    text-decoration: none !important;
}

/* CHANGED: Centers the crop text inside the information space */
.card-info { 
    padding: 10px 10px; 
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.crop-title { font-weight: 600; font-size: 15px; color: #333; }
.toggle-btn { background: none; border: none; font-size: 20px; cursor: pointer; }

/* Hybrid Responsive Services layout configuration */
.service-card-responsive {
    display: flex;
    overflow: hidden;
    border-radius: 12px;
    height: 100%;
}

/* Laptop Mode layout configurations (Single horizontal line) */
@media (min-width: 769px) {
    .service-card-responsive {
        flex-direction: column;
        min-height: 350px;
    }
    .service-card-responsive img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .service-card-responsive .card-body {
        text-align: center;
        padding: 15px;
    }
}

/* Mobile View configurations */
@media (max-width: 768px) {
    #sidebar {
        position: fixed;
        left: -260px;
    }
    #sidebar.show {
        left: 0;
        width: 260px;
    }
    #sidebar.show ~ #sidebar-backdrop {
        display: block;
    }
    #content {
        padding: 15px;
    }
    .topbar {
        padding-top: 5px;
    }
    
    .service-card-responsive {
        flex-direction: row !important;
        align-items: center;
        min-height: 110px;
    }
    .service-card-responsive img {
        width: 120px !important;
        height: 110px !important;
        object-fit: cover;
    }
    .service-card-responsive .card-body {
        text-align: left !important;
        padding: 12px !important;
    }
    .service-card-responsive h6 {
        font-size: 0.95rem !important;
        margin-bottom: 2px !important;
    }
    .service-card-responsive p {
        font-size: 0.75rem !important;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
}

#sidebar-backdrop {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0,0,0,0.4);
    z-index: 1030;
}

@media (max-width: 576px) {
    .crop-data-wrapper {
        padding: 10px !important;
    }
}
/* Professional Footer */
.footer {
    background: #1f2937;
    color: white;
    margin-top: 40px;
    padding: 40px 25px 15px;
    border-radius: 15px 15px 0 0;
}

.footer h5 {
    font-weight: 600;
    margin-bottom: 20px;
    color: #4ade80;
}

.footer p,
.footer a {
    color: #d1d5db;
    text-decoration: none;
    font-size: 14px;
}

.footer a:hover {
    color: #4ade80;
}

.footer-links li {
    margin-bottom: 10px;
    list-style: none;
}

.footer-links {
    padding-left: 0;
}

.footer-social a {
    display: inline-block;
    margin-right: 12px;
    font-size: 20px;
    color: #fff;
    transition: 0.3s;
}

.footer-social a:hover {
    color: #4ade80;
    transform: translateY(-3px);
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.15);
    margin-top: 30px;
    padding: 15px 0;
    text-align: center;
    font-size: 13px;
    color: #cbd5e1;
}
.footer .row {
    margin-bottom: 10px;
}

.footer p {
    margin-bottom: 10px;
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,.15);
    padding-top: 15px;
    text-align: center;
}
</style>
</head>
<body>

<div id="sidebar">
    <div class="logo">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <span class="ms-2">GrowSmartPanel</span>
    </div>
    <hr>
    <ul>
    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}"><i class="bi bi-house-door"></i><span>Home</span></a></li>
    
    <li><a href="/grid" class="{{ request()->is('grid') ? 'active' : '' }}"><i class="bi bi-bar-chart"></i><span>Crop Data</span></a></li>
    
    <li><a href="/garden" class="{{ request()->is('garden') ? 'active' : '' }}"><i class="bi bi-bug"></i><span>Pest Management</span></a></li>
    
    <li><a href="/register" class="{{ request()->is('register') ? 'active' : '' }}"><i class="bi bi-people"></i><span>Community</span></a></li>
    
    <li class="separator"></li>
    
    <li><a href="/soil" class="{{ request()->is('soil') ? 'active' : '' }}"><i class="bi bi-cpu"></i><span>AI Soil Analysis</span></a></li>
    
    <li><a href="/weather" class="{{ request()->is('weather') ? 'active' : '' }}"><i class="bi bi-cloud-sun"></i><span>Weather Info</span></a></li>
    </ul>
</div>

<div id="sidebar-backdrop" onclick="toggleSidebar()"></div>

<div id="content">
    <div class="topbar">
        <div class="site-name">
            <button class="toggle-btn d-md-none me-2" onclick="toggleSidebar()">☰</button>
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            <span>GrowSmart</span>
        </div>
        <div>
            <i class="bi bi-search me-3"></i>
            <i class="bi bi-bell"></i>
        </div>
    </div>

    <hr>

    <div class="filter-container" id="filterContainer">
        <div class="filter-pill active" onclick="updateCategory('all')">All Crops</div>
        <a href="summer" class="filter-pill">Summer Season</a>
        <a href="winter" class="filter-pill">Winter Season</a>
        <a href="grains" class="filter-pill">Grains</a>
        <a href="/vegetable" class="filter-pill">Vegetables</a>
        <a href="fruit" class="filter-pill">Fruits</a>
    </div>

    <div class="slider-header">
        <h3 id="sliderTitle">All Crops</h3>
    </div>

    <div class="horizontal-slider" id="cropSlider">

@foreach($sliderCrops as $crop)

<a href="{{ route('crop.show',$crop->id) }}"
   class="text-decoration-none">

    <div class="crop-card"
         style="min-width:220px;max-width:220px;">

        <div class="card-badge">
            Most Common Crop
        </div>

        <img src="{{ asset('images/'.$crop->image) }}"
             alt="{{ $crop->name }}">

        <div class="card-info">

            <div class="crop-title">
                {{ $crop->name }}
            </div>

            <div style="font-size:12px;color:#888;">
                
            </div>

        </div>

    </div>

</a>

@endforeach

</div>
     <br><h3 class="mt-4">Services</h3>
    <div class="crop-data-wrapper p-3 mb-4">
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <a href="register" class="text-decoration-none">
                    <div class="card service-card-responsive shadow-sm">
                        <img src="{{ asset('images/weather.avif') }}" alt="Weather Forecast">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h6 class="card-title fw-bold">Weather Forecast</h6>
                            <p class="text-muted small mb-0">Stay updated with precise weather forecasts anytime. Make better farming decisions with accurate weather information.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="register" class="text-decoration-none">
                    <div class="card service-card-responsive shadow-sm">
                        <img src="{{ asset('images/community.jpg') }}" alt="Community Forum">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h6 class="card-title fw-bold">Community Forum</h6>
                            <p class="text-muted small mb-0">Have questions about crops? Ask our experts anytime. We’re here to respond and support you within 24 hours.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="/soil" class="text-decoration-none">
                    <div class="card service-card-responsive shadow-sm">
                        <img src="{{ asset('images/soil.avif') }}" alt="AI Soil Analysis">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h6 class="card-title fw-bold">AI Soil Analysis</h6>
                            <p class="text-muted small mb-0">Upload a soil image and let our AI analyze its condition. Get instant insights and smart suggestions to improve soil health.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br> 
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Crops Data</h3>
        <a href="/grid" style="color:#ff477e; text-decoration:none;">See All</a>
    </div>

   <div class="crop-data-wrapper p-3 mb-4">
    <div class="row g-3 crop-data">

        @foreach($cropDataCrops as $crop)

        <div class="col-md-3 col-sm-6 col-6">

            <a href="{{ route('crop.show',$crop->id) }}"
               class="text-decoration-none">

                <div class="crop-card shadow-sm">

                    <img src="{{ asset('images/'.$crop->image) }}"
                         alt="{{ $crop->name }}">

                    <div class="card-info">

                        <div class="crop-title">
                            {{ $crop->name }}
                        </div>

                        <div class="mt-2">

                            <button class="btn btn-success btn-sm">
                                View Details
                            </button>

                        </div>

                    </div>

                </div>

            </a>

        </div>

        @endforeach

    </div>
</div>
    <br> 
     <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Pest Management</h3>
        <a href="/grid" style="color:#ff477e; text-decoration:none;">See All</a>
    </div>
    <div class="crop-data-wrapper p-3 mb-4">
    <div class="row g-3 crop-data">

        @foreach($pestCrops as $crop)

        <div class="col-md-3 col-sm-6 col-6">

            <a href="{{ route('crop.pest',$crop->id) }}"
               class="text-decoration-none">

                <div class="crop-card shadow-sm">

                    <img src="{{ asset('images/'.$crop->image) }}"
                         alt="{{ $crop->name }}">

                    <div class="card-info">

                        <div class="crop-title">
                            {{ $crop->name }}
                        </div>

                        <div class="mt-2">

                            <button class="btn btn-success btn-sm">
                                Pest Details
                            </button>

                        </div>

                    </div>

                </div>

            </a>

        </div>

        @endforeach

    </div>
</div>

<!-- Professional Footer -->
<footer class="footer">

    <div class="container-fluid">

        <div class="row">

            <!-- About -->
            <div class="col-lg-4 col-md-6 mb-4">

                <h5>
                    <i class="bi bi-tree-fill"></i>
                    GrowSmart
                </h5>

                <p>
                    GrowSmart is an intelligent agriculture platform
                    helping farmers with crop information, pest
                    management, soil analysis, weather forecasting,
                    and expert community support.
                </p>

            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">

                <h5>Quick Links</h5>

                <ul class="footer-links">

                    <li><a href="/">Home</a></li>

                    <li><a href="/grid">Crop Data</a></li>

                    <li><a href="/garden">Pest Management</a></li>

                    <li><a href="/register">Community</a></li>

                </ul>

            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h5>Services</h5>

                <ul class="footer-links">

                    <li><a href="/soil">AI Soil Analysis</a></li>

                    <li><a href="/weather">Weather Forecast</a></li>

                    <li><a href="/register">Expert Support</a></li>

                    <li><a href="/grid">Crop Knowledge</a></li>

                </ul>

            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h5>Contact Us</h5>

                <p>
                    <i class="bi bi-envelope-fill"></i>
                    support@growsmart.com
                </p>

                <p>
                    <i class="bi bi-telephone-fill"></i>
                    +92 XXX XXXXXXX
                </p>

                <p>
                    <i class="bi bi-geo-alt-fill"></i>
                    Pakistan
                </p>

                <div class="footer-social mt-3">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-twitter-x"></i></a>

                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            © {{ date('Y') }} GrowSmart. All Rights Reserved.
            <br>
            Empowering Farmers Through Smart Agriculture.

        </div>

    </div>

</footer>
</div>
<script>
// Sidebar toggle
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');

    if (window.innerWidth > 768) {
        sidebar.classList.toggle('collapsed');
    } else {
        sidebar.classList.toggle('show');
    }
}

window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        document.getElementById('sidebar').classList.remove('show');
    }
});

// Auto slider animation
let scrollInterval;

function startAutoScroll() {

    const slider = document.getElementById('cropSlider');

    if (scrollInterval) {
        clearInterval(scrollInterval);
    }

    scrollInterval = setInterval(() => {

        if (slider.children.length > 1) {

            const firstCard = slider.children[0];

            const cardWidth =
                firstCard.offsetWidth + 15;

            firstCard.style.marginLeft =
                `-${cardWidth}px`;

            setTimeout(() => {

                firstCard.style.marginLeft = '0px';

                slider.appendChild(firstCard);

            }, 500);

        }

    }, 3000);
}

startAutoScroll();
</script>

</body>
</html>
