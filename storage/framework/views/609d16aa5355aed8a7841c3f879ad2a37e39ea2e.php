<table class="table table-responsive" id="lessons-table">
    <thead>
        <th>Classroom</th>
        <th>Hour</th>
        <th>Subject</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lessons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $lessons->classroom; ?></td>
            <td><?php echo $lessons->hour; ?></td>
            <td><?php echo $lessons->subject; ?></td>
            <td>
                <?php echo Form::open(['route' => ['lessons.destroy', $lessons->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('lessons.show', [$lessons->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('lessons.edit', [$lessons->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>