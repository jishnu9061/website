<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class file_management extends Controller
{
    public function index()
    {
        return view('filemanagement.file_management');
    }
}
