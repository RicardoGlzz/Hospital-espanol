<?php

class TestigoController extends BaseController {

	public function index()
	{
		$testigos = Testigo::all();
		return View::make('admin.testigos')->with(compact('testigos'));
	}

	public function edit($id)
	{	
		$link = Input::get('link');
		$nombre = Input::get('nombre');
		$testigo = Testigo::find($id);
		$testigo->nombre = $nombre;
		$testigo->link = $link;
		$testigo->save();

		return Redirect::to('testigos');
	}
}