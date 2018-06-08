<?php $__env->startSection('content'); ?>
    <br>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white"><?php echo e($subject->name); ?></h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-12">
                    <p class="lead">Categoria: <?php echo e($subject->nameC); ?></p>
                    <p class="lead">Profesor: <?php echo e($subject->nameU); ?></p>
                    <p class="lead">Precio: <?php echo e($subject->price); ?>€</p>
                    <p class="lead">Plazas libres: <?php echo e($usersEnrolled); ?></p>
                    <p class="lead">Comienzo: <?php echo e($subject->start); ?></p>
                    <p class="lead">Duración: <?php echo e($subject->duration); ?>h</p>
                </div>

            </div>
            <div class="text-center mt-4">

                <?php if(auth()->guard()->guest()): ?>
                    <a class="btn btn-xl btn-outline-light" href="<?php echo e(route('register')); ?>">
                        <i class="fa fa-download mr-2"></i>
                        Registrarse para matricularse
                    </a>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                        <?php if($check): ?>
                    <a class="btn btn-xl btn-outline-light" href="<?php echo e(route('create.enrolment', $subject->id)); ?>">
                        <i class="fa fa-download mr-2"></i>
                        Matricularse
                    </a>
                        <?php else: ?>
                            Estas mastriculado en este curso

                        <?php endif; ?>
               <?php endif; ?>

            </div>
            <br>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>