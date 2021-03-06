<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Post_id Field -->
    <?php echo Form::hidden('post_id', $id); ?>


<!-- User_id Field -->
    <?php echo Form::hidden('user_id', auth()->user()->id); ?>


<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('content', 'Content:'); ?>

    <?php echo Form::textarea('content', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('comentaries.index'); ?>" class="btn btn-default">Cancel</a>
</div>
