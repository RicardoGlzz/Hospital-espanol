@extends('admin.layout')

@section('content')
	
	<h3>Nombre: {{ $mensaje->nombre }}</h3>
	<h4>Correo: {{ $mensaje->email }}</h4>
	<h4>Telefono: {{ $mensaje->telefono }}</h4>
	<h4>Mensaje:</h4>
	<p>{{ $mensaje->mensaje }}</p>
	<br>
	<hr>
	<a href="{{ URL::to('mensajes') }}"><button class="btn btn-primary">Regresar a Mensajes</button></a>
@stop