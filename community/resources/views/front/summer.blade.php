@extends('layouts.app')

@section('title', (is_urdu() ? 'موسم گرما کی فصلیں' : 'Summer Crops') . ' | GrowSmart')

@push('styles')
<style>
    .summer-page {
        width: 100%;
    }

    .crop-page-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 20px;
        margin-bottom: 28px;
        padding: 24px 28px;
        border-radius: 18px;
        background: linear-gradient(135deg, #edf8f0 0%, #ffffff 100%);
        border: 1px solid #dce9df;
        box-shadow: 0 6px 20px rgba(23, 59, 50, 0.06);
    }

    .header-content {
        max-width: 750px;
    }

    .crop-page-label {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 6px 12px;
        margin-bottom: 10px;
        border-radius: 30px;
        background: #dff2e3;
        color: #2e7d32;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .crop-page-title {
        color: #173b32;
        font-size: 32px;
        font-weight: 750;
        margin: 0 0 8px;
        line-height: 1.2;
    }

    .crop-page-subtitle {
        color: #687870;
        font-size: 15px;
        line-height: 1.6;
        margin: 0;
    }

    .season-icon {
        width: 72px;
        height: 72px;
        flex-shrink: 0;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #66bb6a, #2e7d32);
        color: #ffffff;
        font-size: 32px;
        box-shadow: 0 8px 20px rgba(46, 125, 50, 0.22);
    }

    .crop-data-wrapper {
        border: 1px solid #dce5df;
        border-radius: 20px;
        background: #ffffff;
        padding: 22px;
        box-shadow: 0 8px 28px rgba(23, 59, 50, 0.07);
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
        min-height: 320px;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border: 1px solid #e3eae5;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .crop-card:hover {
        transform: translateY(-8px);
        border-color: #91b99a;
        box-shadow: 0 18px 40px rgba(23, 59, 50, 0.14);
    }

    .crop-image-wrapper {
        height: 220px;
        overflow: hidden;
        position: relative;
        background: #edf3ee;
    }

    .crop-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.5s ease;
    }

    .crop-card:hover img {
        transform: scale(1.07);
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0) 50%,
            rgba(0, 0, 0, 0.22) 100%
        );
        pointer-events: none;
    }

    .crop-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        padding: 6px 11px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.94);
        color: #2e7d32;
        font-size: 11px;
        font-weight: 700;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        backdrop-filter: blur(5px);
    }

    .crop-card-arrow {
        position: absolute;
        right: 12px;
        bottom: 12px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.95);
        color: #2e7d32;
        font-size: 17px;
        box-shadow: 0 5px 14px rgba(0, 0, 0, 0.15);
        opacity: 0;
        transform: translateX(8px);
        transition: all 0.3s ease;
    }

    .crop-card:hover .crop-card-arrow {
        opacity: 1;
        transform: translateX(0);
    }

    .card-info {
        padding: 17px 16px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: #ffffff;
    }

    .crop-title {
        font-weight: 700;
        font-size: 17px;
        color: #173b32;
        line-height: 1.35;
    }

    .crop-type {
        display: inline-block;
        margin-top: 7px;
        padding: 4px 10px;
        border-radius: 20px;
        background: #f0f6f1;
        color: #718078;
        font-size: 11px;
        font-weight: 600;
    }

    .empty-state {
        padding: 60px 20px;
        text-align: center;
        border-radius: 16px;
        background: #f8fbf9;
        border: 1px dashed #cbdacf;
    }

    .empty-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 15px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e7f3e9;
        color: #4b8b55;
        font-size: 30px;
    }

    .empty-state h5 {
        color: #263d32;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .empty-state p {
        color: #7a8881;
        margin: 0;
        font-size: 14px;
    }

    @media (max-width: 992px) {
        .crop-page-header {
            padding: 22px;
        }

        .crop-page-title {
            font-size: 28px;
        }

        .crop-image-wrapper {
            height: 195px;
        }

        .crop-card {
            min-height: 290px;
        }
    }

    @media (max-width: 768px) {
        .crop-page-header {
            align-items: center;
            padding: 20px;
        }

        .crop-page-title {
            font-size: 25px;
        }

        .crop-page-subtitle {
            font-size: 13px;
        }

        .season-icon {
            width: 58px;
            height: 58px;
            font-size: 26px;
            border-radius: 15px;
        }

        .crop-data-wrapper {
            padding: 13px;
            border-radius: 16px;
        }

        .crop-image-wrapper {
            height: 165px;
        }

        .crop-card {
            min-height: 250px;
            border-radius: 15px;
        }

        .card-info {
            padding: 13px 10px;
        }

        .crop-title {
            font-size: 14px;
        }

        .crop-card-arrow {
            width: 34px;
            height: 34px;
            font-size: 15px;
        }
    }

    @media (max-width: 576px) {
        .crop-page-header {
            padding: 17px;
            margin-bottom: 20px;
        }

        .crop-page-label {
            font-size: 10px;
            padding: 5px 9px;
        }

        .crop-page-title {
            font-size: 22px;
        }

        .crop-page-subtitle {
            font-size: 12px;
            line-height: 1.5;
        }

        .season-icon {
            width: 48px;
            height: 48px;
            font-size: 21px;
            border-radius: 13px;
        }

        .crop-data-wrapper {
            padding: 9px;
        }

        .crop-image-wrapper {
            height: 145px;
        }

        .crop-card {
            min-height: 220px;
            border-radius: 13px;
        }

        .card-info {
            padding: 10px 7px;
        }

        .crop-title {
            font-size: 13px;
        }

        .crop-type {
            font-size: 10px;
            padding: 3px 8px;
        }

        .crop-badge {
            top: 8px;
            left: 8px;
            font-size: 9px;
            padding: 5px 8px;
        }

        .crop-card-arrow {
            display: none;
        }
    }
</style>
@endpush

@section('content')

<div class="summer-page">

    <div class="crop-page-header">

        <div class="header-content">

            <div class="crop-page-label">
                <i class="bi bi-sun-fill"></i>
                {{ t('Summer Season', 'موسم گرما') }}
            </div>

            <h1 class="crop-page-title">
                {{ t('Summer Crops', 'موسم گرما کی فصلیں') }}
            </h1>

            <p class="crop-page-subtitle">
                {{ t('Discover crops suitable for the summer season and explore detailed information about their cultivation and management.', 'موسم گرما کے لیے موزوں فصلوں کو دیکھیں اور ان کی کاشت اور انتظام کے بارے میں تفصیلی معلومات حاصل کریں۔') }}
            </p>

        </div>

        <div class="season-icon">
            <i class="bi bi-brightness-high-fill"></i>
        </div>

    </div>

    <div class="crop-data-wrapper">

        <div class="row g-4">

            @forelse($summerCrops as $crop)

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

                                <div class="image-overlay"></div>

                                <div class="crop-badge">
                                    <i class="bi bi-sun me-1"></i>
                                    {{ t('Summer', 'موسم گرما') }}
                                </div>

                                <div class="crop-card-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

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

                    <div class="empty-state">

                        <div class="empty-icon">
                            <i class="bi bi-flower1"></i>
                        </div>

                        <h5>
                            No {{ t('Summer Crops', 'موسم گرما کی فصلیں') }} Available
                        </h5>

                        <p>
                            {{ t('There are currently no summer crops available. Please check back later.', 'اس وقت موسم گرما کی کوئی فصل دستیاب نہیں ہے۔ براہِ کرم بعد میں دوبارہ دیکھیں۔') }}
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection
