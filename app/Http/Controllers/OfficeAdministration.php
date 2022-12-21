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
    public function creditor_list()
    {
        return view('OfficeAdministration.creditor_list');
    }
    public function creditors_aging_report()
    {
        return view('OfficeAdministration.creditors_aging_report');
    }
    public function supplier_expense_report()
    {
        return view('OfficeAdministration.supplier_expense_report');
    }
    
}