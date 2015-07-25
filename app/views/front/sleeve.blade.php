@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="sleeve-section">
		<h1>- Manga Gastrica-</h1>
		<section class="proc-desc">
			<div class="proc-div">	
				<div>
				<h3>¿Que es manga gastrica?</h3>
				<p>En este procedimiento el 70 % del estómago se retira dejando un nuevo estómago como " manga " o " tubo gástrico " . Usted va a perder peso por dos mecanismos . La primera de ellas , no podrás comer la misma cantidad de alimentos que comió antes. Segundo, en la porción del estómago que se retira allí una hormona llamada " grelina ", que se relaciona con el apetito y no seré produce en la misma cantidad.</p>
				</div>

				<div>
				<h3>Metodo</h3>
				<p>En 98 % de los pacientes la cirugía se realiza por laparoscopia .</p>
				</div>

				<div>
				<h3>¿Como voy a perder peso?</h3>
				<p>Con el nuevo tamaño de su estómago , no podrás comer la misma cantidad de alimentos que comió antes. El postulante no la hormona del apetito se produce en la misma cantidad.</p>
				</div>
	
			</div>
			<div class="proc-div">
				<figure>
					<img src="img/sleeve.jpg" alt="">
				</figure>
			</div>	
		</section>
	
			<br>
			<hr>
			<br>	

			<!-- Precios -->
			<section id="precio-proc">
				<h2>Manga Gastrica</h2>
				<div class="precio-carac">
					<span>Perdida de peso aproximada</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>70% a 80%</span>
				</div>
				<div class="precio-carac">
					<span>Tiempo de cirugia</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>2 horas</span>
				</div>
				<div class="precio-carac">
					<span>Hospitalizacion</span>
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
			<section id="itinerario" class="sleeve-itinerario">
				<h2>ITINERARIO</h2>
				<h3>Manga <span>5 Dias</span></h3>
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
			<h2>¿Soy candidato a este procedimiento?</h2>
			<br>
			<br>
			<h2>Criterios para este procedimiento: </h2>
			<br>
			<br>
			<div>
			<h2>Edad:</h2>
				<ul>
					<li>15-65 años</li>
				</ul>
			</div>
			<div>	
			<h2>Peso:</h2>
			<ul>
			
				<li>IMC > 35 con cualquier enfermedad asociada obesidad (hipertensión sistémica , diabetes mellitus tipo II , dislipidemia , apnea obstructiva del sueño , enfermedad cardiaca) .</li>
				<li>IMC > 40</li>
			</ul>
			</div>
			<br>
			<br>
			<h2>You can use our BMI calculator in order to know your BMI value</h2>
		</section>
	</section>	
</section>

@stop