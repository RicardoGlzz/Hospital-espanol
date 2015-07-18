<?php

class PrecioController extends BaseController{

	public function index(){

		$precios = Precio::all();
		return View::make('admin.precios')->with(compact('precios'));
	}

	public function edit($id){

		$precio = Precio::find($id);
		return View::make('admin.precioEdit')->with(compact('precio'));
	}

	public function edit2($id){

		$precio = Precio::find($id);
		return View::make('admin.precioEdit2')->with(compact('precio'));
	}

	public function edit3($id){

		$precio = Precio::find($id);
		return View::make('admin.precioEdit3')->with(compact('precio'));
	}

	public function edit4($id){

		$precio = Precio::find($id);
		return View::make('admin.precioEdit4')->with(compact('precio'));
	}

	public function saveEdit($id){

		$nuevo_precio = Input::get('precio');

		$precio = Precio::find($id);

		$precio->precio = $nuevo_precio;

		$precio->save();

		return Redirect::to('precios');
	}

	public function saveEdit2($id){

		$nuevo_precio = Input::get('precio');

		$precio = Precio::find($id);

		$precio->precio_mzt = $nuevo_precio;

		$precio->save();

		return Redirect::to('precios');
	}

	public function saveEdit3($id){

		$nuevo_precio = Input::get('precio');

		$precio = Precio::find($id);

		$precio->precio_dls = $nuevo_precio;

		$precio->save();

		return Redirect::to('precios');
	}

	public function saveEdit4($id){

		$nuevo_precio = Input::get('precio');

		$precio = Precio::find($id);

		$precio->precio_mzt_dls = $nuevo_precio;

		$precio->save();

		return Redirect::to('precios');
	}
}