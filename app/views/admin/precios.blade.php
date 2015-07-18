@extends('admin.layout')

@section('content')
<section>
	@foreach($precios as $item)
	<h2>{{ $item->seccion }}</h2>
	<h4>- ${{ $item->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/dgo/'.$item->id) }}"><button class="btn btn-primary">Editar Precio</button></a>
	<h4>- ${{ $item->precio_mzt }} MXN</h4>
	<a href="{{ URL::to('precios/edit/dls/'.$item->id) }}"><button class="btn btn-primary">Editar Precio</button></a>
	<h4>- ${{ $item->precio_dls }} DLS</h4>
	<a href="{{ URL::to('precios/edit/mtz/'.$item->id) }}"><button class="btn btn-primary">Editar Precio</button></a>
	<h4>- ${{ $item->precio_mzt_dls }} DLS</h4>
	<a href="{{ URL::to('precios/edit/mtz/dls/'.$item->id) }}"><button class="btn btn-primary">Editar Precio</button></a>
	@endforeach
</section>
@stop