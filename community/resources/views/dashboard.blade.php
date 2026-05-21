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

    <div class="horizontal-slider" id="cropSlider"></div>
    
    <br> 
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Crops Data</h3>
        <a href="/grid" style="color:#ff477e; text-decoration:none;">See All</a>
    </div>

    <div class="crop-data-wrapper p-3 mb-4">
        <div class="row g-3 crop-data">
            <div class="col-md-3 col-sm-6 col-6">
                <a href="wheat.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/wheat.jpg') }}" alt="Wheat">
                        <div class="card-info">
                            <div class="crop-title">Wheat</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="rice.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/rice.jpg') }}" alt="Rice">
                        <div class="card-info">
                            <div class="crop-title">Rice</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="potatoes.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/cotton.jpg') }}" alt="Cotton">
                        <div class="card-info">
                            <div class="crop-title">Cotton</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="corn.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/Sugarcane.jpg') }}" alt="SugarCane">
                        <div class="card-info">
                            <div class="crop-title">SugarCane</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="soybeans.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/mustard.jpg') }}" alt="Mustard">
                        <div class="card-info">
                            <div class="crop-title">Mustard</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="tomatoes.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/sunflower.jpg') }}" alt="SunFlower">
                        <div class="card-info">
                            <div class="crop-title">SunFlower</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="apples.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/pumpkin.jpg') }}" alt="Pumpkin">
                        <div class="card-info">
                            <div class="crop-title">Pumpkin</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="carrots.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/cucumber.jpg') }}" alt="Cucumber">
                        <div class="card-info">
                            <div class="crop-title">Cucumber</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <br> 
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h3>Pest Management</h3>
        <a href="garden" style="color:#ff477e; text-decoration:none;">See All</a>
    </div>

    <div class="crop-data-wrapper p-3 mb-4">
        <div class="row g-3 crop-data">
            <div class="col-md-3 col-sm-6 col-6">
                <a href="wheat.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/canola.jpg') }}" alt="Canola">
                        <div class="card-info">
                            <div class="crop-title">Canola</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="rice.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/radish.jpg') }}" alt="Radish">
                        <div class="card-info">
                            <div class="crop-title">Radish</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="potatoes.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/potato.jpg') }}" alt="Potato">
                        <div class="card-info">
                            <div class="crop-title">Potato</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="corn.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/spinach.jpg') }}" alt="Spinach">
                        <div class="card-info">
                            <div class="crop-title">Spinach</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="soybeans.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/peas.jpg') }}" alt="Peas">
                        <div class="card-info">
                            <div class="crop-title">Peas</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="tomatoes.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/carrots.jpg') }}" alt="Carrots">
                        <div class="card-info">
                            <div class="crop-title">Carrots</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="apples.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/onion.jpg') }}" alt="Onion">
                        <div class="card-info">
                            <div class="crop-title">Onion</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-6">
                <a href="carrots.html" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/cabbage.jpg') }}" alt="Cabbage">
                        <div class="card-info">
                            <div class="crop-title">Cabbage</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
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

// Sidebar toggle handler
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

// Update category
function updateCategory(category) {
    const pills = document.querySelectorAll('.filter-pill');
    pills.forEach(p => p.classList.remove('active'));
    if(event) event.target.classList.add('active');

    const titles = { all: "All Crops" };
    document.getElementById('sliderTitle').innerText = titles[category] || "Crops";
    renderCrops(category);
}

// Render crops inside slider
function renderCrops(category) {
    const slider = document.getElementById('cropSlider');
    slider.innerHTML = '';
    if(!cropData[category]) return;
    
    cropData[category].forEach(item => {
        const card = document.createElement('div');
        card.className = 'crop-card';
        // Enforce exact explicit width inside the flex slider container
        card.style.minWidth = '220px';
        card.style.maxWidth = '220px';
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
}

// Chain-style continuous loop auto-scroll logic
let scrollInterval;
function startAutoScroll() {
    const slider = document.getElementById('cropSlider');
    if (scrollInterval) clearInterval(scrollInterval);

    scrollInterval = setInterval(() => {
        if (slider.children.length > 1) {
            const firstCard = slider.children[0];
            const cardWidth = firstCard.offsetWidth + 15; // Width of card + gap spacing

            // Animate card smoothly sliding left out of frame
            firstCard.style.marginLeft = `-${cardWidth}px`;

            setTimeout(() => {
                // Reset its style changes instantly, then seamlessly push it to the back row
                firstCard.style.marginLeft = '0px';
                slider.appendChild(firstCard);
            }, 500); 
        }
    }, 3000); 
}

// Init execution
renderCrops('all');
startAutoScroll();
</script>

</body>
</html>
