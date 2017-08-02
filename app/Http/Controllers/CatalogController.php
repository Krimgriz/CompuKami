<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller{
	
	public function getIndex(){
		$arrayPeliculas = Movie::orderBy('id')->select('id','title', 'year','director','poster','rented','synopsis')->get();

		//$arrayPeliculas = Movie::all();
		return view('catalog.catalog')->with('arrayPeliculas',$arrayPeliculas);
	}

	public function getShow($id){
		$arrayPeliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get();
		return view('catalog.show',array('id'=>$id))->with('arrayPeliculas',$arrayPeliculas);
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		$arrayPeliculas = Movie::orderBy('id')->select('id', 'title', 'year', 'director', 'poster', 'rented', 'synopsis')->where('id', $id)->get();  
		return view('catalog.edit',array('id'=>$id))->with('arrayPeliculas',$arrayPeliculas);
	}
}
