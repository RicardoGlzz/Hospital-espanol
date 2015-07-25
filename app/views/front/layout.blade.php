<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Hospital de obesidad" />
    <link rel="icon" href="img/favicon.ico" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>Durango Obesity Surgery</title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/countries.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>
<body>
	<!-- Inicias SDK de facebook -->
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '790697614359748',
	      xfbml      : true,
	      version    : 'v2.3'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>	
	<!-- Funcion de plugin -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=790697614359748";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<header>
			<ul class="menu">
				<div class="menu-item logo-animar">
					<a href="{{ URL::to('/') }}">
						<figure class="logo-img">
							<img src="img/logo.png" alt="">
						</figure>
						<figure class="logo">
							<img src="img/titulo.png" alt="">
						</figure>
					</a>
					<span class="ver-menu"><i class="fa fa-bars"></i></span>
					<span class="cerrar-menu"><i class="fa fa-times"></i></span>
				</div>
				<li class="menu-item opcion"><a href="{{ URL::to('doctores') }}">Doctor & cols</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('bypass') }}"> Bypass Gastrico</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('sleeve') }}">Manga Gastrica</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('intragastric') }}">Ballon Intragastrico</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('metabolic') }}">Cirugia Metabolica</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('contact') }}">Contacto</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('faqs') }}">Preguntas</a></li>
				<a id="mexico" href="">
					<img src="img/mexico.png" alt="">
				</a>
				<a id="usa" href="">
					<img src="img/usa.gif" alt="">
				</a>
			</ul>
	</header>

	<!-- Redes sociales -->
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts" class="fb" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/HospStaBarbara" class="tw"><i class="fa fa-twitter"target="_blank"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCa1o1CSIqJf7jUwbJBfRSJA" class="youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="https://plus.google.com/+HospitalSantaBarbaradelRietiDurango/videos" class="g-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>

		<!-- Consulta doctor -->
		<div class="ayuda"><span>FAQs</span><i class="fa fa-question"></i></div>
		<div class="consulta">
			<h2>¿Tienes dudas?</h2>
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<figure>
				<img src="img/doctor-consulta.jpg" alt="">
			</figure>
			<button class="preguntar">Pregunta a un doctor</button>
		</div>
		<div class="consulta2">
			<h3>Consulta</h3>
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<figure>
				<img src="img/doctor-consulta.jpg" alt="">
			</figure>
			<label for="">Nombre: </label>
			<br>
			<input type="text">
			<br>
			<label for="">Email: </label>
			<br>
			<input type="text">
			<br>
			<label for="">Comentarios: </label>
			<br>
			<textarea></textarea>
			<br>
			<button class="enviar-duda" >Enviar</button>
		</div>

			<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECA <br>TU <br>IMC <br>AQUI</span></div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
			<div class="calculadora">	
				<h2>Checa tu IMC(Indice de masa corporal)</h2>
				
				<form  role="form">
				    <label class="" for="calculodeIMC">Altura: </label>
				    <input type="email" class="altura" id="" placeholder="Height in inches">
					<br>
				  <label class="">Peso: </label>
				      <input class="peso" id="" type="email" placeholder="Weight in pounds">  
				  	<br>
				     <input type="button" class="boton-bmi" value="Get BMI">
				     <br>	
				     <label for="">IMC:</label>
				    <input type="text" class="bmi" id="" placeholder="BMI" disabled>		     
				       <br>
				        	<label>Conclusión:</label>
				    <input  name="leyenda" id="ley" size="42">		             
				</form>
			</div>  
			  
			<h3>El índice de masa corporal , o IMC , es una métrica utilizada para estimar la cantidad de grasa corporal tiene una persona. <br>
				Aunque el IMC no mide la grasa corporal directamente, se correlaciona con otras medidas directas de la grasa corporal, según los Centros para el Control y la Prevención de Enfermedades (CDC ).</h3> 
			</section>	


		<div class="consulta3">
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<h1>Listo, <br> recibiras un correo con tu respuesta</h1>
			<button class="regreso-consulta">Regresa a consulta</button>			
		</div>


		<section id="barra-footer">
			<div><a href="{{ URL::to('doctores') }}">Doctores</a></div>
			<div><a href="{{ URL::to('bypass') }}"> Bypass Gastrico</a></div>
			<div><a href="{{ URL::to('intragastric') }}">Balón Intragastrico</a></div>
			<div><a href="{{ URL::to('sleeve') }}">Manga Gastrica</a></div>
			<div><a href="{{ URL::to('metabolic') }}">Cirugia Metabolica</a></div>
			<div><a href="{{ URL::to('contact') }}">Contacto</a></div>
			<div><a href="{{ URL::to('faqs') }}">Preguntas</a></div>
			<div>
				<figure>
					<a href="{{ URL::to('contact') }}">
						<img src="img/recepcionista.png" alt="">
					</a>
				</figure>
			</div>
		</section>
<div class="modal"><h2>Cargando, por favor espere</h2></div>
		@yield('content')

		<footer>
			<section id="facebook-api">
				<div class="fb-page" data-href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts" data-width="500" data-height="550" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts"><a href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts">Hospital Santa Barbara del Rieti</a></blockquote></div></div>
			</section>
			<section id="contactos">
				<h1>CONTACTANOS</h1>
				<div>
					<h3>Dr. Othon Vazquez Novoa</h3>
					<span>telefono: [+52] (618) 815-1935</span>
					<br>
					<span>e-mail: ovano@hotmail.com</span>
				</div>
				<div>
					<h3>Dr. Fernando Vazquez Reyes</h3>
					<span>telefono: [+52] (618) 818-02-05-564</span>
					<br>
					<span>e-mail: m_ceciliars@hotmail.com</span>
				</div>
				<div>
					<h3>Dr. Cecilia R. de Vazquez</h3>
					<span>telefono: [+52] (618) 815-2221</span>
					<br>
					<span>e-mail: m_ceciliars@hotmail.com</span>
				</div>
				<div>
					<h3>Hospital Santa Barbara del Rieti</h3>
					<span>Felipe Pescador #302 ote. Zona Centro. </span>
					<br>
					<span>C.P. 34000 Durango, Dgo; Mexico.</span>
					<br>
					<span>telefono: [+52] 618 8 811 10 25 and [+52] 618 8 11 06 74 </span>
				</div>
				<div>
					<h3>Central Medica Quirurgica</h3>
					<span>Av. Ejercito Mexicano #2207. Col. Palos Prietos.</span>
					<br>
					<span>C.P. 82010 Mazatlan, Sin; Mexico.</span>
					<br>
					<span>telefono: [+52] (669) 985-0730</span>
				</div>
			</section>
		</footer>	

	</section>	
	<script type="text/javascript">
	  $(window).load(function() {
	    $('.flexslider').flexslider();
	  });
	</script>
	
</body>
</html>