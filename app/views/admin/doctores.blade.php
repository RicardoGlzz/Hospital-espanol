@extends('admin.layout')

@section('content')
<a href=""><button class="btn btn-warning">Agregar Nuevo</button></a>
	@foreach($doctores as $item)
	<h2>{{ $item->nombre }}</h2>
	<img src="{{ $item->imagen }}" alt="" width="200">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $item->id }}">Cambiar Imagen</button>
	<!-- Small modal -->
	<div id="modal{{ $item->id }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <h3>Selecciona una Imagen</h3>
	      <hr>
	      <form action="">
	      	<input type="file">
	      	<hr>
	      	<button class="btn btn-primary btn-block" type="submit">Guardar</button>
	      	<br>
	      	<br>
	      </form>
	    </div>
	  </div>
	</div>
	<a href="{{ URL::to('doctors&cols/edit/'.$item->id) }}"><button class="btn btn-success">Editar Informacion</button></a>
	<br>
	<br>
	<a href=""><button class="btn btn-danger">Eliminar</button></a>
	@endforeach
@stop