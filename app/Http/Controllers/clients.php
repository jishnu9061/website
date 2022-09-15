<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clients extends Controller
{
    public function index()
    {
        return view('client.clients');
    }
}
