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
    public function pay_supplier_invoice()
    {
        return view('OfficeAdministration.pay_supplier_invoice');
    }
    public function supplier_credit_notes()
    {
        return view('OfficeAdministration.supplier_credit_notes');
    }
    public function supplier_invoice()
    {
        return view('OfficeAdministration.supplier_invoice');
    }


    public function balances()
    {
        return view('OfficeAdministration.balance');
    }

    public function cheques()
    {
        return view('OfficeAdministration.cheque');
    }

    public function file_offices()
    {
        return view('OfficeAdministration.file_office');
    }

    public function Payments()
    {
        return view('OfficeAdministration.Payment');
    }

    public function budgets()
    {
        return view('OfficeAdministration.budget');
    }
    public function supplier_monthly_schedule()
    {
        return view('OfficeAdministration.supplier_monthly_schedule');
    }
    public function suppliers_list()
    {
        return view('OfficeAdministration.suppliers_list');
    }
    
}