<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class edit_file extends Controller
{
    public function index()
    {
        return view('filemanagement.edit_file');
    }
}
