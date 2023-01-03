<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PurchaseManagement extends Controller
{
    public function index_purchase()
    {
        return view('purchase_management.purchase_index');
    }
    public function purchase_order()
    {
        $purchase_order = DB::table('cra_add_new_purchase')->get();
        return view('purchase_management.purchase_order',compact('purchase_order'));
    }

    
    public function store_purchase(Request $request){

            $purchase_date   = $request['date'];
            $order_number    = $request['number'];
            $supplier        = $request['Supplier'];
            $payment         = $request['Payment'];
            $status          = $request['Order-Placed'];
            $grand_total     = $request['grand_total'];
            $advance_amount  = $request['advance_amount'];
            $pending_amount  = $request['pending_amount'];

            $values = DB::table('cra_add_new_purchase')->insertGetId([
             'purchase_date'        =>   $purchase_date,
             'purchase_order_number'=>   $order_number,
             'payment_type'         =>   $payment,
             'supplier_name'        =>   $supplier,
             'status'               =>   $status,
             'grand_total'          =>   $grand_total,
             'advance_amount'       =>   $advance_amount,
             'pending_amount'       =>   $pending_amount  
            ]);

            
            DB::table('cra_purchase_order_details')->insert([

                'purchase_date'        =>   $purchase_date,
                'purchase_order_number'=>   $order_number,
                'payment_type'         =>   $payment,
                'supplier_name'        =>   $supplier,
                'status'               =>   $status,
                'grand_total'          =>   $grand_total,
                'advance_amount'       =>   $advance_amount,
                'pending_amount'       =>   $pending_amount  
               ]);

            $item_id     = count($request->input('batch_no'));
            $document    = [];

            for($i=0; $i < $item_id; $i++){

                $document[] = [
                    'purchase_id'=> $values,
                    'item_no'   => $request->input('batch_no')[$i],
                    'item_name' => $request->input('item_name')[$i],
                    'quantity' => $request->input('quantity')[$i],
                    'price'    => $request->input('price')[$i],
                    'total'    => $request->input('total')[$i]
                ];
            }

            DB::table('cra_purchase_items')->insert($document);

            return redirect('/purchase_order');

    }

    public function view_purchase_order($purchase_id)
    {
        
        $view_order = DB::table('cra_add_new_purchase')->where('purchase_id',$purchase_id)->get();
        

        $view_purchase_order = DB::table('cra_purchase_items')->where('purchase_id',$purchase_id)->get();
       
        
        return view('purchase_management.view_purchase_reports',compact('view_purchase_order','view_order','purchase_id'));
    }

    public function purchase_order_report()
    {
        $purchase_order_report = DB::table('cra_add_new_purchase')->get();
        return view('purchase_management.purchase_order_report',compact('purchase_order_report'));
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

    public function purchase_view($purchase_id)
    {
        $purchase_view  = DB::table('cra_add_new_purchase')->where('purchase_id',$purchase_id)->get();
        $purchase       = DB::table('cra_purchase_items')->where('purchase_id',$purchase_id)->get();

        return view('purchase_management.purchase_view',compact('purchase_id','purchase_view','purchase'));
    }


    public function edit_purchase($purchase_id)
    {
        $edit_purchase  = DB::table('cra_add_new_purchase')->where('purchase_id',$purchase_id)->get();
        $edit_purchases = DB::table('cra_purchase_items')->where('purchase_id',$purchase_id)->get();
        return view('purchase_management.edit_purchase',compact('edit_purchase','purchase_id','edit_purchases'));
    }

    public function suppliers()
    {
        return view('purchase_management.supplier');
    }

    


}

