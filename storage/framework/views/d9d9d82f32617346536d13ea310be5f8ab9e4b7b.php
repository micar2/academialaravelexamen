<!-- Start Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('start', 'Start:'); ?>

    <?php echo Form::text('start', null, ['class' => 'form-control']); ?>

</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('duration', 'Duration:'); ?>

    <?php echo Form::text('duration', null, ['class' => 'form-control']); ?>

</div>

<!-- Students Max Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('students_max', 'Students Max:'); ?>

    <?php echo Form::text('students_max', null, ['class' => 'form-control']); ?>

</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <?php echo Form::text('price', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('subjects.index'); ?>" class="btn btn-default">Cancel</a>
</div>
