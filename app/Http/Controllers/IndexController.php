<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller{
	
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function getHome(){
		return redirect()->action('CatalogController@getIndex');
		//return view('index');
	}

}
