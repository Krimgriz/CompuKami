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
Route::get('/', function () {
    return view('index');
});

Route::get('login', function(){
	return view('user.login');
});

Route::get('logout', function(){
	return view('user.logout');
});

Route::get('catalog', function(){
	return view('catalog.catalog');
});

Route::get('catalog/show/{id}', function($id){
	return view('catalog.show',array('id'=>$id));
});

Route::get('catalog/create', function(){
	return view('catalog.create');
});

Route::get('catalog/edit/{id}', function($id){
	return view('catalog.edit',array('id'=>$id));
});

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
