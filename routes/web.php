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

//Listar registros de sliders
Route::post('/admin/slider', ['as' => 'versliders', 'uses'=>'Backend\SliderController@list']);
//Agregar registros de Sliders
Route::post('/admin/nuevoslider', ['as' => 'ingresarslider', 'uses'=>'Backend\SliderController@insert']);
//Eliminar registros de Sliders
Route::get('/admin/eliminarslider/{id}', ['as' => 'eliminarslider', 'uses'=>'Backend\SliderController@delete']);


//Listar registros de Noticias
Route::post('/admin/noticias', ['as' => 'vernoticia', 'uses'=>'Backend\homeController@noticias']);
//Agregar registros de Noticias
Route::post('/admin/nuevanoticia', ['as' => 'ingresarnoticia', 'uses'=>'Backend\NoticiasController@insert']);
//Eliminar registros de Noticias
Route::get('/admin/eliminarnoticia/{id}', ['as' => 'eliminarnoticia', 'uses'=>'Backend\NoticiasController@delete']);




Route::get('admin', 'homeController@index')->name('index');
// Route::get('login', 'homeController@index')->name('index');
// Route::get('admin', 'Backend\homeController@admin')->name('admin');

// Route::get('admin/{id}', 'Backend\homeController@slider');
// Route::patch('admin/{id}',[
//     'as' => 'modulo',
//     'uses' => 'Backend\homeController@modulos'
// ]);
Route::get('/admin/{modulo}',['as' => 'ingresarmodulo', 'uses' => 'Backend\homeController@modulos']);
// Route::get('admin/slider', 'Backend\homeController@admin')->name('slider');



Auth::routes();

// Route::get('/home', 'HomeController@redireccion')->name('login');
