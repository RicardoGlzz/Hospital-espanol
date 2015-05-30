<?php

class GaleriaController extends BaseController {

	public function index()
	{
		$galeria = Galeria::all();

		return View::make('admin.galeria')->with('galeria',$galeria);
	}

	public function saveImg()
	{

	}

	public function saveOrden()
	{
		
	}
}