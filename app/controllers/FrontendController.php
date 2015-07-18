<?php

class FrontendController extends BaseController {

	public function index()
	{
		$galeria = Galeria::all();
		$testigos = Testigo::all();
		return View::make('front.index')->with(compact('galeria','testigos'));
	}
	public function doctores()
	{
		return View::make('front.doctores');
	}
	public function bypass()
	{
		$precio = Precio::bypass()->get();
		return View::make('front.bypass')->with(compact('precio'));
	}
	public function sleeve()
	{
		$precio = Precio::sleeve()->get();
		return View::make('front.sleeve')->with(compact('precio'));
	}
	public function intragastric()
	{
		$precio = Precio::ballon()->get();
		return View::make('front.intragastric')->with(compact('precio'));
	}
	public function gastroplicature()
	{
		$precio = Precio::gastro()->get();
		return View::make('front.gastroplicature')->with(compact('precio'));
	}
	public function metabolic()
	{
		$precio = Precio::metabolic()->get();
		return View::make('front.metabolic')->with(compact('precio'));
	}
	public function contact()
	{
		return View::make('front.contact');
	}
	public function faqs()
	{
		return View::make('front.faqs');
	}

}