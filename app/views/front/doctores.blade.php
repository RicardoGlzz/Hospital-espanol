@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="doctores">
		<h1 class="titulo-doctores">Allow professionals handle your health</h1>
		@foreach($doctores as $item)
		<div class="{{ $item->color }} doctor1">
			<figure>
				<img src="{{ $item->imagen }}" alt="img-doctor">
			</figure>
			<figure>
				<h2>{{ $item->nombre }}</h2>
				<h3>{{ $item->titulo }}</h3>
				<ul>
					<li>-{{ $item->campo_1 }}</li>
					<li>-{{ $item->campo_2 }}</li>
					<li>-{{ $item->campo_3 }}</li>
					<li>-{{ $item->campo_4 }}</li>
					<li>-{{ $item->campo_5 }}</li>
					<li>-{{ $item->campo_6 }}</li>
					<li>-{{ $item->campo_7 }}</li>
					<li>-{{ $item->campo_8 }}</li>
					<li>-{{ $item->campo_9 }}</li>
					<li>-{{ $item->campo_10 }}</li>
					<li>-{{ $item->campo_11 }}</li>
					<li>-{{ $item->campo_12 }}</li>
				</ul>
			</figure>
		</div>
		@endforeach
			

		<div class="confianza">
			<figure>
				<img src="img/confianza.jpg" alt="">
			</figure>
			<figure>
				<h2>You can trust us</h2>
				<p>If you have any questions, be sure to ask a proffesional by following the next link.</p>
				<a href="{{ URL::to('contact') }}"><button>Contact</button></a>
			</figure>
		</div>
		
	</section>
</section>

@stop