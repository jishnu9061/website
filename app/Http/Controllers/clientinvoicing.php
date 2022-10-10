<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientinvoicing extends Controller
{
    public function index()
    {
        return view('client-invoicing.client_invoicingindex');
    }

//mugu
    public function receiptReport()
    {

        return view('client-invoicing.receipt-report');
    }

    public function reverseReport(){

        return view('client-invoicing.reverse_receipt');

    }

    public function receiptReprint(){

        return view('client-invoicing.receipt-reprint');

    }

//mugu


    public function billable_items()
    {
        return view('client-invoicing.capture_billable_items');
    }



    
    public function deptorsaggingreport()
    {
        return view('client-invoicing.debtors_aging_report');
    }

    public function deptorslist()
    {
        return view('client-invoicing.debtors_list');
    }

    public function filenoteitembilled()
    {
        return view('client-invoicing.fee_note_items_billed');
    }

    public function filenoteitemreceived()
    {
        return view('client-invoicing.fee_note_items_received');
    }

    public function feenotereport()
    {
        return view('client-invoicing.fee_note_report');
    }

    public function otherreport()
    {
        return view('client-invoicing.other_reports');
    }

    public function quotationitemreport()
    {
        return view('client-invoicing.quotation_item_report');
    }




    // reshma
    public function view_bill_item()
    {
        return view('client-invoicing.view_bill');

    }
    public function feeexpectedadvocate()
    {
        return view('client-invoicing.fee_expected_advocate');
    }

    //Reports
    //     // return view('client-invoicing.fee_notes');
    // }
    public function newfee_note()
    {
        return view('client-invoicing.new_fee_note');
    }
     // reshma
    


}
