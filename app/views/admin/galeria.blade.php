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
			<div class="pull-left">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  				Cambiar Imagen
			</button>
				<br>
				<br>
				<label>Cambiar Orden:</label>
				{{ Form::open() }}
				<select name="orden" class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				<br>
				<button type="submit" class="btn btn-success btn-sm">Guardar orden</button>
				{{ Form::close() }}
				<br>
			</div>
		</div>
	@endforeach


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir Imagen</h4>
      </div>
      <div class="modal-body">
        <form action="/upload/
      class="dropzone"
      id="my-awesome-dropzone"></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@stop