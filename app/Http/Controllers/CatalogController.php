<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller{
	
	public function getIndex(){
		$arrayPeliculas = DB::table('movies')->select('id','title', 'year','director','poster','rented','synopsis')->get();

		//$arrayPeliculas = Movie::all();
		//$arrayPeliculas =  Movie::table('movies')->get();
		return view('catalog.catalog')->with('arrayPeliculas',$arrayPeliculas);
	}

	public function getShow($id){
		$arrayPeliculas = DB::table('movies')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get();
		return view('catalog.show',array('id'=>$id))->with('arrayPeliculas',$arrayPeliculas);
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		$arrayPeliculas = DB::table('movies')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get();  
		return view('catalog.edit',array('id'=>$id))->with('arrayPeliculas',$arrayPeliculas);
	}
}
