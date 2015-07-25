@extends('front.layout')
@section('content')
<section class="wrapper-section wrapper-content">
	<section class="balloon-section">
		<h1>- Balón Intragastrico  -</h1>
		
		<section  class="proc-desc">
			<div class="proc-div">
				<div>
				<h3>¿Que es balón intragastrico?</h3>
				<p>Es un globo que se llena con solución salina con un colorante. Su presentación a estómago mediante endoscopia y dejar allí durante 6 meses.</p>
				</div>

				<div>
				<h3>Metodo</h3>
				<p>La sedación profunda el globo desinflado se introduce como el estómago , una vez inculcado en 700 cc de solución salina marcado con un colorante tal como azul de metileno. Reversible 100 %.</p>
				</div>

				<div>	
				<h3>¿Como perdere peso?</h3>
				<p>El globo le hará comer menos debido al efecto de masa . Habrá una sensación de saciedad precoz permite comer pequeñas cantidades de comida.</p>
				</div>
			</div>
			
			<div class="proc-div">	
				<figure>
					<img src="img/balon.jpg" alt="">
				</figure>
			</div>		
		</section>

			<br>
			<br>	
			<!-- Precios -->
			<section id="precio-proc">
				<h2>Balón Intragastrico</h2>
				<div class="precio-carac">
					<span>Perdida de peso aproximada</span>
					<br>
					<i class="fa fa-check"></i>
					<br>
					<span>65-55 libras en seis meses</span>
				</div>
				<div class="precio-carac">
					<span>Tiempo de cirugia</span>
					<br>
					<i class="fa fa-clock-o"></i>
					<br>
					<span>No se necesita cirugia. Esta listo en 30 minutos</span>
				</div>
				<div class="precio-carac">
					<span>Hospitalizacion</span>
					<br>
					<i class="fa fa-bed"></i>
					<br>
					<span>1 hora</span>
				</div>
				<div class="precio-carac">
					<span>Tiempo de recuperación</span>
					<br>
					<i class="fa fa-street-view"></i>
					<br>
					<span>En una semana con dieta a base de liquidos. </span>
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
			<section id="itinerario" class="intragastric-itinerario">
				<h2>ITINERARIO</h2>
				<h3>Balón I <span>5 Dias</span></h3>
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

		</section>
	</section>	


@stop