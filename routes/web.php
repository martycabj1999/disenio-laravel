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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

//Rutas para login
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

//Rutas para logout
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


//Rutas para usuarios
Route::get('/usuario', 'UserController@index');
Route::post('/usuario', 'UserController@store');
Route::post('/usuario/datos', 'UserController@show');
Route::get('/usuario/alta', 'UserController@create');
Route::get('/usuario/editar/{id_usuario}', 'UserController@edit')->where('id_usuario','[0-9]+');
Route::post('/usuario/{id_usuario}', 'UserController@storeEdit')->where('id_usuario','[0-9]+');
Route::delete('/usuario/{id_usuario}', 'UserController@delete')->where('id_usuario','[0-9]+');

//Rutas para becas
Route::get('/beca', 'ScholarshipController@index');
Route::post('/beca', 'ScholarshipController@store');
Route::get('/beca/alta', 'ScholarshipController@create');
Route::get('/beca/editar/{id_beca}', 'ScholarshipController@edit')->where('id_beca','[0-9]+');
Route::post('/beca/{id_beca}', 'ScholarshipController@storeEdit')->where('id_beca','[0-9]+');
Route::delete('/beca/{id_beca}', 'ScholarshipController@delete')->where('id_beca','[0-9]+');

//Rutas para servicio complementario
Route::get('/serviciocomplementario', 'ComplementaryServiceController@index');
Route::post('/serviciocomplementario', 'ComplementaryServiceController@store');
Route::get('/serviciocomplementario/alta', 'ComplementaryServiceController@create');
Route::get('/serviciocomplementario/editar/{id_servicio_complementario}', 'ComplementaryServiceController@edit')->where('id_servicio_complementario','[0-9]+');
Route::post('/serviciocomplementario/{id_servicio_complementario}', 'ComplementaryServiceController@storeEdit')->where('id_servicio_complementario','[0-9]+');
Route::delete('/serviciocomplementario/{id_servicio_complementario}', 'ComplementaryServiceController@delete')->where('id_servicio_complementario','[0-9]+');

//Rutas para matricula
Route::get('/matricula', 'EnrollmentController@index');
Route::post('/matricula', 'EnrollmentController@store');
Route::post('/matricula/datos', 'EnrollmentController@show');
Route::get('/matricula/alta', 'EnrollmentController@create');
Route::get('/matricula/editar/{id_matricula}', 'EnrollmentController@edit')->where('id_matricula','[0-9]+');
Route::post('/matricula/{id_matricula}', 'EnrollmentController@storeEdit')->where('id_matricula','[0-9]+');
Route::delete('/matricula/{id_matricula}', 'EnrollmentController@delete')->where('id_matricula','[0-9]+');

//Rutas para materia
Route::get('/materia', 'MatterController@index');
Route::post('/materia', 'MatterController@store');
Route::get('/materia/alta', 'MatterController@create');
Route::get('/materia/editar/{id_materia}', 'MatterController@edit')->where('id_materia','[0-9]+');
Route::post('/materia/{id_materia}', 'MatterController@storeEdit')->where('id_materia','[0-9]+');
Route::delete('/materia/{id_materia}', 'MatterController@delete')->where('id_materia','[0-9]+');

//Rutas para division
Route::get('/division', 'DivisionController@index');
Route::post('/division', 'DivisionController@store');
Route::get('/division/alta', 'DivisionController@create');
Route::get('/division/editar/{id_division}', 'DivisionController@edit')->where('id_division','[0-9]+');
Route::post('/division/{id_division}', 'DivisionController@storeEdit')->where('id_division','[0-9]+');
Route::delete('/division/{id_division}', 'DivisionController@delete')->where('id_division','[0-9]+');