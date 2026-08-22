@extends('layouts.app')

@section('title', 'About Us | GrowSmart')

@section('content')

<div class="container py-3">
    <div class="about-page">

        <div class="about-hero">
            <div class="about-icon">
                <i class="bi bi-tree-fill"></i>
            </div>

            <div>
                <h1>About GrowSmart</h1>
                <p>Smart Agriculture Platform</p>
            </div>
        </div>

        <div class="about-intro">
            <h2>Growing Smarter, Together</h2>
            <p>
                GrowSmart is a smart agriculture platform that brings
                crop knowledge, pest management, weather information,
                AI soil analysis and agricultural community support
                together in one place.
            </p>
        </div>

        <div class="about-section">
            <h2>What We Provide</h2>

            <div class="about-grid">

                <div class="about-box">
                    <i class="bi bi-bar-chart"></i>
                    <h3>Crop Data</h3>
                    <p>Crop information, seasons and useful growing guidance.</p>
                </div>

                <div class="about-box">
                    <i class="bi bi-bug"></i>
                    <h3>Pest Management</h3>
                    <p>Helpful information for identifying and managing pests.</p>
                </div>

                <div class="about-box">
                    <i class="bi bi-cloud-sun"></i>
                    <h3>Weather</h3>
                    <p>Weather information to support better farming decisions.</p>
                </div>

                <div class="about-box">
                    <i class="bi bi-cpu"></i>
                    <h3>AI Soil Analysis</h3>
                    <p>Smart soil analysis to help improve farming decisions.</p>
                </div>

                <div class="about-box">
                    <i class="bi bi-people"></i>
                    <h3>Community</h3>
                    <p>Ask questions, share knowledge and get agricultural support.</p>
                </div>

                <div class="about-box">
                    <i class="bi bi-flower1"></i>
                    <h3>Smart Farming</h3>
                    <p>Modern technology and agricultural knowledge in one platform.</p>
                </div>

            </div>
        </div>

        <div class="about-goal">
            <i class="bi bi-bullseye"></i>
            <div>
                <h2>Our Goal</h2>
                <p>
                    To make modern agriculture information simple, useful
                    and accessible, helping farmers make smarter decisions
                    through technology.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection

@push('styles')
<style>
.about-page{
    max-width:1000px;
    margin:auto;
    background:#fff;
    border-radius:18px;
    padding:32px;
    box-shadow:0 8px 28px rgba(23,59,50,.08);
}

.about-hero{
    display:flex;
    align-items:center;
    gap:18px;
    padding:5px 0 25px;
    border-bottom:1px solid #e3ebe6;
}

.about-icon{
    width:68px;
    height:68px;
    flex-shrink:0;
    border-radius:18px;
    background:#e6efe9;
    color:#285c48;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
}

.about-hero h1{
    margin:0;
    color:#173b32;
    font-size:28px;
    font-weight:700;
}

.about-hero p{
    margin:4px 0 0;
    color:#718078;
    font-size:13px;
}

.about-intro{
    text-align:center;
    max-width:760px;
    margin:28px auto 30px;
}

.about-intro h2,
.about-section h2,
.about-goal h2{
    color:#285c48;
    font-weight:700;
    font-size:21px;
    margin-bottom:8px;
}

.about-intro p,
.about-goal p{
    margin:0;
    color:#5d6d65;
    font-size:13px;
    line-height:1.75;
}

.about-section{
    margin-bottom:28px;
}

.about-section h2{
    text-align:center;
    margin-bottom:18px;
}

.about-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:14px;
}

.about-box{
    padding:20px 16px;
    background:#f5f7f2;
    border:1px solid #e4ebe6;
    border-radius:14px;
    text-align:center;
    transition:.25s ease;
}

.about-box:hover{
    transform:translateY(-4px);
    background:#edf5ef;
    box-shadow:0 8px 20px rgba(23,59,50,.09);
}

.about-box i{
    width:48px;
    height:48px;
    margin:auto;
    border-radius:13px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#e0ece5;
    color:#285c48;
    font-size:22px;
}

.about-box h3{
    color:#173b32;
    font-size:15px;
    margin:11px 0 6px;
    font-weight:700;
}

.about-box p{
    color:#718078;
    font-size:11px;
    line-height:1.55;
    margin:0;
}

.about-goal{
    display:flex;
    align-items:center;
    gap:16px;
    padding:20px;
    border-radius:15px;
    background:linear-gradient(135deg,#edf5ef,#f7faf7);
    border-left:4px solid #285c48;
}

.about-goal>i{
    width:48px;
    height:48px;
    flex-shrink:0;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#dcebe2;
    color:#285c48;
    font-size:21px;
}

.about-goal h2{
    margin:0 0 4px;
    font-size:18px;
}

.about-goal p{
    font-size:12px;
    line-height:1.6;
}

@media(max-width:768px){
    .about-page{
        padding:24px 18px;
    }

    .about-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .about-hero h1{
        font-size:24px;
    }
}

@media(max-width:500px){
    .about-page{
        padding:20px 14px;
    }

    .about-hero{
        gap:12px;
    }

    .about-icon{
        width:56px;
        height:56px;
        font-size:26px;
        border-radius:14px;
    }

    .about-hero h1{
        font-size:21px;
    }

    .about-grid{
        grid-template-columns:1fr;
    }

    .about-goal{
        align-items:flex-start;
    }
}
</style>
@endpush

