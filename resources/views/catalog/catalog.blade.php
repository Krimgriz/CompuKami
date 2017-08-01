@extends('index')
@section('content')
<div class="row">
	
	@php
			$arrayPeliculas= array(
			'title' => 'El padrino',
			'year' => '1972',
			'director' => 'Francis Ford Coppola',
			'poster' => 'https://estaticos.muyinteresante.es/uploads/images/article/58c7ce615cafe870917e529c/elpadrino_0.jpg',
			'rented' => false,
			'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
			);
			
	@endphp	
	
	
	
	@foreach( $arrayPeliculas as $key )
	<div class="col-xs-6 col-sm-4 col-md-3 text-center">
		<a href="{{ url('/catalog/show/' . $key ) }}">
			<img src='{{$arrayPeliculas["poster"]}}'' style="height:200px"/>
			<h4 style="min-height:45px;margin:5px 0 10px 0">
				{{$arrayPeliculas['title']}}
			</h4>
		</a>
	</div>
	@endforeach
</div>
@stop