<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PurchaseManagement extends Controller
{
    public function index_purchase()
    {
        return view('purchase_management.purchase_index');
    }

    public function purchase_order($id)
    {
        $supplier_order = DB::table('cra_add_supplier')->get();
        $purchase_order = DB::table('cra_add_new_purchase')
        ->leftjoin('cra_add_supplier','cra_add_supplier.id','=','cra_add_new_purchase.supplier_name')
        ->where('cra_add_new_purchase.company_id',$id)
        ->get();
        
        return view('purchase_management.purchase_order',compact('purchase_order','supplier_order','id'));
    }

    public function purchase_print($id){

       
        $print_purchase  = DB::table('cra_purchase_items')->where('id',$id)->get();
        $purchase_print  = DB::table('cra_add_new_purchase')
        ->leftjoin('cra_add_supplier','cra_add_supplier.id','=','cra_add_new_purchase.supplier_name')
        ->where('cra_add_new_purchase.id',$id)
        ->get();
       
      
        return view('purchase_management.purchase_print',compact('purchase_print','print_purchase','id'));
    }

    
    public function store_purchase(Request $request){

            $purchase_date   = $request['date'];
            $order_number    = $request['number'];
            $supplier        = $request['Supplier'];
            $payment         = $request['Payment'];
            $status          = $request['status'];
            $grand_total     = $request['grand_total'];
            $advance_amount  = $request['advance_amount'];
            $pending_amount  = $request['pending_amount'];
            $company_id      = $request['company_id'];

            $values = DB::table('cra_add_new_purchase')->insertGetId([
             'purchase_date'        =>   $purchase_date,
             'company_id'           =>   $company_id,
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
                    'total'    => $request->input('total')[$i],
                ];
            }

            DB::table('cra_purchase_items')->insert($document);

            return redirect('purchase_order/'.$company_id);

    }

    public function view_purchase_order($id)
    {
        
        $view_order = DB::table('cra_add_new_purchase')
        ->leftjoin('cra_add_supplier','cra_add_supplier.id','=','cra_add_new_purchase.supplier_name')
        ->where('cra_add_new_purchase.id',$id)
        ->get();
       
        $view_purchase_order = DB::table('cra_purchase_items')->where('id',$id)->get();
   
        return view('purchase_management.view_purchase_reports',compact('view_purchase_order','view_order','id'));
    }

    public function purchase_order_report($id)
    {
        $purchase_order_report = DB::table('cra_add_new_purchase')->where('company_id',$id)->get();
        return view('purchase_management.purchase_order_report',compact('purchase_order_report'));
    }


    public function vendor_performance_report()
    {
        return view('purchase_management.vendor_performance_report');
    }


    public function view_supplier($id)
    {
        $view_supplier   = DB::table('cra_add_supplier')->where('id',$id)->get();
        return view('purchase_management.view_supplier',compact('view_supplier','id'));
    }


    public function edit_supplier($id)
    {
        $edit_supplier  = DB::table('cra_add_supplier')->where('id',$id)->first();
        return view('purchase_management.edit_supplier',compact('edit_supplier','id'));
    }

    public function delete_supplier($id){
        DB::table('cra_add_supplier')->where('id',$id)->delete();
        return redirect('supplier/'.Auth::user()->company_id);
    }

    // public function cost_variation_report()
    // {
    //     return view('purchase_management.cost_variation_report');
    // }


    public function ledger_details($supplier_name)
    {
        $ledger_details  =  DB::table('cra_add_new_purchase')->where('supplier_name',$supplier_name)->get();
        return view('purchase_management.ledger_details',compact('ledger_details','supplier_name'));
    }

    public function purchase_view($id)
    {
        $purchase_view  = DB::table('cra_add_new_purchase')
        ->leftjoin('cra_add_supplier','cra_add_supplier.id','=','cra_add_new_purchase.supplier_name')
        ->get();
        $purchase       = DB::table('cra_purchase_items')->where('id',$id)->get();

        return view('purchase_management.purchase_view',compact('id','purchase_view','purchase'));
    }


    public function edit_purchase($id)
    {
        $edit_purchase  = DB::table('cra_add_new_purchase')
        ->leftjoin('cra_add_supplier','cra_add_supplier.id','=','cra_add_new_purchase.supplier_name')
        ->where('cra_add_new_purchase.id',$id)
        ->get();
       
        $edit_purchases = DB::table('cra_purchase_items')->where('id',$id)->get();
        return view('purchase_management.edit_purchase',compact('edit_purchase','id','edit_purchases'));
    }

    public function update_purchase(Request $request){
        
        $id         =  $request['id'];
        $date       =  $request['date'];
        $number     =  $request['number'];
        $payment    =  $request['payment'];
        $status     =  $request['status'];
        $grand_total=  $request['grand_total'];
        $advance    =  $request['advance'];
        $pending    =  $request['pending_amount'];

        DB::table('cra_add_new_purchase')->where('id',$id)->update([
            'purchase_date'         =>  $date,
            'purchase_order_number' =>  $number,
            'payment_type'          =>  $payment,
            'status'                =>  $status,
            'grand_total'           =>  $grand_total,
            'advance_amount'        =>  $advance,
            'pending_amount'        =>  $pending
        ]);

        return redirect('purchase_order_report/'.$id);
    }

    public function suppliers()
    {
        $suppliers =  DB::table('cra_add_supplier')
        ->leftjoin('cra_add_new_purchase','cra_add_new_purchase.id','=','cra_add_supplier.id')
        ->get();
      
        return view('purchase_management.supplier',compact('suppliers'));
    }

    public function store_supplier(Request $request){

            $supplier_name        =    $request['name'];
            $tax_id               =    $request['tax_id'];
            $email                =    $request['email'];
            $contact_no           =    $request['contact'];
            $address              =    $request['Address'];
            $city                 =    $request['City'];
            $provinces            =    $request['Provinces'];
            $pincode              =    $request['pincode'];
            $company_id           =    $request['company_id'];

            DB::table('cra_add_supplier')->insert([
                
            'supplier_name'       =>  $supplier_name,
            'tax_id'              =>  $tax_id,
            'email'               =>  $email,
            'contact_no'          =>  $contact_no,
            'address'             =>  $address,
            'city'                =>  $city,
            'provinces'           =>  $provinces,
            'pincode'             =>  $pincode,
            'company_id'          =>  $company_id
            ]);

            return redirect('/supplier');
    }

    public function ledger_add_payment($id){

        $ledger_add_payment  = DB::table('cra_add_new_purchase')->where('id',$id)->first();
        return view('purchase_management.ladger_add_payment',compact('ledger_add_payment','id'));
    }

    public function update_ledger_add_payment(Request $request){

        $id      =  $request['purchase_id'];
        $pending_amount   =  $request['pending_amount'];
        $amount           =  $request['amount'];
        $payment_date     =  $request['date'];

        DB::table('cra_add_new_purchase')->where('id',$id)->update([
            'pending_amount'    =>  $pending_amount
        ]);

        DB::table('cra_add_payment')->insert([
            'amount'      =>   $amount,
            'payment_date'=>   $payment_date,
            'purchase_id' =>   $id
        ]);


        return redirect('/supplier');
    }

    public function view_ledger_details($id){

        $view_ledger_details  =  DB::table('cra_add_payment')->where('id',$id)->get();
        return view('purchase_management.view_ledger_details',compact('view_ledger_details','id'));
    }


    


}

