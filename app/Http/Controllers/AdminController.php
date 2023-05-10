<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message', 'succesfully added category');;

    }
    public function view_product()
    {
        $data=category::all();
        return view('admin.product',compact('data'));
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Successfully Deleted Category');
    }

    public function add_product(Request $request)
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('message','product added succesfully');
    }
    public function show_product()
    {
        $data=product::paginate(1);
        return view('admin.show_product',compact('data'));
    }
    public function delete_product($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','product deleted successfully');
    }
    public function update_product($id)
    {
        $data=product::find($id);
        $category=category::all();
        return view('admin.update',compact('data','category'));
    }
    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->category;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('/product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('message','successfully updated product data');

        return view('admin.update',compact('data'));
    }
    public function product_add()
    {
        $data=category::all();
        return view('admin.product',compact('data'));
    }
    public function product_list()
    {
        return view('admin.product-list');
    }
}
?>
