<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Hospital de obesidad" />
    <link rel="icon" href="img/favicon.ico" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>Hospital Santa Barbara del Rieti</title>
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
				<li class="menu-item opcion"><a href="{{ URL::to('bypass') }}">Gastric Bypass</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('sleeve') }}">Sleeve Gastrectomy</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('intragastric') }}">Intragastric Balloon</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('metabolic') }}">Metabolic Surgery</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('contact') }}">Contact</a></li>
				<li class="menu-item opcion"><a href="{{ URL::to('faqs') }}">FAQS</a></li>
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
			<h2>Have a doubt?</h2>
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<figure>
				<img src="img/doctor-consulta.jpg" alt="">
			</figure>
			<button class="preguntar">Ask the doctor</button>
		</div>
		<div class="consulta2">
			<h3>Consultation</h3>
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<figure>
				<img src="img/doctor-consulta.jpg" alt="">
			</figure>
			<label for="">Name: </label>
			<br>
			<input type="text">
			<br>
			<label for="">Email: </label>
			<br>
			<input type="text">
			<br>
			<label for="">Comments: </label>
			<br>
			<textarea></textarea>
			<br>
			<button class="enviar-duda" >Send</button>
		</div>

			<!-- Boton de caluladora -->
		<div class="calc-boton"><span>CHECK <br>YOUR <br>BMI <br>HERE</span></div>
		<section id="calculadora-imc" class="calc">	
			<span class="hide-calc">Hide  <i class="fa fa-arrow-right"></i></span>
			<div class="calculadora">	
				<h2>Check your BMI(Body Mass Index)</h2>
				
				<form  role="form">
				    <label class="" for="calculodeIMC">Height: </label>
				    <input type="email" class="altura" id="" placeholder="Height in inches">
					<br>
				  <label class="">Weight: </label>
				      <input class="peso" id="" type="email" placeholder="Weight in pounds">  
				  	<br>
				     <input type="button" class="boton-bmi" value="Get BMI">
				     <br>	
				     <label for="">BMI:</label>
				    <input type="text" class="bmi" id="" placeholder="BMI" disabled>		     
				       <br>
				        	<label>Conclusión:</label>
				    <input  name="leyenda" id="ley" size="42">		             
				</form>
			</div>  
			  
			<h3>The body mass index, or BMI, is a metric used to estimate the amount of body fat a person has. <br>
				Though BMI doesn't measure body fat directly, it correlates with other direct measures of body fat, according to the Centers for Disease Control and Prevention (CDC).</h3> 
			</section>	


		<div class="consulta3">
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<h1>All done, <br> you will receive an email with your answer</h1>
			<button class="regreso-consulta">Back to consultation</button>			
		</div>


		<section id="barra-footer">
			<div><a href="{{ URL::to('doctores') }}">Doctors & cols</a></div>
			<div><a href="{{ URL::to('bypass') }}">Gastric Bypass</a></div>
			<div><a href="{{ URL::to('intragastric') }}">Intragastric Balloon</a></div>
			<div><a href="{{ URL::to('sleeve') }}">Sleeve Gastrectomy</a></div>
			<div><a href="{{ URL::to('metabolic') }}">Metabolic Surgery</a></div>
			<div><a href="{{ URL::to('contact') }}">Contact</a></div>
			<div><a href="{{ URL::to('faqs') }}">FAQS</a></div>
			<div>
				<figure>
					<a href="{{ URL::to('contact') }}">
						<img src="img/recepcionista.png" alt="">
					</a>
				</figure>
			</div>
		</section>
<div class="modal"><h2>Loading, please wait</h2></div>
		@yield('content')

		<footer>
			<section id="facebook-api">
				<div class="fb-page" data-href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts" data-width="500" data-height="550" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts"><a href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts">Hospital Santa Barbara del Rieti</a></blockquote></div></div>
			</section>
			<section id="contactos">
				<h1>CONTACT US</h1>
				<div>
					<h3>Dr. Othon Vazquez Novoa</h3>
					<span>Phone: [+52] (618) 815-1935</span>
					<br>
					<span>e-mail: ovano@hotmail.com</span>
				</div>
				<div>
					<h3>Dr. Fernando Vazquez Reyes</h3>
					<span>Phone: [+52] (618) 818-02-05-564</span>
					<br>
					<span>e-mail: m_ceciliars@hotmail.com</span>
				</div>
				<div>
					<h3>Dr. Cecilia R. de Vazquez</h3>
					<span>Phone: [+52] (618) 815-2221</span>
					<br>
					<span>e-mail: m_ceciliars@hotmail.com</span>
				</div>
				<div>
					<h3>Hospital Santa Barbara del Rieti</h3>
					<span>Felipe Pescador #302 ote. Zona Centro. </span>
					<br>
					<span>C.P. 34000 Durango, Dgo; Mexico.</span>
					<br>
					<span>phone: [+52] 618 8 811 10 25 and [+52] 618 8 11 06 74 </span>
				</div>
				<div>
					<h3>Central Medica Quirurgica</h3>
					<span>Av. Ejercito Mexicano #2207. Col. Palos Prietos.</span>
					<br>
					<span>C.P. 82010 Mazatlan, Sin; Mexico.</span>
					<br>
					<span>phone: [+52] (669) 985-0730</span>
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