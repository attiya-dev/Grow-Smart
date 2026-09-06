@extends('layouts.app')

@section('title', (is_urdu() ? local_text($crop, 'name') . ' کے کیڑوں کا انتظام' : $crop->name . ' Pest Management') . ' | GrowSmart')

@push('styles')
<style>
    .pest-detail-page {
        padding-bottom: 35px;
    }

    .pest-detail-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, var(--dark-green), var(--green));
        border-radius: 22px;
        padding: 32px;
        margin-bottom: 28px;
        box-shadow: 0 12px 30px rgba(23, 59, 50, 0.14);
    }

    .pest-detail-hero::before {
        content: "";
        position: absolute;
        width: 240px;
        height: 240px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        top: -120px;
        right: -50px;
    }

    .pest-detail-hero::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(176, 138, 75, 0.12);
        bottom: -80px;
        left: 30%;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 22px;
    }

    .crop-image {
        width: 95px;
        height: 95px;
        flex-shrink: 0;
        border-radius: 18px;
        object-fit: cover;
        border: 3px solid rgba(255,255,255,0.35);
        box-shadow: 0 8px 20px rgba(0,0,0,0.18);
    }

    .hero-icon {
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.16);
        color: white;
        font-size: 25px;
        margin-bottom: 10px;
    }

    .hero-text h1 {
        color: white;
        font-size: 30px;
        font-weight: 800;
        margin: 0 0 7px;
    }

    .hero-text p {
        color: #c8d9d1;
        font-size: 14px;
        margin: 0;
        line-height: 1.6;
        max-width: 700px;
    }

    .pest-count {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 13px;
        padding: 7px 13px;
        border-radius: 20px;
        background: rgba(255,255,255,0.12);
        color: white;
        border: 1px solid rgba(255,255,255,0.15);
        font-size: 11px;
        font-weight: 700;
    }

    .section-heading {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 18px;
    }

    .section-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: var(--very-light-green);
        color: var(--green);
        font-size: 20px;
    }

    .section-heading h2 {
        color: var(--dark-green);
        font-size: 21px;
        font-weight: 700;
        margin: 0;
    }

    .section-heading p {
        color: var(--gray);
        font-size: 12px;
        margin: 3px 0 0;
    }

    .pest-card {
        height: 100%;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            border-color 0.3s ease;
    }

    .pest-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--hover-shadow);
        border-color: #9db5a8;
    }

    .pest-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 18px 20px;
        background: linear-gradient(
            135deg,
            var(--soft-green),
            var(--very-light-green)
        );
        border-bottom: 1px solid var(--border);
    }

    .pest-name {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--dark-green);
        font-size: 17px;
        font-weight: 750;
    }

    .pest-name-icon {
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: var(--green);
        color: white;
        font-size: 16px;
    }

    .pest-type {
        padding: 6px 10px;
        border-radius: 20px;
        background: white;
        color: var(--green);
        border: 1px solid var(--border);
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        white-space: nowrap;
    }

    .pest-card-body {
        padding: 20px;
    }

    .info-item {
        margin-bottom: 18px;
    }

    .info-item:last-child {
        margin-bottom: 0;
    }

    .info-title {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--dark-green);
        font-size: 12px;
        font-weight: 750;
        margin-bottom: 7px;
    }

    .info-title i {
        color: var(--green);
        font-size: 15px;
    }

    .info-text {
        color: #5d6963;
        font-size: 13px;
        line-height: 1.7;
        margin: 0;
    }

    .control-box {
        margin-top: 20px;
        padding: 15px;
        border-radius: 13px;
        background: #f1f8e9;
        border-left: 4px solid var(--green);
    }

    .control-box .info-title {
        margin-bottom: 6px;
    }

    .empty-state {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: var(--card-shadow);
        text-align: center;
        padding: 65px 20px;
    }

    .empty-icon {
        width: 70px;
        height: 70px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        background: var(--soft-green);
        color: var(--green);
        font-size: 30px;
    }

    .empty-state h4 {
        color: var(--dark-green);
        font-size: 19px;
        font-weight: 700;
        margin: 17px 0 7px;
    }

    .empty-state p {
        color: var(--gray);
        font-size: 13px;
        margin: 0;
    }

    @media (max-width: 768px) {
        .pest-detail-hero {
            padding: 23px 18px;
            border-radius: 18px;
        }

        .hero-content {
            align-items: flex-start;
            gap: 15px;
        }

        .crop-image {
            width: 75px;
            height: 75px;
            border-radius: 14px;
        }

        .hero-icon {
            width: 44px;
            height: 44px;
            font-size: 20px;
        }

        .hero-text h1 {
            font-size: 23px;
        }

        .hero-text p {
            font-size: 12px;
        }

        .section-heading h2 {
            font-size: 18px;
        }

        .pest-card-header {
            padding: 15px;
        }

        .pest-card-body {
            padding: 16px;
        }

        .pest-name {
            font-size: 15px;
        }
    }

    @media (max-width: 576px) {
        .pest-detail-hero {
            padding: 20px 15px;
        }

        .hero-content {
            display: block;
        }

        .crop-image {
            width: 80px;
            height: 80px;
            margin-bottom: 13px;
        }

        .hero-text h1 {
            font-size: 21px;
        }

        .hero-text p {
            font-size: 11px;
        }

        .pest-count {
            font-size: 10px;
        }

        .section-heading {
            align-items: flex-start;
        }

        .section-icon {
            width: 38px;
            height: 38px;
            font-size: 17px;
        }

        .section-heading h2 {
            font-size: 16px;
        }

        .section-heading p {
            font-size: 10px;
        }

        .pest-card-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .pest-type {
            font-size: 9px;
        }

        .info-text {
            font-size: 12px;
        }
    }
