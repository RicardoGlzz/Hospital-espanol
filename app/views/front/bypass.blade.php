@extends('front.layout')
@section('content')
<section class="wrapper-section">

	<section class="bypass-section">
		<h1>Gastric Bypass</h1>
		
			<section class="bypass-desc">
				<h1>What is gastric bypass?</h1>
				<p>Also called gastric bypass "Y" de Roux, is the gold standard surgery for weight loss that takes place in Mexico and the world .
					A stomach of about 30 cc attached to the small intestine is created .</p>
				<figure>
					<img src="img/bypass.jpg" alt="">
				</figure>
				<h3>Method</h3>
				<p>Laparoscopic : In 98 % of patients the surgery is performed by laparoscopy.</p>
				<h3>Open Surgery</h3>
				<p>In 2% of patients such surgery was performed.</p>
				<h3>Method by which weight is lost</h3>
				<p>The amount of food you can eat is restricted. In addition to an intestinal malabsorption it is created.</p>
				<h3>What is the expected weight loss ?</h3>
				<p>A loss of 85% of excess body weight is expected . In 6-12 months . The first month will lose 15 to 20 kgs</p>
				<h3>Surgical time</h3>
				<p>3 hours</p>
				<h3>Hospital stay</h3>
				<p>24 to 48 hours</p>
				<h3>Recovery time</h3>
				<ul>
					<li>3rd to 5th day of desk work</li>
					<li>5th- 10th : Exercises such as walking</li>
					<li>10th to 20vo day : Aerobic exercise</li>
				</ul>
				
			</section>

		<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECK <br>YOUR <br>BMI <br>HERE</span></div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
			<div class="calculadora">	
				<h2>Check your BMI(Body Mass Index)</h2>
				
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
		<h1>Informacion de precios de este preocedimiento</h1>

	</section>	
</section>

@stop