@extends('index')
@section('content')
	<div class="row">
		<div class="col-sm-4">
			<img src="{{ $peliculas->poster }}" alt="" name="poster" width="100%">
		</div>
		<div class="col-sm-8">
			<h4>{{$peliculas->title}}</h4>
			<h5><b>Año:</b> {{$peliculas->year}}</h5>
			<h6><b>Director:</b> {{$peliculas->director}}</h6>
			<p><b>Resumen:</b> {{$peliculas->synopsis}}</p>
		</div>
		<div class="text-center">
			
			@if(Auth::check())
			
				<form action="{{action('CatalogController@deleteMovie', $peliculas->id)}}" method="POST" style="display:inline">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					<button type="button " class="btn btn-danger" >Eliminar Pelicula</button>
				</form>
				
				
					@if($peliculas->rented==true)
						<form action="{{action('CatalogController@putReturn', $peliculas->id)}}" method="POST" style="display:inline">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-warning" style="display:inline">
								Devolver película
							</button>
						</form>
					@else
						<form action="{{action('CatalogController@putRent', $peliculas->id)}}" method="POST" style="display:inline">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-success" style="display:inline">
								Rentar película
							</button>
						</form>
					@endif

				<a href="{{ url('/catalog/edit/'.$peliculas->id ) }}">
					<button type="button" class="btn btn-info">Editar Pelicula</button>
				</a>
			@endif
			<a href="{{url('/catalog')}}">
				<button type="button" class="btn btn-default">Volver a la Lista</button>
			</a>
		</div>
	</div>
@stop