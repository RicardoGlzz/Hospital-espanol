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
//ruta para el formulario de contacto
Route::post('contact/msj','MensajeController@save_msj');
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
	Route::get('precios/edit/dgo/{id}','PrecioController@edit');
	Route::get('precios/edit/dls/{id}','PrecioController@edit2');
	Route::get('precios/edit/mtz/{id}','PrecioController@edit3');
	Route::get('precios/edit/mtz/dls/{id}','PrecioController@edit4');
	//Ruta para Guardar Precios
	Route::post('precios/edit/dgo/{id}','PrecioController@saveEdit');
	Route::post('precios/edit/mtz/{id}','PrecioController@saveEdit2');
	Route::post('precios/edit/dls/{id}','PrecioController@saveEdit3');
	Route::post('precios/edit/mtz/dls/{id}','PrecioController@saveEdit4');

	//Rutas para los mensajes
	Route::get('mensajes','MensajeController@index');
	//Ruta para marcar como leido
	Route::get('mensajes/leer/{id}','MensajeController@leer');
	//Ruta para cambiar los msj a no leidos
	Route::get('mensajes/noLeido/{id}','MensajeController@noLeido');
	//Ruta para eliminar mensajes
	Route::get('mensajes/delete/{id}','MensajeController@delete');

	//Ruta para Doctor&cols
	Route::get('doctors&cols','DoctorController@index');

	//ruta para videos de testigos
	Route::get('testigos','TestigoController@index');
	//Ruta para cambiar videos de testigos
	Route::post('testigos/edit/{id}','TestigoController@edit');

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
