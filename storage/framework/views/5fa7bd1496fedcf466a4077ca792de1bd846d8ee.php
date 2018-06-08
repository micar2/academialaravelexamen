<table class="table table-responsive" id="documents-table">
    <thead>
        <th>Name</th>
        <th>Tipe</th>
        <th>Visibility</th>
        <th>Content</th>
        <th>Category</th>
        <th>User</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $document->name; ?></td>
            <td><?php echo $document->tipe; ?></td>
            <td><?php echo $document->visibility; ?></td>
            <td><?php echo $document->content; ?></td>
            <td><?php echo $document->category; ?></td>
            <td><?php echo $document->user; ?></td>
            <td>
                <?php echo Form::open(['route' => ['documents.destroy', $document->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('documents.show', [$document->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('documents.edit', [$document->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>