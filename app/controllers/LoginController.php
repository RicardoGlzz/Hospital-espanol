<?php

class LoginController extends BaseController {

	public function index()
	{
		if(Auth::check())
		{
			return Redirect::to('panel');
		}

		return View::make('login.login');
	}

	public function login()
	{
		$data = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($data))
		{
			return Redirect::to('panel');
		}
		return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
	}

	public function logOut()
	{
		if(Auth::check())
		{
			Auth::logout();

			return Redirect::to('login')->with('mensaje_error','Sesión Cerrada con Exito');
		}
	}
}