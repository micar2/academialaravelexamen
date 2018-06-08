<?php $__currentLoopData = (array) session('flash_notification'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($message['overlay'])?$message['overlay'] : ''): ?>
        <?php echo $__env->make('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <div class="alert
                    alert-<?php echo e(isset($message['level'])?$message['level']:''); ?>

                    <?php echo e(isset($message['important']) ? 'alert-important' : ''); ?>"
        >
            <?php if(isset($message['important'])?$message['important']:''): ?>
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            <?php endif; ?>

            <?php echo isset($message['message'])?$message['$message']:''; ?>

        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo e(session()->forget('flash_notification')); ?>

