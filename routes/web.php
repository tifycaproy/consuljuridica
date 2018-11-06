<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//
// FRONTEND

Route::get('/', 'Frontend\homeController@index')->name('/');

Route::get('blog', 'Frontend\homeController@blog')->name('blog');

Route::get('servicios', 'Frontend\homeController@servicios')->name('servicios');

Route::get('contacto', 'Frontend\homeController@contacto')->name('contacto');

Route::get('privacidad', 'Frontend\homeController@privacidad')->name('privacidad');

//Route::get('detalle', 'Frontend\homeController@detalle')->name('detalle');

Route::get('detalle/{id}', [
	'as' => 'detalle',
	'uses'=>'Frontend\homeController@detalle'
]);

//AJAX

//CREAR NEWLESTER
Route::post('create_newlester', 'Ajax\AjaxNewlester@create')->name('create_newlester');
////

//ENVIAR MENSAJE DE CONTACTO
Route::post('send_mail', 'Ajax\AjaxMail@contacto')->name('send_mail');
////










// BACKEND
App::setLocale("es");

Route::resource('sliders','Backend\SliderController');
Route::resource('noticias','Backend\NoticiasController');
Route::resource('usuarios','Auth\RegisterController');

/*Rutas privadas solo para usuarios autenticados*/
Route::group(['middleware' => 'auth'], function()
{
  //Listar registros de sliders
  Route::get('/admin/slider', ['as' => 'versliders', 'uses'=>'Backend\SliderController@list']);
  //Agregar registros de Sliders
  Route::post('/admin/nuevoslider', ['as' => 'ingresarslider', 'uses'=>'Backend\SliderController@create']);
	//Buscar Slider ya registrado
  Route::get('/admin/slider/u{id}', ['as' => 'buscarslider', 'uses'=>'Backend\SliderController@onesearch']);
	//Actualizar Slider ya registrado
  Route::post('/admin/slider/u{id}', ['as' => 'actualizarslider', 'uses'=>'Backend\SliderController@update']);
  //Mostrar formulario de Sliders
  Route::get('/admin/nuevoslider', ['as' => 'formslider', 'uses'=>'Backend\SliderController@form']);
  //Eliminar registros de Sliders
  Route::get('/admin/slider/r{id}', ['as' => 'eliminarslider', 'uses'=>'Backend\SliderController@delete']);


  //Listar registros de Noticias
  Route::get('/admin/noticias', ['as' => 'vernoticias', 'uses'=>'Backend\NoticiasController@list']);
  //Agregar registros de Noticias
  Route::post('/admin/nuevanoticia', ['as' => 'ingresarnoticia', 'uses'=>'Backend\NoticiasController@create']);
	//Buscar Noticia ya registrado
	Route::get('/admin/noticias/u{id}', ['as' => 'buscarnoticia', 'uses'=>'Backend\NoticiasController@onesearch']);
	//Actualizar Noticia ya registrado
	Route::post('/admin/noticias/u{id}', ['as' => 'actualizarnoticia', 'uses'=>'Backend\NoticiasController@update']);
  //Mostrar formulario de Noticias
  Route::get('/admin/nuevanoticia', ['as' => 'formnoticia', 'uses'=>'Backend\NoticiasController@form']);
  //Eliminar registros de Noticias
  Route::get('/admin/noticias/r{id}', ['as' => 'eliminarnoticia', 'uses'=>'Backend\NoticiasController@delete']);

  //Llamar el Login de Usuario
  // Route::get('admin', ['as' => 'login', 'uses'=>'Auth\RegisterController@login']);
  //Llamar el olvido contraseña del Usuario
  // Route::post('admin', ['as' => 'request', 'uses'=>'Auth\ForgotPasswordController@remember']);
  //Cerrar la Sesión de Usuario
  // Route::post('admin', ['as' => 'cerrarsesion', 'uses'=>'Auth\RegisterController@logout']);
  //Listar registros de Usuarios

  Route::get('/admin/usuarios', ['as' => 'verusuarios', 'uses'=>'Auth\RegisterController@list']);
  //Agregar registros de Usuarios
  Route::post('/admin/nuevousuario', ['as' => 'ingresarusuario', 'uses'=>'Auth\RegisterController@create']);
	//Buscar Usuario ya registrado
	Route::get('/admin/usuarios/u{id}', ['as' => 'buscarusuario', 'uses'=>'Auth\RegisterController@onesearch']);
	//Actualizar Usuario ya registrado
	Route::post('/admin/usuarios/u{id}', ['as' => 'actualizarusuario', 'uses'=>'Auth\RegisterController@update']);
  //Mostrar formulario de Usuario
  Route::get('/admin/nuevousuario', ['as' => 'formusuario', 'uses'=>'Auth\RegisterController@form']);
  //Eliminar registros de Usuarios
  Route::get('/admin/usuarios/r{id}', ['as' => 'eliminarusuario', 'uses'=>'Auth\RegisterController@delete']);
  // Inicio del Sistema, con login o despues del login el administrador
  Route::get('admin', 'HomeController@index')->name('index');

Route::get('/admin/{modulo}',['as' => 'ingresarmodulo', 'uses' => 'Backend\homeController@modulos']);
});




Auth::routes();

// Route::get('admin', 'HomeController@redireccion')->name('login');
