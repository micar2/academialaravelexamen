@extends('layouts.layout')
@section('content')
    <section>

        <div class="container">

            <section class="content-header">
                <h1>
                    Login
                </h1>
            </section>
            <div class="content">
                @include('adminlte-templates::common.errors')
                <div class="box box-primary">

                    <div class="box-body">
                        <div class="row">
                            {!! Form::open(['route' => 'student.intro', 'method' => 'POST']) !!}

                            @include('student.users.fieldsLogin')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>



@endsection