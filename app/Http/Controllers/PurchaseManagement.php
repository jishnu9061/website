<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class PurchaseManagement extends Controller
{
    public function index_purchase()
    {
        return view('purchase_management.purchase_index');
    }
    public function purchase_order()
    {
        return view('purchase_management.purchase_order');
    }
    public function purchase_order_report()
    {
        return view('purchase_management.purchase_order_report');
    }


}

