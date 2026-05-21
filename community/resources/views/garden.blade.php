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

/* --- Sidebar Layout Core Configurations --- */
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

/* --- Mobile Drawer Dim Backdrop Mask --- */
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

/* --- Content Wrapper Area Styling --- */
#content {
    flex: 1;
    padding: 30px;
    background: #ffffff;
    overflow-x: hidden;
    min-width: 0;
}

.topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
.site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
.site-name img { width: 48px; height: 48px; border-radius: 8px; }

/* --- Modern Grid Card Designs --- */
.crop-card {
    width: 100%;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    transition: transform 0.3s ease;
    border: 1px solid #eee;
    background: #fff;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.crop-card:hover { transform: translateY(-5px); }
.crop-card img { width: 100%; height: 140px; object-fit: cover; border-radius: 15px 15px 0 0; }
.card-info { padding: 12px; flex: 1; display: flex; flex-direction: column; justify-content: center; }
.crop-title { font-weight: 600; font-size: 15px; color: #333; line-height: 1.2; }
.toggle-btn { background: none; border: none; font-size: 20px; cursor: pointer; }

.crop-data-wrapper {
    border: 1px solid #ddd;    
    border-radius: 12px;      
    background: #fdfdfd;      
    padding: 20px;            
    box-shadow: 0 2px 6px rgba(0,0,0,0.05); 
}

/* --- Adaptive Mobile View Breakpoints --- */
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
    .crop-data-wrapper {
        padding: 12px !important;
    }
    .crop-card img {
        height: 110px; /* Reduces image aspect height slightly on mobile to save reading viewport area */
    }
    .crop-title {
        font-size: 14px;
    }
}
</style>
</head>
<body>

<!-- Left Panel Navigation Area Drawer Components -->
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

<!-- Clickable dim layer mask to collapse offcanvas mobile drawer components -->
<div id="sidebar-backdrop" onclick="toggleSidebar()"></div>

<!-- Core System Application Content Area Layout Wrapper -->
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

    <h3>Pest Management Details OF Summer Crops</h3>
    <div class="crop-data-wrapper mb-4">
        <div class="row g-3 crop-data">
            @foreach($summerCrops as $crop)
            <div class="col-md-3 col-6">
                <a href="#" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/' . $crop->image) }}" alt="{{ $crop->name }}">
                        <div class="card-info">
                            <div class="crop-title text-center text-truncate">{{ $crop->name }}</div>
                            @if($crop->type)
                            <div class="text-muted text-center text-truncate mt-1" style="font-size: 12px;">
                                {{ ucfirst($crop->type) }}
                            </div>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <h3>Pest Management Details OF Winter Crops</h3>
    <div class="crop-data-wrapper mb-4">
        <div class="row g-3 crop-data">
            @foreach($winterCrops as $crop)
            <div class="col-md-3 col-6">
                <a href="#" class="text-decoration-none">
                    <div class="crop-card shadow-sm">
                        <img src="{{ asset('images/' . $crop->image) }}" alt="{{ $crop->name }}">
                        <div class="card-info">
                            <div class="crop-title text-center text-truncate">{{ $crop->name }}</div>
                            @if($crop->type)
                            <div class="text-muted text-center text-truncate mt-1" style="font-size: 12px;">
                                {{ ucfirst($crop->type) }}
                            </div>
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
    const sidebar = document.getElementById('sidebar');
    if (window.innerWidth > 768) {
        sidebar.classList.toggle('collapsed');
    } else {
        sidebar.classList.toggle('show');
    }
}

// Reset runtime toggle states cleanly when viewport scales dynamically across width parameters
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        document.getElementById('sidebar').classList.remove('show');
    }
});
</script>

</body>
</html>
