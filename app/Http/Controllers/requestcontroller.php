<?php

namespace App\Http\Controllers;
use App\model\pharma_request;
use App\model\medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class requestcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines=DB::table('medicines')->get();

        $pharma_request=DB::table('pharma_requests')->join('medicines', 'medicines.id', '=', 'pharma_requests.medicine')->get();
        $store_request=DB::table('store_requests')->get();
        return view('pharma_request.request_item',compact('pharma_request','medicines','store_request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date=$request->input('date');
        $department=$request->input('department');
        $med_name=$request->input('medicine_name');
        $med_qty=$request->input('quantity');
        $values=DB::table('pharma_requests')->insertGetId([
            'date'=>$date,
            'purchase_date'=>$department,
            'purchase_orderno'=>$med_name,
            'payment_type'=>$med_qty
        ]);
        $item_name=$request['item_name'];
        $batch_no=$request['batch_no'];
        $quantity=$request['quantity'];
        $price=$request['price'];
        $total=$request['total'];
        // dd($Request->request);
        if(is_array($item_name)){
        foreach ($item_name as $idx=>$val)
		{
            $final_array[] = [ $val,$batch_no[$idx],$quantity[$idx],$price[$idx],$total[$idx]];
        }
        foreach($final_array as $f_array){


            DB::table('purchase_items')->insert(
            array(
                   'purchase_id'  => $values,
                   'item_name'   =>   $f_array[0],
                   'batch_no'  =>   $f_array[1],
                   'quantity'  =>  $f_array[2],
                   'price'  =>  $f_array[3],
                   'total'  =>  $f_array[4]
                )
            );
        }
    }
              return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $Request)
    {
        $med_id=$Request['med_id'];
        $date=$Request['date'];
        $medicine=$Request['medicine'];
        $quantity=$Request['quantity'];
        $editdata=array('date'=>$date,'medicine'=>$medicine,'quantity'=>$quantity);
        DB::table('pharma_requests')->where('id',$med_id)->update($editdata);
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('pharma_requests')->where('id',$id)->delete();
        return back()->withInput();

    }
    public function view_request()
    {
        $orders=DB::table('pharma_requests')->get();
        return view('orders.view_orders',compact('orders'));
    }
}
