@extends('front.layout')
@section('content')
<section class="wrapper-section">
	<section class="contacto">
		<div id="map"></div>
		<section class="form-container">
		<h2>Click on the address you wish to check</h2>
		<div id="santabarbara" class="direccion">
			<h3>Hospital Santa Barbara del Rieti</h3>
			<p>Felipe Pescador 302 Ote</p>
			<p>Durango,Durango.</p>
			<br>
		</div>
		<div id="cemeq" class="direccion">
			<h3>Cemeq</h3>
			<p>Avenida Ejercito Mexicano #2207</p>
			<p>Colonia Palos Prietos C.P 82019</p>
			<p>Mazatlán,Sinaloa</p>
		</div>
		<div id="conchas" class="direccion">
			<h3>Centro Medico Las Conchas</h3>
			<p>Avenida Rafael y Dr Jesus Kumate #202</p>
			<p>Colonia Hacienda las Cruces</p>
			<p>Mazatlán,Sinaloa</p>
		</div>
		<section class="formulario">
			<h3>If you have any questions, be sure to send us a message</h3>
			<form action="">
				<div>
					<label for="">Name/Last name:</label>
					<br>
					<input type="text">
					<br>
					<label for="">Last name:</label>
					<br>
					<input type="text">
					<br>
					<label for="">Email:</label>
					<br>
					<input type="email">
					<br>
				</div>
				<div>
					<label for="">Message:</label>
					<br>
					<textarea name="" id="" cols="30" rows="8" placeholder=""></textarea>
				</div>
			</form>
			<div class="boton-send">
			<button type="submit">Send message</button>
			</div>
		</section>
		</section>
	</section>
</section>
<script>
	// MAPA DE CONTACTO
	 var locations = [
        {lat:24.035417, lon:-104.663236, place:"Felipe Pescador", id:'santabarbara'},
        {lat:23.227174, lon:-106.421749, place:"Avenida Ejercito Mexicano", id:'cemeq'},
        {lat:23.243168, lon:-106.442014, place:"Avenida Rafael y Dr Jesus Kumate", id:'conchas'}
        ];

           // Initialize and display a Google map when the web page is loaded
    function initialize() {  
        // Initialize and display a google map
            var latlng = new google.maps.LatLng( locations[0].lat, locations[0].lon );    

            var mapOptions = { zoom: 7, center: latlng };

            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var markers = [];
            for(var i = 0; i < locations.length; i++) 
            {
                markers.push(new google.maps.Marker({
                    position: new google.maps.LatLng( locations[i].lat, locations[i].lon),
                    map: map,
                    title: locations[i].place
                    // icon:'/img/pointer.png'
                }));
            }

            $('.contacto div').click(function(){
            // elm=$('label', this);
            // $('#texto-ubicado').text("Sucursal: "+elm.get(0).innerHTML+"  "+"Direccion: "+elm.get(1).innerHTML);
            for(var i = 0; i < locations.length; i++) 
            {
                if(locations[i].id == $(this).attr('id')){
                    // Create a Google coordinate object for the closest location
                    //var dist = Haversine( locations[ i ].lat, locations[ i ].lon, lat, lon );
                    var latlng = new google.maps.LatLng( locations[i].lat, locations[i].lon );
                    map.setCenter(latlng);
                    map.setZoom(18);
                    return;
                }
            }
        });
}
	google.maps.event.addDomListener(window, "load", initialize);
</script>
@stop