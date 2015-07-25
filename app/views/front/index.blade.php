@extends('front.layout')
@section('content')
<section class="inicio-section wrapper-content">
<!-- Galeria -->
	<section class="wrapper">
		<div class="flexslider">
		  <ul class="slides">
		  	@foreach($galeria as $item)
		    <li  class="slide1">
		  		<img src="{{ $item->ruta }}" alt="Imagenes de Galeria">			
		    </li>
		    @endforeach
		  </ul>
		</div>	
<h1 class="bmi-titulo">- Bienvenido, checa tu IMC aquí -</h1>
<section id="calculadora-imc" >
		<div class="bmi-figure img-uno">
			<figure>
				<img src="img/bmi-men.jpg" alt="">
			</figure>
		</div>
	 
		<div class="bmi-figure img-dos">
			<figure>
				<img src="img/bmi-women.jpg" alt="">
			</figure>
		</div>  
			<div class="calculadora">	
				<h2>English System</h2>
			<h2>Check your BMI(Body Mass Index)</h2>
			<form  role="form">
			    <label class="" for="calculodeIMC">Height: </label>
			    <input type="email" class="" id="altura" placeholder="Height in inches">
				<br>
			  <label class="">Weight: </label>
			      <input class="" id="peso" type="email" placeholder="Weight in pounds">  
			  	<br>
			     <input type="button" class="" id="boton-imc" value="Get BMI">
			     <br>	
			     <label for="">BMI:</label>
			    <input type="text" class="l" id="bmi" placeholder="BMI" disabled>		     
			       <br>
			        	<label>Conclusión:</label>
			    <input name="leyenda" id="leyenda" size="42">		             
			</form>
		</div> 
			<div class="calculadora">	
				<h2>Sistema Metrico Internacional</h2>
			<h2>Checa tu IMC</h2>
			<form  role="form">
			    <label class="">Altura: </label>
			    <input  type="email" class="alt"  placeholder="Altura en centimetros">
				<br>
			  <label class="">Peso: </label>
			      <input type="email" class="pes" placeholder="Peso en kilogramos">  
			  	<br>
			     <input type="button" class="boton-imc"  value="Obtener IMC">
			     <br>	
			     <label for="">IMC:</label>
			    <input class="imc-val"  placeholder="IMC" disabled>		     
			       <br>
			        	<label>Conclusión:</label>
			    <input name="legend" id="legend" size="42">		             
			</form>
		</div>  
		<h3>El índice de masa corporal , o IMC , es una métrica utilizada para estimar la cantidad de grasa corporal tiene una persona.<br>
			Aunque el IMC no mide la grasa corporal directamente, se correlaciona con otras medidas directas de la grasa corporal, según los Centros para el Control y la Prevención de Enfermedades (CDC ).</h3> 
	</section>
	<section class="sobrepeso">
		<figure class="peso-img peso-uno">
			<img src="img/resumen-dos.jpg" alt="">
			<h4>La obesidad a nivel mundial se a duplicado desde 1980.</h4>
		</figure>
		<figure>
			<ul>
				<li>+Diabetes tipo II</li>
				<li class="overweight">+Hypertension arterial</li>
				<li>+Sobrepeso</li>
				<li>+Dolor articular</li>
				<li>+Colesterol</li>
				<li>+Trigliceridos</li>
			</ul>
		</figure>
		<figure class="peso-img peso-dos">
			<img src="img/resumen.jpg" alt="">
			<h4>39% de los adltos mayores a 18 años tienen sobrepeso, y 13% son obesos.</h4>
		</figure>
	</section>
<section id="procedimientos">
	<h1>- Procedimientos que benificiaran tu calidad de vida -</h1>
	<hr>
	<!--  gastric bypass -->
	<section class="inicio-bypass">
		<div class="cont-img">
			<img src="img/bypass.jpg" alt="">
		</div>
		<div>
			<h2> Bypass Gastrico</h2>
			<br>
			<p>También llamado bypass gástrico en "Y" de Roux , es la cirugía estándar de oro para la pérdida de peso que se produce en México y en todo el mundo ...</p>
			<br>
			<button><a href="{{ URL::to('bypass') }}">Ver más</a></button>
		</div>
	</section>
	<!-- Manga gastrica -->
	<section class="inicio-sleeve">
		<div class="cont-img sleeve">
			<img src="img/sleeve.jpg" alt="">
		</div>
		<div>
			<h2>Manga Gastrica</h2>
			<br>
			<p>En este procedimiento el 70 % del estómago se retira dejando un nuevo estómago como " manga " o " tubo gástrico " . Usted va a perder peso por dos mecanismos ...</p>
			<br>
			<button><a href="{{ URL::to('sleeve') }}">Ver más</a></button>
		</div>
		
	</section>
	<!-- Balon intragastrico -->
	<section class="inicio-balloon">
		<div class="cont-img">
			<img src="img/balon.jpg" alt="">
		</div>
		<div>
			<h2>Balón Intragastrico</h2>
			<br>
			<p>Es un globo que se llena con solución salina con un colorante. Su presentación a estómago mediante endoscopia y dejar allí durante 6 meses ...</p>
			<br>
			<button><a href="{{ URL::to('intragastric') }}">Ver más</a></button>
		</div>
	</section>
	<hr>

	<!-- Cirugia metabolica -->
	<section class="inicio-metabolica">
		<div class="cont-img">
			<img src="img/bypass.jpg" alt="">
		</div>
		<div>
			<h2>Cirugia Metabolica</h2>
			<br>
			<p>Es un bypass gástrico modificado que hará que la producción de una sustancia en el intestino delgado llamada incretina que estimula la producción de insulina ...</p>
			<br>
			<button><a href="{{ URL::to('metabolic') }}">Ver más</a></button>
		</div>
		</section>
	</section>	
	<section id="testimonios">
		<h1 class="bmi-titulo">- Testimonios -</h1>	
		@foreach($testigos as $item)
		<div>
			 <h2>{{ $item->nombre }}</h2>	
			 <iframe src="{{ $item->link }}" frameborder="0" allowfullscreen=""></iframe>
		</div>
		@endforeach
	</section>
	<section class="equipo-tec">
			<div>
				<h1>Contamos con el mejor equipo</h1>
				<p>Equipos de alta tecnología , para su propia seguridad y mejores resultados de la operación , su salud esta  en manos de profesionales .  </p>
			</div>
			<figure>
				<img src="img/operacion.jpg" alt="">
			</figure>
		</section>
		<section class="instalaciones">
			<div>
				<h1>Las mejores instalaciones</h1>
				<p>Nuestras modernas instalaciones offer's los mejores servicios para que , adicionalmente, que ofrecen toda la comodidad y seguridad de nuestra amplias habitaciones tipo suite.</p>
			</div>
			<figure>
				<img src="img/Sala_Espera.jpg" alt="">
			</figure>	
		</section>
		<section class="visita-mazatlan">
			<div>
				<h1>Visítanos en Mazatlan</h1>
				<p>Nuestras modernas instalaciones offer's los mejores servicios para que , adicionalmente, que ofrecen toda la comodidad y seguridad de nuestra amplias habitaciones tipo suite.</p>
			</div>
			<figure>
				<img src="img/Mazatlan.jpg" alt="" class="mazatlan">
			</figure>
			<figure>
				<img src="img/cemeq.jpg" alt="">
			</figure>
		</section>
</section>	
</section>
@stop