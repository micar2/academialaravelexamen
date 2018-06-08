<table class="table table-responsive" id="enrolments-table">
    <thead>
        <th>Student</th>
        <th>Subject</th>
        <th>Paid</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $enrolments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrolment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $enrolment->student; ?></td>
            <td><?php echo $enrolment->subject; ?></td>
            <td><?php echo $enrolment->paid; ?></td>
            <td>
                <?php echo Form::open(['route' => ['enrolments.destroy', $enrolment->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('enrolments.show', [$enrolment->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('enrolments.edit', [$enrolment->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>