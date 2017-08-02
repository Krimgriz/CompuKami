@extends('index')
@section('content')
	
	<div class="row">
		<div class="col-sm-4">
			<img src="{{ $arrayPeliculas[0]->poster }}" alt="" name="poster" width="100%">
		</div>
		<div class="col-sm-8">
			<h4>{{$arrayPeliculas[0]->title}}</h4>
			<h5>{{$arrayPeliculas[0]->year}}</h5>
			<h6>{{$arrayPeliculas[0]->director}}</h6>
			<p>{{$arrayPeliculas[0]->synopsis}}</p>
		</div>
	</div>
@stop