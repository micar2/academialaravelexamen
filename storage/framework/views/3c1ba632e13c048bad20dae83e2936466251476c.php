<?php $__env->startSection('content'); ?>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Matricula</h2>
            <hr class="star-dark mb-5">
            Si quieres realizar la matricua ingresa en 4587569854785412365 el dinero de la matricula y pon en el conceto el curso y tu nombre
            <div class="row">
                <?php echo Form::open(['route' => 'store.enrolment']); ?>


                <?php echo $__env->make('normal.enrolments.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>