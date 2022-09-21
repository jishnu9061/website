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

    public function addnew()
    {
        return view('file_management.add-new-file');
    }


    //document temblates
    public function template()
    {
        return view('file_management.template-category');
    }

    //document temblates

    //file progress

    public function progressbringup()
    {
        return view('file_management.progress-bringup');
    }

    public function addbringup()
    {
        return view('file_management.add-new-bringup');
    }

    public function addprogress()
    {
        return view('file_management.add-file-progress');
    }

    public function editprogress()
    {
        return view('file_management.edit-file-progress');
    }
    public function newinstruction()
    {
        return view('file_management.new-instructions');
    }

    public function fileactionhours()
    {
        return view('file_management.file-action-hours');
    }
    //file progress


}
