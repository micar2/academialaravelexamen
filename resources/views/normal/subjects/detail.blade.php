@extends('layouts.layout')
@section('content')
    <br>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">{{ $subject->name }}</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-12">
                    <p class="lead">Categoria: {{ $subject->nameC }}</p>
                    <p class="lead">Profesor: {{ $subject->nameU }}</p>
                    <p class="lead">Precio: {{ $subject->price }}€</p>
                    <p class="lead">Plazas libres: {{ $usersEnrolled }}</p>
                    <p class="lead">Comienzo: {{ $subject->start }}</p>
                    <p class="lead">Duración: {{ $subject->duration }}h</p>
                </div>

            </div>
            <div class="text-center mt-4">

                @guest
                    <a class="btn btn-xl btn-outline-light" href="{{ route('register') }}">
                        <i class="fa fa-download mr-2"></i>
                        Registrarse para matricularse
                    </a>
                @endguest
                @auth
                        @if($check)
                    <a class="btn btn-xl btn-outline-light" href="{{ route('create.enrolment', $subject->id) }}">
                        <i class="fa fa-download mr-2"></i>
                        Matricularse
                    </a>
                        @else
                            Estas mastriculado en este curso

                        @endif
               @endauth

            </div>
            <br>
        </div>
    </section>
@endsection