<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Notification;

class CatalogController extends Controller{
	
	public function getIndex(){
		$arrayPeliculas = Movie::orderBy('id')->select('id','title', 'year','director','poster','rented','synopsis')->get();

		//$arrayPeliculas = Movie::all();
		return view('catalog.catalog')->with('arrayPeliculas',$arrayPeliculas);
	}

	public function getShow($id){
		$peliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get()->first();
		//dd($peliculas);
		return view('catalog.show',array('id'=>$id))->with('peliculas',$peliculas);
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		$Pelicula = Movie::findOrFail($id);
		return view('catalog.edit')->with('Pelicula', $Pelicula);
	}

	public function postCreate(Request $request){		 
		$p = new Movie;
		$p->title = $request->input('title');
		$p->year = $request->input('year');
		$p->director = $request->input('director');
		$p->poster = $request->input('poster');
		$p->synopsis = $request->input('synopsis');
		$p->save();

		return view('catalog.catalog')->with('arrayPeliculas', Movie::all())->withErrors(Notification::success('La película se ha guardado correctamente'));

		
	}

	public function putEdit(Request $request, $id){
		$movie = Movie::findOrFail($id);

		$movie->title = $request->input('title');
		$movie->year = $request->input('year');
		$movie->director = $request->input('director');
		$movie->poster = $request->input('poster');
		$movie->synopsis = $request->input('synopsis');
		$movie->save();
		$peliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get()->first();
		return view('catalog.show',array('id'=>$id))->with('peliculas',$peliculas)>withErrors(
		Notification::success('La película se ha editado correctamente'));
	}

	public function putRent($id){
		$movie = Movie::findOrFail($id);
		$movie ->rented = 1;
		$movie -> save();
		$peliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get()->first();
		return view('catalog.show',array('id'=>$id))->with('peliculas',$peliculas)->withErrors(Notification::success('Película Rentada'));
	
	}
	
	public function putReturn($id){
		$movie = Movie::findOrFail($id);
		$movie ->rented = 0;
		$movie -> save();
		$peliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get()->first();
		return view('catalog.show',array('id'=>$id))->with('peliculas',$peliculas)->withErrors(Notification::success('Película Devuelta'));
	}
	
	public function deleteMovie($id){
		$movie = Movie::findOrFail($id);
		$movie->delete();
		return view('catalog.catalog')->with('arrayPeliculas', Movie::all())->withErrors(Notification::success('Película borrada'));

	}
}
