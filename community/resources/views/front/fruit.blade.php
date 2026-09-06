@extends('layouts.app')

@section('title', (is_urdu() ? 'پھل' : 'Fruits') . ' | GrowSmart')

@push('styles')
<style>
    .crop-page {
        padding-bottom: 30px;
    }

    .crop-hero {
        position: relative;
        padding: 30px 32px;
        margin-bottom: 28px;
        border-radius: 20px;
        background: linear-gradient(135deg, #edf7f1 0%, #ffffff 65%, #f5faf7 100%);
        border: 1px solid #dce9e1;
        overflow: hidden;
    }

    .crop-hero::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        right: -55px;
        top: -70px;
        border-radius: 50%;
        background: rgba(86, 135, 104, 0.08);
    }

    .crop-page-title {
        position: relative;
        z-index: 1;
        color: var(--dark-green);
        font-size: 32px;
        font-weight: 800;
        margin: 0 0 8px;
        letter-spacing: -0.4px;
    }

    .crop-page-subtitle {
        position: relative;
        z-index: 1;
        color: var(--gray);
        font-size: 15px;
        margin: 0;
        max-width: 650px;
        line-height: 1.7;
    }

    .crop-section {
        border: 1px solid var(--border);
        border-radius: 20px;
        background: var(--white);
        padding: 24px;
        box-shadow: 0 8px 30px rgba(23, 59, 50, 0.07);
    }

    .crop-section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }

    .crop-section-title {
        margin: 0;
        color: var(--dark-green);
        font-size: 19px;
        font-weight: 700;
    }

    .crop-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 38px;
        height: 30px;
        padding: 0 10px;
        border-radius: 20px;
        background: #edf6f0;
        color: var(--dark-green);
        font-size: 13px;
        font-weight: 700;
    }

    .crop-card-link {
        display: block;
        height: 100%;
        text-decoration: none;
        color: inherit;
    }

    .crop-card {
        width: 100%;
        height: 335px;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border: 1px solid #e4ebe7;
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
        border-color: #b8d0c1;
        box-shadow: 0 18px 40px rgba(23, 59, 50, 0.15);
    }

    .crop-image-wrapper {
        position: relative;
        width: 100%;
        height: 225px;
        overflow: hidden;
        background: #f2f6f3;
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

    .crop-image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.28),
            transparent 45%
        );
        pointer-events: none;
    }

    .view-badge {
        position: absolute;
        right: 12px;
        bottom: 12px;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 7px 11px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.94);
        color: var(--dark-green);
        font-size: 11px;
        font-weight: 700;
        opacity: 0;
        transform: translateY(8px);
        transition: all 0.3s ease;
    }

    .crop-card:hover .view-badge {
        opacity: 1;
        transform: translateY(0);
    }

    .card-info {
        flex: 1;
        padding: 17px 15px;
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
        color: var(--dark-green);
        line-height: 1.35;
    }

    .crop-type {
        color: var(--gray);
        font-size: 12px;
        margin-top: 7px;
        padding: 4px 10px;
        border-radius: 15px;
        background: #f1f5f2;
    }

    .empty-state {
        padding: 55px 20px;
        text-align: center;
        border: 1px dashed #cbd9d0;
        border-radius: 16px;
        background: #fafcfb;
    }

    .empty-state-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #edf6f0;
        color: var(--dark-green);
        font-size: 25px;
    }

    .empty-state h5 {
        color: var(--dark-green);
        font-weight: 700;
        margin-bottom: 6px;
    }

    .empty-state p {
        color: var(--gray);
        font-size: 14px;
        margin: 0;
    }

    @media (max-width: 992px) {

        .crop-hero {
            padding: 25px;
        }

        .crop-page-title {
            font-size: 29px;
        }

        .crop-section {
            padding: 18px;
        }

        .crop-card {
            height: 315px;
        }

        .crop-image-wrapper {
            height: 210px;
        }
    }

    @media (max-width: 768px) {

        .crop-hero {
            padding: 22px;
            border-radius: 16px;
        }

        .crop-page-title {
            font-size: 25px;
        }

        .crop-page-subtitle {
            font-size: 13px;
        }

        .crop-section {
            padding: 14px;
            border-radius: 16px;
        }

        .crop-section-title {
            font-size: 17px;
        }

        .crop-card {
            height: 285px;
            border-radius: 15px;
        }

        .crop-image-wrapper {
            height: 190px;
        }

        .crop-title {
            font-size: 15px;
        }

        .view-badge {
            display: none;
        }
    }

    @media (max-width: 576px) {

        .crop-hero {
            padding: 18px;
            margin-bottom: 20px;
        }

        .crop-page-title {
            font-size: 23px;
        }

        .crop-section {
            padding: 10px;
        }

        .crop-section-header {
            margin-bottom: 14px;
        }

        .crop-section-title {
            font-size: 16px;
        }

        .crop-count {
            min-width: 32px;
            height: 26px;
            font-size: 11px;
        }

        .crop-card {
            height: 255px;
            border-radius: 13px;
        }

        .crop-image-wrapper {
            height: 165px;
        }

        .card-info {
            padding: 10px;
        }

        .crop-title {
            font-size: 13px;
        }

        .crop-type {
            font-size: 10px;
            margin-top: 5px;
        }
    }
</style>
@endpush


@section('content')

<div class="crop-page">

    <div class="crop-hero">

        <h1 class="crop-page-title">
            {{ t('Fruits', 'پھل') }}
        </h1>

        <p class="crop-page-subtitle">
            {{ t('Discover a variety of fruits and explore detailed agricultural information, growing guidance, and useful crop details.', 'مختلف پھلوں کو دیکھیں اور تفصیلی زرعی معلومات، کاشت کی رہنمائی اور فصل کی مفید تفصیلات حاصل کریں۔') }}
        </p>

    </div>


    <div class="crop-section">

        <div class="crop-section-header">

            <h2 class="crop-section-title">
                {{ t('Available Fruits', 'دستیاب پھل') }}
            </h2>

            <span class="crop-count">
                {{ $crops->count() }}
            </span>

        </div>


        <div class="row g-4">

            @forelse($crops as $crop)

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
                                    onerror="this.src='{{ asset('images/default-crop.jpg') }}'"
                                >

                                <div class="crop-image-overlay"></div>


                                
                                <div class="view-badge">

                                    <i class="bi bi-arrow-right"></i>

                                    {{ t('View Details', 'تفصیلات دیکھیں') }}

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

                        <div class="empty-state-icon">

                            <i class="bi bi-flower1"></i>

                        </div>

                        <h5>
                            {{ t('No Fruits Available', 'کوئی پھل دستیاب نہیں ہیں') }}
                        </h5>

                        <p>
                            {{ t('There are currently no fruits available to display.', 'اس وقت دکھانے کے لیے کوئی پھل دستیاب نہیں ہے۔') }}
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection
