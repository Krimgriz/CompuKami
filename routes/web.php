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
/* pruevas de rutas   */
Route::get('/', 'IndexController@getHome');

Route::get('login', function(){
	return view('user.login');
});

Route::get('logout', function(){
	return view('user.logout');
});

Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

/* 
Route::get('prueba', function () {
    return view('pruebas.prueba');
});
Route::get('/', function () {
    return 'Hola Mundo';
});

Route::get('foo/bar', function(){
	return '¡Hola mundo!';
});

 */
