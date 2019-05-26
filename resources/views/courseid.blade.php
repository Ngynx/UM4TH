@extends('Layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1>{{ $course->name }}</h1>
				<img src="{{ asset('images/' .  $course->img) }}" width="100%" alt="Aqui ira la img">
				<p>Creado el: {{$course->created_at}}</p>
				<br>
				<p class="bg-light">Las matemáticas o la matemática2 (del latín mathematĭca, y este del griego μαθηματικά, derivado de μάθημα, ‘conocimiento’) es una ciencia formal que, partiendo de axiomas y siguiendo el razonamiento lógico, estudia las propiedades y relaciones entre entidades abstractas como números, figuras geométricas o símbolos matemáticos.</p>
				<p class="text-right">User1</p>
				<p class="bg-light">Este es un comentario que psaba po aquí, no se que más decir, pero aun recuerdo 
				aquello viejos tiempos en donde los Pilcos hiban a realizar su spilcadas...</p>
				<p class="text-right">User2</p>
				<div class="row justify-content-end">
					<a class="btn btn-primary btn-lg" href="{{ action('CursoController@index') }}" class="img-Fluid">{{ __('Back') }}</a>
				</div>
			</div>
		</div>
	</div>
@endsection
