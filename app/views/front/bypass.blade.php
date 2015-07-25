@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">

	<section class="bypass-section">
		<h1>- Bypass Gastrico -</h1>
			
			<section class="proc-desc">
				<div class="proc-div">
					<div>
						<h3>¿Que es Bypass Gastrico? </h3>
						<p>También llamada bypass gástrico en "Y" de Roux , es la cirugía estándar de oro para la pérdida de peso que se produce en México y en todo theworld . Se forma una bolsa del estómago de aproximadamente 30 cc. Posteriormente el intestino pequeño se une a la nueva bolsa del estómago . Usted va a perder peso por dos mecanismos . Primero uno, usted no será capaz de comer la misma cantidad de que usted comió antes. Segundo, se creará un mecanismo de malabsorción .</p>
					</div>	
					<div>		
						<h3>Metodo</h3>
						<p>En 98 % de los pacientes la cirugía se realiza mediante cirugía laparoscópica.</p>
					</div>	
					<div>	
						<h3>¿Como voy a perder peso?</h3>
						<p>Usted no será capaz de comer la misma cantidad de alimento que usted comió antes. Un mecanismo de malabsorción de nutrientes se realice .</p>
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
				<h2> Bypass Gastrico</h2>
				<div class="precio-carac">
					<span>Perdida de peso aproximada</span>
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
					<span>3 horas</span>
				</div>
				<div class="precio-carac">
					<span>Hospitalización</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>3 horas</span>
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
			<section id="itinerario" class="bypass-itinerario">
				<h2>ITINERARIO</h2>
				<h3> Bypass Gastrico <span>5 Dias</span></h3>
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
							Day 4
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
			<hr>
			<br>	
			<section class="requisitos">
			<h2>¿Soy candidato para este procedimiento?</h2>
			<br>
			<h2>Criterios para ser candidato: </h2>
			
			<div>
			<h2>Edad:</h2>
				<ul>
					<li>15-65 años</li>
				</ul>
			</div>
			<div>	
			<h2>Pesos:</h2>
			<ul>
				<li>IMC > 35 con cualquier enfermedad asociada obesidad (hipertensión sistémica , diabetes mellitus tipo II , dislipidemia , apnea obstructiva del sueño , enfermedad cardiaca) .</li>
				<li>IMC >40.</li>
			</ul>
			</div>
			<br>
			<br>
			<h2>Puedes usar nuestra calculadora para ver tus valores de IMC</h2>
		</section>
		

	</section>	
</section>

@stop