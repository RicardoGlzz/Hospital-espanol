<?php

class MensajeController extends BaseController {

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
}