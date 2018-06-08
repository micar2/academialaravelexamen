<?php $__env->startSection('content'); ?>
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Categorias</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($option->name); ?></h5>
                            <a href="<?php echo e(route('blog.menu', $option->id)); ?>">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                
                    
                        
                            
                                
                                    
                                
                            
                            
                        
                    
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Posts</h2>
            <a href="<?php echo e(route('create.post', $option->category_id)); ?>"><h4>poner post</h4></a>
            <hr class="star-dark mb-5">
            <div class="row">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($post->title); ?></h5>
                            <a href="<?php echo e(route('post.detail', $post->id)); ?>">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                    
                        
                            
                                
                                    
                                        
                                    
                                
                                
                            
                        
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>