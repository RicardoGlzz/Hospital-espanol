@extends('admin.layout')

@section('content')
	<h4>Precio Actual:</h4>
	<h4>${{ $precio->precio_mzt_dls }} DLS</h4>
	{{ Form::open(array('url' => 'precios/edit/mtz/dls/'.$precio->id,'class' => 'form-inline')) }}
		<div class="form-group">
			<label for="">Nuevo Precio:</label>
			$ <input type="text" name="precio" placeholder="precio" class="form-control" required> MXN
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	{{ Form::close() }}
@stop