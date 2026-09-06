<?php $__env->startSection('content'); ?>

<style>

body {
    background: #f4f8f4;
}

.form-container {
    width: 90%;
    max-width: 650px;
    margin: 5px auto 25px auto;
    background: white;
    padding: 20px 24px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,.08);
    box-sizing: border-box;
}

.form-container h1 {
    text-align: center;
    color: #1b5e20;
    margin: 0 0 16px 0;
    font-size: 24px;
}

.form-group {
    margin-bottom: 11px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
    background: white;
}

.form-group select {
    height: 38px;
}

.form-group textarea {
    height: 70px;
    min-height: 70px;
    resize: vertical;
    line-height: 1.4;
}

.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: #2e7d32;
    box-shadow: 0 0 4px rgba(46,125,50,.18);
}

.btn {
    padding: 9px 17px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.save {
    background: #2e7d32;
    color: white;
}

.save:hover {
    background: #1b5e20;
}

.back {
    background: #777;
    color: white;
    text-decoration: none;
    margin-left: 8px;
}

.back:hover {
    background: #555;
}

.error {
    background: #f8d7da;
    color: #721c24;
    padding: 9px 11px;
    border-radius: 6px;
    margin-bottom: 14px;
    font-size: 13px;
}

.error ul {
    margin: 0;
    padding-left: 20px;
}

@media (max-width: 700px) {

    .form-container {
        width: 94%;
        max-width: 650px;
        margin: 5px auto 20px auto;
        padding: 18px;
    }

    .form-container h1 {
        font-size: 22px;
        margin-bottom: 14px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-group textarea {
        height: 65px;
        min-height: 65px;
    }

    .btn {
        padding: 9px 15px;
    }
}

</style>


<div class="form-container" data-no-translate="true">

    <h1>
        <?php echo e(t('📚 Add Crop Data', '📚 فصل کی معلومات شامل کریں')); ?>

    </h1>


    <?php if($errors->any()): ?>

        <div class="error">

            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li>
                        <?php echo e($error); ?>

                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>


    <form
        action="<?php echo e(route('admin.crop.data.store')); ?>"
        method="POST"
    >

        <?php echo csrf_field(); ?>


        <div class="form-group">

            <label>
                <?php echo e(t('Select Crop', 'فصل منتخب کریں')); ?>

            </label>

            <select
                name="crop_id"
                required
            >

                <option value="">
                    <?php echo e(t('Select Crop', 'فصل منتخب کریں')); ?>

                </option>

                <?php $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option
                        value="<?php echo e($crop->id); ?>"
                        <?php echo e(old('crop_id') == $crop->id ? 'selected' : ''); ?>

                    >
                        <?php echo e($crop->name); ?> - <?php echo e(ucfirst($crop->category)); ?>

                    </option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Introduction', 'تعارف')); ?></label>

            <textarea
                name="introduction"
                required
            ><?php echo e(old('introduction')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Basic Information', 'بنیادی معلومات')); ?></label>

            <textarea
                name="basic_information"
                required
            ><?php echo e(old('basic_information')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Sowing Season', 'کاشت کا موسم')); ?></label>

            <textarea
                name="sowing_season"
                required
            ><?php echo e(old('sowing_season')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Harvesting Season', 'کٹائی کا موسم')); ?></label>

            <textarea
                name="harvesting_season"
                required
            ><?php echo e(old('harvesting_season')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Climate Requirements', 'موسمی ضروریات')); ?></label>

            <textarea
                name="climate_requirements"
                required
            ><?php echo e(old('climate_requirements')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Soil Requirements', 'مٹی کی ضروریات')); ?></label>

            <textarea
                name="soil_requirements"
                required
            ><?php echo e(old('soil_requirements')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Land Preparation', 'زمین کی تیاری')); ?></label>

            <textarea
                name="land_preparation"
                required
            ><?php echo e(old('land_preparation')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Seed Selection', 'بیج کا انتخاب')); ?></label>

            <textarea
                name="seed_selection"
                required
            ><?php echo e(old('seed_selection')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Seed Rate', 'بیج کی مقدار')); ?></label>

            <textarea
                name="seed_rate"
                required
            ><?php echo e(old('seed_rate')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Irrigation Requirements', 'آبپاشی کی ضروریات')); ?></label>

            <textarea
                name="irrigation_requirements"
                required
            ><?php echo e(old('irrigation_requirements')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Fertilizer Requirements', 'کھاد کی ضروریات')); ?></label>

            <textarea
                name="fertilizer_requirements"
                required
            ><?php echo e(old('fertilizer_requirements')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Growing Stages', 'نشوونما کے مراحل')); ?></label>

            <textarea
                name="growing_stages"
                required
            ><?php echo e(old('growing_stages')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Types of Crop', 'فصل کی اقسام')); ?></label>

            <textarea
                name="types_of_crop"
                required
            ><?php echo e(old('types_of_crop')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Crop Varieties', 'فصل کی اقسام')); ?></label>

            <textarea
                name="crop_varieties"
                required
            ><?php echo e(old('crop_varieties')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Nutritional Value', 'غذائی قدر')); ?></label>

            <textarea
                name="nutritional_value"
                required
            ><?php echo e(old('nutritional_value')); ?></textarea>

        </div>


        <div class="form-group">

            <label><?php echo e(t('Importance of Crop', 'فصل کی اہمیت')); ?></label>

            <textarea
                name="importance_of_crop"
                required
            ><?php echo e(old('importance_of_crop')); ?></textarea>

        </div>


        <div>

            <button
                type="submit"
                class="btn save"
            >
                <?php echo e(t('💾 Save Crop Data', '💾 فصل کی معلومات محفوظ کریں')); ?>

            </button>


            <a
                href="<?php echo e(route('admin.crops')); ?>"
                class="btn back"
            >
                <?php echo e(t('Back', 'واپس')); ?>

            </a>

        </div>

    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/add_crop_data.blade.php ENDPATH**/ ?>