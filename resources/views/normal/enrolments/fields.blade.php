<!-- Student Field -->
    {!! Form::hidden('student', $user_id, ['class' => 'form-control']) !!}


<!-- Subject Field -->
    {!! Form::hidden('subject', $subject, ['class' => 'form-control']) !!}


<!-- Paid Field -->
    {!! Form::hidden('paid', 0, ['class' => 'form-control']) !!}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="" class="btn btn-default">Cancel</a>
</div>
