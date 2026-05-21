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

/* --- Responsive Sidebar Styling --- */
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

/* --- Mobile Menu Drawer Backdrop Overlays --- */
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

/* --- Content Panel Base Layout Elements --- */
#content {
    flex: 1;
    padding: 30px;
    background: #ffffff;
    overflow-x: hidden;
    min-width: 0;
}

.topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
.site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
.site-name img { width: 48px; height: 48px; border-radius: 8px; }

.toggle-btn { background: none; border: none; font-size: 20px; cursor: pointer; }

/* --- Uniform Crop Data Responsive Card Containers --- */
.crop-data-wrapper {
    border: 1px solid #ddd;    
    border-radius: 12px;      
    background: #fdfdfd;      
    padding: 20px;            
    box-shadow: 0 2px 6px rgba(0,0,0,0.05); 
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
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

/* --- Media Breakpoint Viewport Adjustments --- */
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
    .crop-data .card {
        height: 210px; /* Reduces container height to adapt comfortably onto mobile viewports */
    }
    .crop-data .card img {
        height: 110px;
    }
}
</style>
</head>
<body>

<!-- Sidebar Menu Drawer Navigation Panel Component -->
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

<!-- Backdrop sheet overlay handles touch closing behaviors on mobile viewports -->
<div id="sidebar-backdrop" onclick="toggleSidebar()"></div>

<!-- Main UI View Context Window Panel -->
<div id="content">
    <div class="topbar">
        <div class="site-name">
            <!-- Mobile Toggle Menu Switch Key Element Trigger Display Blocks -->
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

    <h3>Fruits</h3>

    <div class="crop-data-wrapper mb-4">
        <div class="row mt-1 g-3 crop-data">
            @foreach($crops as $crop)
            <div class="col-md-3 col-6">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="{{ asset('images/' . $crop->image) }}" class="card-img-top" alt="{{ $crop->name }}">
                        <div class="card-body">
                            <h6 class="card-title mb-0 text-truncate w-100" style="font-size: 14px; color: black;">{{ $crop->name }}</h6>
                            @if($crop->type)
                            <small class="text-muted d-block mt-1 text-truncate w-100">
                                {{ ucfirst($crop->type) }}
                            </small>
                            @endif
                             <div class="text-center mt-2">
                            <a href="{{ route('crop.show', $crop->id) }}"
                               class="btn btn-success btn-sm">
                                View Details
                            </a>
                        </div>
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
        // Desktop collapsing mechanics
        sidebar.classList.toggle('collapsed');
    } else {
        // Mobile drawer overlay sliding mechanics
        sidebar.classList.toggle('show');
    }
}

// Automatically clears active mobile drawer states if window resizing expands into desktop modes
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        document.getElementById('sidebar').classList.remove('show');
    }
});
</script>
</body>
</html>
