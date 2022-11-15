<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class store extends Controller
{
    public function index()
    {
        return view('Store & Inventory.Store_&_Inventory_index');
    }
    public function list_manage_categories()
    {
        return view('Store & Inventory.manage_categories');
    }
    public function list_manage_items()
    {
        return view('Store & Inventory.manage_items');
    }
    public function stock_list_report()
    {
        return view('Store & Inventory.stock_list_report');
    }

}

