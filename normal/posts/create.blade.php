@extends('layouts.layout')
@section('content')
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Post</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                {!! Form::open(['route' => 'store.post']) !!}

                @include('normal.posts.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </section>


@endsection