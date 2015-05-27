<?php

class PanelController extends BaseController {

	public function index()
	{
		return View::make('admin.inicio');
	}
}