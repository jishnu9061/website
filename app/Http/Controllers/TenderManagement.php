<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class TenderManagement extends Controller
{
    public function tender_index()
    {
        return view('TenderManagement.tender_index');
    }
    public function tender_details()
    {
        return view('TenderManagement.tender_details');
    }
    public function view_tender_details()
    {
        return view('TenderManagement.view_tender_details');
    }
    public function edit_tender_details()
    {
        return view('TenderManagement.edit_tender_details');
    }
    public function apply_tender()
    {
        return view('TenderManagement.apply_tender');
    }
    public function view_apply_tender()
    {
        return view('TenderManagement.view_apply_tender');
    }
}