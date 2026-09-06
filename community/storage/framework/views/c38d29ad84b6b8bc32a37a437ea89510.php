<?php $__env->startSection('content'); ?>

<style>

body {
    background: #eef5ee;
    font-family: Arial, sans-serif;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: 10px auto 40px;
}

.heading {
    text-align: center;
    margin-bottom: 20px;
}

.heading h1 {
    color: #1b5e20;
    font-size: 36px;
    margin: 0;
}

.question-card {
    background: white;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

.user {
    color: #2e7d32;
    font-weight: bold;
    margin-bottom: 15px;
}

.question-text {
    color: #333;
    margin-bottom: 15px;
    line-height: 1.6;
}

.question-image {
    width: 250px;
    max-width: 100%;
    margin-top: 10px;
    border-radius: 10px;
}

.voice {
    margin-top: 15px;
}

.voice-title {
    color: #2e7d32;
    font-weight: bold;
    margin-bottom: 10px;
}

.voice-item {
    margin-bottom: 10px;
}

audio {
    width: 100%;
}

.btn {
    border: none;
    padding: 12px 25px;
    border-radius: 30px;
    cursor: pointer;
    color: white;
    margin-top: 20px;
    margin-right: 10px;
    font-size: 15px;
}

.approve {
    background: #2e7d32;
}

.approve:hover {
    background: #1b5e20;
}

.reject {
    background: #d32f2f;
}

.reject:hover {
    background: #b71c1c;
}

.empty {
    text-align: center;
    color: #d32f2f;
    font-size: 22px;
    margin-top: 50px;
}

</style>

<div class="container">

    <div class="heading">
        <h1><?php echo e(t('🍎 Fruit Questions', '🍎 پھلوں سے متعلق سوالات')); ?></h1>
    </div>

    <?php if($questions->count() == 0): ?>

        <div class="empty">
            <?php echo e(t('No Pending Fruit Questions', 'پھلوں سے متعلق کوئی زیرِ التوا سوال نہیں ہے۔')); ?>

        </div>

    <?php else: ?>

        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="question-card">

                <div class="user">
                    Asked By: <?php echo e($question->user->name); ?>

                </div>

                <?php if($question->question_text): ?>

                    <div class="question-text">
                        <?php echo e($question->question_text); ?>

                    </div>

                <?php endif; ?>

                <?php if($question->question_image): ?>

                    <img
                        src="<?php echo e(asset('storage/' . $question->question_image)); ?>"
                        class="question-image"
                    >

                <?php endif; ?>

                <?php if($question->question_voice): ?>

                    <div class="voice">

                        <div class="voice-title">
                            <?php echo e(t('🎤 Voice Question', '🎤 آواز میں سوال')); ?>

                        </div>

                        <?php $__currentLoopData = $question->question_voice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="voice-item">

                                <audio controls>
                                    <source src="<?php echo e(asset('storage/' . $voice)); ?>">
                                </audio>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                <?php endif; ?>

                <form
                    action="<?php echo e(route('admin.question.approve')); ?>"
                    method="POST"
                    style="display:inline;"
                >

                    <?php echo csrf_field(); ?>

                    <input
                        type="hidden"
                        name="question_id"
                        value="<?php echo e($question->id); ?>"
                    >

                    <button type="submit" class="btn approve">
                        <?php echo e(t('Approve', 'منظور کریں')); ?>

                    </button>

                </form>

                <form
                    action="<?php echo e(route('admin.question.reject')); ?>"
                    method="POST"
                    style="display:inline;"
                >

                    <?php echo csrf_field(); ?>

                    <input
                        type="hidden"
                        name="question_id"
                        value="<?php echo e($question->id); ?>"
                    >

                    <button type="submit" class="btn reject">
                        <?php echo e(t('Reject', 'مسترد کریں')); ?>

                    </button>

                </form>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/fruit_questions.blade.php ENDPATH**/ ?>