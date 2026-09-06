<?php $__env->startSection('title', 'Pest Management | GrowSmart'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .pest-page {
        padding-bottom: 30px;
    }

    .pest-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, var(--dark-green), var(--green));
        border-radius: 20px;
        padding: 32px;
        margin-bottom: 30px;
        box-shadow: 0 12px 30px rgba(23, 59, 50, 0.14);
    }

    .pest-hero::before {
        content: "";
        position: absolute;
        width: 240px;
        height: 240px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
        top: -120px;
        right: -50px;
    }

    .pest-hero::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(176,138,75,0.12);
        bottom: -80px;
        left: 25%;
    }

    .pest-hero-content {
        position: relative;
        z-index: 2;
    }

    .pest-hero-icon {
        width: 52px;
        height: 52px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.16);
        color: white;
        font-size: 24px;
        margin-bottom: 14px;
    }

    .pest-hero h1 {
        color: white;
        font-size: 30px;
        font-weight: 800;
        margin: 0 0 7px;
    }

    .pest-hero p {
        color: #c8d9d1;
        font-size: 14px;
        line-height: 1.6;
        margin: 0;
        max-width: 700px;
    }

    .crop-section {
        margin-bottom: 30px;
    }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 15px;
    }

    .section-title-wrapper {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .section-icon {
        width: 43px;
        height: 43px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: var(--very-light-green);
        color: var(--green);
        font-size: 20px;
    }

    .section-title {
        color: var(--dark-green);
        font-size: 21px;
        font-weight: 700;
        margin: 0;
    }

    .section-description {
        color: var(--gray);
        font-size: 12px;
        margin: 3px 0 0;
    }

    .crop-count {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 12px;
        border-radius: 20px;
        background: var(--soft-green);
        border: 1px solid var(--border);
        color: var(--green);
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
    }

    .crop-data-wrapper {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        padding: 20px;
        box-shadow: var(--card-shadow);
    }

    .crop-card-link {
        display: block;
        height: 100%;
        text-decoration: none;
        color: inherit;
    }

    .crop-card {
        position: relative;
        width: 100%;
        height: 315px;
        overflow: hidden;
        border-radius: 16px;
        background: var(--white);
        border: 1px solid #e3e9e5;
        display: flex;
        flex-direction: column;
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            border-color 0.3s ease;
    }

    .crop-card:hover {
        transform: translateY(-7px);
        box-shadow: var(--hover-shadow);
        border-color: #9db5a8;
    }

    .crop-image-wrapper {
        position: relative;
        width: 100%;
        height: 205px;
        overflow: hidden;
        background: var(--soft-green);
    }

    .crop-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.45s ease;
    }

    .crop-card:hover .crop-image-wrapper img {
        transform: scale(1.07);
    }

    .crop-image-wrapper::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0,0,0,0.25),
            transparent 55%
        );
        pointer-events: none;
    }

    .crop-type-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 2;
        padding: 6px 10px;
        border-radius: 20px;
        background: rgba(255,255,255,0.93);
        color: var(--dark-green);
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.10);
        backdrop-filter: blur(5px);
    }

    .card-arrow {
        position: absolute;
        right: 12px;
        bottom: 12px;
        z-index: 2;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(23,59,50,0.92);
        color: white;
        font-size: 15px;
        opacity: 0;
        transform: translateY(5px);
        transition: all 0.3s ease;
    }

    .crop-card:hover .card-arrow {
        opacity: 1;
        transform: translateY(0);
    }

    .card-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 14px 15px;
    }

    .crop-title {
        width: 100%;
        color: var(--dark-green);
        font-size: 16px;
        font-weight: 700;
        line-height: 1.35;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .crop-type {
        color: var(--gray);
        font-size: 12px;
        margin-top: 5px;
    }

    .empty-state {
        text-align: center;
        padding: 55px 20px;
    }

    .empty-icon {
        width: 65px;
        height: 65px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        background: var(--soft-green);
        color: var(--green);
        font-size: 29px;
    }

    .empty-state h5 {
        color: var(--dark-green);
        font-size: 18px;
        font-weight: 700;
        margin: 16px 0 6px;
    }

    .empty-state p {
        color: var(--gray);
        font-size: 13px;
        margin: 0;
    }

    @media (max-width: 992px) {
        .pest-hero {
            padding: 27px 25px;
        }

        .pest-hero h1 {
            font-size: 27px;
        }

        .crop-card {
            height: 300px;
        }

        .crop-image-wrapper {
            height: 190px;
        }
    }

    @media (max-width: 768px) {
        .pest-hero {
            border-radius: 17px;
            padding: 24px 19px;
            margin-bottom: 22px;
        }

        .pest-hero-icon {
            width: 45px;
            height: 45px;
            font-size: 21px;
        }

        .pest-hero h1 {
            font-size: 24px;
        }

        .pest-hero p {
            font-size: 12px;
        }

        .crop-data-wrapper {
            padding: 12px;
        }

        .section-header {
            align-items: flex-start;
        }

        .section-title {
            font-size: 18px;
        }

        .section-description {
            font-size: 11px;
        }

        .crop-count {
            font-size: 10px;
            padding: 6px 9px;
        }

        .crop-card {
            height: 280px;
        }

        .crop-image-wrapper {
            height: 175px;
        }

        .crop-title {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .pest-hero {
            padding: 21px 15px;
        }

        .pest-hero h1 {
            font-size: 22px;
        }

        .pest-hero p {
            font-size: 11px;
        }

        .crop-data-wrapper {
            padding: 9px;
        }

        .section-icon {
            width: 37px;
            height: 37px;
            font-size: 17px;
        }

        .section-title {
            font-size: 16px;
        }

        .crop-count {
            display: none;
        }

        .crop-card {
            height: 250px;
            border-radius: 13px;
        }

        .crop-image-wrapper {
            height: 150px;
        }

        .crop-title {
            font-size: 13px;
        }

        .crop-type {
            font-size: 10px;
        }

        .card-info {
            padding: 10px;
        }
    }

    @media (max-width: 400px) {
        .crop-card {
            height: 235px;
        }

        .crop-image-wrapper {
            height: 140px;
        }

        .crop-title {
            font-size: 12px;
        }

        .crop-type {
            font-size: 9px;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="pest-page" data-no-translate>

    <div class="pest-hero">
        <div class="pest-hero-content">

            <div class="pest-hero-icon">
                <i class="bi bi-bug-fill"></i>
            </div>

            <h1>
                <?php echo e(is_urdu() ? 'کیڑوں کا انتظام' : 'Pest Management'); ?>

            </h1>

            <p>
                <?php echo e(is_urdu() ? 'موسمی فصلوں میں پائے جانے والے عام کیڑوں اور ان سے بچاؤ کے زرعی طریقوں کے بارے میں معلومات حاصل کریں۔' : 'Explore pest management information for seasonal crops, including common crop pests and agricultural protection guidance.'); ?>

            </p>

        </div>
    </div>

    <div class="crop-section">

        <div class="section-header">

            <div class="section-title-wrapper">

                <div class="section-icon">
                    <i class="bi bi-sun-fill"></i>
                </div>

                <div>
                    <h2 class="section-title">
                        <?php echo e(is_urdu() ? 'موسم گرما کی فصلیں' : 'Summer Crops'); ?>

                    </h2>

                    <p class="section-description">
                        <?php echo e(is_urdu() ? 'موسم گرما کی فصلوں میں کیڑوں کے انتظام کے بارے میں معلومات۔' : 'Pest management information for warm-season crops.'); ?>

                    </p>
                </div>

            </div>

            <div class="crop-count">
                <i class="bi bi-flower1"></i>
                <?php echo e($summerCrops->count()); ?> <?php echo e(is_urdu() ? 'فصلیں' : 'Crops'); ?>

            </div>

        </div>

        <div class="crop-data-wrapper">

            <div class="row g-3">

                <?php $__empty_1 = true; $__currentLoopData = $summerCrops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">

                        <a href="<?php echo e(route('crop.pest', $crop->id)); ?>" class="crop-card-link">

                            <div class="crop-card">

                                <div class="crop-image-wrapper">

                                    <?php if($crop->type): ?>
                                        <div class="crop-type-badge">
                                            <?php echo e(local_text($crop, 'type')); ?>

                                        </div>
                                    <?php endif; ?>

                                    <img
                                        src="<?php echo e(asset('images/' . $crop->image)); ?>"
                                        alt="<?php echo e(local_text($crop, 'name')); ?>"
                                    >

                                    <div class="card-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>

                                </div>

                                <div class="card-info">

                                    <div class="crop-title">
                                        <?php echo e(local_text($crop, 'name')); ?>

                                    </div>

                                    <?php if($crop->type): ?>
                                        <div class="crop-type">
                                            <?php echo e(local_text($crop, 'type')); ?>

                                        </div>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </a>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <div class="col-12">

                        <div class="empty-state">

                            <div class="empty-icon">
                                <i class="bi bi-sun"></i>
                            </div>

                            <h5>
                                <?php echo e(is_urdu() ? 'موسم گرما کی کوئی فصل نہیں ملی' : 'No Summer Crops Found'); ?>

                            </h5>

                            <p>
                                <?php echo e(is_urdu() ? 'اس وقت موسم گرما کی کوئی فصل دستیاب نہیں ہے۔' : 'There are currently no summer crops available.'); ?>

                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>

    <div class="crop-section">

        <div class="section-header">

            <div class="section-title-wrapper">

                <div class="section-icon">
                    <i class="bi bi-snow"></i>
                </div>

                <div>
                    <h2 class="section-title">
                        <?php echo e(is_urdu() ? 'موسم سرما کی فصلیں' : 'Winter Crops'); ?>

                    </h2>

                    <p class="section-description">
                        <?php echo e(is_urdu() ? 'موسم سرما کی فصلوں میں کیڑوں کے انتظام کے بارے میں معلومات۔' : 'Pest management information for cool-season crops.'); ?>

                    </p>
                </div>

            </div>

            <div class="crop-count">
                <i class="bi bi-flower1"></i>
                <?php echo e($winterCrops->count()); ?> <?php echo e(is_urdu() ? 'فصلیں' : 'Crops'); ?>

            </div>

        </div>

        <div class="crop-data-wrapper">

            <div class="row g-3">

                <?php $__empty_1 = true; $__currentLoopData = $winterCrops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">

                        <a href="<?php echo e(route('crop.pest', $crop->id)); ?>" class="crop-card-link">

                            <div class="crop-card">

                                <div class="crop-image-wrapper">

                                    <?php if($crop->type): ?>
                                        <div class="crop-type-badge">
                                            <?php echo e(local_text($crop, 'type')); ?>

                                        </div>
                                    <?php endif; ?>

                                    <img
                                        src="<?php echo e(asset('images/' . $crop->image)); ?>"
                                        alt="<?php echo e(local_text($crop, 'name')); ?>"
                                    >

                                    <div class="card-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>

                                </div>

                                <div class="card-info">

                                    <div class="crop-title">
                                        <?php echo e(local_text($crop, 'name')); ?>

                                    </div>
                                </div>

                            </div>

                        </a>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <div class="col-12">

                        <div class="empty-state">

                            <div class="empty-icon">
                                <i class="bi bi-snow"></i>
                            </div>

                            <h5>
                                <?php echo e(is_urdu() ? 'موسم سرما کی کوئی فصل نہیں ملی' : 'No Winter Crops Found'); ?>

                            </h5>

                            <p>
                                <?php echo e(is_urdu() ? 'اس وقت موسم سرما کی کوئی فصل دستیاب نہیں ہے۔' : 'There are currently no winter crops available.'); ?>

                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/front/garden.blade.php ENDPATH**/ ?>