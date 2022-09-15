<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filemanagement extends Controller
{
    public function index()
    {
        return view('file_management.file_managementindex');
    }


    public function view()
    {
        return view('file_management.file-list');
    }

    public function edit()
    {
        return view('file_management.edit-file');
    }


}
