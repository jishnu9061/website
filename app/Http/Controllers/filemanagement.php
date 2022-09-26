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

    //document temblate

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
    
    public function u_details()
    {
        return view('system-settings.u_details');
    }

    public function add_user()
    {
        return view('system-settings.User.add_user');
    }
    public function change_password()
    {
        return view('system-settings.User.change_password');
    }

//file management instructions

public function new_instructions()
{
    return view('file_management.office_instructions');
}

public function add_new_instructions()
{
    return view('file_management.new_office_instructions');
}

public function view_new_instructions()
{
    return view('file_management.instructions_report');
}

}
