@extends('front.layout')
@section('content')
<section class="wrapper-section">
	<section class="sleeve-section">
		<h1>- Sleeve Gastrectomy -</h1>
		<section class="proc-desc">
			<div class="proc-div">	
				<div>
				<h3>What is sleeve gastrectomy?</h3>
				<p>In this procedure 70% of the stomach is removed leaving a new stomach as "sleeve " or "gastric tube". You will lose weight by two mechanisms. The first one, you won´t be able to eat the same amount of food you ate before. Second one, in the stomach portion that is removed there a hormone called “ghrelin” which relates to appetite and it won´t be produced in the same amount. </p>
				</div>

				<div>
				<h3>Method</h3>
				<p>In 98 % of patients the surgery is performed by laparoscopy.</p>
				</div>

				<div>
				<h3>How will I lose weight?</h3>
				<p>With the new size of your stomach, you won´t be able to eat the same amount of food you ate before. The appetite hormone won´t be produced in the same amount.</p>
				</div>

				

				
			</div>
			<div class="proc-div">
				<figure>
					<img src="img/sleeve.jpg" alt="">
				</figure>
			</div>	
		</section>
		
			<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECK<br>YOUR <br>BMI <br>HERE</span></div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide <span></span> <i class="fa fa-arrow-right"></i></span>
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
			</section>
			<br>
			<hr>
			<br>	

			<!-- Precios -->
			<section id="precio-proc">
				<h2>Sleeve Gastrectomy</h2>
				<div class="precio-carac">
					<span>Expected weight loss</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>70% to 80%</span>
				</div>
				<div class="precio-carac">
					<span>Surgical time</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>2 hours</span>
				</div>
				<div class="precio-carac">
					<span>Hospital time</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>24 to 48 hours</span>
				</div>
				<div class="precio-carac">
					<span>Recovery time</span>
					<br>
					<i class="fa fa-street-view"></i>
					<br>
					<span>3rd to 5th day of desk work</span>
				</div>
				
				<div id="precio">
					<p>
						$55,000 MXN
					</p>
					
				</div>
				<div id="lugar-precio">
					<span>Mazatlán 
						&						
						Durango	
					</span>
				</div>
			</section>

			<br>
			<br>
			<section class="requisitos">
			<h2>Am I a candidate for this procedure?</h2>
			<br>
			<br>
			<h2>Candidate for surgery Criteria: </h2>
			<br>
			<br>
			<div>
			<h2>Age:</h2>
				<ul>
					<li>15-65 years</li>
				</ul>
			</div>
			<div>	
			<h2>Weight:</h2>
			<ul>
			
				<li>BMI > 35 with any associated obesity disease (systemic hypertension, diabetes mellitus type II, dyslipidemia, Obstructive sleep apnea, cardiac disease)</li>
				<li>BMI > 40</li>
			</ul>
			</div>
			<br>
			<br>
			<h2>You can use our BMI calculator in order to know your BMI value</h2>
		</section>
		<h1>Informacion de precios de este preocedimiento</h1>
	</section>	
</section>

@stop