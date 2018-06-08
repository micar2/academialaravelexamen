<table class="table table-responsive" id="comentaries-table">
    <thead>
        <th>Name</th>
        <th>Post Id</th>
        <th>Content</th>
        <th>Post Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $comentaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $comentary->name; ?></td>
            <td><?php echo $comentary->post_id; ?></td>
            <td><?php echo $comentary->content; ?></td>
            <td><?php echo $comentary->post_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['comentaries.destroy', $comentary->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('comentaries.show', [$comentary->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('comentaries.edit', [$comentary->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>