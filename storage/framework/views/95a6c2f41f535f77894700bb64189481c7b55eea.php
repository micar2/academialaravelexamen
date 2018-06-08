<table class="table table-responsive" id="categories-table">
    <thead>
        <th>Name</th>
        <th>Parent Category</th>
        <th>Route</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $categories1->name; ?></td>
            <?php if($categories1->category_id): ?>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                

                <?php if($categories1->category_id == $categories2->id): ?>
            <td><?php echo $name=$categories2->name; ?></td>
                <?php endif; ?>

                <?php if(empty($name)): ?>
                    <td></td>
                    <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>
                <td></td>
            <?php endif; ?>
            <td><?php echo $categories1->route; ?></td>

            <td>
                <?php echo Form::open(['route' => ['categories.destroy', $categories1->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('categories.show', [$categories1->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('categories.edit', [$categories1->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>