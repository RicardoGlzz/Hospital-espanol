@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="metabolic-section">
		<h1>- Cirugia Metabolica -</h1>
		
				<section class="proc-desc">

				<div class="proc-div">
					<div>	
					<h3>¿Que es cirugia metabolica?</h3>
					<p>Es un bypass gástrico modificado que hará que la producción de una sustancia en el intestino delgado llamada incretina que estimula la producción de insulina .</p>
					</div>
					
					<div> 
					<h3>Tiempo de cirugia </h3>
					<p>2 a 3 horas</p>
					</div>	

					<div>
					<h3>Hospitalizacion</h3>
					<p>24-48hrs</p>
					</div>	

					<div>
					<h3>Tiempo de recuperación</h3>
					<p>Aprobación de la gestión en 24-48 horas el control glucémico sin el uso de insulina o hipoglucemiantes orales en el 85 % de los pacientes dentro de un año . 60 % dejará de usar hypoglycemiantsbefore 6 meses. Los pacientes deben tener idealmente un IMC de 30 a 35. A pesar de que se puede realizar en pacientes con un IMC inferior.</p>
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
				<h2>Cirugia Metabolica</h2>
				<div class="precio-carac">
					<span>Perdida d epeso aproximada</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>85%</span>
				</div>
				<div class="precio-carac">
					<span>Tiempo de cirugia</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>2 a 3 horas</span>
				</div>
				<div class="precio-carac">
					<span>Hospitalización</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>24 a 48 horas</span>
				</div>
				<div class="precio-carac">
					<span>Tiempo de recuperacion</span>
					<br>
					<i class="fa fa-street-view"></i>
					<br>
					<span>3 al 5 días de trabajo de escritorio</span>
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
					<span>Precios</span>
				</div>
			</section>

			<!-- Itinerario -->
			<section id="itinerario" class="metabolic-itinerario">
				<h2>ITINERARIO</h2>
				<h3>Metabolica <span>5 Dias</span></h3>
				<div id="dia-div">
					<div class="dia">
						<p>
							Dia 1
						</p>
					</div>
					<div>
						<p>
							Llegada . Primera noche en el hotel está incluido
						</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Dia 2
						</p>
					</div>
					<p>
						Llegada . Primera noche en el hotel está incluido
					</p>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Dia 3
						</p>
					</div>
					<div>
					<p>
						Llegada . Primera noche en el hotel está incluido
					</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Dia 4
						</p>
					</div>
					<div>
					<p>
						Llegada . Primera noche en el hotel está incluido
					</p>
					</div>
				</div>
				<div id="dia-div">
					<div class="dia">
						<p>
							Dia 5
						</p>
					</div>
					<div>
					<p>
						Llegada . Primera noche en el hotel está incluido
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