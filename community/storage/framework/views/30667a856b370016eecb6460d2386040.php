<?php $__env->startSection('content'); ?>

<style>

body {
    background: #f4f8f4;
}

.container-box {
    width: 92%;
    max-width: 1100px;
    margin: 8px auto 25px auto;
}

.heading {
    text-align: center;
    margin-bottom: 18px;
}

.heading h1 {
    color: #1b5e20;
    margin: 0 0 5px 0;
    font-size: 28px;
}

.heading p {
    color: #666;
    margin: 0;
    font-size: 14px;
}

.actions {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.btn {
    padding: 10px 16px;
    border-radius: 7px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.btn:hover {
    opacity: 0.9;
}

.add {
    background: #2e7d32;
    color: white;
}

.data {
    background: #1565c0;
    color: white;
}

.pest {
    background: #ef6c00;
    color: white;
}

.success {
    background: #d4edda;
    color: #155724;
    padding: 10px 12px;
    border-radius: 7px;
    margin-bottom: 15px;
    font-size: 14px;
}

.crop-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.crop-card {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    overflow: hidden;
}

.crop-image-container {
    width: 100%;
    height: 170px;
    border-radius: 8px;
    overflow: hidden;
    background: #e8f5e9;
}

.crop-card img {
    width: 100%;
    height: 170px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
}

.no-image {
    width: 100%;
    height: 170px;
    background: #e8f5e9;
    border-radius: 8px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #2e7d32;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

.crop-card h3 {
    color: #1b5e20;
    margin-top: 12px;
    margin-bottom: 8px;
    font-size: 19px;
}

.info {
    color: #666;
    margin: 5px 0;
    font-size: 13px;
}

.info strong {
    color: #333;
}

.delete-btn {
    width: 100%;
    margin-top: 12px;
    padding: 9px;

    background: #c62828;
    color: white;

    border: none;
    border-radius: 6px;

    cursor: pointer;
    font-size: 13px;
}

.delete-btn:hover {
    background: #b71c1c;
}

.badge {
    display: inline-block;

    padding: 4px 8px;
    margin-top: 5px;
    margin-right: 3px;

    background: #e8f5e9;
    color: #2e7d32;

    border-radius: 12px;

    font-size: 11px;
}

.missing-badge {
    background: #fff3cd;
    color: #856404;
}

.empty-box {
    grid-column: 1 / -1;
    text-align: center;
    padding: 45px 20px;

    background: white;
    border-radius: 12px;

    box-shadow: 0 4px 15px rgba(0,0,0,.08);
}

.empty-box h3 {
    color: #1b5e20;
}






.delete-modal {
    display: none;

    position: fixed;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    background: rgba(0, 0, 0, 0.5);

    align-items: center;
    justify-content: center;

    z-index: 9999;
}

.delete-modal-content {
    width: 90%;
    max-width: 400px;

    background: white;

    border-radius: 12px;

    padding: 25px;

    text-align: center;

    box-shadow: 0 8px 30px rgba(0,0,0,.25);

    animation: modalShow 0.2s ease;
}

.delete-icon {
    font-size: 42px;
    margin-bottom: 10px;
}

.delete-modal-content h2 {
    margin: 5px 0 10px;

    color: #333;

    font-size: 22px;
}

.delete-modal-content p {
    color: #666;

    font-size: 14px;

    margin-bottom: 22px;
}

.modal-buttons {
    display: flex;

    justify-content: center;

    gap: 10px;
}

.modal-delete {
    background: #c62828;

    color: white;

    border: none;

    padding: 10px 20px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 14px;
}

.modal-delete:hover {
    background: #b71c1c;
}

.modal-cancel {
    background: #777;

    color: white;

    border: none;

    padding: 10px 20px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 14px;
}

.modal-cancel:hover {
    background: #555;
}

@keyframes modalShow {

    from {
        transform: scale(0.9);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }

}






@media(max-width: 900px) {

    .container-box {
        width: 94%;
        margin-top: 8px;
    }

    .crop-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width: 600px) {

    .container-box {
        width: 94%;
        margin-top: 5px;
    }

    .heading h1 {
        font-size: 24px;
    }

    .crop-grid {
        grid-template-columns: 1fr;
    }

    .actions {
        gap: 7px;
    }

    .btn {
        padding: 9px 13px;
        font-size: 13px;
    }

    .delete-modal-content {
        width: 85%;
        padding: 20px;
    }

}

</style>


<div class="container-box" dir="<?php echo e(is_urdu() ? 'rtl' : 'ltr'); ?>">

    <div class="heading">

        <h1>
            🌱 <?php echo e(t('Manage Crops', 'فصلوں کا انتظام')); ?>

        </h1>

        <p>
            <?php echo e(t('Add and manage all crops in your website.', 'اپنی ویب سائٹ پر تمام فصلیں شامل کریں اور ان کا انتظام کریں۔')); ?>

        </p>

    </div>


    <?php if(session('success')): ?>

        <div class="success">

            <?php echo e(session('success')); ?>


        </div>

    <?php endif; ?>


    <div class="actions">

        <a
            href="<?php echo e(route('admin.crop.create')); ?>"
            class="btn add"
        >
            ➕ <?php echo e(t('Add Crop', 'فصل شامل کریں')); ?>

        </a>


        <?php if(!is_urdu()): ?>
        <a href="<?php echo e(route('admin.crop.data.create')); ?>" class="btn data">
            📚 <?php echo e(t('Add Crop Data', 'فصل کا ڈیٹا شامل کریں')); ?>

        </a>
        <?php else: ?>
        <a href="<?php echo e(route('admin.crop.urdu.data.create')); ?>" class="btn data">
            🇵🇰 <?php echo e(t('Add / Update Urdu Crop Data', 'اردو فصل کا ڈیٹا شامل یا اپ ڈیٹ کریں')); ?>

        </a>
        <?php endif; ?>

        <?php if(!is_urdu()): ?>
        <a href="<?php echo e(route('admin.pest.data.create')); ?>" class="btn pest">
            🐛 <?php echo e(t('Add Pest Data', 'کیڑوں کا ڈیٹا شامل کریں')); ?>

        </a>
        <?php else: ?>
        <a href="<?php echo e(route('admin.pest.urdu.data.create')); ?>" class="btn pest">
            🇵🇰 <?php echo e(t('Add / Update Urdu Pest Data', 'اردو کیڑوں کا ڈیٹا شامل یا اپ ڈیٹ کریں')); ?>

        </a>
        <?php endif; ?>

    </div>


    <div class="crop-grid">

        <?php $__empty_1 = true; $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="crop-card">

                <?php

                    $imageUrl = null;

                    if ($crop->image) {

                        $filename = basename($crop->image);

                        $path1 = public_path(
                            'images/crops/' . $filename
                        );

                        $path2 = public_path(
                            'images/' . $filename
                        );

                        $path3 = public_path(
                            'images/crop/' . $filename
                        );

                        if (file_exists($path1)) {

                            $imageUrl = asset(
                                'images/crops/' . $filename
                            );

                        } elseif (file_exists($path2)) {

                            $imageUrl = asset(
                                'images/' . $filename
                            );

                        } elseif (file_exists($path3)) {

                            $imageUrl = asset(
                                'images/crop/' . $filename
                            );

                        }

                    }

                ?>


                <?php if($imageUrl): ?>

                    <div class="crop-image-container">

                        <img
                            src="<?php echo e($imageUrl); ?>"
                            alt="<?php echo e(is_urdu() && $crop->name_ur ? $crop->name_ur : $crop->name); ?>"
                            loading="lazy"
                            onerror="
                                this.style.display='none';
                                this.nextElementSibling.style.display='flex';
                            "
                        >

                        <div
                            class="no-image"
                            style="display:none;"
                        >
                            🌱 <?php echo e(t('Image Not Found', 'تصویر دستیاب نہیں ہے')); ?>

                        </div>

                    </div>

                <?php else: ?>

                    <div class="no-image">

                        🌱 <?php echo e(t('Image Not Found', 'تصویر دستیاب نہیں ہے')); ?>


                    </div>

                <?php endif; ?>


                <h3>
                    <?php echo e(is_urdu() && $crop->name_ur ? $crop->name_ur : $crop->name); ?>

                </h3>


                <div class="info">

                    <strong>
                        <?php echo e(t('Category:', 'زمرہ:')); ?>

                    </strong>

                    <?php echo e(local_text($crop, 'category')); ?>


                </div>


                <div class="info">

                    <strong>
                        <?php echo e(t('Season:', 'موسم:')); ?>

                    </strong>

                    <?php echo e(local_text($crop, 'season')); ?>


                </div>


                <div class="info">

                    <strong>
                        <?php echo e(t('Type:', 'قسم:')); ?>

                    </strong>

                    <?php echo e($crop->type ? local_text($crop, 'type') : t('Not specified', 'درج نہیں کیا گیا')); ?>


                </div>


                <?php if($crop->cropDetail): ?>

                    <span class="badge">

                        ✓ <?php echo e(t('Crop Data Added', 'فصل کا ڈیٹا شامل ہے')); ?>


                    </span>

                <?php else: ?>

                    <span class="badge missing-badge">

                        <?php echo e(t('Crop Data Missing', 'فصل کا ڈیٹا موجود نہیں ہے')); ?>


                    </span>

                <?php endif; ?>


                <?php if($crop->urdu_completed): ?>
                    <span class="badge">✓ <?php echo e(t('Urdu Crop Complete', 'اردو فصل کا ڈیٹا مکمل ہے')); ?></span>
                <?php else: ?>
                    <a href="<?php echo e(route('admin.crop.urdu.data.create', ['crop_id' => $crop->id])); ?>" class="badge missing-badge" style="text-decoration:none;">🇵🇰 <?php echo e(t('Add Urdu Crop Data', 'اردو فصل کا ڈیٹا شامل کریں')); ?></a>
                <?php endif; ?>


                <?php if(
                    $crop->pestManagements &&
                    $crop->pestManagements->count() > 0
                ): ?>

                    <span class="badge">

                        ✓ <?php echo e(t('Pest Data Added', 'کیڑوں کا ڈیٹا شامل ہے')); ?>


                    </span>

                <?php else: ?>

                    <span class="badge missing-badge">

                        <?php echo e(t('No Pest Data', 'کیڑوں کا ڈیٹا موجود نہیں ہے')); ?>


                    </span>

                <?php endif; ?>


                <form
                    action="<?php echo e(route(
                        'admin.crop.delete',
                        $crop->id
                    )); ?>"
                    method="POST"
                    class="delete-form"
                >

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>


                    <button
                        type="button"
                        class="delete-btn"
                        onclick="openDeleteModal(this)"
                    >

                        🗑 <?php echo e(t('Delete Crop', 'فصل حذف کریں')); ?>


                    </button>

                </form>


            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="empty-box">

                <h3>
                    <?php echo e(t('No crops available.', 'اس وقت کوئی فصل موجود نہیں ہے۔')); ?>

                </h3>

                <p>
                    <?php echo e(t('Click "Add Crop" to create your first crop.', 'اپنی پہلی فصل شامل کرنے کے لیے "فصل شامل کریں" پر کلک کریں۔')); ?>

                </p>

            </div>

        <?php endif; ?>

    </div>

</div>




<div
    id="deleteModal"
    class="delete-modal"
>

    <div class="delete-modal-content">

        <div class="delete-icon">
            ⚠️
        </div>

        <h2>
            <?php echo e(t('Delete Crop?', 'فصل حذف کریں؟')); ?>

        </h2>

        <p>
            <?php echo e(t('Are you sure you want to delete this crop?', 'کیا آپ واقعی اس فصل کو حذف کرنا چاہتے ہیں؟')); ?>

            <?php echo e(t('This action cannot be undone.', 'یہ کارروائی واپس نہیں کی جا سکتی۔')); ?>

        </p>

        <div class="modal-buttons">

            <button
                type="button"
                class="modal-cancel"
                onclick="closeDeleteModal()"
            >
                <?php echo e(t('Cancel', 'منسوخ کریں')); ?>

            </button>

            <button
                type="button"
                class="modal-delete"
                onclick="confirmDelete()"
            >
                <?php echo e(t('Yes, Delete', 'جی ہاں، حذف کریں')); ?>

            </button>

        </div>

    </div>

</div>


<script>

let selectedDeleteForm = null;


function openDeleteModal(button)
{
    selectedDeleteForm =
        button.closest('.delete-form');

    document.getElementById('deleteModal').style.display =
        'flex';
}


function closeDeleteModal()
{
    document.getElementById('deleteModal').style.display =
        'none';

    selectedDeleteForm = null;
}


function confirmDelete()
{
    if (selectedDeleteForm) {

        selectedDeleteForm.submit();

    }
}




document.getElementById('deleteModal').addEventListener(
    'click',
    function(event) {

        if (event.target === this) {

            closeDeleteModal();

        }

    }
);




document.addEventListener(
    'keydown',
    function(event) {

        if (event.key === 'Escape') {

            closeDeleteModal();

        }

    }
);

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/crop_management.blade.php ENDPATH**/ ?>