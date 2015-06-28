<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Rutas para el Frontend
Route::get('/', 'FrontendController@index');
Route::get('doctores', 'FrontendController@doctores');
Route::get('bypass', 'FrontendController@bypass');
Route::get('sleeve', 'FrontendController@sleeve');
Route::get('intragastric', 'FrontendController@intragastric');
Route::get('gastroplicature', 'FrontendController@gastroplicature');
Route::get('metabolic', 'FrontendController@metabolic');
Route::get('contact', 'FrontendController@contact');
Route::get('faqs', 'FrontendController@faqs');



//Rutas para el administrador
Route::get('login','LoginController@index');
Route::post('login','LoginController@login');

Route::group(array('before' => 'auth'),function(){
	//Ruta de inicio
	Route::get('panel','PanelController@index');

	//Ruta para galeria
	Route::get('galeria','GaleriaController@index');
	Route::post('galeria/upload/{id}','GaleriaController@saveImg');

	//Rutas para precios
	Route::get('precios','PrecioController@index');
	Route::get('precios/edit/{id}','PrecioController@edit');
	Route::post('precios/edit/{id}','PrecioController@saveEdit');

	//Rutas para los mensajes
	Route::get('mensajes','MensajeController@index');
	//Ruta para marcar como leido
	Route::get('mensajes/leer/{id}','MensajeController@leer');
	//Ruta para cambiar los msj a no leidos
	Route::get('mensajes/noLeido/{id}','MensajeController@noLeido');
	//Ruta para eliminar mensajes
	Route::get('mensajes/delete/{id}','MensajeController@delete');

	//Ruta para logout
	Route::get('logout','LoginController@logOut');
});

/*
|	View::composer renderiza una vista de manera global cuando se llame
|	esto nos sirve para crear menus dinamicos.
|	
|	Aqui se renderiza el side nav del administrador, con las carpetas
|	haciendo una consulta a la Tabla 'vip_archivos'
|
|
|
*/

View::composer('admin.layout',function($view){
	
	$mensajes = Mensaje::select()->where('leido', '=', 0)->count();

	$view->with('mensajes',$mensajes);
});
