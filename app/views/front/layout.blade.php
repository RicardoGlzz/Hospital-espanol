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
</head>
<body>
	<header>
			<ul class="menu">
				<div class="menu-item logo-animar">
					<figure class="logo-img">
						<img src="img/logo.png" alt="">
					</figure>
					<figure class="logo">
						<img src="img/titulo.png" alt="">
					</figure>
				</div>
				<li class="menu-item opcion animated fadeInDown"><a href="">Know the doctor & the cols</a></li>
				<li class="menu-item opcion animated fadeInDown"><a href="">Gastric Bypass</a></li>
				<li class="menu-item opcion animated fadeInDown"><a href="">Sleeve Gastrectomy</a></li>
				<li class="menu-item opcion animated fadeInDown"><a href="">Intragastric Balloon</a></li>
				<div class="fix-menu">
				<li class="menu-item opcion animated fadeInDown"><a href="">Gastroplicature</a></li>
				<li class="menu-item opcion animated fadeInDown"><a href="">Metabolic Surgery</a></li>
				<li class="menu-item opcion animated fadeInDown"><a href="">Contact</a></li>
				</div>
			</ul>
	</header>

	<!-- Redes sociales -->
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/hospitalsantabarbaradelrieti?fref=ts" class="fb" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/HospStaBarbara" class="tw"><i class="fa fa-twitter"target="_blank"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCa1o1CSIqJf7jUwbJBfRSJA" class="youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="" class="g-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>

		<!-- Consulta doctor -->
		<div class="ayuda"><span>FAQ</span><i class="fa fa-question"></i></div>
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
		<div class="consulta3">
			<span class="ocultar-consulta"><i class="fa fa-arrow-right"></i></span>
			<h1>All done, <br> you will receive an email with your answer</h1>
			<button class="regreso-consulta">Back to consultation</button>			
		</div>

		@yield('content')

		<footer>
			<section id="facebook-api">
				Facebook
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
				</div>
				<div>
					<h3>Central Medica Quirurgica</h3>
					<span>Av. Ejercito Mexicano #2207. Col. Palos Prietos.</span>
					<br>
					<span>C.P. 82010 Mazatlan, Sin; Mexico.</span>
					<br>
					<span>phone: [+52] (669) 985-0730</span>
				</div>
				<div>
					<h3>Centro Medico Las Conchas</h3>
					<span>Dr. Jesus Kumate 202, L-B3. Col. Hacienda las Cruces</span>
					<br>
					<span>C.P. 82126 Mazatlan, Sin; Mexico</span>
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