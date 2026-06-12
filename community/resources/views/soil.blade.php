<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Soil Analysis – GrowSmart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
body { display:flex; min-height:100vh; background:#f9f9f9; font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif; margin:0; }
#sidebar { width:260px; background:#f0f4f9; display:flex; flex-direction:column; padding:12px; border-right:1px solid #e0e0e0; position:sticky; top:0; height:100vh; transition:all 0.3s; }
#sidebar.collapsed { width:80px; }
#sidebar .logo { padding:20px 10px; font-size:1.2rem; display:flex; align-items:center; }
#sidebar.collapsed .logo span { display:none; }
#sidebar ul { list-style:none; padding:0; margin-top:10px; }
#sidebar ul li a { display:flex; align-items:center; padding:10px 16px; border-radius:25px; color:#444746; text-decoration:none; transition:0.2s; white-space:nowrap; }
#sidebar ul li a i { font-size:18px; min-width:30px; text-align:center; }
#sidebar.collapsed ul li a span { display:none; }
#sidebar ul li a:hover { background-color:#e1e5e9; }
#sidebar ul li a.active { background-color:#d3e3fd; color:#041e49; }
.separator { border-bottom:1px solid #ccc; margin:10px 0; }
#content { flex:1; padding:30px; background:#fff; overflow-x:hidden; }
.topbar { display:flex; justify-content:space-between; align-items:center; margin-bottom:10px; }
.site-name { font-size:22px; font-weight:500; display:flex; align-items:center; gap:10px; }
.site-name img { width:48px; height:48px; border-radius:8px; }
.toggle-btn { background:none; border:none; font-size:20px; cursor:pointer; }

/* Soil Analysis UI */
.soil-card { background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:28px; max-width:720px; margin:0 auto; box-shadow:0 2px 12px rgba(0,0,0,0.06); }
.soil-card h4 { color:#166534; font-weight:700; }
.step-badge { background:#d1fae5; color:#065f46; font-size:12px; font-weight:700; padding:3px 10px; border-radius:20px; }
.result-section { background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:20px; margin-top:20px; }
.crop-chip { display:inline-block; background:#dcfce7; color:#15803d; border-radius:20px; padding:4px 14px; font-size:13px; font-weight:600; margin:3px; }
.fertilizer-chip { display:inline-block; background:#fef9c3; color:#854d0e; border-radius:20px; padding:4px 14px; font-size:13px; font-weight:600; margin:3px; }
.advice-box { background:#fff; border-left:4px solid #16a34a; padding:14px 18px; border-radius:0 8px 8px 0; font-size:14px; white-space:pre-line; }
.payment-card { text-align:center; padding:40px 20px; }
.payment-card .price-tag { font-size:2.5rem; font-weight:800; color:#15803d; }
.weather-badge { background:#e0f2fe; color:#0369a1; border-radius:8px; padding:6px 14px; font-size:13px; display:inline-flex; align-items:center; gap:6px; }
.history-item { border:1px solid #e5e7eb; border-radius:10px; padding:12px 16px; margin-bottom:8px; cursor:pointer; transition:background 0.2s; }
.history-item:hover { background:#f0fdf4; }
#spinner { display:none; }
</style>
</head>
<body>

<!-- ========== SIDEBAR ========== -->
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
        <li><a href="/soil" class="active"><i class="bi bi-cpu"></i><span>AI Soil Analysis</span></a></li>
        <li><a href="/weather" class="{{ request()->is('weather') ? 'active' : '' }}"><i class="bi bi-cloud-sun"></i><span>Weather Info</span></a></li>
    </ul>
</div>

<!-- ========== MAIN CONTENT ========== -->
<div id="content">
    <div class="topbar">
        <div class="site-name">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            GrowSmart
        </div>
        @auth
        <span class="text-muted small">Logged in as {{ Auth::user()->name }}</span>
        @endauth
    </div>
    <hr>

    {{-- ---- NOT LOGGED IN ---- --}}
    @guest
    <div class="soil-card text-center py-5">
        <i class="bi bi-lock-fill text-secondary" style="font-size:3rem;"></i>
        <h4 class="mt-3">Login Required</h4>
        <p class="text-muted">You need to be logged in to use the AI Soil Analysis feature.</p>
        <a href="/login" class="btn btn-success px-4">Login Now</a>
        <a href="/register" class="btn btn-outline-secondary ms-2 px-4">Register</a>
    </div>
    @endguest

    {{-- ---- LOGGED IN ---- --}}
    @auth
    {{-- Pass PHP-generated auth data to JS --}}
    <script>
        const SOIL_API  = 'https://growsmart-soil-analysis-production.up.railway.app';
        const USER_ID   = {{ $userId }};
        const AUTH_TS   = {{ $timestamp }};
        const AUTH_TOKEN = '{{ $token }}';
    </script>

    <div id="app-container">

        {{-- STEP 1: Payment Gate --}}
        <div id="payment-section" class="soil-card payment-card" style="display:none;">
            <span class="step-badge mb-2 d-inline-block">Step 1 of 2</span>
            <h4 class="mt-3"><i class="bi bi-cpu-fill me-2"></i>AI Soil Analysis</h4>
            <p class="text-muted mt-2 mb-4">Get personalised crop and fertilizer recommendations based on your soil, location, and weather conditions.</p>
            <div class="mb-3">
                <span class="price-tag">$2.99</span>
                <span class="text-muted ms-2">one-time · unlimited analyses</span>
            </div>
            <ul class="list-unstyled text-start d-inline-block mb-4">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>AI-powered soil type detection from photo</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Real-time weather analysis for your location</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Top 3 crop recommendations with reasons</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Fertilizer guide & soil improvement tips</li>
            </ul>
            <br>
            <button id="pay-btn" class="btn btn-success btn-lg px-5" onclick="startPayment()">
                <i class="bi bi-credit-card me-2"></i>Pay &amp; Unlock
            </button>
            <p class="text-muted small mt-3">Secured by Stripe. Test card: 4242 4242 4242 4242</p>
        </div>

        {{-- STEP 2: Analysis Form --}}
        <div id="form-section" class="soil-card" style="display:none;">
            <span class="step-badge mb-2 d-inline-block">Step 2 of 2</span>
            <h4 class="mt-2"><i class="bi bi-cpu-fill me-2 text-success"></i>Soil Analysis Form</h4>
            <p class="text-muted">Fill in the details about your land and upload a photo of your soil.</p>

            <form id="soil-form" enctype="multipart/form-data">

                {{-- Location --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Your Location <span class="text-danger">*</span></label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="e.g. Lahore, Faisalabad, Multan" required>
                    <div class="form-text">We use this to fetch real-time weather for your area.</div>
                </div>

                {{-- Is anything sown? --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Is any crop currently sown in this land? <span class="text-danger">*</span></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_crop_sown" id="sown-no" value="0" checked onchange="toggleCropField()">
                        <label class="form-check-label" for="sown-no">No — I want to know what to plant</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_crop_sown" id="sown-yes" value="1" onchange="toggleCropField()">
                        <label class="form-check-label" for="sown-yes">Yes — a crop is already growing</label>
                    </div>
                </div>

                {{-- Current crop (conditional) --}}
                <div id="current-crop-field" class="mb-3" style="display:none;">
                    <label class="form-label fw-semibold">What crop is currently growing?</label>
                    <input type="text" name="current_crop" class="form-control" placeholder="e.g. Wheat, Cotton, Rice">
                </div>

                {{-- Last harvest --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">What did you last harvest from this field?</label>
                    <input type="text" name="last_harvest" class="form-control" placeholder="e.g. Wheat, Corn, left it empty">
                    <div class="form-text">Helps us suggest a good crop rotation.</div>
                </div>

                {{-- Fertilizer used --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Have you used any fertilizer on this soil?</label>
                    <input type="text" name="fertilizer_used" class="form-control" placeholder="e.g. Urea, DAP, none">
                </div>

                {{-- Soil chemistry (optional) --}}
                <div class="mb-3">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleChemistry(this)">
                        <i class="bi bi-flask me-1"></i>Add Soil Test Values
                        <span class="text-muted fw-normal">(optional — improves ML accuracy)</span>
                        <i class="bi bi-chevron-down ms-1" id="chem-chevron"></i>
                    </button>
                    <div id="chemistry-fields" style="display:none;" class="mt-3 p-3 border rounded-3 bg-light">
                        <p class="text-muted small mb-3">Enter values from a soil test report. Leave blank to use dataset averages.</p>
                        <div class="row g-2">
                            <div class="col-6 col-md-3">
                                <label class="form-label small fw-semibold">Nitrogen (N)</label>
                                <input type="number" name="nitrogen" class="form-control form-control-sm" placeholder="0–140" min="0" max="140" step="1">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label small fw-semibold">Phosphorus (P)</label>
                                <input type="number" name="phosphorus" class="form-control form-control-sm" placeholder="0–145" min="0" max="145" step="1">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label small fw-semibold">Potassium (K)</label>
                                <input type="number" name="potassium" class="form-control form-control-sm" placeholder="0–205" min="0" max="205" step="1">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label small fw-semibold">pH Level</label>
                                <input type="number" name="ph_level" class="form-control form-control-sm" placeholder="3.5–9.5" min="3.5" max="9.5" step="0.1">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Soil image --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Photo of Your Soil / Land <span class="text-muted fw-normal">(recommended)</span></label>
                    <input type="file" name="soil_image" id="soil-image-input" class="form-control" accept="image/*" onchange="previewSoilImage()">
                    <div class="form-text">Take a close-up photo of the soil. Max 5MB. JPG/PNG/WEBP.</div>
                    <div id="soil-preview-wrapper" class="mt-2" style="display:none;">
                        <img id="soil-preview" src="#" alt="Soil Preview" style="height:100px;border-radius:10px;border:1px solid #ddd;">
                        <button type="button" class="btn btn-sm btn-outline-secondary ms-2" onclick="removeSoilImage()">Remove</button>
                    </div>
                </div>

                <div id="spinner" class="text-center my-3">
                    <div class="spinner-border text-success" role="status"></div>
                    <p class="text-muted mt-2 small">Analysing your soil... please wait</p>
                </div>

                <button type="submit" class="btn btn-success px-5 fw-semibold">
                    <i class="bi bi-search me-2"></i>Analyse My Soil
                </button>
            </form>
        </div>

        {{-- RESULT SECTION --}}
        <div id="result-section" class="soil-card mt-4" style="display:none;">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-stars text-success me-2"></i>Analysis Result</h5>
                <button class="btn btn-sm btn-outline-success" onclick="showFormSection()">New Analysis</button>
            </div>
            <hr>
            <div id="result-weather" class="mb-3"></div>
            <div id="result-soil-type" class="mb-3"></div>
            <div id="result-crops" class="mb-3"></div>
            <div id="result-fertilizers" class="mb-3"></div>
            <div id="result-advice" class="mb-3"></div>
        </div>

        {{-- HISTORY --}}
        <div id="history-section" class="mt-4" style="display:none;">
            <h6 class="text-muted fw-semibold mb-2"><i class="bi bi-clock-history me-1"></i>Your Past Analyses</h6>
            <div id="history-list"></div>
        </div>

        {{-- Loading spinner on initial page check --}}
        <div id="page-loading" class="text-center py-5">
            <div class="spinner-border text-success"></div>
            <p class="text-muted mt-2">Checking your access...</p>
        </div>

    </div>{{-- /app-container --}}
    @endauth
</div>{{-- /content --}}

<script>
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
}

function toggleCropField() {
    const sownYes = document.getElementById('sown-yes').checked;
    document.getElementById('current-crop-field').style.display = sownYes ? 'block' : 'none';
}

function toggleChemistry(btn) {
    const fields = document.getElementById('chemistry-fields');
    const chevron = document.getElementById('chem-chevron');
    const visible = fields.style.display !== 'none';
    fields.style.display = visible ? 'none' : 'block';
    chevron.className = visible ? 'bi bi-chevron-down ms-1' : 'bi bi-chevron-up ms-1';
}

function previewSoilImage() {
    const file = document.getElementById('soil-image-input').files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onloadend = () => {
        document.getElementById('soil-preview').src = reader.result;
        document.getElementById('soil-preview-wrapper').style.display = 'block';
    };
    reader.readAsDataURL(file);
}

function removeSoilImage() {
    document.getElementById('soil-image-input').value = '';
    document.getElementById('soil-preview-wrapper').style.display = 'none';
}

// ------- Auth headers -------
function authHeaders() {
    return {
        'X-User-Id': String(USER_ID),
        'X-Timestamp': String(AUTH_TS),
        'X-Token': AUTH_TOKEN,
    };
}

// ------- Page init -------
@auth
document.addEventListener('DOMContentLoaded', async () => {
    try {
        // Payment check temporarily bypassed for testing
        // const resp = await fetch(`${SOIL_API}/payment/status/${USER_ID}`, { headers: authHeaders() });
        // const data = await resp.json();
        document.getElementById('page-loading').style.display = 'none';
        showFormSection();
        loadHistory();
    } catch (e) {
        document.getElementById('page-loading').innerHTML =
            '<div class="alert alert-warning">Could not connect to the AI service. Make sure it is running on port 8000.</div>';
    }
});

// Listen for payment complete message from the Stripe success popup
window.addEventListener('message', (e) => {
    if (e.data === 'payment_complete') {
        document.getElementById('payment-section').style.display = 'none';
        showFormSection();
        loadHistory();
    }
});
@endauth

// ------- Payment -------
async function startPayment() {
    const btn = document.getElementById('pay-btn');
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Redirecting...';
    try {
        const resp = await fetch(`${SOIL_API}/payment/create-session`, {
            method: 'POST',
            headers: authHeaders(),
        });
        if (!resp.ok) {
            const err = await resp.json();
            // If already paid, just unlock
            if (err.detail && err.detail.includes('already paid')) {
                document.getElementById('payment-section').style.display = 'none';
                showFormSection();
                return;
            }
            alert('Payment error: ' + (err.detail || 'Unknown error'));
            btn.disabled = false;
            btn.innerHTML = '<i class="bi bi-credit-card me-2"></i>Pay & Unlock';
            return;
        }
        const data = await resp.json();
        // Open Stripe in a popup so success page can postMessage back
        window.open(data.checkout_url, 'stripe_checkout', 'width=600,height=700');
    } catch (e) {
        alert('Could not connect to payment service. Is it running?');
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-credit-card me-2"></i>Pay & Unlock';
    }
}

// ------- Form section -------
function showFormSection() {
    document.getElementById('payment-section').style.display = 'none';
    document.getElementById('form-section').style.display = 'block';
    document.getElementById('history-section').style.display = 'block';
}

// ------- Form submit -------
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('soil-form');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const spinner = document.getElementById('spinner');
        const submitBtn = form.querySelector('button[type="submit"]');
        spinner.style.display = 'block';
        submitBtn.disabled = true;

        const formData = new FormData(form);
        // Convert radio value to boolean string FastAPI understands
        const sownVal = formData.get('is_crop_sown');
        formData.set('is_crop_sown', sownVal === '1' ? 'true' : 'false');

        // Remove empty optional chemistry fields — FastAPI can't parse "" as float
        ['nitrogen', 'phosphorus', 'potassium', 'ph_level'].forEach(f => {
            if (!formData.get(f)) formData.delete(f);
        });

        try {
            const resp = await fetch(`${SOIL_API}/analysis/submit`, {
                method: 'POST',
                headers: authHeaders(),  // no Content-Type — browser sets multipart boundary
                body: formData,
            });
            spinner.style.display = 'none';
            submitBtn.disabled = false;

            if (!resp.ok) {
                const err = await resp.json();
                if (resp.status === 402) {
                    alert('Payment required. Please complete payment first.');
                    document.getElementById('form-section').style.display = 'none';
                    document.getElementById('payment-section').style.display = 'block';
                } else {
                    const detail = Array.isArray(err.detail)
                        ? err.detail.map(e => e.msg).join(', ')
                        : (err.detail || 'Submission failed');
                    alert('Error: ' + detail);
                }
                return;
            }

            const result = await resp.json();
            renderResult(result);
            loadHistory();
        } catch (err) {
            spinner.style.display = 'none';
            submitBtn.disabled = false;
            alert('Could not connect to AI service. Make sure it is running on port 8000.');
        }
    });
});

// ------- Render result -------
function renderResult(r) {
    const section = document.getElementById('result-section');
    section.style.display = 'block';
    section.scrollIntoView({ behavior: 'smooth' });

    // Weather
    const w = r.weather_snapshot || {};
    document.getElementById('result-weather').innerHTML = `
        <span class="weather-badge"><i class="bi bi-thermometer-half"></i>${w.temperature ?? '--'}°C</span>
        <span class="weather-badge ms-2"><i class="bi bi-droplet"></i>${w.humidity ?? '--'}% humidity</span>
        <span class="weather-badge ms-2"><i class="bi bi-cloud-sun"></i>${w.description ?? 'N/A'}</span>
        <span class="weather-badge ms-2"><i class="bi bi-calendar3"></i>${capitalize(w.season ?? '')}</span>
    `;

    // Soil type
    document.getElementById('result-soil-type').innerHTML = `
        <strong>Detected Soil Type:</strong>
        <span class="crop-chip ms-2">${capitalize(r.soil_type_detected?.replace(/_/g, ' ') ?? 'Unknown')}</span>
    `;

    // Crops
    let cropsHtml = '<strong>Recommended Crops:</strong><div class="mt-2">';
    (r.recommended_crops || []).forEach(c => {
        cropsHtml += `
        <div class="border rounded-3 p-3 mb-2">
            <span class="crop-chip">${c.crop}</span>
            <small class="text-muted ms-2">${c.reason}</small>
            <div class="mt-1 text-muted small"><i class="bi bi-flower1 me-1"></i><strong>Fertilizer:</strong> ${c.fertilizer}</div>
            <div class="text-muted small ms-3">${c.fertilizer_instructions}</div>
        </div>`;
    });
    cropsHtml += '</div>';
    document.getElementById('result-crops').innerHTML = cropsHtml;

    // Advice
    document.getElementById('result-advice').innerHTML = `
        <strong>Detailed Advice:</strong>
        <div class="advice-box mt-2">${r.advice_text ?? ''}</div>
    `;

    // Hide fertilizers separate display (already in crops)
    document.getElementById('result-fertilizers').innerHTML = '';
}

// ------- History -------
async function loadHistory() {
    try {
        const resp = await fetch(`${SOIL_API}/analysis/history/${USER_ID}`, { headers: authHeaders() });
        if (!resp.ok) return;
        const items = await resp.json();
        const listEl = document.getElementById('history-list');
        if (!items.length) {
            listEl.innerHTML = '<p class="text-muted small">No previous analyses.</p>';
            return;
        }
        listEl.innerHTML = items.map(item => `
            <div class="history-item" onclick="loadAnalysis(${item.id})">
                <div class="d-flex justify-content-between">
                    <span><i class="bi bi-geo-alt me-1 text-success"></i><strong>${item.location}</strong></span>
                    <span class="badge ${item.status === 'done' ? 'bg-success' : 'bg-secondary'}">${item.status}</span>
                </div>
                <small class="text-muted">${capitalize(item.soil_type_detected?.replace(/_/g,' ') ?? 'Unknown')} · ${new Date(item.created_at).toLocaleDateString()}</small>
            </div>
        `).join('');
    } catch {}
}

async function loadAnalysis(id) {
    try {
        const resp = await fetch(`${SOIL_API}/analysis/${id}`, { headers: authHeaders() });
        if (!resp.ok) return;
        const result = await resp.json();
        renderResult(result);
    } catch {}
}

function capitalize(str) {
    if (!str) return '';
    return str.charAt(0).toUpperCase() + str.slice(1);
}
</script>

</body>
</html>
