<?php $__env->startSection('content'); ?>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Post</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <?php echo Form::open(['route' => 'store.post']); ?>


                <?php echo $__env->make('normal.posts.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>