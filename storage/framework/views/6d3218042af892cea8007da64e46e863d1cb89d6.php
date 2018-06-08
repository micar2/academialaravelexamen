<table class="table table-responsive" id="posts-table">
    <thead>
        <th>Tittle</th>
        <th>Category</th>
        <th>Content</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php if($posts && $categories && isset($posts) && isset($categories)): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $posts->title; ?></td>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($posts->category == $category->id): ?>
            <td><?php echo $category->route; ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo $posts->content; ?></td>
            <td><?php echo $posts->user_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['posts.destroy', $posts->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('posts.show', [$posts->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('posts.edit', [$posts->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
    <tr>
        <td>no</td>
        <td>tienes</td>
        <td>ningun</td>
        <td>post</td>
        <td>escrito</td>
    </tr>
        <?php endif; ?>
    </tbody>
</table>