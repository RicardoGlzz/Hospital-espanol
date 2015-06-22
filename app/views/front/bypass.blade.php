@extends('front.layout')
@section('content')
<section class="wrapper-section">

	<section class="bypass-section">
		<h1>- Gastric Bypass -</h1>
			
			<section class="proc-desc">
				<div class="proc-div">
					<div>
						<h3>What is gastric bypass? </h3>
						<p>Also called gastric bypass "Y" of Roux, is the gold standard surgery for weight loss that takes place in Mexico and around theworld. A stomach pouch of about 30 cc is formed. Subsequently the smaller intestine is attached to new stomach pouch. You will lose weight by two mechanisms. First one, you will not be able to eat the same amount of that you ate before. Second one, a malabsorptive mechanism will be created.</p>
					</div>	
					<div>		
						<h3>Method</h3>
						<p>In 98 % of patients the surgery is performed by laparoscopic surgery.</p>
					</div>	
					<div>	
						<h3>How will I lose weight?</h3>
						<p>You won’t be able to eat the same amount of food that you ate before. A malabsorptive mechanism of nutrients will be perform.</p>
					</div>
					

				</div>
				<div class="proc-div">
					<figure>
						<img src="img/bypass.jpg" alt="">
					</figure>
				</div>
			</section>

		<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECK <br>YOUR <br>BMI <br>HERE</span></div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
			<div class="calculadora">	
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
				    <input type="text" class="l" id="imc" placeholder="BMI" disabled>		     
				       <br>
				        	<label>Conclusión:</label>
				    <input type="email" name="leyenda" id="leyenda" size="42">		             
				</form>
			</div>  
			  
			<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
				Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
			</section>
			<br>
			<hr>
			<br>	
			<!-- Precios -->
			<section id="precio-bypass">
				<h2>Gastric Bypass</h2>
				<div class="precio-carac">
					<span>Expected weight loss</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>85%</span>
				</div>
				<div class="precio-carac">
					<span>Surgical time</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>3 hours</span>
				</div>
				<div class="precio-carac">
					<span>Hospital time</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>3 hours</span>
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
						$95,000 MXN
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
			<hr>
			<br>	
			<section class="requisitos">
			<h2>Am I a candidate for this procedure?</h2>
			<br>
			<h2>Candidate for surgery Criteria: </h2>
			
			<div>
			<h2>Age:</h2>
				<ul>
					<li>15-65 years</li>
				</ul>
			</div>
			<div>	
			<h2>Weight:</h2>
			<ul>
				<li>BMI > 35 with any associated obesity disease (systemic hypertension, diabetes mellitus type II, dyslipidemia, Obstructive sleep apnea, cardiac disease).</li>
				<li>BMI >40.</li>
			</ul>
			</div>
			<br>
			<br>
			<h2>You can use our BMI calculator in order to know your BMI value</h2>
		</section>
		

	</section>	
</section>

@stop