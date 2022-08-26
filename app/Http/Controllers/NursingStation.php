<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NursingStation extends Controller
{
    public function index()
    {
        
        return view('Nursing_station.nursing_home');
    }
}
