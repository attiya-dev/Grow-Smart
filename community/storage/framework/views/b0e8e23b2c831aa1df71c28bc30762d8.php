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

.form-group input,
.form-group select {
    height: 38px;
}

.form-group textarea {
    height: 70px;
    min-height: 70px;
    resize: vertical;
    line-height: 1.4;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #ef6c00;
    box-shadow: 0 0 4px rgba(239,108,0,.18);
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
    background: #ef6c00;
    color: white;
}

.save:hover {
    background: #e65100;
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
        <?php echo e(t('🐛 Add Pest Management Data', '🐛 کیڑوں کے انتظام کی معلومات شامل کریں')); ?>

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
        action="<?php echo e(route('admin.pest.data.store')); ?>"
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

            <label>
                <?php echo e(t('Pest / Disease Name', 'کیڑے یا بیماری کا نام')); ?>

            </label>

            <input
                type="text"
                name="name"
                placeholder="<?php echo e(t('Example: Aphids', 'مثال: افڈز')); ?>"
                value="<?php echo e(old('name')); ?>"
                required
            >

        </div>


        <div class="form-group">

            <label>
                <?php echo e(t('Pest Type', 'کیڑے کی قسم')); ?>

            </label>

            <input
                type="text"
                name="type"
                placeholder="<?php echo e(t('Example: Insect Pest', 'مثال: حشری کیڑا')); ?>"
                value="<?php echo e(old('type')); ?>"
                required
            >

        </div>


        <div class="form-group">

            <label>
                How It Occurs
            </label>

            <textarea
                name="how_it_occurs"
                required
            ><?php echo e(old('how_it_occurs')); ?></textarea>

        </div>


        <div class="form-group">

            <label>
                <?php echo e(t('Symptoms', 'علامات')); ?>

            </label>

            <textarea
                name="symptoms"
                required
            ><?php echo e(old('symptoms')); ?></textarea>

        </div>


        <div class="form-group">

            <label>
                <?php echo e(t('Protection', 'بچاؤ')); ?>

            </label>

            <textarea
                name="protection"
                required
            ><?php echo e(old('protection')); ?></textarea>

        </div>


        <div class="form-group">

            <label>
                <?php echo e(t('Recommended Control', 'تجویز کردہ تدارک')); ?>

            </label>

            <textarea
                name="recommended_control"
                required
            ><?php echo e(old('recommended_control')); ?></textarea>

        </div>


        <div>

            <button
                type="submit"
                class="btn save"
            >
                <?php echo e(t('💾 Save Pest Data', '💾 کیڑوں کی معلومات محفوظ کریں')); ?>

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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/add_pest_data.blade.php ENDPATH**/ ?>