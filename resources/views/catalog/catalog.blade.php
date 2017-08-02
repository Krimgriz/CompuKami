@extends('index')
@section('content')
<div class="row">	
	@foreach( $arrayPeliculas as $key )
	<div class="col-xs-6 col-sm-4 col-md-3 text-center">
		<a href="{{ url('/catalog/show/' . $key->id ) }}">
			<img src="{{$key->poster}}" style="height:200px"/>
			<h4 style="min-height:45px;margin:5px 0 10px 0">
				{{$key->title}}
			</h4>
		</a>
	</div>
	@endforeach
</div>
@stop