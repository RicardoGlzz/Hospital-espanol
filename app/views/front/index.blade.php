@extends('front.layout')
@section('content')
<section class="inicio-section">
<!-- Galeria -->
	<section class="wrapper">
		<div class="flexslider">
		  <ul class="slides">
		    <li  class="slide1">
		  		<img src="img/equipo.jpg" alt="">			
		    </li>
		    <li >
		  		<img src="img/operacion.jpg" alt="">
		    </li>
		 
		  </ul>
		</div>	
<h1>Welcome, first let's check your BMI</h1>
<section id="calculadora-imc">
		<div class="bmi-figure">
			<figure>
				<img src="img/bmi-men.jpg" alt="">
			</figure>
		</div>
		<div class="calculadora">	
			<h2>Check your BMI(Body Mass Index)</h2>
			<p>Remember: 1cm equals 0,328 ft and 1 kg equals 2.2046 lbs</p>
			<form class="form-inline bg-info" role="form">
			    <label class="" for="calculodeIMC">Height: </label>
			    <input type="email" class="" id="altura" placeholder="Height in cms">
				<br>
			  <label class="">Weight: </label>
			      <input class="" id="peso" type="email" placeholder="Weight in kgs">  
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
		<div class="bmi-figure">
			<figure>
				<img src="img/bmi-women.jpg" alt="">
			</figure>
		</div>   
		<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
			Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
	</section>
	<section class="sobrepeso">
		<figure>
			<img src="img/resumen-dos.jpg" alt="">
			<h4>Worldwide obesity has more than doubled since 1980.</h4>
		</figure>
		<figure>
			<h1>Got overweight?</h1>
		</figure>
		<figure>
			<img src="img/resumen.jpg" alt="">
			<h4>39% of adults aged 18 years and over were overweight in 2014, and 13% were obese.</h4>
		</figure>
	</section>
<section id="procedimientos">
	<h1>Procedures that will benefit your life</h1>
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
	<!-- Gastroaplication -->
	<section class="inicio-gastro">
		<div class="cont-img">
			<img src="img/gastro.png" alt="">
		</div>
		<div>
			<h2>Gastroplication</h2>
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
@stop