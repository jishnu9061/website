<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filelist extends Controller
{
    public function index()
    {
        return view('filemanagement.file_list');
    }
}
