

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('category', 'Category:'); ?>

    <?php echo Form::select('category', $categories, $category_id, ['class' => 'form-control']); ?>

    
</div>

    <!-- User_id Field -->
    <?php echo Form::hidden('user_id', auth()->user()->id); ?>

    
    
    
    

<!-- Content Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('content', 'Content:'); ?>

    <?php echo Form::textarea('content', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('view', 'Visivilidad:'); ?>

    <?php echo Form::select('view', array('Private' => 'Privado', 'Public' => 'Publico'), 'Public', ['class' => 'form-control']); ?>

    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('posts.index'); ?>" class="btn btn-default">Cancel</a>
</div>


