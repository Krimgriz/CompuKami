@extends('index')
@section('content')
	
	<div class="row">
		<div class="col-sm-4">
			<img src="{{ $arrayPeliculas[0]->poster }}" alt="" name="poster" width="100%">
		</div>
		<div class="col-sm-8">
			<h4>{{$arrayPeliculas[0]->title}}</h4>
			<h5><b>Año:</b> {{$arrayPeliculas[0]->year}}</h5>
			<h6><b>Director:</b> {{$arrayPeliculas[0]->director}}</h6>
			<p><b>Resumen:</b> {{$arrayPeliculas[0]->synopsis}}</p>
		</div>
		<div class="text-center">
			@if(Auth::check())
			<button type="button " class="btn btn-danger" >Devolver Pelicula</button>
			<a href="{{ url('/catalog/edit/'.$arrayPeliculas[0]->id ) }}">
				<button type="button" class="btn btn-warning">Editar Pelicula</button>
			</a>
			@endif
			<a href="{{url('/catalog')}}">
				<button type="button" class="btn btn-default">Volver a la Lista</button>
			</a>
		</div>
	</div>
@stop