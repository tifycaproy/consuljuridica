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







// BACKEND

Route::get('admin', 'Backend\homeController@admin')->name('admin');
// Route::get('admin/slider', 'Backend\homeController@admin')->name('slider');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
