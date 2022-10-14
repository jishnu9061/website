<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departments;
use App\model\suppliers;
use App\model\medicines;
use App\model\issue_registers;
use App\model\payment_type;
use App\model\manufactuers;
use App\model\medicine_unit;
use App\model\medicine_groups;
use App\model\stock_details;
use App\model\medicines_details;
use App\model\medicine_types;
use App\model\categories;
use App\model\brand_names;
use App\model\generic_names;
use App\model\new_medicines;
use App\model\purchase;
use App\model\purchase_items;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
use Auth;
use Laravel\Ui\Presets\React;

class store_oneController extends Controller
{
    public function show_new_item(){
        $item_list =  DB::table('medicines_details')
        ->select('*','medicines_details.id as id','medicines_details.quantity as current_stock','medicines.id as medicine_id')
        ->leftjoin('medicines','medicines.id','=','medicines_details.Item_name')
        ->get();
        // dd($item_list);
        $brands=DB::table('brand_names')->get();
        $medicine_groups=DB::table('medicine_groups')->get();
        $generic1_name=DB::table('generic_names')->select('id as generic_id','generic_name')->get();
        $medicine_categories=DB::table('categories')->select('id as categories_id','category_name')->get();
        $item_details=DB::table('medicines')->get();
        $manufacturer=DB::table('manufactuers')->get();
        $Supplier=DB::table('suppliers')->get();



        // return view('store.add_medicine',compact('brands','medicine_groups','generic1_name','medicine_categories','item_details'));
        return view('store.add_medicine',compact('item_list','brands','medicine_groups','generic1_name','medicine_categories','item_details','manufacturer','Supplier'));
    }
    public function create_new_item(Request $request){
        $brand_name=$request['brand_name'];
        $item_name=$request['item_name'];
        $item_group=$request['item_group'];
        $category_name=$request['category_name'];
        $genric_name=$request['genric_name'];
        $minimum_level=$request['minimum_level'];
        $reorder_level=$request['reorder'];
        $image=$request->input('image');
        $item_details=$request->input('item_details');
        $item_note=$request->input('item_note');
        $hospital=Auth::user()->Hospital;
        if(!empty($request->file('image'))){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);}
            $input = $request->all();

            if ($image = $request->file('image')) {

                $destinationPath = 'image/medicine/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $paths = $profileImage;

            }else{
                $paths = '';
            }
        DB::table('medicines')->insertGetId([
            'brand_name'=>$brand_name,
            'Item_name'=> $item_name,
            'item_group'=>$item_group,
            'category_name'=>$category_name,
            'hospital'=> $hospital,

        ]);


