<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/','LoginController@index');
Route::resource('/menu','MenuController@index');
Route::resource('/crear_usuario','UsuarioController@create');
Route::resource('/period','AdminController@index');
Route::resource('/perfil','AdminController@create');
Route::resource('/admin','AdminController@destroy'); 


//Route::get('/', function () {
//    return view('welcome');
//});
