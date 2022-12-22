<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TenderManagement extends Controller
{
    public function tender_index()
    {
        return view('TenderManagement.tender_index');
    }

    //tender details//
    public function tender_details()
    {
        $tender_details = DB::table('cra_tender_details')->get();
        return view('TenderManagement.tender_details',compact('tender_details'));
    }

    public function store_tender(Request $request){

            $from_date = $request['from_date'];
            $to_date   = $request['to_date'];
            $item      = $request['item'];
            $category  = $request['Category'];
            $quantity  = $request['Quantity'];
            $description=$request['Description'];


            DB::table('cra_tender_details')->insert([

                    'from_date'     => $from_date,
                    'to_date'       => $to_date,
                    'item'          => $item,
                    'category'      => $category,
                    'quantity'      => $quantity,
                    'description'   => $description
            ]);

            return redirect('/tender_details');
    }

    public function view_tender_details($id)
    {
        $view_tender_details = DB::table('cra_tender_details')->where('id',$id)->first();
        return view('TenderManagement.view_tender_details',compact('view_tender_details','id'));
    }


    public function edit_tender_details($id)
    {
        $edit_tender_details = DB::table('cra_tender_details')->where('id',$id)->first();
        return view('TenderManagement.edit_tender_details',compact('edit_tender_details','id'));
    }

    public function update_tender_details(Request $request){

        $id        = $request['id'];
        $from_date = $request['from_date'];
        $to_date   = $request['to_date'];
        $item      = $request['item'];
        $category  = $request['Category'];
        $quantity  = $request['Quantity'];
        $description=$request['Description'];


        DB::table('cra_tender_details')->where('id',$id)->update([

                'from_date'     => $from_date,
                'to_date'       => $to_date,
                'item'          => $item,
                'category'      => $category,
                'quantity'      => $quantity,
                'description'   => $description
        ]);

        return redirect('/tender_details');
    }

    public function delete_tender_details($id){

        DB::table('cra_tender_details')->where('id',$id)->delete();
        return redirect('/tender_details');
    }

    //tender details//


    public function apply_tender()
    {
        $apply_tender = DB::table('cra_tender_details')->get();
        return view('TenderManagement.apply_tender',compact('apply_tender'));
    }

    public function view_apply_tender($id)
    {
        $view_apply_tender = DB::table('cra_tender_details')->where('id',$id)->first();
        return view('TenderManagement.view_apply_tender',compact('view_apply_tender','id'));
    }

    public function store_apply_tender(Request $request){

            $date           = $request['date'];
            $item           = $request['item_name'];
            $quantity       = $request['Quantity'];
            $supplier_name  = $request['supplier_name'];
            $mobile_no      = $request['mobile_no'];
            $address        = $request['address'];
            $description    = $request['description'];
            $document       = $request['document'];
            $contract       = $request['contract'];
            $cost           = $request['cost'];
            $payment        = $request['payment'];

            if(!empty($request->file('document'))){

                $this->validate($request,[
                    'document' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
                ]);
            }
            if(request()->hasfile('document')){
                $uploadedImage = $request->file('document');
                $imageName     = time() .'.'. $document->getClientOriginalExtension();
                $destinationPath = public_path('images/file');
                $uploadedImage->move($destinationPath,$imageName);
                $document->file    = $destinationPath.$imageName;
            }

            DB::table('cra_apply_tender')->insert([

                    'date'        =>  $date,
                    'item_name'   =>  $item,
                    'quantity'    =>  $quantity,
                    'supplier_name'=> $supplier_name,
                    'mobile_no'   =>  $mobile_no,
                    'address'     =>  $address,
                    'description' =>  $description,
                    'document'    =>  $document,
                    'period_of_contract' => $contract,
                    'cost_of_tender'=> $cost,
                    'payment_type'=>  $payment
            ]);

            return redirect('/tender_applied_details');
    }




    public function tender_applied_details()
    {
        $tender_applied_details   =    DB::table('cra_apply_tender')->get();
        return view('TenderManagement.tender_applied_details',compact('tender_applied_details'));
    }

    public function view_tender_applied($id)
    {
        $view_tender_applied   =    DB::table('cra_apply_tender')->where('id',$id)->first();
        return view('TenderManagement.view_tender_applied',compact('view_tender_applied','id'));
    }

}