<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class accindex extends Controller
{
    public function index()
    {
        return view('Accounts.accindex');
    }

}

class matters extends Controller
{
    public function index()
    {
        return view('user_management.matters');
    }

}






