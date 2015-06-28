<?php

class PrecioController extends BaseController{

	public function index(){

		$precios = Precio::precios()->get();
		return View::make('admin.precios')->with(compact('precios'));
	}

	public function edit($id){

		$precio = Precio::find($id);
		return View::make('admin.precioEdit')->with(compact('precio'));
	}

	public function saveEdit($id){

		$nuevo_precio = Input::get('precio');

		$precio = Precio::find($id);

		$precio->precio = $nuevo_precio;

		$precio->save();

		return Redirect::to('precios');
	}
}