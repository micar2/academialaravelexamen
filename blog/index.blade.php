@extends('layouts.layout')
@section('content')
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Categorias</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach($menu as $option)
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $option->name }}</h5>
                            <a href="{{ route('blog.menu', $option->id) }}">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                {{--<div class="col-md-4 col-lg-3">--}}
                    {{--<a class="portfolio-item d-block mx-auto" href="">--}}
                        {{--<a href="{{ route('blog.menu', $option->id) }}">--}}
                            {{--<div class="portfolio-item-caption d-flex position-absolute h-100 w-100">--}}
                                {{--<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">--}}
                                    {{--<i class="fa fa-search-plus fa-3x">{{ $option->name }}</i>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<img class="img-fluid" src="img/portfolio/circus.png" alt="">--}}
                        {{--</a>--}}
                    {{--</a>--}}
                {{--</div>--}}
                @endforeach
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Posts</h2>
            <a href="{{ route('create.post', $option->category_id) }}"><h4>poner post</h4></a>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach($posts as $post)
                    <div class="card col-md-3 col-lg-2" style="width: 18rem;margin:6px;">
                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <a href="{{ route('post.detail', $post->id) }}">Seleccionar</a>
                        </div>
                        </a>
                    </div>
                    {{--<div class="col-md-4 col-lg-2">--}}
                        {{--<a class="portfolio-item d-block mx-auto" href="">--}}
                            {{--<a href="{{ route('post.detail', $post->id) }}">--}}
                                {{--<div class="portfolio-item-caption d-flex position-absolute h-100 w-100">--}}
                                    {{--<div class="portfolio-item-caption-content my-auto w-100 text-center text-white">--}}
                                        {{--<i class="fa fa-search-plus fa-3x">{{ $post->title }}</i>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<img class="img-fluid" src="img/portfolio/circus.png" alt="">--}}
                            {{--</a>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                @endforeach
            </div>
        </div>
    </section>

@endsection