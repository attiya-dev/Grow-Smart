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
/* --- Bottom Chat Input Styling --- */
.chat-container {
    position: fixed;
    bottom: 0;
    left: 260px; /* Matches sidebar width */
    right: 0;
    padding: 20px;
    background: linear-gradient(transparent, #ffffff 50%); /* Subtle fade effect */
    transition: left 0.3s ease;
}

#sidebar.collapsed ~ #content .chat-container {
    left: 80px; /* Adjusts when sidebar is collapsed */
}

.input-wrapper {
    max-width: 800px;
    margin: 0 auto;
    background: #f4f4f4;
    border-radius: 28px;
    padding: 8px 16px;
    display: flex;
    align-items: center;
    border: 1px solid #e5e5e5;
}

.chat-input {
    flex: 1;
    border: none;
    background: transparent;
    padding: 10px;
    outline: none;
    font-size: 16px;
    color: #374151;
}

.chat-input::placeholder {
    color: #6b7280;
}

.icon-btn {
    background: none;
    border: none;
    color: #6e6e6e;
    padding: 8px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
}

.icon-btn:hover {
    background: #e5e5e5;
}

.send-btn {
    background: #b4b4b4; /* Inactive grey from your image */
    color: white;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    margin-left: 8px;
}

.footer-disclaimer {
    text-align: center;
    font-size: 12px;
    color: #6b7280;
    margin-top: 8px;
}
#content {
            flex: 1;
            padding: 30px;
            background: #ffffff;
            overflow-x: hidden;
            padding-bottom: 150px; /* Space for fixed chat bar */
        }

        .topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .site-name { font-size: 22px; font-weight: 500; display: flex; align-items: center; gap: 10px; }
        .site-name img { width: 48px; height: 48px; border-radius: 8px; }

        /* --- Chat Bar & Image Preview Styling --- */
        .chat-container {
            position: fixed;
            bottom: 0;
            left: 260px; 
            right: 0;
            padding: 20px;
            background: white;
            transition: left 0.3s ease;
            z-index: 999;
        }

        #sidebar.collapsed ~ #content .chat-container {
            left: 80px;
        }

        /* The Box for the Image Preview */
        #image-preview-wrapper {
            max-width: 800px;
            margin: 0 auto 10px auto;
            display: none; /* Hidden by default */
            position: relative;
        }

        .preview-img-container {
            position: relative;
            display: inline-block;
        }

        .preview-img-container img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid #ddd;
        }

        .remove-img-btn {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 1px solid white;
        }

        .input-wrapper {
            max-width: 800px;
            margin: 0 auto;
            background: #f4f4f4;
            border-radius: 28px;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            border: 1px solid #e5e5e5;
        }

        .chat-input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 10px;
            outline: none;
            font-size: 16px;
            color: #374151;
        }

        .icon-btn {
            background: none;
            border: none;
            color: #6e6e6e;
            padding: 8px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .icon-btn:hover { background: #e5e5e5; }

        .send-btn {
            background: #b4b4b4;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            margin-left: 8px;
        }

        .footer-disclaimer {
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            margin-top: 8px;
        }
        /* Active state: when text or image is present */
.send-btn.active {
    background: #000000 !important; /* Changes to black */
    cursor: pointer;
    transition: background 0.3s ease;
}

/* Click effect */
.send-btn.active:active {
    transform: scale(0.9);
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
<p class="text-muted">Welcome to your dashboard. Start a conversation below.</p>

    <div class="chat-container">
        <div id="image-preview-wrapper">
            <div class="preview-img-container">
                <img id="image-preview" src="#" alt="Preview">
                <div class="remove-img-btn" onclick="removeImage()">×</div>
            </div>
        </div>

        {{-- <div class="input-wrapper">
            <input type="file" id="file-input" accept="image/*" style="display: none;" onchange="previewFile()">
            
            <button class="icon-btn" onclick="document.getElementById('file-input').click()">
                <i class="bi bi-plus-lg" style="font-size: 20px;"></i>
            </button>

            <input type="text" class="chat-input" placeholder="Ask anything">

            <button class="icon-btn send-btn">
                <i class="bi bi-arrow-up-short" style="font-size: 24px; font-weight: bold;"></i>
            </button>
        </div> --}}

        <div class="input-wrapper">
    <input type="file" id="file-input" accept="image/*" style="display: none;" onchange="previewFile()">
    
    <button class="icon-btn" onclick="document.getElementById('file-input').click()">
        <i class="bi bi-plus-lg" style="font-size: 20px;"></i>
    </button>

    <input type="text" id="chat-input" class="chat-input" placeholder="Ask anything" oninput="toggleSendButton()">

    <button class="icon-btn">
        <i class="bi bi-mic"></i>
    </button>

    <button id="send-btn" class="icon-btn send-btn" onclick="handlePost()">
        <i class="bi bi-arrow-up-short" style="font-size: 24px; font-weight: bold;"></i>
    </button>
</div>
        
        <div class="footer-disclaimer">
            GrowSmart can make mistakes. Check important info.
        </div>
    </div>
</div>
   <script>
    function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}
function previewFile() {
        const preview = document.getElementById('image-preview');
        const wrapper = document.getElementById('image-preview-wrapper');
        const file = document.getElementById('file-input').files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            wrapper.style.display = "block"; // Show the preview box
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
            wrapper.style.display = "none";
        }
    }

    function removeImage() {
        document.getElementById('file-input').value = ""; 
        document.getElementById('image-preview-wrapper').style.display = "none"; 
    }
    function toggleSendButton() {
    const chatInput = document.getElementById('chat-input');
    const fileInput = document.getElementById('file-input');
    const sendBtn = document.getElementById('send-btn');

    // Check if there is text OR a file selected
    if (chatInput.value.trim() !== "" || fileInput.files.length > 0) {
        sendBtn.classList.add('active');
    } else {
        sendBtn.classList.remove('active');
    }
}

// Update your existing previewFile function to also trigger the toggle
function previewFile() {
    const preview = document.getElementById('image-preview');
    const wrapper = document.getElementById('image-preview-wrapper');
    const file = document.getElementById('file-input').files[0];
    const reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
        wrapper.style.display = "block";
        toggleSendButton(); // Check button state after picking image
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

// Update your existing removeImage to trigger the toggle
function removeImage() {
    document.getElementById('file-input').value = "";
    document.getElementById('image-preview-wrapper').style.display = "none";
    toggleSendButton(); // Check button state after removing image
}

// Function to handle the "Post" action
function handlePost() {
    const sendBtn = document.getElementById('send-btn');
    const chatInput = document.getElementById('chat-input');
    
    // Only work if the button is active
    if (sendBtn.classList.contains('active')) {
        alert("Question Posted: " + chatInput.value);
        
        // Reset everything after posting
        chatInput.value = "";
        removeImage(); 
        toggleSendButton();
    }
}
</script>
</body>
</html> 