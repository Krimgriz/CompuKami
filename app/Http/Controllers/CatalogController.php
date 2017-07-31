<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller{
	public function getIndex(){
		$this->arrayPeliculas;
		return view('catalog.catalog');
	}

	public function getShow($id){
		$this->arrayPeliculas[$id];
		return view('catalog.show',array('id'=>$id));
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		return view('catalog.edit',array('id'=>$id));
	}
}