@extends('front.layout')
@section('content')
<section id="calculadora-imc">
		<div>	
			<h2>Check your BMI(Body Mass Index)</h2>
			<p>Remember: 1cm equals 0,328 ft and 1 kg equals 2.2046 lbs</p>
			<form class="form-inline bg-info" role="form">
			    <label class="" for="calculodeIMC">Height: </label>
			    <input type="email" class="" id="altura" placeholder="Height in cms">
				<br>
			  <label class="">Weight: </label>
			      <input class="" id="peso" type="email" placeholder="Weight in kgs">  
			  	<br>
			     <input type="button" class="" id="boton-imc" value="Get BMI/IMC">
			     <br>	
			     <label for="">BMI:</label>
			    <input type="text" class="l" id="imc" placeholder="BMI/IMC" disabled>		     
			       <br>
			        	<label>Conclusión:</label>
			    <input type="email" name="leyenda" id="leyenda" size="42">		             
			</form>
		</div>  
		<div>
			<figure class="animated pulse">
				<h1><i class="fa fa-heartbeat"></i></h1>
			</figure>
		</div>    
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
		<div class="cont-img">
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
@stop