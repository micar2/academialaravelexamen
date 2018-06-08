<table class="table table-responsive" id="subjects-table">
    <thead>
        <th>Teacher</th>
        <th>Start</th>
        <th>Duration</th>
        <th>Students Max</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $subject->teacher; ?></td>
            <td><?php echo $subject->start; ?></td>
            <td><?php echo $subject->duration; ?></td>
            <td><?php echo $subject->students_max; ?></td>
            <td><?php echo $subject->price; ?></td>
            <td>
                <?php echo Form::open(['route' => ['subjects.destroy', $subject->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('subjects.show', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('subjects.edit', [$subject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>