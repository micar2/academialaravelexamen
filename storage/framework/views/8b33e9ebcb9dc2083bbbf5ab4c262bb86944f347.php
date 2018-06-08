

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('category', 'Category:'); ?>

    <?php echo Form::select('category', $categories, null, ['class' => 'form-control']); ?>

    
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('content', 'Content:'); ?>

    <?php echo Form::textarea('content', null, ['class' => 'form-control']); ?>

</div>
<?php echo e(Form::hidden('user_id', auth()->id())); ?>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('posts.index'); ?>" class="btn btn-default">Cancel</a>
</div>


