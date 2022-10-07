<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientinvoicing extends Controller
{
    public function index()
    {
        return view('client-invoicing.client_invoicingindex');
    }

    public function receiptReport()
    {

        return view('client-invoicing.receipt-report');
    }
}
