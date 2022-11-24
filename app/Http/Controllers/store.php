<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use DB;

class store extends Controller
{
    public function index()
    {
        return view('Store & Inventory.Store_&_Inventory_index');
    }

    public function addproduct(Request $request)
    {
        $item_name=$request['item_name'];
        $category=$request['category'];
        $item_type=$request['item_type'];
        $unit=$request['unit'];
        $quantity=$request['quantity'];
        $unit_price=$request['unit_price'];

        DB::table('cra_add_product')->insert([

            'item_name' => $item_name,
            'category' => $category,
            'item_type' => $item_type,
            'unit' => $unit,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
        ]);

       return redirect('/manage_categories');
    }


    public function list_manage_categories()
    {
        $category_list = DB::table('cra_add_product')->get();
        return view('Store & Inventory.manage_categories',compact('category_list') );
    }

    public function editproduct($id)
    {
        $edit_category = DB::table('cra_add_product')->where('id',$id)->first();
        return view('Store & Inventory.edit_product',compact('edit_category','id'));
    }

    public function updateproduct(Request $request)
    {
        $id=$request['id'];
        $item_name=$request['item_name'];
        $category=$request['category'];
        $item_type=$request['item_type'];
        $unit=$request['unit'];
        $quantity=$request['quantity'];
        $unit_price=$request['unit_price'];

        DB::table('cra_add_product')->where('id',$id)->update([

            'item_name' => $item_name,
            'category' => $category,
            'item_type' => $item_type,
            'unit' => $unit,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
        ]);

       return redirect('/manage_categories');
    }

    public function deleteproduct($id)
    {
        $delete_category = DB::table('cra_add_product')->where('id',$id)->delete();
        return view('Store & Inventory.manage_categories',compact('delete_category','id'));
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


 public function editcategory($id)
    {

        $edit=DB::table('cra_add_categories')->where('id',$id)->first();
        return view('Store & Inventory.edit_category',compact('edit','id'));
        
    }

    public function newcategories(Request $request)
    {

        $category_name=$request['category_name'];
        DB::table('cra_add_categories')->insert([ 
            'category_name' => $category_name,  
       ]);

        return redirect('/add_categories');
        
        
    }

    public function list_add_categories()
    {

        $list_category=DB::table('cra_add_categories')->get();
        return view('Store & Inventory.add_categories',compact('list_category'));
        
    }
    
    public function updatecategory(Request $request)
    {

        $id=$request['id'];
        $category_name=$request['category_name'];
        
        DB::table('cra_add_categories')->where('id',$id)->update([

            'category_name'=>$category_name,
        ]);
        return redirect('/add_categories');
        
    }

    public function deletecategory($id)
    {

        $delete=DB::table('cra_add_categories')->where('id',$id)->delete();
        return view('Store & Inventory.add_categories',compact('delete','id'));
        
    }

}

