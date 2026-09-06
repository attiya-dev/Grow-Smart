<?php $__env->startSection('content'); ?>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,Helvetica,sans-serif;
}

body{
    background:#eef5ee;
}

.container{

    width:90%;
    margin:auto;
    margin-top:40px;

}

.title{

    text-align:center;
    margin-bottom:40px;

}

.title h1{

    color:#1b5e20;
    font-size:38px;

}

.cards{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;

}

.card{

    background:white;
    border-radius:20px;
    padding:30px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,.15);
    transition:.3s;

}

.card:hover{

    transform:translateY(-8px);

}

.card h2{

    color:#2e7d32;
    margin-bottom:20px;

}

.count{

    font-size:50px;
    font-weight:bold;
    color:#ff9800;
    margin-bottom:20px;

}

.btn{

    display:inline-block;
    padding:12px 30px;
    background:#2e7d32;
    color:white;
    text-decoration:none;
    border-radius:30px;
    transition:.3s;

}

.btn:hover{

    background:#145a18;

}

.no-question{

    color:red;
    font-weight:bold;
    margin-bottom:20px;

}

</style>

<div class="container" data-no-translate="true">

<div class="title">

<h1><?php echo e(t('Pending Community Questions', 'کمیونٹی کے زیرِ التوا سوالات')); ?></h1>

<p><?php echo e(t('Select a category to review questions.', 'سوالات کا جائزہ لینے کے لیے ایک زمرہ منتخب کریں۔')); ?></p>

</div>

<div class="cards">



<div class="card">

<h2>🌾 <?php echo e(t('Crop Questions', 'فصلوں سے متعلق سوالات')); ?></h2>

<?php if($cropCount>0): ?>

<div class="count">

<?php echo e($cropCount); ?>


</div>

<?php else: ?>

<div class="no-question">

<?php echo e(t('No Questions Asked', 'ابھی تک کوئی سوال نہیں پوچھا گیا۔')); ?>


</div>

<?php endif; ?>

<a href="<?php echo e(route('admin.crop.questions')); ?>" class="btn">

<?php echo e(t('Open', 'کھولیں')); ?>


</a>

</div>



<div class="card">

<h2>🍎 <?php echo e(t('Fruit Questions', 'پھلوں سے متعلق سوالات')); ?></h2>

<?php if($fruitCount>0): ?>

<div class="count">

<?php echo e($fruitCount); ?>


</div>

<?php else: ?>

<div class="no-question">

<?php echo e(t('No Questions Asked', 'ابھی تک کوئی سوال نہیں پوچھا گیا۔')); ?>


</div>

<?php endif; ?>

<a href="<?php echo e(route('admin.fruit.questions')); ?>" class="btn">

<?php echo e(t('Open', 'کھولیں')); ?>


</a>

</div>



<div class="card">

<h2>🥕 <?php echo e(t('Vegetable Questions', 'سبزیوں سے متعلق سوالات')); ?></h2>

<?php if($vegetableCount>0): ?>

<div class="count">

<?php echo e($vegetableCount); ?>


</div>

<?php else: ?>

<div class="no-question">

<?php echo e(t('No Questions Asked', 'ابھی تک کوئی سوال نہیں پوچھا گیا۔')); ?>


</div>

<?php endif; ?>

<a href="<?php echo e(route('admin.vegetable.questions')); ?>" class="btn">

<?php echo e(t('Open', 'کھولیں')); ?>


</a>

</div>

</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mg\Downloads\GitHub Projects\Grow-Smart\community\resources\views/admin/question_categories.blade.php ENDPATH**/ ?>