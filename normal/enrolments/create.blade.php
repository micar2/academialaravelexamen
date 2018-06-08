@extends('layouts.layout')
@section('content')
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Matricula</h2>
            <hr class="star-dark mb-5">
            Si quieres realizar la matricua ingresa en 4587569854785412365 el dinero de la matricula y pon en el conceto el curso y tu nombre
            <div class="row">
                {!! Form::open(['route' => 'store.enrolment']) !!}

                @include('normal.enrolments.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </section>


@endsection