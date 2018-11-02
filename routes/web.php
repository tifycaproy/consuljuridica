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

//AJAX

//CREAR NEWLESTER
Route::post('create_newlester', 'Ajax\AjaxNewlester@create')->name('create_newlester');
////






// BACKEND
App::setLocale("es");

// Route::group(['middleware'=>['web']], function()
// {
//   Route::get('admin', function()
//   {
//     return view("login");
//   });
// });

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
