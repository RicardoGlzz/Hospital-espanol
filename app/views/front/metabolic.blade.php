@extends('front.layout')
@section('content')
<section class="wrapper-section">
	<section class="metabolic-section">
		<h1>Metabolic Surgery</h1>
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
		<section id="calculadora-imc">
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
			<div class="bmi-figure img-dos">
				<figure>
					<img src="img/bmi-women.jpg" alt="">
				</figure>
			</div>   
			<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
				Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
			</section>
			<section>
				<h1>What is metabolic surgery?</h1>
				<p>BYPASS modified causing production of a substance in the small intestine called incretin that stimulates insulin production .</p>
				<figure>
					<img src="img/bypass.jpg" alt="">
				</figure>
				 
				<h3>Surgical time</h3>
				<p>2 to 3 hours</p>
				<h3>Hospital stay</h3>
				<p>1 hour</p>
				<h3>Recovery time</h3>
				<p>Discharge in 24-48 hrs
					Glycemic control without the use of insulin or oral hypoglycemic agents in 85 % of patients within a year . 60% would block them before 6 months.
					Patients should ideally have a BMI of 30 to 35. Although it can be performed on patients with a lower BMI .</p>
				<h1>Informacion de precios de este preocedimiento</h1>
			</section>
	</section>	
</section>

@stop