@extends('front.layout')
@section('content')
<section class="inicio-section">
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
<h1 class="bmi-titulo">- Welcome, check your BMI here -</h1>
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
			    <label class="" for="calculodeIMC">Altura: </label>
			    <input  class="altura"  placeholder="Altura en centimetros">
				<br>
			  <label class="">Peso: </label>
			      <input class="peso" placeholder="Peso en kilogramos">  
			  	<br>
			     <input type="button" class="boton-imc"  value="Obtener IMC">
			     <br>	
			     <label for="">IMC:</label>
			    <input type="text" class="imc"  placeholder="IMC" disabled>		     
			       <br>
			        	<label>Conclusión:</label>
			    <input name="legend" id="legend" size="42">		             
			</form>
		</div>  
		<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
			Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
	</section>
	<section class="sobrepeso">
		<figure class="peso-img peso-uno">
			<img src="img/resumen-dos.jpg" alt="">
			<h4>Worldwide obesity has doubled since 1980.</h4>
		</figure>
		<figure>
			<ul>
				<li>+Diabetes type II</li>
				<li class="overweight">+High blood pressure</li>
				<li>+Overweight</li>
				<li>+Joint pain</li>
				<li>+Cholesterol</li>
				<li>+Triglycerides</li>
			</ul>
		</figure>
		<figure class="peso-img peso-dos">
			<img src="img/resumen.jpg" alt="">
			<h4>39% of adults aged 18 years and over were overweight in 2014, and 13% were obese.</h4>
		</figure>
	</section>
<section id="procedimientos">
	<h1>- Procedures that will benefit your life -</h1>
	<hr>
	<!--  gastric bypass -->
	<section class="inicio-bypass">
		<div class="cont-img">
			<img src="img/bypass.jpg" alt="">
		</div>
		<div>
			<h2>Gastric Bypass</h2>
			<br>
			<p>Also called gastric bypass "Y" of Roux, is the gold standard surgery for weight loss that takes place in Mexico and around the world...</p>
			<br>
			<button><a href="{{ URL::to('bypass') }}">See more</a></button>
		</div>
	</section>
	<!-- Manga gastrica -->
	<section class="inicio-sleeve">
		<div class="cont-img sleeve">
			<img src="img/sleeve.jpg" alt="">
		</div>
		<div>
			<h2>Sleeve Gastrectomy</h2>
			<br>
			<p>In this procedure 70% of the stomach is removed leaving a new stomach as "sleeve " or "gastric tube". You will lose weight by two mechanisms...</p>
			<br>
			<button><a href="{{ URL::to('sleeve') }}">See more</a></button>
		</div>
		
	</section>
	<!-- Balon intragastrico -->
	<section class="inicio-balloon">
		<div class="cont-img">
			<img src="img/balon.jpg" alt="">
		</div>
		<div>
			<h2>Intragastric Balloon</h2>
			<br>
			<p>It is a balloon that is filled up with saline solution with a colorant. Its introduced to stomach by endoscopy and leave there for 6 months...</p>
			<br>
			<button><a href="{{ URL::to('intragastric') }}">See more</a></button>
		</div>
	</section>
	<hr>
	<!-- Gastroaplication -->
	<section class="inicio-gastro">
		<div class="cont-img">
			<img src="img/gastro.png" alt="">
		</div>
		<div>
			<h2>Gastroplicature</h2>
			<br>
			<p>An invagination of the stomach is performed surgically which will make an stomach similar to a sleeve gastrectomy without the need of stapling devices...</p>
			<br>
			<button><a href="{{ URL::to('gastroplicature') }}">See more</a></button>
		</div>
		
	</section>
	<!-- Cirugia metabolica -->
	<section class="inicio-metabolica">
		<div class="cont-img">
			<img src="img/bypass.jpg" alt="">
		</div>
		<div>
			<h2>Metabolic Surgery</h2>
			<br>
			<p>It´s a modified gastric bypass that will cause the production of a substance in the small intestine called incretin that stimulates insulin production...</p>
			<br>
			<button><a href="{{ URL::to('metabolic') }}">See more</a></button>
		</div>
		</section>
	</section>	
</section>	
</section>
@stop