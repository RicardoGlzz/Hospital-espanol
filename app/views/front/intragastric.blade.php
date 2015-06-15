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

				<div>
				<h3>What is the expected weight loss ?</h3>
				<p>65-55 pounds in six months, is a method that depends largely on the patient.</p>
				</div>

				<div>
				<h3>Surgical time</h3>
				<p>No surgery needed. I'ts done in 30 minutes.</p>
				</div>

				<div>
				<h3>Hospitalization</h3>
				<p>1 hour</p>
				</div>

				<div>
				<h3>Recovery time</h3>
				<p>During the first week take a liquid diet. You may have mild abdominal pain and occasional vomiting. They prescribed medications in order to lessen the discomfort .</p>
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

		</section>
	</section>	


@stop