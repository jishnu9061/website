<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editcurrency extends Controller
{
    public function index()
    {
        return view('bank.edit_currency');
    }
}
