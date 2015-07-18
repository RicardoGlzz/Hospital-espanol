@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">

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

	
			<br>
			<hr>
			<br>	
			<!-- Precios -->
			<section id="precio-proc">
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
				
				<div id="precio" class="precio-durango">
					<p>
						${{$precio[0]->precio}}
						MXN
						(Durango)
					</p>
					
				</div>
				<div id="precio" class="precio-mazatlan">
					<p>
						${{$precio[0]->precio_mzt}}
						MXN
						(Mazatlán)
					</p>
					
				</div>
				<div id="precio" class="precio-usa">
					<p>
						${{$precio[0]->precio_dls}}
						DLS
						(USA)
					</p>
					
				</div>
				<!--
				<div id="precio" class="precio-usa">
					<p>
						${{$precio[0]->precio_mzt_dls}}
						DLS
						(USA)
					</p>
				</div>
				-->
				<div id="lugar-precio">
					<span>Prices</span>
				</div>
			</section>
			<!-- Itinerario -->
			<section id="itinerario" class="bypass-itinerario">
				<h2>ITINERARY</h2>
				<h3>Gastric Bypass <span>5 Days</span></h3>
				<div id="dia-div">
					<div class="dia">
						<p>
							Day 1
						</p>
					</div>
					<div>
						<p>
							Arrival. 1st night in hotel is included
						</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Day 2
						</p>
					</div>
					<p>
						Arrival. 1st night in hotel is included
					</p>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Day 3
						</p>
					</div>
					<div>
					<p>
						Arrival. 1st night in hotel is included
					</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Day 4
						</p>
					</div>
					<div>
					<p>
						Arrival. 1st night in hotel is included
					</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Day 5
						</p>
					</div>
					<div>
					<p>
						Arrival. 1st night in hotel is included
					</p>
					</div>
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