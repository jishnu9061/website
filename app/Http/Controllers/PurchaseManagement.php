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
    public function view_purchase_order()
    {
        return view('purchase_management.view_purchase_reports');
    }
    public function purchase_order_report()
    {
        return view('purchase_management.purchase_order_report');
    }
    public function vendor_performance_report()
    {
        return view('purchase_management.vendor_performance_report');
    }
    public function view_supplier()
    {
        return view('purchase_management.view_supplier');
    }
    public function edit_supplier()
    {
        return view('purchase_management.edit_supplier');
    }
    // public function cost_variation_report()
    // {
    //     return view('purchase_management.cost_variation_report');
    // }
    public function ledger_details()
    {
        return view('purchase_management.ledger_details');
    }
    public function purchase_view()
    {
        return view('purchase_management.purchase_view');
    }
    public function edit_purchase()
    {
        return view('purchase_management.edit_purchase');
    }

    public function suppliers()
    {
        return view('purchase_management.supplier');
    }

    


}

