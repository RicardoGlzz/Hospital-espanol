<?php

class MensajeController extends BaseController {

	public function __construct()
	{

	}

	public function index()
	{
		$mensajes = Mensaje::select()->paginate(15);

		return View::make('admin.mensajes')->with('mensajes',$mensajes);
	}

	public function leer($id) {

		$mensaje = Mensaje::find($id);

		$mensaje->leido = 1;

		$mensaje->save();

		return View::make('admin.leer_mensaje')->with('mensaje',$mensaje);
	}

	public function noLeido($id) {

		$mensaje = Mensaje::find($id);

		$mensaje->leido = 0;

		$mensaje->save();

		return Redirect::back();
	}

	public function delete($id) {

		$mensaje = Mensaje::find($id);

		$mensaje->delete();

		return Redirect::back();

	}

	public function save_msj(){

		$nombre = Input::get('nombre');
		$lastName = Input::get('apellido');
		$email = Input::get('email');
		$country = Input::get('country');
		$mensaje = Input::get('mensaje');

		$contacto = new Mensaje;
		$contacto->nombre = $nombre.' '.$lastName;
		$contacto->email = $email;
		$contacto->pais = $country;
		$contacto->mensaje = $mensaje;
		$contacto->fecha = Carbon::now();
		$contacto->leido = 0;
		$contacto->save();

		$destinatario = "jafir.quiroz@gmail.com"; 
		$asunto = "Mensaje contacto de durangobariatricsurgery.com"; 
		$cuerpo = ' 
		<html> 
		<head> 
		   <title>Durango Bariatric Surgery</title> 
		</head> 
		<body> 
		<p>' 
		.$mensaje.
		'</p> 
		<p>Pais:'.$country.'</p>
		</body> 
		</html> 
		'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From:".$nombre.' '.$lastName."<".$email.">\r\n"; 

		//dirección de respuesta, si queremos que sea distinta que la del remitente 
		//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

		//ruta del mensaje desde origen a destino 
		//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

		//direcciones que recibián copia 
		//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

		//direcciones que recibirán copia oculta 
		//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers); 

		return Redirect::to('contact');
	}

	public function send($nombre,$email,$pais,$msj)
	{
		$destinatario = "jafir.quiroz@gmail.com"; 
		$asunto = "Mensaje contacto de durangobariatricsurgery.com"; 
		$cuerpo = ' 
		<html> 
		<head> 
		   <title>Durango Bariatric Surgery</title> 
		</head> 
		<body> 
		<p>' 
		.$msj.
		'</p> 
		<p>Pais:'.$pais.'</p>
		</body> 
		</html> 
		'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From:".$nombre."<".$email.">\r\n"; 

		//dirección de respuesta, si queremos que sea distinta que la del remitente 
		//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

		//ruta del mensaje desde origen a destino 
		//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

		//direcciones que recibián copia 
		//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

		//direcciones que recibirán copia oculta 
		//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers); 
	}
}