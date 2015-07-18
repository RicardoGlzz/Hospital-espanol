@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="metabolic-section">
		<h1>- Metabolic Surgery -</h1>
		
				<section class="proc-desc">

				<div class="proc-div">
					<div>	
					<h3>What is metabolic surgery?</h3>
					<p>It´s a modified gastric bypass that will cause the production of a substance in the small intestine called incretin that stimulates insulin production.</p>
					</div>
					
					<div> 
					<h3>Surgical time</h3>
					<p>2 to 3 hours</p>
					</div>	

					<div>
					<h3>Hospitalization</h3>
					<p>24-48hrsr</p>
					</div>	

					<div>
					<h3>Recovery time</h3>
					<p>Discharge in 24-48 hrs Glycemic control without the use of insulin or oral hypoglycemic agents in 85 % of patients within a year. 60% will stop using hypoglycemiantsbefore 6 months. Patients should ideally have a BMI of 30 to 35. Although it can be performed on patients with a lower BMI.</p>
					</div>
				</div>

				<div class="proc-div">
					<figure>
						<img src="img/bypass.jpg" alt="">
					</figure>
				</div>
			</section>
		
			<br>
			<br>	
			<!-- Precios -->
			<section id="precio-proc">
				<h2>Metabolic Surgery</h2>
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
					<span>2 to 3 hours</span>
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
						<br>
						DLS
						(Durango)
					</p>
					
				</div>
				
				<div id="precio" class="precio-usa">
					<p>
						${{$precio[0]->precio_mzt_dls}}
						<br>
						DLS
						(Mazatlán)
					</p>
				</div>
				
				<div id="lugar-precio">
					<span>Prices</span>
				</div>
			</section>

			<!-- Itinerario -->
			<section id="itinerario" class="metabolic-itinerario">
				<h2>ITINERARY</h2>
				<h3>Metabolic <span>5 Days</span></h3>
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
			<br>
			<section class="requisitos">
			<h2>Am I a candidate for this procedure?</h2>
			<br>
			<br>
			<h2>Candidate for surgery Criteria: <h2>
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