@extends('admin.layout')

@section('content')
	<h2>Gastric Bypass</h2>
	<h4>- ${{ $precios[0]->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/'.$precios[0]->id) }}"><button class="btn btn-primary">Editar Precio</button></a>

	<h2>Sleeve Gastrectomy</h2>
	<h4>- ${{ $precios[1]->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/'.$precios[1]->id) }}"><button class="btn btn-primary">Editar Precio</button></a>

	<h2>Intragastric Ballon</h2>
	<h4>- ${{ $precios[2]->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/'.$precios[2]->id) }}"><button class="btn btn-primary">Editar Precio</button></a>

	<h2>Gastroplicature</h2>
	<h4>- ${{ $precios[3]->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/'.$precios[3]->id) }}"><button class="btn btn-primary">Editar Precio</button></a>

	<h2>Metabolic Surgery</h2>
	<h4>- ${{ $precios[4]->precio }} MXN</h4>
	<a href="{{ URL::to('precios/edit/'.$precios[4]->id) }}"><button class="btn btn-primary">Editar Precio</button></a>
	
@stop