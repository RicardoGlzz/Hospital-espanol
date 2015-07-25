<?php

class DoctorController extends BaseController {

	public function index()
	{
		$doctores = Doctor::all();
		return View::make('admin.doctores')->with(compact('doctores'));
	}
}