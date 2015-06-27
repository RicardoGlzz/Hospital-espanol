@extends('admin.layout')

@section('content')
	
	@foreach($galeria as $item)
		<div class="pull-left col-md-4">
			<div>
				<img  class="img-thumbnail reponsive-img" src="{{ $item->ruta }}" width="300" heigh="500">
				<h4>{{ $item->nombre }}</h4>
				<h4>Orden en galeria: {{ $item->orden}}</h4>
			</div>
			<br>
			<br>
			<div class="pull-left table-responsive">
			<label>Cambiar Imagen</label>
			<form action="{{ url('galeria/upload/'.$item->id) }}" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<br>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
			<br>
			<br>
			</div>
		</div>
@endforeach
@stop