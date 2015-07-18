@extends('admin.layout')

@section('content')
	<h1>- Testigos -</h1>
	@foreach($testigos as $item)
		<div>
			<h2>{{ $item->nombre }}</h2>
			<iframe src="{{ $item->link }}" allowfullscreen=""></iframe>
		</div>
		{{ Form::open(array('url' => 'testigos/edit/'.$item->id)) }}
			<label>Nombre del Testigo</label>
			<input type="text" name="nombre" placeholder="Nombre del Testigo">
			<br>
			<label>Link del nuevo video</label>
			<input type="text" name="link" placeholder="Link del Video">
			<br>
			<button class="btn btn-primary" type="submit">Cambiar Video</button>
		{{ Form::close() }}
	@endforeach	
@stop