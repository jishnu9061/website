<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class client_invoicing extends Controller
{
    public function index()
    {
        return view('client.client_invoicing');
    }
}
