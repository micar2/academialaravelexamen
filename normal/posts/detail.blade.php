@extends('layouts.layout')
@section('content')
    <br>
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">{{ $post->title }}</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-12">
                <p class="lead">{{ $post->content }}</p>
            </div>

        </div>
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="{{ route('create.comentary', $post->id)  }}">
                <i class="fa fa-download mr-2"></i>
                Comentar
            </a>
        </div>
        <br>
        @foreach($comentaries as $comentary)
            <h5>{{ $comentary->name }}</h5>
            <div class="col-lg-4">
                <p class="small">{{ $comentary->content }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection