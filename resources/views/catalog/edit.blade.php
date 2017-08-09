@extends('index')
@section('content')

<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Modificar película
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">

				<form action="{{action('CatalogController@putEdit', $Pelicula->id)}}" method="post">
					
					{{ method_field('PUT') }}

					{{ csrf_field() }}
					
					<input type="hidden" name="id" id="id" value="{{ $Pelicula->id }}">

					<div class="form-group">
						<label for="title">Título</label>
						<input type="text" name="title" id="title" class="form-control" value="{{ $Pelicula->title }}">
					</div>

					<div class="form-group">
						<label for="year">Año</label>
						<input type="text" name="year" id="year" class="form-control" value="{{ $Pelicula->year }}"> 
					</div>

					<div class="form-group">
						<label for="director">Director</label>
						<input type="text" name="director" id="director" class="form-control" value="{{ $Pelicula->director }}"> 
					</div>

					<div class="form-group">
						<label for="poster">Poster</label>
						<input type="text" name="poster" id="poster" class="form-control" value="{{ $Pelicula->poster }}">
					</div>

					<div class="form-group">
						<label for="synopsis">Resumen</label>
						<textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{ $Pelicula->synopsis }}</textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Modificar película
						</button>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
</div>


@stop