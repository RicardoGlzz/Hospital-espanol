<?php

class FrontendController extends BaseController {

	public function index()
	{
		return View::make('front.index');
	}
	public function doctores()
	{
		return View::make('front.doctores');
	}
	public function bypass()
	{
		return View::make('front.bypass');
	}
	public function sleeve()
	{
		return View::make('front.sleeve');
	}
	public function intragastric()
	{
		return View::make('front.intragastric');
	}
	public function gastroplicature()
	{
		return View::make('front.gastroplicature');
	}
	public function metabolic()
	{
		return View::make('front.metabolic');
	}
	public function contact()
	{
		return View::make('front.contact');
	}
}