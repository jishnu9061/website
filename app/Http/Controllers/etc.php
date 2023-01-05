<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class etc extends Controller
{
    public function index()
	{
		// return "<h1>hello</h1>";
		return view('etc.about');
	}

	public function index_help()
	{
		// return "<h1>hello</h1>";
		return view('etc.help');
	}
}



