@extends('admin.layout')

@section('content')
	<h4>Precio Actual:</h4>
	<h4>${{ $precio->precio }} MXN</h4>
	{{ Form::open(array('url' => 'precios/edit/'.$precio->id,'class' => 'form-inline')) }}
		<div class="form-group">
			<label for="">Nuevo Precio:</label>
			$ <input type="text" name="precio" placeholder="precio" class="form-control" required> MXN
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	{{ Form::close() }}
@stop