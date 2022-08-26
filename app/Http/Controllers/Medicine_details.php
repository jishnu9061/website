<?php

namespace App\Http\Controllers;
use App\model\medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Medicine_details extends Controller   
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     	$allmedicines=DB::table('medicines')->orderby('created_at','DESC')->paginate(10);
    	return view ('pharmacy.allmedicines',['allmedicines'=>$allmedicines]);    	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicine_name=$request->input('medicine_name');
        $medicine_category=$request->input('medicine_category');
        $purchase_price=$request->input('purchase_price');
        $selling_price=$request->input('selling_price');
        $quantity=$request->input('quantity');
        $exp_date=$request->input('exp_date');
        $minimum_stock=$request->input('minimum_stock');
       
        DB::insert('insert into medicines(medicinename,medicine_category,purchase_price,selling_price,quantity,expirydate,minimum_stock) values (?,?,?,?,?,?,?)',[$medicine_name,$medicine_category,$purchase_price,$selling_price,$quantity,$exp_date,$minimum_stock]);
        return back();
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $Medicines=DB::table('medicines')->get();
        // return view('store.View_medicines',compact('Medicines'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicines=medicines::find($id);
        return view('pharmacy.allmedicines',compact('medicines','id'));
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
        $id=$Request['med_id'];     
        $medicine_name=$Request['medicine_name'];
        $medicine_category=$Request['medicine_category'];  
        $purchase_price=$Request['purchase_price'];
        $selling_price=$Request['selling_price'];
        // dd($selling_price);
        $quantity=$Request['quantity'];
        $exp_date=$Request['exp_date'];
        $minimum_stock= $Request['minimum_stock'];
        $editdata=array('medicinename'=>$medicine_name,'medicine_category'=>$medicine_category,'purchase_price'=> $purchase_price,'selling_price'=>$selling_price,'quantity'=>$quantity,'expirydate'=>$exp_date,'minimum_stock'=>$minimum_stock);
        DB::table('medicines')->where('id',$id)->update($editdata);
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
        DB::table('medicines')->where('id',$id)->delete();
        return redirect('/store_addmedicine');
    }
}
?>