</style>
@endpush

@section('content')
<div data-no-translate="true">

<div class="pest-detail-page">

    <div class="pest-detail-hero">

        <div class="hero-content">

            <img
                src="{{ asset('images/' . $crop->image) }}"
                alt="{{ local_text($crop, 'name') }}"
                class="crop-image"
            >

            <div class="hero-text">

                <div class="hero-icon">
                    <i class="bi bi-bug-fill"></i>
                </div>

                <h1>
                    {{ local_text($crop, 'name') }} {{ t('Pest Management', 'کیڑوں کا انتظام') }}
                </h1>

                <p>
                    {{ is_urdu() ? local_text($crop, 'name') . ' کو متاثر کرنے والے عام کیڑوں، ان کی علامات، بچاؤ کے طریقوں اور تجویز کردہ تدارک کے اقدامات کے بارے میں معلومات حاصل کریں۔' : 'Learn about common pests affecting ' . local_text($crop, 'name') . ', their symptoms, prevention methods and recommended control measures.' }}
                </p>

                <div class="pest-count">
                    <i class="bi bi-bug"></i>
                    {{ $crop->pestManagements->count() }} {{ t('Pest Information', 'کیڑوں کی معلومات') }}
                </div>

            </div>

        </div>

    </div>

    <div class="section-heading">

        <div class="section-icon">
            <i class="bi bi-shield-check"></i>
        </div>

        <div>
            <h2>
                {{ t('Pest Information', 'کیڑوں کی معلومات') }}
            </h2>

            <p>
                {{ is_urdu() ? local_text($crop, 'name') . ' کے کیڑوں کی شناخت، بچاؤ اور تجویز کردہ تدارک کے طریقوں کے بارے میں معلومات۔' : 'Identification, prevention and recommended control methods for ' . local_text($crop, 'name') . '.' }}
            </p>
        </div>

    </div>

    @forelse($crop->pestManagements as $pest)

        <div class="pest-card mb-4">

            <div class="pest-card-header">

                <div class="pest-name">

                    <div class="pest-name-icon">
                        <i class="bi bi-bug-fill"></i>
                    </div>

                    <span>
                        {{ local_text($pest, 'name') }}
                    </span>

                </div>

                @if($pest->type)

                    <div class="pest-type">
                        {{ local_text($pest, 'type') }}
                    </div>

                @endif

            </div>

            <div class="pest-card-body">

                <div class="row g-4">

                    <div class="col-lg-6">

                        <div class="info-item">

                            <div class="info-title">
                                <i class="bi bi-arrow-repeat"></i>
                                {{ t('How It Occurs', 'یہ کیسے پیدا ہوتا ہے') }}
                            </div>

                            <p class="info-text" data-no-translate>
                                {{ local_text($pest, 'how_it_occurs') }}
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="info-item">

                            <div class="info-title">
                                <i class="bi bi-exclamation-triangle"></i>
                                {{ t('Symptoms', 'علامات') }}
                            </div>

                            <p class="info-text" data-no-translate>
                                {{ local_text($pest, 'symptoms') }}
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="info-item">

                            <div class="info-title">
                                <i class="bi bi-shield-check"></i>
                                {{ t('Protection', 'بچاؤ') }}
                            </div>

                            <p class="info-text" data-no-translate>
                                {{ local_text($pest, 'protection') }}
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="control-box">

                            <div class="info-title">
                                <i class="bi bi-check-circle-fill"></i>
                                {{ t('Recommended Control', 'تجویز کردہ تدارک') }}
                            </div>

                            <p class="info-text" data-no-translate>
                                {{ local_text($pest, 'recommended_control') }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @empty

        <div class="empty-state">

            <div class="empty-icon">
                <i class="bi bi-shield-check"></i>
            </div>

            <h4>
                {{ t('No Pest Information Available', 'کیڑوں کی کوئی معلومات دستیاب نہیں ہے') }}
            </h4>

            <p>
                {{ is_urdu() ? 'اس وقت ' . local_text($crop, 'name') . ' کے لیے کیڑوں کے انتظام کی کوئی معلومات دستیاب نہیں۔' : 'There is currently no pest management information available for ' . local_text($crop, 'name') . '.' }}
            </p>

        </div>

    @endforelse

</div>

</div>
@endsection
