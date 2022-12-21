<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class OfficeAdministration extends Controller
{
    public function office_admin_index()
    {
        return view('OfficeAdministration.office_admin_index');
    }
}