@extends('Layouts.app')

@section('content')
        <section class="jumbotron text-center">
            <div class="container">
              <h1 class="jumbotron-heading">Lista de los temas que aprenderás</h1>
              <p class="lead text-muted">Escoge el tema que desees prácticar, recuerda estar logeado para para poder disfrutar al maximo todo lo que esta aplicación pueda ofrecerte.</p>
              <p>
                <a href="#" class="btn btn-primary my-2">{{ __('Register')}}</a>
                <a href="#" class="btn btn-secondary my-2">{{ __('Login')}}</a>
              </p>
            </div>
        </section>
    <div class="album py-5">
        <div class="container">
            <div class="row">
            @foreach ($courses as $course)
                <div id="{{ $course->id }}" class="col-md-4">
                    <header>
                        <a href="{{ action('CursoController@show', $course->id) }}">
                            <h3 class="text-dark">{{ $course->name }}</h3>
                        </a>
                    </header>
                    <div class="card mb-4 box-shadow">
                        <div class="course-content">
                            <a href="{{ action('CursoController@show', $course->id) }}">
                                <img class="card-img-top" src="{{ asset('images/' .  $course->img) }}" alt="Aqui va una imagen">
                            </a>
                        </div>
                        <div class="card-body">
                          <p class="card-text">{{ $course->description}}</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">{{ __('View')}}</button>
                            </div>
                            <small class="text-muted">{{ $course->attendant}}</small>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
