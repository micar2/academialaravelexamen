@extends('layouts.layout')
@section('content')


    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Cursos</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach($categories as $category)
                    <div class="row">
                        <h4>{{ $category->name }}</h4>

                @foreach($subjects as $subject)
                    @if($category->category == $subject->category)
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subject->name }}</h5>
                            <a href="{{ route('detail.subject', $subject->id) }}">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                            @endif
                @endforeach
                    </div>
                    @endforeach
            </div>
        </div>
    </section>

    @endsection