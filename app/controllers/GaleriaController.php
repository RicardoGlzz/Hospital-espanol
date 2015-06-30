<?php

class GaleriaController extends BaseController {

	public function index()
	{
		$galeria = Galeria::all();

		return View::make('admin.galeria')->with('galeria',$galeria);
	}

	public function saveImg($id)
	{
		$file = Input::file('file');

		$fileName = $file->getClientOriginalName();

		$filePath = 'img/'.$fileName;

		$galeria = Galeria::find($id);

		$galeria->nombre = $fileName;

		$galeria->ruta = $filePath;

		$img = Image::make($file)->resize(1400,510);

		$img->save('img/'.$fileName);

		$galeria->save();

		return Redirect::to('galeria');
	}

}