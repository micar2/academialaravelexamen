<?php $__env->startSection('content'); ?>
    <br>
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white"><?php echo e($post->title); ?></h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-12">
                <p class="lead"><?php echo e($post->content); ?></p>
            </div>

        </div>
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="<?php echo e(route('create.comentary', $post->id)); ?>">
                <i class="fa fa-download mr-2"></i>
                Comentar
            </a>
        </div>
        <br>
        <?php $__currentLoopData = $comentaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h5><?php echo e($comentary->name); ?></h5>
            <div class="col-lg-4">
                <p class="small"><?php echo e($comentary->content); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>