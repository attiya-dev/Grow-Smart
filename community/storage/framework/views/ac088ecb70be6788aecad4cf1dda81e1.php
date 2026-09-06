<?php $__env->startSection('title', 'Crop Data | GrowSmart'); ?>

<?php $__env->startPush('styles'); ?>
<style>

    .crop-data-page {
        padding-bottom: 25px;
    }


    .page-header {
        position: relative;
        overflow: hidden;

        background: linear-gradient(
            135deg,
            var(--dark-green),
            var(--green)
        );

        border-radius: 20px;

        padding: 30px 32px;

        margin-bottom: 28px;

        box-shadow: 0 12px 30px rgba(23, 59, 50, 0.14);
    }

    .page-header::before {
        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        border-radius: 50%;

        background: rgba(255, 255, 255, 0.05);

        top: -110px;
        right: -40px;
    }

    .page-header::after {
        content: "";

        position: absolute;

        width: 130px;
        height: 130px;

        border-radius: 50%;

        background: rgba(176, 138, 75, 0.12);

        bottom: -70px;
        left: 25%;
    }

    .page-header-content {
        position: relative;
        z-index: 2;
    }

    .page-header-icon {
        width: 50px;
        height: 50px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        border-radius: 14px;

        background: rgba(255, 255, 255, 0.12);

        border: 1px solid rgba(255, 255, 255, 0.15);

        color: white;

        font-size: 23px;

        margin-bottom: 14px;
    }

    .page-header h1 {
        color: white;

        font-size: 30px;

        font-weight: 800;

        margin: 0 0 7px;
    }

    .page-header p {
        color: #c8d9d1;

        font-size: 14px;

        margin: 0;

        max-width: 650px;

        line-height: 1.6;
    }


    .crop-section {
        margin-bottom: 30px;
    }

    .crop-section-header {
        display: flex;

        align-items: center;

        justify-content: space-between;

        margin-bottom: 15px;

        gap: 15px;
    }

    .section-title-wrapper {
        display: flex;

        align-items: center;

        gap: 11px;
    }

    .section-icon {
        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        background: var(--very-light-green);

        color: var(--green);

        border-radius: 11px;

        font-size: 19px;
    }

    .crop-section-title {
        margin: 0;

        color: var(--dark-green);

        font-size: 21px;

        font-weight: 700;
    }

    .crop-section-description {
        color: var(--gray);

        font-size: 12px;

        margin: 3px 0 0;
    }

    .crop-count {
        display: inline-flex;

        align-items: center;

        gap: 6px;

        background: var(--soft-green);

        border: 1px solid var(--border);

        color: var(--green);

        padding: 7px 12px;

        border-radius: 20px;

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

        cursor: pointer;
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

        height: 200px;

        overflow: hidden;

        background: var(--soft-green);
    }

    .crop-card img {
        width: 100%;

        height: 100%;

        object-fit: cover;

        object-position: center;

        display: block;

        transition: transform 0.45s ease;
    }

    .crop-card:hover img {
        transform: scale(1.07);
    }


    .crop-image-wrapper::after {
        content: "";

        position: absolute;

        inset: 0;

        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.20),
            transparent 50%
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

        background: rgba(255, 255, 255, 0.92);

        color: var(--dark-green);

        font-size: 10px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 0.4px;

        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.10);

        backdrop-filter: blur(5px);
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

        color: var(--light-green);

        font-size: 29px;
    }

    .empty-state h5 {
        color: var(--dark-green);

        font-size: 18px;

        font-weight: 700;

        margin-top: 16px;

        margin-bottom: 6px;
    }

    .empty-state p {
        color: var(--gray);

        font-size: 13px;

        margin: 0;
    }

    @media (max-width: 992px) {

        .page-header {
            padding: 27px 25px;
        }

        .page-header h1 {
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

        .page-header {
            border-radius: 17px;

            padding: 24px 19px;

            margin-bottom: 22px;
        }

        .page-header-icon {
            width: 45px;
            height: 45px;

            font-size: 21px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .page-header p {
            font-size: 12px;
        }

        .crop-data-wrapper {
            padding: 12px;
        }

        .crop-section-header {
            align-items: flex-start;
        }

        .crop-section-title {
            font-size: 18px;
        }

        .crop-section-description {
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

        .page-header {
            padding: 21px 15px;
        }

        .page-header h1 {
            font-size: 22px;
        }

        .page-header p {
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

        .crop-section-title {
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

        .crop-card img {
            border-radius: 13px 13px 0 0;
        }

        .card-info {
            padding: 10px;
        }

        .crop-title {
            font-size: 13px;
        }

        .crop-type {
            font-size: 10px;
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

<div class="crop-data-page">

    <div class="page-header">

        <div class="page-header-content">

            <div class="page-header-icon">
                <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>

            <h1>
                Crop Data
            </h1>

            <p>
                Explore seasonal crops and discover detailed agricultural
                information, cultivation requirements and farming guidance.
            </p>

        </div>

    </div>


    <div class="crop-section">

        <div class="crop-section-header">

            <div class="section-title-wrapper">

                <div class="section-icon">
                    <i class="bi bi-sun-fill"></i>
                </div>

                <div>

                    <h2 class="crop-section-title">
                        Summer Crops
                    </h2>

                    <p class="crop-section-description">
                        Crops suitable for warm and summer growing conditions.
                    </p>

                </div>

            </div>

            <div class="crop-count">

                <i class="bi bi-flower1"></i>

                <?php echo e($summerCrops->count()); ?> Crops

            </div>

        </div>


        <div class="crop-data-wrapper">

            <div class="row g-3">

                <?php $__empty_1 = true; $__currentLoopData = $summerCrops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">

                        <a
                            href="<?php echo e(route('crop.show', $crop->id)); ?>"
                            class="crop-card-link"
                            aria-label="View <?php echo e(local_text($crop, 'name')); ?> details"
                        >

                            <div class="crop-card">

                                <div class="crop-image-wrapper">

                                    <?php if($crop->type): ?>

                                        <div class="crop-type-badge">
                                            <?php echo e(ucfirst($crop->type)); ?>

                                        </div>

                                    <?php endif; ?>

                                    <img
                                        src="<?php echo e(asset('images/' . $crop->image)); ?>"
                                        alt="<?php echo e(local_text($crop, 'name')); ?>"
                                    >

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
                                <i class="bi bi-sun"></i>
                            </div>

                            <h5>
                                No Summer Crops Found
                            </h5>

                            <p>
                                There are currently no summer crops available.
                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>

    <div class="crop-section">

        <div class="crop-section-header">

            <div class="section-title-wrapper">

                <div class="section-icon">
                    <i class="bi bi-snow"></i>
                </div>

                <div>

                    <h2 class="crop-section-title">
                        Winter Crops
                    </h2>

                    <p class="crop-section-description">
                        Crops suitable for cooler winter growing conditions.
                    </p>

                </div>

            </div>

            <div class="crop-count">

                <i class="bi bi-flower1"></i>

                <?php echo e($winterCrops->count()); ?> Crops

            </div>

        </div>


        <div class="crop-data-wrapper">

            <div class="row g-3">

                <?php $__empty_1 = true; $__currentLoopData = $winterCrops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">

                        <a
                            href="<?php echo e(route('crop.show', $crop->id)); ?>"
                            class="crop-card-link"
                            aria-label="View <?php echo e(local_text($crop, 'name')); ?> details"
                        >

                            <div class="crop-card">

                                <div class="crop-image-wrapper">

                                    <?php if($crop->type): ?>

                                        <div class="crop-type-badge">
                                            <?php echo e(ucfirst($crop->type)); ?>

                                        </div>

                                    <?php endif; ?>

                                    <img
                                        src="<?php echo e(asset('images/' . $crop->image)); ?>"
                                        alt="<?php echo e(local_text($crop, 'name')); ?>"
                                    >

                                </div>


                                <div class="card-info">

                                    <div class="crop-title">
                                        <?php echo e(local_text($crop, 'name')); ?>

                                    </div>

                                    <?php if($crop->type): ?>

                                        <div class="crop-type">
                                            <?php echo e(ucfirst($crop->type)); ?>

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
                                <i class="bi bi-snow"></i>
                            </div>

                            <h5>
                                No Winter Crops Found
                            </h5>

                            <p>
                                There are currently no winter crops available.
                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/front/grid.blade.php ENDPATH**/ ?>