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
<h1 class="bmi-titulo">Welcome, check your BMI here</h1>
<section id="calculadora-imc" >
		<div class="bmi-figure img-uno">
			<figure>
				<img src="img/bmi-men.jpg" alt="">
			</figure>
		</div>
		<div class="calculadora">	
			<h2>Check your BMI(Body Mass Index)</h2>
			<p>Remember: 1cm equals 0,328 ft and 1 kg equals 2.2046 lbs</p>
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
			    <input type="text" class="l" id="imc" placeholder="BMI" disabled>		     
			       <br>
			        	<label>Conclusión:</label>
			    <input type="email" name="leyenda" id="leyenda" size="42">		             
			</form>
		</div>  
		<div class="bmi-figure img-dos">
			<figure>
				<img src="img/bmi-women.jpg" alt="">
			</figure>
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
			<h1 class="overweight">Overweight?</h1>
		</figure>
		<figure class="peso-img peso-dos">
			<img src="img/resumen.jpg" alt="">
			<h4>39% of adults aged 18 years and over were overweight in 2014, and 13% were obese.</h4>
		</figure>
	</section>
<section id="procedimientos">
	<h1>Procedures that will benefit your life</h1>
	<hr>
	<!--  gastric bypass -->
	<section class="inicio-bypass">
		<div class="cont-img">
			<img src="img/bypass.jpg" alt="">
		</div>
		<div>
			<h2>Gastric Bypass</h2>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor pariatur, numquam harum inventore porro consectetur explicabo eius alias nam possimus, fuga quisquam, dolorum! Minima assumenda harum exercitationem nemo eius magni!</p>
			<br>
			<button>Lorem ipsum</button>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor pariatur, numquam harum inventore porro consectetur explicabo eius alias nam possimus, fuga quisquam, dolorum! Minima assumenda harum exercitationem nemo eius magni!</p>
			<br>
			<button>Lorem ipsum</button>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor pariatur, numquam harum inventore porro consectetur explicabo eius alias nam possimus, fuga quisquam, dolorum! Minima assumenda harum exercitationem nemo eius magni!</p>
			<br>
			<button>Lorem ipsum</button>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor pariatur, numquam harum inventore porro consectetur explicabo eius alias nam possimus, fuga quisquam, dolorum! Minima assumenda harum exercitationem nemo eius magni!</p>
			<br>
			<button>Lorem ipsum</button>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor pariatur, numquam harum inventore porro consectetur explicabo eius alias nam possimus, fuga quisquam, dolorum! Minima assumenda harum exercitationem nemo eius magni!</p>
			<br>
			<button>Lorem ipsum</button>
		</div>
		</section>
	</section>	
</section>	
</section>
@stop