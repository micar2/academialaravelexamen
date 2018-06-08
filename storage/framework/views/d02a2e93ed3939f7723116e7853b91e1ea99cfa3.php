<?php $__env->startSection('content'); ?>


    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Cursos</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <h4><?php echo e($category->name); ?></h4>

                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($category->category == $subject->category): ?>
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($subject->name); ?></h5>
                            <a href="<?php echo e(route('detail.subject', $subject->id)); ?>">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                            <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>