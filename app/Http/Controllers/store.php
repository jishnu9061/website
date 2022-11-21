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
    public function stock_list_tab()
    {
        return view('Store & Inventory.stock_list');
    }
    public function request_items()
    {
        return view('Store & Inventory.request_item');
    }
    public function item_movement_report()
    {
        return view('Store & Inventory.item_movement');
    }
    public function view_item_movement_report()
    {
        return view('Store & Inventory.view_item_movement');
        
    }
    public function re_order_list()
    {
        return view('Store & Inventory.re_order');
        
    }
    public function edit_list_manage_categories()
    {
        return view('Store & Inventory.edit_manage_categories');
        
    }
    public function edit_request_items()
    {
        return view('Store & Inventory.edit_request_item');
        
    }


}

