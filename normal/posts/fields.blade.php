

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', $categories, $category_id, ['class' => 'form-control']) !!}
    {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
</div>
{{--@auth--}}
    <!-- User_id Field -->
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    {{--@elseauth--}}
    {{--<!-- User_id Field -->--}}
    {{--{!! Form::hidden('user_id', 0) !!}--}}
    {{--@endauth--}}

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('view', 'Visivilidad:') !!}
    {!! Form::select('view', array('Private' => 'Privado', 'Public' => 'Publico'), 'Public', ['class' => 'form-control']) !!}
    {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>


