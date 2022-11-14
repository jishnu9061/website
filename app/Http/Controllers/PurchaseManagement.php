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

}

