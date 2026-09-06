@extends('layouts.app')

@section('title', (is_urdu() ? local_text($cropDetail, 'crop_name') : $cropDetail->crop_name) . ' | GrowSmart')

@push('styles')
<style>

.crop-detail-page {
    padding-bottom: 30px;
}

.crop-hero {
    background: linear-gradient(135deg, #173b32 0%, #285c48 55%, #39705a 100%);
    border: 1px solid #285c48;
    border-radius: 18px;
    padding: 22px 28px;
    margin-bottom: 22px;
    box-shadow: 0 8px 22px rgba(23, 59, 50, 0.18);
}

.crop-hero-content {
    display: flex;
    align-items: center;
    gap: 18px;
}

.crop-icon {
    width: 72px;
    height: 72px;
    flex-shrink: 0;
    border-radius: 15px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.12);
    border: 2px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 5px 14px rgba(0, 0, 0, 0.15);
}

.crop-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.crop-icon.no-crop-image {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 28px;
}

.crop-title {
    flex: 1;
}

.crop-title h1 {
    color: #ffffff;
    font-size: 30px;
    font-weight: 750;
    margin: 0 0 5px;
}

.crop-title p {
    color: #d2e3da;
    font-size: 13px;
    margin: 0;
}

.crop-overview {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
    margin-bottom: 22px;
}

.overview-item {
    background: white;
    border: 1px solid #e1e9e3;
    border-radius: 14px;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 4px 15px rgba(30, 70, 45, 0.06);
}

.overview-icon {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf7ef;
    color: #2e7d32;
    border-radius: 10px;
    font-size: 18px;
}

.overview-label {
    color: #8a958f;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-bottom: 3px;
}

.overview-value {
    color: #285c48;
    font-size: 13px;
    font-weight: 700;
}

.crop-section {
    background: white;
    border: 1px solid #e1e9e3;
    border-radius: 16px;
    padding: 22px;
    margin-bottom: 18px;
    box-shadow: 0 4px 15px rgba(30, 70, 45, 0.06);
}

.crop-section:hover {
    box-shadow: 0 7px 20px rgba(30, 70, 45, 0.09);
}

.crop-section-header {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 15px;
    padding-bottom: 11px;
    border-bottom: 1px solid #e7eee9;
}

.section-icon {
    width: 38px;
    height: 38px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: #edf7ef;
    color: #2e7d32;
    font-size: 17px;
}

.crop-section h2 {
    margin: 0;
    color: #285c48;
    font-size: 18px;
    font-weight: 700;
}

.crop-section-content {
    width: 100%;
    color: #56665e;
    font-size: 14px;
    line-height: 2;
    white-space: pre-line;
    word-break: break-word;
    overflow-wrap: break-word;
}

