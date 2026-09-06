@extends('layouts.app')

@section('title', (is_urdu() ? 'موسم سرما کی فصلیں' : 'Winter Crops') . ' | GrowSmart')

@section('content')

<style>
    .winter-page {
        padding-bottom: 40px;
    }

    .crop-hero {
        position: relative;
        padding: 28px 32px;
        margin-bottom: 28px;
        border-radius: 20px;
        background: linear-gradient(135deg, #eef5f1 0%, #f8fbf9 55%, #ffffff 100%);
        border: 1px solid #dce8e0;
        overflow: hidden;
    }

    .crop-hero::after {
        content: "";
        position: absolute;
        width: 190px;
        height: 190px;
        right: -65px;
        top: -75px;
        border-radius: 50%;
        background: rgba(65, 105, 85, 0.08);
    }

    .crop-hero-content {
        position: relative;
        z-index: 2;
    }

    .crop-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 7px 13px;
        margin-bottom: 12px;
        border-radius: 30px;
        background: #ffffff;
        color: #426c54;
        border: 1px solid #d6e4da;
        font-size: 12px;
        font-weight: 600;
    }

    .crop-page-title {
        color: #173b32;
        font-size: 32px;
        font-weight: 800;
        margin: 0 0 8px;
        letter-spacing: -0.5px;
    }

    .crop-page-subtitle {
        color: #718078;
        font-size: 14px;
        margin: 0;
        max-width: 650px;
        line-height: 1.7;
    }

    .crop-data-wrapper {
        border: 1px solid #dce5df;
        border-radius: 20px;
        background: #ffffff;
        padding: 22px;
        box-shadow: 0 8px 30px rgba(23, 59, 50, 0.07);
    }

    .crop-section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
        padding-bottom: 15px;
        border-bottom: 1px solid #edf1ee;
    }

    .crop-section-title {
        margin: 0;
        color: #173b32;
        font-size: 18px;
        font-weight: 700;
    }

    .crop-section-text {
        margin: 3px 0 0;
        color: #718078;
        font-size: 12px;
    }

    .crop-card-link {
        display: block;
        height: 100%;
        text-decoration: none;
        color: inherit;
    }

    .crop-card {
        width: 100%;
        height: 100%;
        min-height: 345px;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border: 1px solid #e2e9e4;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            border-color 0.3s ease;
    }

    .crop-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 38px rgba(23, 59, 50, 0.14);
        border-color: #a9c1b0;
    }

    .crop-image-wrapper {
        height: 235px;
        overflow: hidden;
        position: relative;
        background: #eef3ef;
    }

    .crop-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.45s ease;
    }

    .crop-card:hover img {
        transform: scale(1.07);
    }

    .crop-image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0) 50%,
            rgba(0, 0, 0, 0.22) 100%
        );
        pointer-events: none;
    }

    .crop-view-badge {
        position: absolute;
        right: 12px;
        bottom: 12px;
        padding: 6px 11px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.95);
        color: #356044;
        font-size: 11px;
        font-weight: 700;
        opacity: 0;
        transform: translateY(8px);
        transition: all 0.3s ease;
    }

    .crop-card:hover .crop-view-badge {
        opacity: 1;
        transform: translateY(0);
    }

    .card-info {
        padding: 17px 16px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 110px;
        background: #ffffff;
    }

    .crop-title {
        font-weight: 700;
        font-size: 17px;
        color: #263d32;
        line-height: 1.35;
    }

    .crop-type {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        color: #64806f;
        background: #f0f6f2;
        border: 1px solid #dfebe2;
        margin-top: 8px;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .empty-state {
        padding: 55px 20px;
        border-radius: 15px;
        background: #f8fbf9;
        border: 1px dashed #cbdacf;
    }

    .empty-state-icon {
        width: 65px;
        height: 65px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #e9f3ec;
        color: #568264;
        font-size: 28px;
    }

    .empty-state h5 {
        color: #173b32;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .empty-state p {
        color: #718078;
        font-size: 13px;
        margin: 0;
    }

    @media (max-width: 992px) {
        .crop-hero {
            padding: 25px;
        }

        .crop-page-title {
            font-size: 28px;
        }

        .crop-card {
            min-height: 320px;
        }

        .crop-image-wrapper {
            height: 210px;
        }
    }

    @media (max-width: 768px) {
        .winter-page {
            padding-bottom: 25px;
        }

        .crop-hero {
            padding: 22px;
            margin-bottom: 20px;
            border-radius: 16px;
        }

        .crop-page-title {
            font-size: 25px;
        }

        .crop-page-subtitle {
            font-size: 13px;
        }

        .crop-data-wrapper {
            padding: 14px;
            border-radius: 16px;
        }

        .crop-section-header {
            margin-bottom: 14px;
        }

        .crop-section-title {
            font-size: 16px;
        }

        .crop-card {
            min-height: 285px;
            border-radius: 15px;
        }

        .crop-image-wrapper {
            height: 190px;
        }

        .card-info {
            min-height: 95px;
            padding: 12px;
        }

        .crop-title {
            font-size: 15px;
        }
    }

    @media (max-width: 576px) {
        .crop-hero {
            padding: 18px;
        }

        .crop-badge {
            font-size: 11px;
            padding: 6px 10px;
        }

        .crop-page-title {
            font-size: 22px;
        }

        .crop-page-subtitle {
            font-size: 12px;
            line-height: 1.6;
        }

        .crop-data-wrapper {
            padding: 10px;
        }

        .crop-section-header {
            display: block;
        }

        .crop-section-title {
            font-size: 15px;
        }

        .crop-section-text {
            font-size: 11px;
        }

        .crop-card {
            min-height: 245px;
            border-radius: 13px;
        }

        .crop-image-wrapper {
            height: 160px;
        }

        .card-info {
            min-height: 85px;
            padding: 9px;
        }

        .crop-title {
            font-size: 13px;
        }

        .crop-type {
            font-size: 10px;
            padding: 4px 8px;
            margin-top: 6px;
        }

        .crop-view-badge {
            display: none;
        }

        .empty-state {
            padding: 40px 15px;
        }
    }
</style>

<div class="winter-page">

    <div class="crop-hero">

        <div class="crop-hero-content">

            <div class="crop-badge">
                <i class="bi bi-snow"></i>
                {{ t('Winter Crop Collection', 'موسم سرما کی فصلوں کا مجموعہ') }}
            </div>

            <h1 class="crop-page-title">
                {{ t('Winter Crops', 'موسم سرما کی فصلیں') }}
            </h1>

            <p class="crop-page-subtitle">
                {{ t('Explore crops that thrive during the winter season and discover useful agricultural information and growing guidance for each crop.', 'موسم سرما میں اچھی نشوونما پانے والی فصلوں کو دیکھیں اور ہر فصل کے بارے میں مفید زرعی معلومات اور کاشت کی رہنمائی حاصل کریں۔') }}
            </p>

        </div>

    </div>

    <div class="crop-data-wrapper">

        <div class="crop-section-header">

            <div>
                <h2 class="crop-section-title">
                    {{ t('Winter Crop Collection', 'موسم سرما کی فصلوں کا مجموعہ') }}
                </h2>

                <p class="crop-section-text">
                    {{ t('Select a crop to view its complete agricultural details.', 'مکمل زرعی تفصیلات دیکھنے کے لیے ایک فصل منتخب کریں۔') }}
                </p>
            </div>

        </div>

        <div class="row g-4">

            @forelse($winterCrops as $crop)

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">

                    <a
                        href="{{ route('crop.show', $crop->id) }}"
                        class="crop-card-link"
                    >

                        <div class="crop-card">

                            <div class="crop-image-wrapper">

                                <img
                                    src="{{ asset('images/' . $crop->image) }}"
                                    alt="{{ local_text($crop, 'name') }}"
                                    loading="lazy"
                                >

                                <div class="crop-image-overlay"></div>

                                <span class="crop-view-badge">
                                    {{ t('View Details', 'تفصیلات دیکھیں') }}
                                </span>

                            </div>

                            <div class="card-info">

                                <div class="crop-title">
                                    {{ local_text($crop, 'name') }}
                                </div>

                                @if($crop->type)

                                    <div class="crop-type">
                                        {{ local_text($crop, 'type') }}
                                    </div>

                                @endif

                            </div>

                        </div>

                    </a>

                </div>

            @empty

                <div class="col-12">

                    <div class="empty-state text-center">

                        <div class="empty-state-icon">
                            <i class="bi bi-flower1"></i>
                        </div>

                        <h5>
                            {{ t('No winter crops available', 'موسم سرما کی کوئی فصل دستیاب نہیں ہے') }}
                        </h5>

                        <p>
                            {{ t('There are currently no winter crops available to display.', 'اس وقت دکھانے کے لیے موسم سرما کی کوئی فصل دستیاب نہیں ہے۔') }}
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection
