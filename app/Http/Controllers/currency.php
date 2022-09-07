<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class currency extends Controller
{
    public function index()
    {
        return view('bank.currency');
    }
}
