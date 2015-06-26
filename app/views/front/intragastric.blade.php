@extends('front.layout')
@section('content')
<section class="wrapper-section">
	<section class="balloon-section">
		<h1>- Intragastric Balloon -</h1>
		
		<section  class="proc-desc">
			<div class="proc-div">
				<div>
				<h3>What is intragastric balloon?</h3>
				<p>It is a balloon that is filled up with saline solution with a colorant. Its introduced to stomach by endoscopy and leave there for 6 months.</p>
				</div>

				<div>
				<h3>Method</h3>
				<p>Deep sedation the deflated balloon is introduced as stomach once instilled in 700 cc of saline solution marked with a dye such as methylene blue. Reversible 100%.</p>
				</div>

				<div>	
				<h3>How will I lose weight?</h3>
				<p>The balloon will make you eat less because of the mass effect. There will be a feeling of early satiety allowing eating small amounts of food.</p>
				</div>
			</div>
			
			<div class="proc-div">	
				<figure>
					<img src="img/balon.jpg" alt="">
				</figure>
			</div>		
		</section>
			<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECK <br>YOUR <br>BMI <br>HERE</span> </div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
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
			<br>	
			<!-- Precios -->
			<section id="precio-proc">
				<h2>Intragastric Balloon</h2>
				<div class="precio-carac">
					<span>Expected weight loss</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>65-55 pounds in six months</span>
				</div>
				<div class="precio-carac">
					<span>Surgical time</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>No surgery needed. It's done in 30 minutes</span>
				</div>
				<div class="precio-carac">
					<span>Hospital time</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>1 hour</span>
				</div>
				<div class="precio-carac">
					<span>Recovery time</span>
					<br>
					<i class="fa fa-street-view"></i>
					<br>
					<span>During the first week take a liquid diet. </span>
				</div>
				
				<div id="precio">
					<p>
						$25,000 MXN
					</p>
					
				</div>
				<div id="lugar-precio">
					<span>Mazatlán 
						&						
						Durango	
					</span>
				</div>
			</section>

		</section>
	</section>	


@stop