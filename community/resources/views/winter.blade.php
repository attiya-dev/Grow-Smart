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
}

/* --- Sidebar Styling --- */
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

/* --- Content Styling --- */
#content {
    flex: 1;
    padding: 30px;
    background: #ffffff;
    overflow-x: hidden;
}

.topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
.site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
.site-name img { width: 48px; height: 48px; border-radius: 8px; }

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
/* --- Uniform Crop Data Cards --- */
.crop-data .card {
    height: 250px;           /* fixed height for all cards */
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.crop-data .card img {
    height: 140px;           /* fixed image height */
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
    border: 1px solid #ddd;    /* border around the box */
    border-radius: 12px;        /* rounded corners */
    background: #fdfdfd;        /* light background */
    padding: 20px;              /* inner spacing */
    box-shadow: 0 2px 6px rgba(0,0,0,0.05); /* subtle shadow */
}
/* --- Services Section Cards --- */
.crop-data-wrapper.services .card {
    height: 420px; /* increased height */
}
.card-body small {
    display: block;
    font-size: 12px;
    color: #777;
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

<div id="content">
    <div class="topbar">
        <div class="site-name">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            GrowSmart
        </div>
        <div>
            <i class="bi bi-search me-3"></i>
            <i class="bi bi-bell"></i>
        </div>
    </div>

    <hr>
<h3>Winter Crops</h3>

<div class="crop-data-wrapper p-3 mb-4">
<div class="row mt-3 g-3 crop-data">

@foreach($winterCrops as $crop)
<div class="col-md-3 col-6">
    <a href="#" class="text-decoration-none">
        <div class="card h-100 text-center shadow-sm">
            <img src="{{ asset('images/' . $crop->image) }}" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title mb-0">{{ $crop->name }}</h6>

                @if($crop->type)
                <small class="text-muted d-block mt-1">
                    {{ ucfirst($crop->type) }}
                </small>
                @endif

            </div>
        </div>
    </a>
</div>
@endforeach

</div>
</div>
</div>
   <script>
    function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}

// Update category
function updateCategory(category) {
    const pills = document.querySelectorAll('.filter-pill');
    pills.forEach(p => p.classList.remove('active'));
    event.target.classList.add('active');

    const titles = { all: "All Crops" };
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