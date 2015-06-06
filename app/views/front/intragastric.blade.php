@extends('front.layout')
@section('content')
<section class="wrapper-section">
	<section class="balloon-section">
		<h1>Intragastric Balloon</h1>
		
		<section>
				<h1>What is sleeve intragastric balloon?</h1>
				<p>It is an endoscopic method that involves placing a balloon in the stomach with a hospital stay of one hour.</p>
				<figure>
					<img src="img/gastro.png" alt="">
				</figure>
				<h3>Method</h3>
				<p>Deep sedation the deflated balloon is introduced as stomach once instilled in 700 cc of saline solution marked with a dye such as methylene blue. Reversible 100%.</p>
				<h3>Method by which weight is lost</h3>
				<p>The ball is taken into the stomach for 6 months , there will be a feeling of early satiety allowing eating small amounts of food.</p>
				<h3>What is the expected weight loss ?</h3>
				<p>25-30kg in six months , is a method that depends largely on the patient.</p>
				<h3>Surgical time</h3>
				<p>No surgery needed. I'ts done in 30 minutes.</p>
				<h3>Hospital stay</h3>
				<p>1 hour</p>
				<h3>Recovery time</h3>
				<p>During the first week take a liquid diet. You may have mild abdominal pain and occasional vomiting. They prescribed medications in order to lessen the discomfort .</p>
				<h1>Informacion de precios de este preocedimiento</h1>
			</section>
			<!-- Boton de caluladora -->
		<div class="calc-boton">CHECK <br>YOUR <br>BMI <br>HERE</div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
			<div class="calculadora">	
				<h2>Check your BMI(Body Mass Index)</h2>
				<p>Remember: 1cm equals 0,328 ft and 1 kg equals 2.2046 lbs</p>
				<form  role="form">
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
			  
			<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
				Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
			</section>

			<section class="requisitos">
			<h2>Am I a candidate for this procedure?</h2>
			<br>
			<br>
			<label for="">Criteria:</label>
			<br>
			<br>
			<label for="">Age:</label>
				<ul>
					<li>15-65 years</li>
				</ul>
			<label for="">Weight:</label>
			<ul>
				<li>45 kgs more than ideal value.</li>
				<li>BMI value up to 30.</li>
				<li>Higher body mass index of 30 with a disease associated examples ( systemic hypertension , diabetes mellitus type II , osteorartosis , cholesterol , triglycerides, sleep apnea , depression , heart failure) .</li>
			</ul>
			<br>
			<br>
			<h2>You can use our BMI calculator in order to know your BMI value</h2>
		</section>
	</section>	
</section>

@stop