    return back()->withInput();
    }

    public function view_new_items($id){
            $brands=DB::table('brand_names')->get();
            $medicine_groups=DB::table('medicine_groups')->get();
            $generic1_name=DB::table('generic_names')->select('id as generic_id','generic_name')->get();
            $medicine_categories=DB::table('categories')->select('id as categories_id','category_name')->get();
            $item_details=DB::table('medicines')->where('id',$id)->get();
            $stock_details=DB::table('medicines_details')->where('id',$id)->get();
            return view('store.view_item_details',compact('brands','medicine_groups','generic1_name','medicine_categories','item_details','stock_details'));
        }

        public function edit_item($id){
                // $item_details=medicines::find($id)->get();
                $item_details=DB::table('medicines')->where('id',$id)->get();

                $brands=DB::table('brand_names')->select('id as brands_id0','brand_name')->get();
                $generic1_name=DB::table('generic_names')->select('id as generic_id','generic_name')->get();
                $medicine_categories=DB::table('categories')->select('id as categories_id','category_name')->get();
                $medicine_groups=DB::table('medicine_groups')->get();
                // dd( $medicine_details);
                return view('store.edit_medicine_details',compact('item_details','id','brands','generic1_name','medicine_categories','medicine_groups'));
            }
        public function update_item(Request $Request){
                    $id=$Request['item_id'];
                    $Item_name=$Request['item_name'];
                    $brand_name=$Request['brand_name'];
                    $item_group=$Request['item_group'];
                    $category_name=$Request['category_name'];
                    $generic_name=$Request['genric_name'];
                    $medicine_composition=$Request['medicine_composition'];
                    $reorder=$Request['reorder'];
                    $minimum_level=$Request['minimum_level'];
                    $medicine_composition=$Request['medicine_composition'];
                    $medicine_details=$Request['item_details'];
                    $image=$Request['editimage'];
                    if(!empty($Request->file('editimage'))){
                        $this->validate($Request, [

                            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

                        ]);}
                        $input = $Request->all();

                        if ($image = $Request->file('editimage')) {

                            $destinationPath = 'image/medicine/';
                            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                            $image->move($destinationPath, $profileImage);
                            $paths = $profileImage;
                        }

                        else{
                            $filtheimage=DB::table('medicines')->where('id',$id)->first();
                            $fetchimage=$filtheimage->upload_image;
                            $paths=$fetchimage;
                             }

                             $editdata=array('brand_name'=>$brand_name,'Item_name'=> $Item_name,'item_group'=>$item_group,'category_name'=>$category_name,'generic_name'=>$generic_name,'reorder_level'=>$reorder,'minimum_level'=> $minimum_level,'medicine_composition'=>$medicine_composition,'notes'=>$medicine_details,'upload_image'=>$paths);
                             DB::table('medicines')->where('id',$id)->update($editdata);
                             return back()->withInput();
                }
                public function delete_item_details($id)
                {
                    DB::table('medicines')->where('id',$id)->delete();
                       return back();
                }

    // Add New items
    public function create_item_details(){
        $new_item=DB::table('medicines')->get();
        return view('store.Add_new_item_views',compact('new_item'));
    }
    public function add_item(Request $Request){
        $hospital=Auth::user()->Hospital;
        $brand_name=$Request['brand_name'];
        $new_item=$Request['item_name'];
        $profit_percentage=$Request['profit_percentage'];
        DB::insert('insert into  medicines(brand_name,Item_name,profit_percentage,hospital) values (?,?,?,?)',[ $brand_name,$new_item,$profit_percentage,$hospital]);
        return back()->withInput();
    }
    public function edit_item1($id){

        $new_item= medicines::find($id);
        return view('store.Add_new_item_views',compact('new_item','id'));
    }
    public function update_new_item(Request $Request){
        $id=$Request['item_id'];
        $brand_name=$Request['brand_name'];
        $new_item=$Request['item_name'];
        $profit_percentage=$Request['profit_percentage'];

        $editdata=array('brand_name'=>$brand_name,'Item_name'=> $new_item,'profit_percentage'=> $profit_percentage );

        DB::table('medicines')->where('id',$id)->update($editdata);
        return back()->withInput();
    }
     public function item_delete($id)
    {
        DB::table('medicines')->where('id',$id)->delete();
        return back();
    }
    // Store Stock details
    public function stock_details(){
        $purchase_details=DB::table('purchase')
        ->leftjoin('payment_type','payment_type.payment_id','=','purchase.payment_type')
        ->leftjoin('suppliers','suppliers.id','=','purchase.supplier')
        ->leftjoin('manufactuers','manufactuers.id','=','purchase.manufacturer')
        ->where('purchase.status', '=', 'Received')
        ->where('purchase.id')
        ->get();
        $purchase_item=DB::table('purchase_items')
        ->leftjoin('medicines','medicines.id','=','purchase_items.item_name')
        ->leftjoin('purchase','purchase.id','=','purchase_items.purchase_id')
        ->where('purchase_items.purchase_id')
        ->get();
        $purchase1=DB::table('purchase')
        ->where('purchase.status', '=','verified')
        ->get();
        $stock_details=DB::table('medicines_details')->get();
        return view('store.view_stock',compact('purchase_details','purchase1','purchase_item'));

    }
    public function show_stock_details(){
        return view('store.view_stock_details');
    }
    public function create_stock($id,Request $request){
        $purchase=DB::table('purchase')->where('purchase_orderno',$id)->first();
        $purchase_details=DB::table('purchase')
        ->leftjoin('payment_type','payment_type.payment_id','=','purchase.payment_type')
        ->leftjoin('medicines','medicines.id','=','purchase.id')
        ->leftjoin('suppliers','suppliers.id','=','purchase.supplier')
        ->leftjoin('purchase_items','purchase_items.id','=','purchase.id')
        ->leftjoin('manufactuers','manufactuers.id','=','purchase.manufacturer')
        ->where('purchase.id',$id)
        ->get();
        $purchase_item=DB::table('purchase_items')
        ->leftjoin('medicines','medicines.id','=','purchase_items.item_name')
        ->leftjoin('purchase','purchase.id','=','purchase_items.purchase_id')
        ->where('purchase_items.purchase_id',$id)
        ->get();
        // $reorder=DB::table('medicines')
        // ->leftjoin('medicines_details','medicines_details.id','=','medicines.id')
        // ->leftjoin('purchase','purchase.id','=','medicines.id')
        // ->where('medicines.id',$id)
        // ->get();
       return view('store.add_stock_details',compact('id','purchase_details','purchase_item','purchase'));
    }
    public function add_stock(Request $request){
     // dd($request['purchase_id']);
     $hospital= Auth::user()->Hospital;
     $id=$request['purchase_id'];
     $date=$request['date'];
     $purchase_date=$request['purchase_date'];
     $purchase_order=$request['purchase_order'];
     $payment_type=$request['payment_type'];
     $supplier=$request['supplier'];
     $manufacturer=$request['manufacturer'];
     $overhead_charge=$request['overhead_charges'];
     $item_name=$request['item_name'];
     $batch_no=$request['batch_no'];
     $quantity=$request['quantity'];
     $price=$request['purchase_rate'];
     $profit_percentage=$request['profit_percentage'];
     $sales_price=$request['sales_price'];
     $expiry_date=$request['expiry_date'];
        foreach ($item_name as $idx=>$val)
        {
            $final_array[] = [$val,$batch_no[$idx],$quantity[$idx],$price[$idx],$profit_percentage[$idx],$sales_price[$idx],$expiry_date[$idx]];
        }

        foreach($final_array as $f_array){
            DB::table('medicines_details')->insert(
                array(

                'added_date'=>$date,
                'purchase_date'=>$purchase_date,
                'order_no'=>$purchase_order,
                'payment_type'=>$payment_type,
                'supplier'=>$supplier,
                'manufacturer'=>$manufacturer,
                'overhead_charge'=>$overhead_charge,
                'hospital'=>$hospital,
                'purchase_id'=>$request['purchase_id'],
                'item_name'=>$f_array[0],
                'batch_no'=>$f_array[1],
                'quantity'=>$f_array[2],
                'purchase_rate'=>$f_array[3],
                'profit_percentage'=>$f_array[4],
                'sales_price'=>$f_array[5],
                'expiry_date'=>$f_array[6]
             )
         );
     }

 return redirect()->route('stock_details');

}
    public function view_stock_details(){
       $purchase_details=DB::table('purchase')
        ->leftjoin('payment_type','payment_type.payment_id','=','purchase.payment_type')
        ->leftjoin('suppliers','suppliers.id','=','purchase.supplier')
        ->leftjoin('manufactuers','manufactuers.id','=','purchase.manufacturer')
        ->where('purchase.id',)
        ->get();
        $purchase_item=DB::table('purchase_items')
        ->leftjoin('medicines','medicines.id','=','purchase_items.item_name')
        ->leftjoin('purchase','purchase.id','=','purchase_items.purchase_id')
        ->where('purchase_items.purchase_id')
        ->get();
        $stock_details=DB::table('medicines_details')->get();
        return view('store.view_stock_details',compact('stock_details','purchase_details','purchase_item'));
    }
    public function view_purchase_details_stock($id){
        $suppliers=DB::table('suppliers')->select('id as suppliers_id','supplier_name')->get();
        $manufacturers=DB::table('manufactuers')->select('id as manufactuers_id','manufactuers_name')->get();
        $purchase_details=DB::table('purchase')
        ->leftjoin('payment_type','payment_type.payment_id','=','purchase.payment_type')
        ->leftjoin('suppliers','suppliers.id','=','purchase.supplier')
        ->leftjoin('manufactuers','manufactuers.id','=','purchase.manufacturer')
        ->where('purchase.id',$id)
        ->get();
        $purchase_item=DB::table('purchase_items')
        ->leftjoin('medicines','medicines.id','=','purchase_items.item_name')
        ->leftjoin('purchase','purchase.id','=','purchase_items.purchase_id')
        ->where('purchase_items.purchase_id',$id)
        ->get();
        return view('store.view_purchase_details_stock',compact('suppliers','manufacturers','purchase_details','purchase_item'));
    }
    public function view_add_new_stock_details(){
        return redirect()->route('stock_details');
    }
    public function view_add_details($id){
        $purchase=DB::table('purchase')->where('purchase_orderno',$id)->first();
        $purchase_details=DB::table('purchase')
        ->select('*')
        ->leftjoin('payment_type','payment_type.payment_id','=','purchase.payment_type')
        ->leftjoin('medicines','medicines.id','=','purchase.id')
        ->leftjoin('suppliers','suppliers.id','=','purchase.supplier')
        ->leftjoin('purchase_items','purchase_items.id','=','purchase.id')
        ->leftjoin('manufactuers','manufactuers.id','=','purchase.manufacturer')
        ->where('purchase.id',$id)
        ->get();
        $purchase_item=DB::table('purchase_items')
        ->leftjoin('medicines','medicines.id','=','purchase_items.item_name')
        ->leftjoin('purchase','purchase.id','=','purchase_items.purchase_id')
        ->where('purchase_items.purchase_id',$id)
        ->get();
        //  $purchase_add_details=DB::table('medicines_details')
        // // ->leftjoin('medicines_details','medicines_details.id','=','purchase_items.item_name')
        // ->leftjoin('medicines','medicines.id','=','medicines_details.Item_name')
        // // ->leftjoin('purchase','purchase.id','=','purchase_items.item_name')
        // ->where('medicines_details.id',$id)
        // ->get();
        return view('store.view_stock_add_details',compact('id','purchase_details','purchase','purchase_details','purchase_item'));
    }




}
