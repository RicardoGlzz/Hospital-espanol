@extends('admin.layout')

@section('content')
<div class=''>
	<table class="table table-hover">
		<tr>
		  <th></th>
		  <th>Nombre</th>
		  <th>Mensaje</th>
		  <th>Fecha</th>
		</tr>
	  	@foreach($mensajes as $item)
	  	<tr>
		  	<td>
		  		<a href=""><span  id="leido" class="glyphicon glyphicon-ok" data-toggle="tooltip"
		  		 data-placement="left" title="Marcar como leido"></a></span>
		  		<a href="{{ URL::to('mensajes/noLeido/'.$item->id) }}"><span id="no_leido" class="glyphicon glyphicon-remove" data-toggle="tooltip"
		  		 data-placement="left" title="Marcar como no leido"></a></span>
		  		<a href="{{ URL::to('mensajes/delete/'.$item->id) }}"><span id="eliminar" class="glyphicon glyphicon-trash" data-toggle="tooltip" 
		  			data-placement="left" title="Eliminar"></a></span>
		  	</td>
		  	<td><a href="{{ URL::to('mensajes/leer/'.$item->id) }}">{{ $item->nombre }}</a></td>
		  	<td>{{ Markdown::parse(Str::limit($item->mensaje,45)) }}</td>
		  	<td>{{ Carbon::parse($item->fecha)->toFormattedDateString(); }}</td>
	  	</tr>
	  @endforeach
	</table>
	<div>
	{{ $mensajes->links() }}
	</div>
</div>

@stop
