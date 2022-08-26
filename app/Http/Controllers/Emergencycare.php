<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Emergencycare extends Controller
{
    public function index()
	{
		// return "<h1>hello</h1>";
		return view('Emergency_care.emergency_home');
	}
}