.highlight-section {
    background: linear-gradient(135deg, #f4f9f5, #ffffff);
}

.info-box {
    background: #f5f8f5;
    border-left: 4px solid #2e7d32;
    border-radius: 9px;
    padding: 14px 16px;
}

.section-grid {
    display: flex;
    flex-direction: column;
    gap: 18px;
}


.section-grid .crop-section {
    width: 100%;
    margin-bottom: 0;
}

.section-grid .crop-section {
    margin-bottom: 0;
}

.crop-footer-card {
    background: linear-gradient(135deg, #285c48, #39705a);
    border-radius: 16px;
    padding: 25px;
    text-align: center;
    margin-top: 22px;
    color: white;
    box-shadow: 0 8px 22px rgba(40, 92, 72, 0.14);
}

.crop-footer-card i {
    font-size: 26px;
    margin-bottom: 8px;
}

.crop-footer-card h3 {
    font-size: 18px;
    margin: 0 0 5px;
}

.crop-footer-card p {
    margin: 0;
    color: #d2e3da;
    font-size: 12px;
}

@media (max-width: 850px) {

    .crop-overview {
        grid-template-columns: 1fr;
    }

    .section-grid {
        gap: 14px;
    }

}

@media (max-width: 600px) {

    .crop-hero {
        padding: 20px;
    }

    .crop-hero-content {
        gap: 13px;
    }

    .crop-icon {
        width: 55px;
        height: 55px;
        border-radius: 12px;
    }

    .crop-title h1 {
        font-size: 24px;
    }

    .crop-title p {
        font-size: 11px;
    }

    .crop-section {
        padding: 17px;
    }

    .crop-section h2 {
        font-size: 16px;
    }

    .crop-section-content {
        font-size: 12.5px;
    }

}

</style>
@endpush

@section('content')
<div data-no-translate="true">

@php
    $crop = \App\Models\Crop::where('name', $cropDetail->crop_name)->first();
@endphp

<div class="crop-detail-page">

    <div class="crop-hero">

        <div class="crop-hero-content">

            @if($crop && $crop->image)

                <div class="crop-icon">

                    <img
                        src="{{ asset('images/' . basename($crop->image)) }}"
                        alt="{{ local_text($cropDetail, 'crop_name') }}"
                        onerror="this.style.display='none'; this.parentElement.classList.add('no-crop-image'); this.parentElement.innerHTML='<i class=\'bi bi-flower1\'></i>';"
                    >

                </div>

            @else

                <div class="crop-icon no-crop-image">

                    <i class="bi bi-flower1"></i>

                </div>

            @endif

            <div class="crop-title">

                <h1>
                    {{ local_text($cropDetail, 'crop_name') }}
                </h1>

                <p>
                    {{ t('Complete agricultural information and farming guide', 'مکمل زرعی معلومات اور کاشت کاری کی رہنمائی') }}
                </p>

            </div>

        </div>

    </div>


    <div class="crop-overview">

        <div class="overview-item">

            <div class="overview-icon">
                <i class="bi bi-calendar3"></i>
            </div>

            <div>

                <div class="overview-label">
                    {{ t('Sowing', 'کاشت') }}
                </div>

                <div class="overview-value">
                    {{ t('Crop Season', 'فصل کا موسم') }}
                </div>

            </div>

        </div>


        <div class="overview-item">

            <div class="overview-icon">
                <i class="bi bi-cloud-sun"></i>
            </div>

            <div>

                <div class="overview-label">
                    {{ t('Climate', 'آب و ہوا') }}
                </div>

                <div class="overview-value">
                    {{ t('Climate Requirements', 'موسمی ضروریات') }}
                </div>

            </div>

        </div>


        <div class="overview-item">

            <div class="overview-icon">
                <i class="bi bi-droplet"></i>
            </div>

            <div>

                <div class="overview-label">
                    {{ t('Farming', 'کاشت کاری') }}
                </div>

                <div class="overview-value">
                    {{ t('Irrigation & Soil', 'آبپاشی اور مٹی') }}
                </div>

            </div>

        </div>

    </div>


    <div class="crop-section highlight-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-info-circle"></i>
            </div>

            <h2>
                {{ t('Introduction', 'تعارف') }}
            </h2>

        </div>

        <div class="info-box">

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'introduction') }}
            </div>

        </div>

    </div>


    <div class="crop-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-book"></i>
            </div>

            <h2>
                {{ t('Basic Information', 'بنیادی معلومات') }}
            </h2>

        </div>

        <div class="crop-section-content" data-no-translate>
            {{ local_text($cropDetail, 'basic_information') }}
        </div>

    </div>


    <div class="section-grid">

        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>

                <h2>
                    {{ t('Sowing Season', 'کاشت کا موسم') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'sowing_season') }}
            </div>

        </div>


        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-basket"></i>
                </div>

                <h2>
                    {{ t('Harvesting Season', 'کٹائی کا موسم') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'harvesting_season') }}
            </div>

        </div>

    </div>


    <div class="crop-section highlight-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-cloud-sun"></i>
            </div>

            <h2>
                {{ t('Climate Requirements', 'موسمی ضروریات') }}
            </h2>

        </div>

        <div class="info-box">

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'climate_requirements') }}
            </div>

        </div>

    </div>


    <div class="section-grid">

        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-moisture"></i>
                </div>

                <h2>
                    {{ t('Soil Requirements', 'مٹی کی ضروریات') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'soil_requirements') }}
            </div>

        </div>


        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-layers"></i>
                </div>

                <h2>
                    {{ t('Land Preparation', 'زمین کی تیاری') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'land_preparation') }}
            </div>

        </div>

    </div>


    <div class="section-grid">

        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-flower1"></i>
                </div>

                <h2>
                    {{ t('Seed Selection', 'بیج کا انتخاب') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'seed_selection') }}
            </div>

        </div>


        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>

                <h2>
                    {{ t('Seed Rate', 'بیج کی مقدار') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'seed_rate') }}
            </div>

        </div>

    </div>


    <div class="section-grid">

        <div class="crop-section highlight-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-droplet-fill"></i>
                </div>

                <h2>
                    {{ t('Irrigation Requirements', 'آبپاشی کی ضروریات') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'irrigation_requirements') }}
            </div>

        </div>


        <div class="crop-section highlight-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-flask"></i>
                </div>

                <h2>
                    {{ t('Fertilizer Requirements', 'کھاد کی ضروریات') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'fertilizer_requirements') }}
            </div>

        </div>

    </div>


    <div class="crop-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-graph-up-arrow"></i>
            </div>

            <h2>
                {{ t('Growing Stages', 'نشوونما کے مراحل') }}
            </h2>

        </div>

        <div class="crop-section-content" data-no-translate>
            {{ local_text($cropDetail, 'growing_stages') }}
        </div>

    </div>


    <div class="section-grid">

        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-diagram-3"></i>
                </div>

                <h2>
                    {{ t('Types of Crop', 'فصل کی اقسام') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'types_of_crop') }}
            </div>

        </div>


        <div class="crop-section">

            <div class="crop-section-header">

                <div class="section-icon">
                    <i class="bi bi-list-stars"></i>
                </div>

                <h2>
                    {{ t('Crop Varieties', 'فصل کی اقسام') }}
                </h2>

            </div>

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'crop_varieties') }}
            </div>

        </div>

    </div>


    <div class="crop-section highlight-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-heart-pulse"></i>
            </div>

            <h2>
                {{ t('Nutritional Value', 'غذائی قدر') }}
            </h2>

        </div>

        <div class="info-box">

            <div class="crop-section-content" data-no-translate>
                {{ local_text($cropDetail, 'nutritional_value') }}
            </div>

        </div>

    </div>


    <div class="crop-section">

        <div class="crop-section-header">

            <div class="section-icon">
                <i class="bi bi-award"></i>
            </div>

            <h2>
                {{ t('Importance of the Crop', 'فصل کی اہمیت') }}
            </h2>

        </div>

        <div class="crop-section-content" data-no-translate>
            {{ local_text($cropDetail, 'importance_of_crop') }}
        </div>

    </div>

</div>

</div>
@endsection
