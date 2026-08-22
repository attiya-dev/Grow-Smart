@extends('layouts.app')

@section('title', 'GrowSmart | Dashboard')


@section('content')

    <section class="hero">

        <div class="hero-content">

            <div class="hero-left">

                <div class="hero-badge">

                    <i class="bi bi-stars"></i>

                    Smart Agriculture Platform

                </div>


                <h1>

                    Grow Smarter.<br>

                    <span>Farm Better.</span>

                </h1>


                <p class="hero-description">

                    GrowSmart brings essential farming knowledge,
                    crop information, weather insights, pest
                    management and intelligent soil analysis
                    together in one simple platform.

                </p>


                <div class="hero-actions">

                    <a
                        href="/grid"
                        class="hero-primary-btn"
                    >

                        Explore Crop Data

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <a
                        href="/weather"
                        class="hero-secondary-btn"
                    >

                        <i class="bi bi-cloud-sun"></i>

                        Check Weather

                    </a>

                </div>


                <div class="hero-stats">

                    <div class="hero-stat">

                        <strong>
                            50+
                        </strong>

                        <span>
                            Crop Resources
                        </span>

                    </div>


                    <div class="hero-stat">

                        <strong>
                            Smart
                        </strong>

                        <span>
                            Expert Advice
                        </span>

                    </div>


                    <div class="hero-stat">

                        <strong>
                            AI
                        </strong>

                        <span>
                            Soil Insights
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <div class="section-heading">

        <div>

            <h2>
                Popular Crops
            </h2>

            <p>
                Explore commonly grown crops and learn more about them.
            </p>

        </div>


        <a
            href="/grid"
            class="see-all"
        >

            See All

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>


    <div class="slider-box">

        <div
            class="crop-slider"
            id="cropSlider"
        >

            @forelse($sliderCrops as $crop)

                <a
                    href="{{ route('crop.show', $crop->id) }}"
                    class="crop-slide"
                >

                    <div class="crop-slide-image">

                        <img
                            src="{{ asset('images/'.$crop->image) }}"
                            alt="{{ $crop->name }}"
                            loading="lazy"
                        >

                        <span class="common-badge">
                            Popular
                        </span>

                    </div>


                    <div class="crop-slide-info">

                        <h5>
                            {{ $crop->name }}
                        </h5>

                        <span>

                            <i class="bi bi-leaf"></i>

                            View crop information

                        </span>

                    </div>

                </a>

            @empty

                <p class="text-muted mb-0">
                    No crops available at the moment.
                </p>

            @endforelse

        </div>

    </div>


    <div class="section-heading">

        <div>

            <h2>
                GrowSmart Services
            </h2>

            <p>
                Useful tools to help you make better farming decisions.
            </p>

        </div>

    </div>


    <div class="row g-4 mb-5">


        <div class="col-lg-4 col-md-6">

            <a
                href="/weather"
                class="text-decoration-none"
            >

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="{{ asset('images/weather.avif') }}"
                            alt="Weather Forecast"
                            loading="lazy"
                        >

                    </div>


                    <div class="service-body">

                        <h5>
                            Weather Forecast
                        </h5>

                        <p>

                            Stay updated with weather conditions
                            and forecasts to make better farming
                            decisions.

                        </p>

                    </div>

                </div>

            </a>

        </div>


        <div class="col-lg-4 col-md-6">

            <a
                href="/community"
                class="text-decoration-none"
            >

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="{{ asset('images/community.avif') }}"
                            alt="Community Forum"
                            loading="lazy"
                        >

                    </div>


                    <div class="service-body">

                        <h5>
                            Community Forum
                        </h5>

                        <p>

                            Ask questions, share farming problems
                            and get help from agriculture experts.

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-lg-4 col-md-6">

            <a
                href="/soil"
                class="text-decoration-none"
            >

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="{{ asset('images/soil.avif') }}"
                            alt="AI Soil Analysis"
                            loading="lazy"
                        >

                    </div>


                    <div class="service-body">

                        <h5>
                            AI Soil Analysis
                        </h5>

                        <p>

                            Upload a soil image and get useful
                            information and suggestions about
                            your soil.

                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

    <div class="section-heading">

        <div>

            <h2>
                Pest Management
            </h2>

            <p>
                Find information about common pests and their management.
            </p>

        </div>


        <a
            href="/garden"
            class="see-all"
        >

            See All

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>


    <div class="data-wrapper">

        <div class="row g-4">

            @forelse($pestCrops as $crop)

                <div class="col-lg-3 col-md-4 col-sm-6 col-6">

                    <a
                        href="{{ route('crop.pest', $crop->id) }}"
                        class="text-decoration-none"
                    >

                        <div class="crop-card">

                            <img
                                src="{{ asset('images/'.$crop->image) }}"
                                alt="{{ $crop->name }}"
                                loading="lazy"
                            >


                            <div class="crop-info">

                                <h5>
                                    {{ $crop->name }}
                                </h5>

                            </div>

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12">

                    <p class="text-muted mb-0 text-center">

                        No pest management information available.

                    </p>

                </div>

            @endforelse

        </div>

    </div>

@endsection


@push('styles')

<style>

    .hero {

        position: relative;

        height: 480px;

        min-height: 480px;

        width: 100%;

        overflow: hidden;

        border-radius: 22px;

        margin-bottom: 34px;

        background:
            linear-gradient(
                105deg,
                rgba(15, 52, 43, 0.96) 0%,
                rgba(28, 82, 63, 0.88) 38%,
                rgba(35, 91, 68, 0.52) 65%,
                rgba(35, 91, 68, 0.15) 100%
            ),
            url("{{ asset('images/agriculture1.jpg') }}")
            center center / cover no-repeat;

        box-shadow:
            0 18px 45px rgba(23, 59, 50, 0.16);

        display: flex;

        align-items: center;
    }

    .hero-content {

        position: relative;

        z-index: 5;

        width: 100%;

        padding: 50px 52px;
    }

    .hero-left {
        max-width: 650px;
    }

    .hero-badge {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 7px 13px;

        border-radius: 30px;

        color: #e6f0ea;

        background: rgba(255,255,255,0.09);

        border: 1px solid rgba(255,255,255,0.16);

        backdrop-filter: blur(8px);

        font-size: 11px;

        margin-bottom: 15px;
    }

    .hero-badge i {
        color: #d6b16e;
    }

    .hero h1 {

        margin: 0 0 14px;

        color: white;

        font-size: clamp(36px, 4.5vw, 54px);

        line-height: 1.03;

        letter-spacing: -1.2px;

        font-weight: 750;
    }

    .hero h1 span {
        color: #d8e7dd;
    }

    .hero-description {

        max-width: 600px;

        color: #dce9e3;

        font-size: 14px;

        line-height: 1.65;

        margin-bottom: 22px;
    }

    .hero-actions {

        display: flex;

        align-items: center;

        gap: 10px;

        flex-wrap: wrap;
    }

    .hero-primary-btn {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        padding: 11px 18px;

        border-radius: 9px;

        background: #f3ead9;

        color: var(--dark-green);

        font-size: 13px;

        font-weight: bold;

        transition: 0.25s;
    }

    .hero-primary-btn:hover {

        background: white;

        color: var(--dark-green);

        transform: translateY(-2px);

        box-shadow: 0 8px 20px rgba(0,0,0,0.14);
    }

    .hero-secondary-btn {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 10px 17px;

        border-radius: 9px;

        border: 1px solid rgba(255,255,255,0.22);

        background: rgba(255,255,255,0.06);

        color: white;

        font-size: 13px;

        font-weight: 500;

        backdrop-filter: blur(7px);

        transition: 0.25s;
    }

    .hero-secondary-btn:hover {

        background: rgba(255,255,255,0.14);

        color: white;

        transform: translateY(-2px);
    }


    .hero-stats {

        display: flex;

        gap: 9px;

        margin-top: 26px;

        flex-wrap: wrap;
    }

    .hero-stat {

        min-width: 120px;

        padding: 10px 13px;

        border-radius: 10px;

        background: rgba(255,255,255,0.075);

        border: 1px solid rgba(255,255,255,0.11);

        backdrop-filter: blur(8px);

        transition: 0.25s;
    }

    .hero-stat strong {

        display: block;

        color: white;

        font-size: 17px;

        font-weight: bold;
    }

    .hero-stat span {

        display: block;

        color: #b5c8bf;

        font-size: 9px;

        margin-top: 2px;
    }

    .section-heading {

        display: flex;

        justify-content: space-between;

        align-items: flex-end;

        gap: 20px;

        margin-bottom: 14px;
    }

    .section-heading h2 {

        margin: 0;

        color: var(--dark-green);

        font-size: 23px;

        font-weight: bold;
    }

    .section-heading p {

        margin: 5px 0 0;

        color: var(--gray);

        font-size: 12px;
    }

    .see-all {

        color: var(--green);

        font-size: 12px;

        font-weight: bold;

        white-space: nowrap;
    }

    .slider-box {

        background: white;

        border: 1px solid var(--border);

        border-radius: 17px;

        padding: 16px;

        margin-bottom: 35px;

        box-shadow: var(--card-shadow);
    }

    .crop-slider {

        display: flex;

        gap: 15px;

        overflow-x: auto;

        padding: 4px 2px 9px;

        scroll-behavior: smooth;

        scrollbar-width: thin;
    }

    .crop-slide {

        min-width: 220px;

        max-width: 220px;

        background: white;

        border: 1px solid var(--border);

        border-radius: 14px;

        overflow: hidden;

        color: inherit;

        transition: 0.3s;

        flex-shrink: 0;
    }

    .crop-slide:hover {

        transform: translateY(-5px);

        box-shadow: var(--hover-shadow);
    }

    .crop-slide-image {

        height: 135px;

        position: relative;

        overflow: hidden;
    }

    .crop-slide-image img {

        width: 100%;

        height: 100%;

        object-fit: cover;
    }

    .common-badge {

        position: absolute;

        top: 9px;

        left: 9px;

        background: var(--dark-green);

        color: white;

        padding: 5px 9px;

        border-radius: 6px;

        font-size: 9px;

        font-weight: bold;
    }

    .crop-slide-info {

        padding: 12px;
    }

    .crop-slide-info h5 {

        margin: 0;

        color: var(--dark-green);

        font-size: 14px;

        font-weight: bold;
    }

    .crop-slide-info span {

        display: block;

        margin-top: 5px;

        color: var(--gray);

        font-size: 10px;
    }


    .service-card {

        height: 100%;

        background: white;

        border: 1px solid var(--border);

        border-radius: 17px;

        overflow: hidden;

        box-shadow: var(--card-shadow);

        transition: 0.3s;
    }

    .service-card:hover {

        transform: translateY(-6px);

        box-shadow: var(--hover-shadow);
    }

    .service-image {

        height: 220px;

        overflow: hidden;
    }

    .service-image img {

        width: 100%;

        height: 100%;

        object-fit: cover;
    }

    .service-body {

        padding: 18px 20px 21px;
    }

    .service-body h5 {

        color: var(--dark-green);

        font-size: 17px;

        font-weight: bold;

        margin-bottom: 7px;
    }

    .service-body p {

        color: var(--gray);

        font-size: 13px;

        line-height: 1.65;

        margin: 0;
    }

    .data-wrapper {

        background: white;

        border: 1px solid var(--border);

        border-radius: 18px;

        padding: 20px;

        margin-bottom: 45px;

        box-shadow: var(--card-shadow);
    }

    .crop-card {

        height: 100%;

        background: white;

        border: 1px solid var(--border);

        border-radius: 15px;

        overflow: hidden;

        transition: 0.3s;
    }

    .crop-card:hover {

        transform: translateY(-6px);

        box-shadow: var(--hover-shadow);
    }

    .crop-card img {

        width: 100%;

        height: 180px;

        object-fit: cover;

        display: block;
    }

    .crop-info {

        padding: 14px;

        text-align: center;
    }

    .crop-info h5 {

        color: var(--dark-green);

        font-size: 15px;

        font-weight: bold;

        margin: 0;
    }

    @media (max-width: 768px) {

        .hero {

            min-height: 464px;

            border-radius: 20px;

            align-items: flex-end;
        }

        .hero-content {

            padding: 32px 30px;
        }

        .hero h1 {

            font-size: 39px;
        }

        .hero-description {

            font-size: 13px;
        }

        .hero-stats {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 8px;
        }

        .hero-stat {

            min-width: 0;

            text-align: center;
        }

        .service-image {

            height: 200px;
        }

    }


    @media (max-width: 576px) {

        .hero {

            min-height: 499px;

            border-radius: 18px;
        }

        .hero-content {

            padding: 25px 20px 24px;
        }

        .hero h1 {

            font-size: 34px;
        }

        .hero-actions {

            flex-direction: column;

            width: 100%;
        }

        .hero-primary-btn,
        .hero-secondary-btn {

            width: 100%;

            justify-content: center;
        }

        .hero-stats {

            gap: 6px;
        }

        .slider-box,
        .data-wrapper {

            padding: 12px;

            border-radius: 15px;
        }

        .crop-slide {

            min-width: 205px;
        }

        .service-image {

            height: 190px;
        }

        .crop-card img {

            height: 145px;
        }

    }


    @media (max-width: 400px) {

        .hero {

            min-height: 509px;
        }

        .hero-content {

            padding: 23px 17px;
        }

        .hero h1 {

            font-size: 31px;
        }

    }

</style>

@endpush

@push('scripts')

<script>

    const slider =
        document.getElementById('cropSlider');

    let sliderTimer = null;


    function startSlider() {

        if (!slider) {
            return;
        }

        if (slider.children.length <= 1) {
            return;
        }

        stopSlider();

        sliderTimer = setInterval(
            function() {

                const firstCard =
                    slider.children[0];

                if (!firstCard) {
                    return;
                }

                const cardWidth =
                    firstCard.offsetWidth + 15;


                slider.scrollBy({

                    left: cardWidth,

                    behavior: 'smooth'

                });


                setTimeout(
                    function() {

                        if (
                            slider.scrollLeft +
                            slider.clientWidth >=
                            slider.scrollWidth - 10
                        ) {

                            slider.scrollTo({

                                left: 0,

                                behavior: 'smooth'

                            });

                        }

                    },
                    800
                );

            },
            3500
        );

    }


    function stopSlider() {

        if (sliderTimer) {

            clearInterval(sliderTimer);

            sliderTimer = null;

        }

    }


    if (slider) {

        startSlider();


        slider.addEventListener(
            'mouseenter',
            stopSlider
        );


        slider.addEventListener(
            'mouseleave',
            startSlider
        );


        slider.addEventListener(
            'touchstart',
            stopSlider,
            { passive: true }
        );


        slider.addEventListener(
            'touchend',
            function() {

                setTimeout(
                    startSlider,
                    1500
                );

            },
            { passive: true }
        );

    }


    document.addEventListener(
        'visibilitychange',
        function() {

            if (document.hidden) {

                stopSlider();

            } else {

                startSlider();

            }

        }
    );

</script>

@endpush