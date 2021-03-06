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
Route::get('/', 'HomeController@getHome');

/* pruevas de rutas   
Route::get('login', function(){
	return view('user.login');
});

*/

Route::get('logout', function(){
	Auth::logout();
	return view('auth.login');
});

Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::group(['middleware' => 'auth'], function() {	

	Route::get('catalog/create', 'CatalogController@getCreate');

	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

	Route::post('catalog/create', 'CatalogController@postCreate');

	Route::put('catalog/edit/{id}', 'CatalogController@putEdit');

	Route::put('catalog/rent/{id}', 'CatalogController@putRent');

	Route::put('catalog/return/{id}', 'CatalogController@putReturn');

	Route::delete('catalog/delete/{id}', 'CatalogController@deleteMovie');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//ruta para pruebas y sus diversas rutas

Route::get('pruebas', function(){
	return view('pruebas.pruebas');
});
Route::get('pruebas/PDF', function(){
	return view('pruebas.PDF.prueba');
});
Route::get('pruebas/graficas', function(){
	return view('pruebas.graficas.graficas');
});