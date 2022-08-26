<?php

namespace App\Http\Controllers;

use App\departments;
use App\model\suppliers;
use App\model\purchase;
use App\model\medicines;
use App\model\issue_registers;
use App\model\payment_type;
use App\model\manufactuers;
use App\model\medicine_unit;
use App\model\sub_store;
use App\model\medicine_groups;
use App\model\stock_details;
use App\model\medicines_details;
use App\model\medicine_types;
use App\model\purchase_items;
use App\model\categories;
use App\model\brand_names;
use App\model\store_issued_items;
use App\model\generic_names;
use App\model\new_medicines;
use App\model\medicines_item_details;
use App\model\pharma_requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;
use Auth;




class storecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $suppliers = suppliers::all();

        return view('store.view_suppliers', compact('suppliers'));


        // return view('store.addsuppliers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $name = $request->input('supplier_name');
        $email = $request->input('email');
        $contact_no = $request->input('contact_no');
        $mobile = $request->input('mobile');
        $fax = $request->input('fax');
        $previous_balance = $request->input('previous_balance');
        $address = $request->input('address');
        $city = $request->input('city');
        $state = $request->input('state');
        $country = $request->input('country');
        $postal_code = $request->input('postal_code');
        $details = $request->input('supplier_details');

        DB::insert('insert into suppliers (supplier_name,email,contact_no,mobile,fax,address,city,state,country,zipcode,details) values (?,?,?,?,?,?,?,?,?,?,?)', [$name, $email, $contact_no, $mobile, $fax, $address, $city, $state, $country, $postal_code, $details]);
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idmedicine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suppliers = DB::table('suppliers')->where('id', $id)->get();
        $ledger_details = DB::table('purchase')
            ->select('*', 'suppliers.id')
            ->Leftjoin('suppliers', 'suppliers.id', '=', 'purchase.supplier')
            ->get();
        return view('store.supplier_details', compact('suppliers', 'ledger_details'));
    }
    // public function edit_supplier_details(){
    //     $suppliers=DB::table('suppliers');
    //     return view('store.Edit_supplier_details',compact('suppliers'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = suppliers::find($id);
        return view('store.supplier_details', compact('$suppliers', 'id'));
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
        $id = $Request['supplier_id'];
        $supplier_name = $Request['supplier_name'];
        $email = $Request['email'];
        $phone = $Request['phone'];
        $mobile = $Request['mobile'];
        $fax = $Request['fax'];
        $address = $Request['address'];
        $city = $Request['city'];
        $state = $Request['state'];
        $country = $Request['country'];
        $postal_code = $Request['postal_code'];
        $details = $Request['details'];

        $editdata = array('supplier_name' => $supplier_name, 'email' => $email, 'contact_no' => $phone, 'mobile' => $mobile, 'fax' => $fax, 'address' => $address, 'city' => $city, 'state' => $state, 'country' => $country, 'zipcode' => $postal_code, 'details' => $details);
        DB::table('suppliers')->where('id', $id)->update($editdata);
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
        DB::table('suppliers')->where('id', $id)->delete();
        return redirect('/addsuppliers');
    }
    public function supplier_ledger_details(Request $request, $id)
    {
        // $suppliers = DB::table('suppliers')->get();

        $ledger_details = DB::table('purchase')

            ->select('*', 'purchase.id as purchase_id', 'suppliers.id as supplier_id')
            ->Leftjoin('suppliers', 'suppliers.id', '=',  'purchase.supplier')
            // ->where('purchase.supplier',$id)
            ->get();
        //  dd($ledger_details);
        return view('store.view_supplier_ledger_details', compact('ledger_details'));
    }

    public function add_installment_details(Request $request, $id)
    {

        $ledger_details = DB::table('purchase')
            ->select('*', 'suppliers.id as id', 'purchase.id as purchase_id')
            ->Leftjoin('suppliers', 'suppliers.id', '=', 'purchase.id')
            ->where('purchase.id', $id)
            ->get();
            // dd($request->request);
        // $id = $request['id'];
        // $amount = $request['amount'];
        // $pending_amount = $request['pending_amount'];
        // $date = $request['date'];
        // $editdata = array('installment' => $amount, 'paid_date' => $date, 'pending_amount' => $pending_amount);
        // DB::table('purchase')->where('id', $id)->update($editdata);
        // DB::table('supplier_ledger_details')->insertGetId([
        //     'paid_date' => $date,
        //     'amount' => $amount,
        //     'purchase_id' => $id,
        // ]);
        return view('store.update_amount', compact('ledger_details'));
        // return redirect()->route('store.update_amount')->with( ['ledger_details' => $ledger_details] );
        // return redirect()->back()->with(compact('ledger_details'));

    }
    public function update_installment_details(Request $request)
    {
        $purchase_table = DB::table('purchase')->get();
        $id = $request['id'];
        $amount = $request['amount'];
        $pending_amount = $request['pending_amount'];
        $date = $request['date'];
        $editdata = array('installment' => $amount, 'paid_date' => $date, 'pending_amount' => $pending_amount);
        DB::table('purchase')->where('id', $id)->update($editdata);
        DB::table('supplier_ledger_details')->insertGetId([
            'paid_date' => $date,
            'amount' => $amount,
            'purchase_id' => $id,
        ]);
        //  return back()->withInput();
        return redirect('supplier_ledger_details'.$purchase_table[0]->id);
    }
    public function supplier_paid_details($id)
    {
        $installment_details = DB::table('supplier_ledger_details')
            ->select('*', 'supplier_ledger_details.paid_date as supplier_paid_date')
            ->Leftjoin('purchase', 'purchase.id', '=', 'supplier_ledger_details.purchase_id')
            ->Leftjoin('suppliers', 'suppliers.id', '=', 'purchase.supplier')
            ->where('supplier_ledger_details.purchase_id', $id)
            ->get();
        return view('store.view_supplier_installment_details', compact('installment_details',));
    }
    public function create_requestitems()
    {
        // $supplier=DB::table('suppliers')->get();
        // $request=DB::table('request_items')->get();
        return view('request.request_item', compact('request', 'supplier'));
    }
    public function save_item(Request $request)
    {
        $med_name = $request->input('medicine');
        $quantity = $request->input('quantity');
        $sup_name = $request->input('supplires');
        DB::insert('insert into request_items (medicines_name, quantity,suppliers) values (?,?,?)', [$med_name, $quantity, $sup_name]);
        return back()->withInput();
    }

    // Store---> Manufacturer

    public function create_manufacturer()
    {
        $manufacturers = DB::table('manufactuers')->get();
        $ledger_details = DB::table('purchase')
            ->select('*', 'manufactuers.id', 'purchase.id')
            ->Leftjoin('manufactuers', 'manufactuers.id', '=',  'purchase.manufacturer')
            ->get();
        return view('store.view_manufactuers', compact('manufacturers', 'ledger_details'));
    }

    public function add_manufacturer(Request $Request)
    {
        $manufacturer_name = $Request->input('manufacturer_name');
        $email = $Request->input('email');
        $phone = $Request->input('contact_no');
        $mobile = $Request->input('mobile');
        $fax = $Request->input('fax');
        $address = $Request->input('address');
        $city = $Request->input('city');
        $state = $Request->input('state');
        $country = $Request->input('country');
        $postal_code = $Request->input('postal_code');
        $details = $Request->input('details');

        DB::insert('insert into  manufactuers (manufactuers_name,email,contact_no,mobile,fax,address,city,state,country,zipcode,details) values (?,?,?,?,?,?,?,?,?,?,?)', [$manufacturer_name, $email, $phone, $mobile, $fax, $address, $city, $state, $country, $postal_code, $details]);
        return back()->withInput();
    }
    public function show_details_manufacturer($id)
    {
        $manufacturer = DB::table('manufactuers')->where('id', $id)->get();
        $ledger_details = DB::table('purchase')
            ->select('*', 'manufactuers.id')
            ->Leftjoin('manufactuers', 'manufactuers.id', '=', 'purchase.manufacturer')
            ->get();
        return view('store.manufactuers_details', compact('manufacturer'));
    }

    public function edit_manufacturer($id)
    {
        $manufacturer = manufactuers::find($id);
        return view('store.view_manufactuers', compact('$manufacturer', 'id'));
    }
    public function update_manufacturer(Request $Request)
    {
        $id = $Request['manufact_id'];
        $manufactuers_name = $Request['manufacturer_name'];
        $email = $Request['email'];
        $phone = $Request['phone'];
        $mobile = $Request['mobile'];
        $fax = $Request['fax'];
        $address = $Request['address'];
        $city = $Request['city'];
        $state = $Request['state'];
        $country = $Request['country'];
        $postal_code = $Request['postal_code'];
        $details = $Request['details'];
        // dd($details);die;



        $editdata = array('manufactuers_name' => $manufactuers_name, 'email' => $email, 'contact_no' => $phone, 'mobile' => $mobile, 'fax' => $fax, 'address' => $address, 'city' => $city, 'state' => $state, 'country' => $country, 'zipcode' => $postal_code, 'details' => $details);
        DB::table('manufactuers')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_manufacturer($id)
    {
        DB::table('manufactuers')->where('id', $id)->delete();
        return back();
    }
    public function manufacturer_ledger_details($id)
    {
        $manufacturers = DB::table('manufactuers')->get();
        $ledger_details = DB::table('purchase')
            ->select('*', 'manufactuers.id', 'purchase.id as id')
            ->Leftjoin('manufactuers', 'manufactuers.id', '=', 'purchase.manufacturer')
            ->where('purchase.manufacturer', $id)
            ->get();
        return view('store.view_manufacturer_ledger_details ', compact('ledger_details', 'manufacturers'));
    }
    public function add_installment(Request $request)
    {
        $ledger_details = DB::table('purchase')
            ->select('*', 'purchase.id as id', 'purchase.id as purchase_id')
            ->Leftjoin('manufactuers', 'manufactuers.id', '=', 'purchase.id')
            ->where('purchase.id', $request->id)
            ->get();
        $id = $request['id'];
        $amount = $request['amount'];
        $pending_amount = $request['pending_amount'];
        $date = $request['date'];
        $editdata = array('installment' => $amount, 'paid_date' => $date, 'pending_amount' => $pending_amount);
        DB::table('purchase')->where('id', $id)->update($editdata);
        DB::table('manufacturer_ledger_details')->insertGetId([
            'paid_date' => $date,
            'amount' => $amount,
            'purchase_id' => $id,
        ]);

        return view('store.update_ledger_amount', compact('ledger_details'));
    }
    public function manufacturer_paid_details($id)
    {
        $installment_details = DB::table('manufacturer_ledger_details')
            ->select('*', 'purchase.id as id', 'manufacturer_ledger_details.paid_date as manufact_paid_date')
            ->Leftjoin('purchase', 'purchase.id', '=', 'manufacturer_ledger_details.id')
            ->Leftjoin('manufactuers', 'manufactuers.id', '=', 'purchase_id')
            ->where('manufacturer_ledger_details.id', $id)
            ->get();
        return view('store.view_mamufacturer_installment_details', compact('installment_details',));
        return redirect()->back()->with(compact('installment_details'));
    }

    // store Medicine
    public function create_category_details()
    {
        $categories = DB::table('categories')->get();
        return view('store.category_views', compact('categories'));
    }
    public function add_category(Request $Request)
    {
        $id = $Request['id'];
        $category = $Request['category_name'];

        DB::insert('insert into categories (category_name) values (?)', [$category]);
        return back()->withInput();
    }
    public function category_edit($id)
    {
        $categories = categories::find($id);
        return view('store.category_views', compact('$categories', 'id'));
    }
    public function update_category(Request $Request)
    {
        $id = $Request['category_id'];
        $category_name = $Request['category_name'];

        $editdata = array('category_name' => $category_name);
        DB::table('categories')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_category($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return back();
    }

    // Medicine Type
    public function create_type_details()
    {
        $medicine_types = DB::table('medicine_types')->get();
        return view('store.medicine_type_views', compact('medicine_types'));
    }
    public function add_type(Request $Request)
    {
        $id = $Request['id'];
        $type_name = $Request['type_name'];

        DB::insert('insert into medicine_types (medicine_type_name) values (?)', [$type_name]);
        return back()->withInput();
    }
    public function type_edit($id)
    {
        $medicine_types = categories::find($id);
        return view('store.medicine_type_views', compact('medicine_types', 'id'));
    }
    public function update_type(Request $Request)
    {
        $id = $Request['type_id'];
        $type_name = $Request['type_name1'];

        $editdata = array('medicine_type_name' => $type_name);
        DB::table('medicine_types')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_type($id)
    {
        DB::table('medicine_types')->where('id', $id)->delete();
        return back();
    }


    // Medicine unit
    public function create_unit_details()
    {
        $medicine_units = DB::table('medicine_units')->get();
        return view('store.medicine_unit_views', compact('medicine_units'));
    }
    public function add_unit(Request $Request)
    {
        $id = $Request['id'];
        $unit_name = $Request['unit_name'];

        DB::insert('insert into  medicine_units (unit_name) values (?)', [$unit_name]);
        return back()->withInput();
    }
    public function edit_unit($id)
    {
        $medicine_units = medicine_unit::find($id);
        return view('store.medicine_type_views', compact('medicine_units', 'id'));
    }
    public function update_unit(Request $Request)
    {
        $id = $Request['unit_id'];
        $unit_name = $Request['unit_name1'];
        $editdata = array('unit_name' => $unit_name);
        DB::table('medicine_units')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_unit($id)
    {
        DB::table('medicine_units')->where('id', $id)->delete();
        return back();
    }
    // Medicine Group

    public function create_medicine_group()
    {
        $medicine_groups = DB::table('medicine_groups')->get();
        return view('store.medicine_groups_views', compact('medicine_groups'));
    }
    public function add_group(Request $Request)
    {
        $id = $Request['id'];
        $group_name = $Request['group_name'];
        DB::insert('insert into  medicine_groups(group_name) values (?)', [$group_name]);
        return back()->withInput();
    }
    public function edit_group($id)
    {
        $medicine_groups = medicine_groups::find($id);
        return view('store.medicine_groups_views', compact('medicine_groups', 'id'));
    }
    public function update_group(Request $Request)
    {
        $id = $Request['group_id'];
        $group_name = $Request['group_name1'];

        $editdata = array('group_name' => $group_name);
        DB::table('medicine_groups')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_group($id)
    {
        DB::table('medicine_groups')->where('id', $id)->delete();
        return back();
    }

    //Medicine Brand Name
    public function create_brand_name()
    {
        $brand_name = DB::table('brand_names')->get();
        return view('store.medicine_brand_views', compact('brand_name'));
    }
    public function add_brand(Request $Request)
    {
        $id = $Request['id'];
        $brand_name = $Request['brand_name'];
        DB::insert('insert into brand_names(brand_name) values (?)', [$brand_name]);
        return back()->withInput();
    }
    public function edit_brand($id)
    {
        $brand_name = brand_names::find($id);
        return view('store.medicine_brand_views', compact('brand_name', 'id'));
    }
    public function update_brand(Request $Request)
    {
        $id = $Request['brand_id'];
        $brand_name = $Request['brand_name1'];

        $editdata = array('brand_name' => $brand_name);
        DB::table('brand_names')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_brand($id)
    {
        DB::table('brand_names')->where('id', $id)->delete();
        return back();
    }



    //Medicine Generic Name
    public function create_generic_name()
    {
        $generic_name = DB::table('generic_names')->get();
        return view('store.generic_name_views', compact('generic_name'));
    }
    public function add_generic(Request $Request)
    {
        $id = $Request['id'];
        $generic_name = $Request['generic_name'];
        DB::insert('insert into  generic_names (generic_name) values (?)', [$generic_name]);
        return back()->withInput();
    }
    public function edit_generic($id)
    {
        $genric_name = generic_names::find($id);
        return view('store.generic_name_views', compact('generic     _name', 'id'));
    }
    public function update_generic(Request $Request)
    {
        $id = $Request['generic_id'];
        $generic_name = $Request['generic_name1'];

        $editdata = array('generic_name' => $generic_name);
        DB::table('generic_names')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_generic($id)
    {
        DB::table('generic_names')->where('id', $id)->delete();
        return back();
    }



    // Medicine details
    public function create_medicine_details()
    {
        $suppliers = DB::table('suppliers')->select('id as suppliers_id', 'supplier_name')->get();
        $brands = DB::table('brand_names')->select('id as brands_id', 'brand_name')->get();
        $medicine_name = DB::table('new_medicines')->select('id as medicine_id', 'medicine_name')->get();
        $generic1_name = DB::table('generic_names')->select('id as generic_id', 'generic_name')->get();
        $medicine_categories = DB::table('categories')->select('id as categories_id', 'category_name')->get();
        $manufacturer = DB::table('manufactuers')->select('id as manufactuers_id', 'manufactuers_name')->get();
        $medicine_units = DB::table('medicine_units')->select('id as units_id', 'unit_name')->get();
        $medicine_types = DB::table('medicine_types')->select('id as type_id', 'medicine_type_name')->get();
        $medicines_details = DB::table('medicines_details')->get();
        $medicine_groups = DB::table('medicine_groups')->get();
        return view('store.add_medicine', compact('medicines_details', 'suppliers', 'manufacturer', 'medicine_units', 'medicine_categories', 'medicine_types', 'medicine_groups', 'brands', 'medicine_name', 'generic1_name'));
    }
    public function create_new_medicine(Request $request)
    {
        $brand_name = $request->input('brand_name');
        $medicine_name = $request->input('medicine_name');
        $medicine_group = $request->input('medicine_group');
        $category_name = $request->input('category_name');
        $genric_name = $request->input('genric_name');
        $manufacture_name = $request->input('manufacture_name');
        $supplier_name = $request->input('supplier_name');
        $minimum_level = $request->input('minimum_level');
        $reorder = $request->input('reorder');
        $unit_packing = $request->input('unit_packing');
        $medicine_composition = $request->input('medicine_detailss');
        $medicine_details = $request->input('medicine_note');
        $image = $request['editimage'];

        // $sales_price=$request['batch_amount'];

        $hospital = Auth::user()->Hospital;

        if (!empty($request->file('editimage'))) {


            $this->validate($request, [

                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
        }
        $input = $request->all();

        if ($image = $request->file('editimage')) {

            $destinationPath = 'image/medicine/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $paths = $profileImage;
        } else {
            $paths = '';
        }



        DB::insert('insert into medicines_details (brand_name,medicine_name,medicine_group,category_name,genric_name,manufactuers_name,supplier_name,minimum_level,reorder,unit_packing,medicine_composition,medicine_details,hospital,image) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$brand_name, $medicine_name, $medicine_group, $category_name, $genric_name, $manufacture_name, $supplier_name, $minimum_level, $reorder, $unit_packing, $medicine_composition, $medicine_details, $hospital, $paths]);
        return back()->withInput();
    }
    public function show_medicine_details($id)
    {
        $suppliers = DB::table('suppliers')->select('id as suppliers_id', 'supplier_name')->get();
        $manufacturer = DB::table('manufactuers')->select('id as manufactuers_id', 'manufactuers_name')->get();
        $medicines_details = DB::table('medicines_details')->where('id', $id)->get();

        return view('store.medicine_details', compact('medicines_details', 'suppliers', 'manufacturer'));
    }
    public function edit_medicine($id)
    {
        $medicine_details = medicines_details::find($id);
        $suppliers = DB::table('suppliers')->select('id as suppliers_id', 'supplier_name')->get();
        $brands = DB::table('brand_names')->select('id as brands_id', 'brand_name')->get();
        $medicine_name = DB::table('new_medicines')->select('id as medicine_id', 'medicine_name')->get();
        $generic1_name = DB::table('generic_names')->select('id as generic_id', 'generic_name')->get();
        $medicine_categories = DB::table('categories')->select('id as categories_id', 'category_name')->get();
        $manufacturers = DB::table('manufactuers')->select('id as manufactuers_id', 'manufactuers_name')->get();
        $medicine_units = DB::table('medicine_units')->select('id as units_id', 'unit_name')->get();
        $medicine_types = DB::table('medicine_types')->select('id as type_id', 'medicine_type_name')->get();
        $medicines_details = DB::table('medicines_details')->where('id', $id)->get();
        $medicine_groups = DB::table('medicine_groups')->get();
        // dd( $medicine_details);
        return view('store.edit_medicine_details', compact('medicine_details', 'id', 'suppliers', 'brands', 'medicine_name', 'generic1_name', 'medicine_categories', 'manufacturers', 'medicine_units', 'medicine_types', 'medicines_details', 'medicines_details', 'medicine_groups'));
    }

    public function update_medicine(Request $Request)
    {
        $id = $Request['medicine_id'];
        $brand_name = $Request['brand_name'];
        $medicine_name = $Request['medicine_name'];
        $medicine_group = $Request['medicine_group'];
        $category_name = $Request['category_name'];
        $generic_name = $Request['genric_name'];
        $manufacture_name = $Request['manufacture_name'];
        $supplier_name = $Request['supplier_name'];
        $minimum_level = $Request['minimum_level'];
        $reorder = $Request['reorder'];
        $unit_packing = $Request['unit_packing'];

        $medicine_composition = $Request['medicine_composition'];
        $medicine_details = $Request['medicine_details'];
        $image = $Request['editimage'];
        if (!empty($Request->file('editimage'))) {
            $this->validate($Request, [

                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
        }
        $input = $Request->all();

        if ($image = $Request->file('editimage')) {

            $destinationPath = 'image/medicine/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $paths = $profileImage;
        } else {
            $filtheimage = DB::table('medicines_details')->where('id', $id)->first();
            $fetchimage = $filtheimage->image;
            $paths = $fetchimage;
        }

        $editdata = array('brand_name' => $brand_name, 'medicine_name' => $medicine_name, 'medicine_group' => $medicine_group, 'category_name' => $category_name, 'genric_name' => $generic_name, 'manufactuers_name' => $manufacture_name, 'manufactuers_name' => $manufacture_name, 'supplier_name' => $supplier_name, 'reorder' => $reorder, 'minimum_level' => $minimum_level, 'reorder' => $reorder, 'unit_packing' => $unit_packing, 'medicine_composition' => $medicine_composition, 'medicine_details' => $medicine_details, 'image' => $paths);
        DB::table('medicines_details')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_medicine_details($id)
    {
        DB::table('medicines_details')->where('id', $id)->delete();
        return back();
    }
    public function create_purchase()
    {
        $hospital = Auth::user()->Hospital;
        $hospital_main = DB::table('hospitals')->where('name', $hospital)->first();
        $hospital_name = $hospital_main->location;
        $manufact = DB::table('manufactuers')->get();
        $payment_type = DB::table('payment_type')->get();
        $item_name = DB::table('medicines')->get();
        $supplier = DB::table('suppliers')->get();
        $purchase_order_detailes = DB::table('purchase')->get();
        $purc_order = DB::table('purchase')
            ->Leftjoin('manufactuers as m', 'm.id', '=', 'purchase.manufacturer')
            ->Leftjoin('suppliers as s', 's.id', '=', 'purchase.supplier')
            ->Leftjoin('payment_type as pt', 'pt.payment_id', '=', 'purchase.payment_type')
            ->select('*', 'purchase.id as id')
            ->get();
        return view('store.view_purchase', ['hospital_name' => $hospital_name, 'manufact' => $manufact, 'payment_type' => $payment_type, 'item_name' => $item_name, 'supplier' => $supplier, 'purc_order' => $purc_order, 'purchase_detailes' => $purchase_order_detailes]);
    }
    public function purchase_order_view()
    {

        return view('store.view_purchase_order');
    }
    public function print_purchase(Request $Request)
    {
        $manufacturer = $Request['manufacturer'];
        $purchase_date = $Request['purchase_date'];
        $purchase_number = $Request['purchase_number'];
        $payment_type = $Request['payment_type'];
        $supplier = $Request['supplier'];
        $status = $Request['status'];
        $grand_totall = $Request['grand_totall'];
        $advance_amount = $Request['advance_amount'];
        $pending_amount = $Request['pending_amount'];
        $values = DB::table('purchase')->insertGetId([
            'manufacturer' => $manufacturer,
            'purchase_date' => $purchase_date,
            'purchase_orderno' => $purchase_number,
            'payment_type' => $payment_type,
            'supplier' => $supplier,
            'status' => $status,
            'grand_total' => $grand_totall,
            'advance_amount' => $advance_amount,
            'pending_amount' => $pending_amount,
        ]);
        $values = DB::table('purchase_order')->insertGetId([
            'manufacturer' => $manufacturer,
            'purchase_date' => $purchase_date,
            'purchase_orderno' => $purchase_number,
            'payment_type' => $payment_type,
            'supplier' => $supplier,
            'status' => $status,
            'grand_total' => $grand_totall,
            'advance_amount' => $advance_amount,
            'pending_amount' => $pending_amount,
        ]);
        $item_name = $Request['item_name'];
        $batch_no = $Request['batch_no'];
        $quantity = $Request['quantity'];
        $price = $Request['price'];
        $total = $Request['total'];
        // dd($Request->request);
        if (is_array($item_name)) {
            foreach ($item_name as $idx => $val) {
                $final_array[] = [$val, $batch_no[$idx], $quantity[$idx], $price[$idx], $total[$idx]];
            }
            foreach ($final_array as $f_array) {


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
                DB::table('purchase_order_items')->insert(
                    array(
                        'purchase_order_id'  => $values,
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
    public function create_purchase_new_item(Request $Request)
    {
        $medicine_name = $Request['medicine_name'];
        $manufacture_name = $Request['manufacture_name'];
        $supplier_name = $Request['supplier_name'];
        $profit_percentage = $Request['profit_percentage'];
        DB::table('medicines_details')->insert([
            'medicine_name' => $medicine_name,
            'manufactuers_name' => $manufacture_name,
            'supplier_name' => $supplier_name,
            'profit_percentage' => $profit_percentage
        ]);
        return redirect('view_purchase');
    }
    public function print_purchase_detailes($id)
    {
        $hospital = Auth::user()->Hospital;
        $hospital_main = DB::table('hospitals')->where('name', $hospital)->first();
        $hospital_name = $hospital_main->location;
        $purchase_order =  DB::table('purchase_order')
            ->select('*', 'purchase_order_items.batch_no as batch_no', 'purchase_order_items.quantity as quantity', 'purchase_order.id as id', 'b.supplier_name as supplier_name', 'b.email as supplier_email', 'b.address as supplier_address', 'b.state as supplier_state', 'b.mobile as supplier_mobile', 'manufactuers.manufactuers_name as manufactuers_name', 'manufactuers.email as email', 'manufactuers.address as address', 'manufactuers.state as state', 'manufactuers.mobile as mobile', 'purchase_order.status as status')
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase_order.supplier')
            ->leftjoin('manufactuers', 'purchase_order.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_order_items', 'purchase_order_items.purchase_order_id', '=', 'purchase_order.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_order_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase_order.payment_type')
            ->where('purchase_order.id', $id)
            ->get();
        return view('store.order_form', compact('hospital_name', 'hospital', 'purchase_order'));
    }
    public function show_purchase_order($id)
    {
        $purchase_order =  DB::table('purchase')
            ->select('*', 'purchase_items.batch_no as batch_no', 'purchase_items.quantity as quantity', 'purchase_.id as id', 'b.supplier_name as supplier_name', 'b.email as supplier_email', 'b.address as supplier_address', 'b.state as supplier_state', 'b.mobile as supplier_mobile', 'manufactuers.manufactuers_name as manufactuers_name', 'manufactuers.email as email', 'manufactuers.address as address', 'manufactuers.state as state', 'manufactuers.mobile as mobile', 'purchase_order.status as status')
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase.supplier')
            ->leftjoin('manufactuers', 'purchase.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_items', 'purchase_items.batch_no', '=', 'purchase_.id')
            ->leftjoin('purchase_items', 'purchase_items.purchase_id', '=', 'purchase_.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_items.item_name')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase.payment_type')
            ->where('purchase.id', $id)
            ->get();
        return view('store.view_purchase_order_details', compact('purchase_order'));
    }
    public function received_order_detailes()
    {
        $hospital = Auth::user()->Hospital;
        $hospital_main = DB::table('hospitals')->where('name', $hospital)->first();
        $hospital_name = $hospital_main->location;
        $manufact = DB::table('manufactuers')->get();
        $payment_type = DB::table('payment_type')->get();
        $item_name = DB::table('medicines')->get();
        $supplier = DB::table('suppliers')->get();
        $purchase_order_detailes = DB::table('purchase')->get();
        $purc_order = DB::table('purchase')
            ->Leftjoin('manufactuers as m', 'm.id', '=', 'purchase.manufacturer')
            ->Leftjoin('suppliers as s', 's.id', '=', 'purchase.supplier')
            ->Leftjoin('payment_type as pt', 'pt.payment_id', '=', 'purchase.payment_type')
            ->select('*', 'purchase.id as id')
            ->get();
        return view('store.view_received_detailes', compact('manufact', 'payment_type', 'supplier', 'item_name', 'hospital', 'purchase_order_detailes', 'purc_order'));
    }

    public function view_purchase_detailes($id)
    {
        $hospital = Auth::user()->Hospital;
        $hospital_main = DB::table('hospitals')->where('name', $hospital)->first();
        $hospital_name = $hospital_main->location;
        $purchase_order =  DB::table('purchase_order')
            ->select('*', 'purchase_order_items.batch_no as batch_no', 'purchase_order_items.quantity as quantity', 'purchase_order.id as id', 'b.supplier_name as supplier_name', 'b.email as supplier_email', 'b.address as supplier_address', 'b.state as supplier_state', 'b.mobile as supplier_mobile', 'manufactuers.manufactuers_name as manufactuers_name', 'manufactuers.email as email', 'manufactuers.address as address', 'manufactuers.state as state', 'manufactuers.mobile as mobile', 'purchase_order.status as status')
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase_order.supplier')
            ->leftjoin('manufactuers', 'purchase_order.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_order_items', 'purchase_order_items.purchase_order_id', '=', 'purchase_order.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_order_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase_order.payment_type')
            ->where('purchase_order.id', $id)
            ->get();
        return view('store.view_purchase_detailes', ['hospital_name' => $hospital_name, 'purchase_order' => $purchase_order]);
    }
    public function view_received_details($id)
    {
        $hospital = Auth::user()->Hospital;
        $manufact = DB::table('manufactuers')->get();
        $payment_type = DB::table('payment_type')->get();
        $supplier = DB::table('suppliers')->get();
        $item_name = DB::table('medicines')->get();
        $purchase_order =  DB::table('purchase_order')
            ->select('*', 'purchase_order_items.batch_no as batch_no', 'purchase_order_items.quantity as quantity', 'purchase_order.id as id', 'b.supplier_name as supplier_name', 'b.email as supplier_email', 'b.address as supplier_address', 'b.state as supplier_state', 'b.mobile as supplier_mobile', 'manufactuers.manufactuers_name as manufactuers_name', 'manufactuers.email as email', 'manufactuers.address as address', 'manufactuers.state as state', 'manufactuers.mobile as mobile', 'purchase_order.status as status')
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase_order.supplier')
            ->leftjoin('manufactuers', 'purchase_order.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_order_items', 'purchase_order_items.purchase_order_id', '=', 'purchase_order.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_order_items.item_name')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_order_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase_order.payment_type')
            ->where('purchase_order.id', $id)
            ->get();
        return view('store.manage_purchase', compact('manufact', 'payment_type', 'supplier', 'item_name', 'hospital', '$purchase_order'));
    }
    public function edit_purchase_detailes($id)
    {
        $purchase_order =  DB::table('purchase')
            ->select(
                '*',
                'purchase_items.batch_no as batch_no',
                'purchase_items.quantity as quantity',
                'purchase.id as id',
                'b.id as supplier_id',
                'b.supplier_name as supplier_name',
                'manufactuers.manufactuers_name as manufactuers_name',
                'manufactuers.id as manufactuers_id',
                'purchase.status as status',
                'purchase.purchase_date as Purchase_date',
                'purchase_items.total as total'
            )
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase.supplier')
            ->leftjoin('manufactuers', 'purchase.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_items', 'purchase_items.purchase_id', '=', 'purchase.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_items.item_name')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase.payment_type')
            ->where('purchase.id', $id)
            ->get();
        $brand_name = DB::table('brand_names')->get();
        $medicines_details = DB::table('medicines')->get();
        $supplier = DB::table('suppliers')->get();
        $manufact = DB::table('manufactuers')->get();
        $payment_type = DB::table('payment_type')->get();
        return view('store.edit_purchase_detailes', ['manufact' => $manufact, 'supplier' => $supplier, 'payment_type' => $payment_type, 'medicines_details' => $medicines_details, 'brand_name' => $brand_name, 'purchase_order' => $purchase_order,]);
    }
    public function purchase_detailes_view($id)
    {
        $purchase_order = DB::table('purchase')
            // ->select(
            //     '*',
            //     'purchase_items.batch_no as batch_no',
            //     'purchase_items.quantity as quantity',
            //     'purchase.id as id',
            //     'b.id as supplier_id',
            //     'b.supplier_name as supplier_name',
            //     'manufactuers.manufactuers_name as manufactuers_name',
            //     'manufactuers.id as manufactuers_id',
            //     'purchase.status as status',
            //     'purchase.purchase_date as Purchase_date',
            //     'purchase_items.total as total'
            // )
            ->leftjoin('suppliers as b', 'b.id', '=', 'purchase.supplier')
            ->leftjoin('manufactuers', 'purchase.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_items', 'purchase_items.purchase_id', '=', 'purchase.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_items.item_name')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase.payment_type')
            // ->orderBy('id', 'asc')
            ->where('purchase.id', $id)
            ->get();
            // dd($purchase_order);
        $brand_name = DB::table('brand_names')->get();
        $medicines_details = DB::table('medicines')->get();
        $supplier = DB::table('suppliers')->get();
        $manufact = DB::table('manufactuers')->get();
        $payment_type = DB::table('payment_type')->get();
        return view('store.purchase_detailes_view', ['manufact' => $manufact, 'supplier' => $supplier, 'payment_type' => $payment_type, 'medicines_details' => $medicines_details, 'brand_name' => $brand_name, 'purchase_order' => $purchase_order,]);
    }
    public function update_purchase_items(Request $Request)
    {
        $purchase_id = $Request['purchase_id'];
        $manufacturer = $Request['manufacturer'];
        $purchase_date = $Request['purchase_date'];
        // $purchase_number=$Request['purchase_number'];
        $payment_type = $Request['payment_type'];
        $supplier = $Request['supplier'];
        $status = $Request['status'];
        $grand_totall = $Request['grand_totall'];
        $advance_amount = $Request['advance_amount'];
        $pending_amount = $Request['pending_amount'];
        $id = DB::table('purchase')->where('id', $purchase_id)->update([
            'manufacturer' => $manufacturer,
            'purchase_date' => $purchase_date,
            // 'purchase_orderno'=>$purchase_number,
            'payment_type' => $payment_type,
            'supplier' => $supplier,
            'status' => $status,
            'grand_total' => $grand_totall,
            'advance_amount' => $advance_amount,
            'pending_amount' => $pending_amount,
        ]);
        $id = $Request['item_id'];
        $item_name = $Request['item_name'];
        $batch_no = $Request['batch_no'];
        $quantity = $Request['quantity'];
        $price = $Request['price'];
        $total = $Request['total'];
        if (is_array($item_name)) {
            foreach ($item_name as $idx => $val) {
                $final_array[] = [$val, $id[$idx], $batch_no[$idx], $quantity[$idx], $price[$idx], $total[$idx]];
            }

            // dd($final_array);

            foreach ($final_array as $f_array) {

                DB::table('purchase_items')->where('id', $f_array[1])->update(
                    array(
                        'item_name'   =>   $f_array[0],
                        'batch_no'  =>   $f_array[2],
                        'quantity'  =>  $f_array[3],
                        'price'  =>  $f_array[4],
                        'total'  =>  $f_array[5]
                    )
                );
            }
        }
        // return back()->withInput();
        return redirect('received_order_detailes');
    }
    public function return_detailes($id)
    {
        $purchase = DB::table('purchase')->where('purchase_orderno', $id)->first();
        $purchasedata = DB::table('purchase')
            ->select('*', 'purchase_items.batch_no as batch_no', 'purchase_items.quantity as quantity', 'purchase.id as id', 'purchase_items.id as purchase_items_id', 'suppliers.supplier_name as supplier_name', 'manufactuers.manufactuers_name as manufactuers_name')
            ->leftjoin('suppliers', 'suppliers.id', '=', 'purchase.supplier')
            ->leftjoin('manufactuers', 'purchase.manufacturer', '=', 'manufactuers.id')
            ->leftjoin('purchase_items', 'purchase_items.purchase_id', '=', 'purchase.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_items.item_name')
            ->leftjoin('payment_type', 'payment_type.payment_id', '=', 'purchase.payment_type')
            ->where('purchase.id', $id)
            ->get();
        return view('store.return_detailes', ['purchase' => $purchase, 'purchasedata' => $purchasedata]);
    }
    public function edit_return_detailes($id)
    {
        $users = DB::table('users')->get();
        $purchase_items_data = DB::table('purchase_items')
            ->select('*', 'purchase_items.batch_no as batch_no', 'purchase_items.quantity as quantity', 'purchase_items.id as id')
            ->leftjoin('purchase', 'purchase.id', '=', 'purchase_items.purchase_id')
            ->leftjoin('medicines', 'medicines.id', '=', 'purchase_items.item_name')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_items.item_name')
            ->where('purchase_items.id', $id)
            ->get();
        return view('store.edit_return_detailes', ['purchase_items_data' => $purchase_items_data, 'users' => $users]);
    }
    public function return_items(Request $Request)
    {
        $id = $Request['purchase_item'];
        $batch_number = $Request['batch_number'];
        $purchase_item_name = $Request['purchase_item'];
        $purchase_quantity = $Request['return_quantity'];
        $purchase_remark = $Request['purchase_remark'];
        $purchase_added_by = $Request['purchase_added_by'];
        DB::table('purchase_return')->insert([
            'purchase_return_batch' => $batch_number,
            'purchase_return_pur_items_id' => $purchase_item_name,
            'purchase_return_quantity' => $purchase_quantity,
            'purchase_return_remarks' => $purchase_remark,
            'purchase_return_added_by' => $purchase_added_by
        ]);
        DB::table('purchase_items')->where('id', $id)->decrement('quantity', $purchase_quantity);
        $purchase_id = DB::table('purchase_items')->select('purchase_id as purchase_id')->first();
        return redirect('return_detailes' . $purchase_id->purchase_id);
    }
    public function create_purchase_medicine(Request $request)
    {
        $medicine_name = $request->input('medicine_name');
        $profit_percentage = $request->input('profit_percentage');
        $values = DB::table('medicines')->insertGetId([
            'Item_name' => $medicine_name,
            'profit_percentage' => $profit_percentage,
        ]);
        $manufacture_name = $request->input('manufacture_name');
        $supplier_name = $request->input('supplier_name');
        if (is_array($manufacture_name)) {
            foreach ($manufacture_name as $idx => $val) {
                $final_array[] = [$val, $supplier_name[$idx]];
            }
            foreach ($final_array as $f_array) {


                DB::table('medicines')->insert(
                    array(
                        'purchase_id'  => $values,
                        'manufactuers_name'   =>   $f_array[0],
                        'supplier'  =>   $f_array[1],
                    )
                );
            }
        }
        return redirect('view_purchase');
    }
    //sarjana ended purchase module
    // Sarjana added Store Request items
    public function department_request(Request $Request)
    {
        $id = $Request['id'];
        $request_intendid = $Request['request_intendid'];
        $users = DB::table('users')->get();
        $department = DB::table('users')
            ->select('*')
            ->leftjoin('departments', 'departments.id', '=', 'users.departments')
            ->where('users.id', Auth::user()->id)
            ->get();
        $medicines = DB::table('medicines')->get();
        $requested_items = DB::table('request_intend')
            ->select('*', 'request_intend.request_intendid as request_intendid', 'users.name as name', 'departments.depname as depname')
            ->leftjoin('users', 'users.id', '=', 'request_intend.request_intendadded_by')
            ->leftjoin('departments', 'departments.id', '=', 'users.departments')
            ->leftjoin('request_status', 'request_status.request_statusid', '=', 'request_intend.request_intendstatus')
            ->get();
        return view('store.store_request_item', compact('medicines', 'users', 'department', 'requested_items'));
    }
    public function department_view_request_details($request_intendid)
    {
        $requested_items = DB::table('request_intend')
            ->select('*', 'request_intend.request_intendid as request_intendid', 'users.name as name', 'departments.depname as depname', 'pharma_requests.id as id', 'pharma_requests.medicine as medicine')
            ->leftjoin('pharma_requests', 'pharma_requests.request_intend', '=', 'request_intend.request_intendid')
            ->leftjoin('medicines', 'medicines.id', '=', 'pharma_requests.medicine')
            ->leftjoin('users', 'users.id', '=', 'request_intend.request_intendadded_by')
            ->leftjoin('departments', 'departments.id', '=', 'users.departments')
            ->leftjoin('request_status', 'request_status.request_statusid', '=', 'request_intend.request_intendstatus')
            ->where('request_intend.request_intendid', $request_intendid)
            ->get();
        // dd($requested_items);
        return view('store.department_requested_items', compact('requested_items'));
    }
    public function issue_request($id)
    {
        $issue_request = DB::table('store_requests')
            ->select('*', 'store_requests.id as id')
            ->leftjoin('departments', 'departments.id', '=', 'store_requests.department')
            ->leftjoin('medicines', 'medicines.id', '=', 'store_requests.medicine')
            ->leftjoin('users', 'users.id', '=', 'store_requests.request_addedby')
            ->where('store_requests.id', $id)
            ->get();
        // return view('store.issue_request',['issue_request'=>$issue_request]);
        return view('store.issue_request', compact('id', 'issue_request'));
    }
    public function requested_items($id)
    {
        $issued_items = DB::table('store_requests')
            ->select('*', 'store_requests.id as id')
            ->leftjoin('departments', 'departments.id', '=', 'request_intend.department')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'store_requests.medicine')
            ->leftjoin('users', 'users.id', '=', 'store_requests.request_addedby')
            ->where('store_requests.id', $id)
            ->get();
        return view('store.issue_request', ['issued_items' => $issued_items]);
    }
    public function store_issued_items($id)
    {
        $purchase_order =  DB::table('medicines_details')
            ->select('*', 'medicines_details.id as id', 'medicines_details.quantity as total_stock', 'medicines.id as medicine_id')
            ->leftjoin('medicines', 'medicines.id', '=', 'medicines_details.Item_name')
            ->where('medicines_details.Item_name', $id)
            ->orderBy('expiry_date', 'asc')
            ->where('quantity', '>=', 1)
            ->get();
        // dd($purchase_order);
        $request_id =  DB::table('pharma_requests')->first();
        // $stock_details_item = DB::table('store_issued_details')

        $departments = DB::table('departments')->get();
        $users = DB::table('users')->get();
        $request_status = DB::table('request_status')->get();
        return view('store.store_issued_items', compact('id', 'purchase_order', 'departments', 'users', 'request_status', 'request_id'));
    }
    public function issue_stock($id, Request $Request)
    {
        $purchase_order =  DB::table('medicines_details')
            ->select('*', 'pharma_requests.id as id')
            ->leftjoin('medicines', 'medicines.id', '=', 'medicines_details.id')
            ->leftjoin('medicines', 'medicines.id', '=', 'medicines_details.Item_name')
            ->where('medicines_item_details.item_name', $id)
            ->orderBy('expiry_date', 'asc')
            ->where('total_stock', '>=', 1)
            ->get();
        return view('store.store_issued_items', compact('id', 'purchase_item'));
    }
    public function issue_stock_details(Request $request)
    {
        $medicine_id = $request['medicine_id'];
        $id = $request['id'];
        $item_id = $request['item_id'];
        $issue_qty = $request['issued_quantity'];
        $current_qty = $request['current_stock'];
        foreach ($id as $idx => $val) {
            $final_array[] = [$val, $issue_qty[$idx], $id[$idx], $current_qty[$idx], $item_id[$idx]];
        }
        foreach ($final_array as $f_array) {
            if ($f_array[1] > 0) {
                medicines_details::where('id', $f_array[0])->update(
                    [
                        'issued_quantity' => $f_array[1],
                        'quantity' => DB::raw('quantity -' . $f_array[1]),
                    ]
                );


                $issued_date = $request['date'];
                $department = $request['department'];
                $issued_by = $request['issued_by'];
                $status = $request['status'];
                $vall = DB::table('store_issued_details')->insertGetId([
                    'issued_date' => $issued_date,
                    'department' => $department,
                    'issued_by' => $issued_by,
                    'issued_status' => $status,
                ]);
                $item_name = $request['item_name'];
                $batch_no = $request['batch_no'];
                $issued_quantity = $request['quantity'];
                $current_stock = $request['quantity_available'];
                // dd($request->request);
                foreach ($batch_no as $idx => $val) {
                    $final_array[] = [$val, $item_name[$idx], $issued_quantity[$idx], $current_stock[$idx]];
                }
                foreach ($final_array as $f_array) {

                    DB::table('store_issued_items')->insert(
                        array(
                            'purchase_id'  => $vall,
                            'item_name'   =>   $f_array[0],
                            'batch_no'  =>   $val,
                            'issued_quantity'  =>  $f_array[1],
                            'current_quantity' => $f_array[3]
                        )
                    );


                    return redirect('view_request');
                }
            }
        }
    }



    public function store_reorder()
    {
        $stock_details = DB::table('medicines')
            ->whereColumn('reorder_level', '>=', 'total_stock')
            ->get();
        return view('store.reorder_level', compact('stock_details'));
    }
    public function empty_stock()
    {
        $stock_details = DB::table('medicines')
            ->where('total_stock', '=', 0)
            ->get();
        return view('store.empty_stock', compact('stock_details'));
    }
    public function display_issued_stock(Request $Request)
    {
        $purchase_order =  DB::table('medicines_details')
            ->select('*', 'medicines_details.id as id')
            ->leftjoin('medicines', 'medicines.id', '=', 'medicines_details.Item_name')
            ->where('medicines_details.Item_name')
            ->get();
        $issued_details = DB::table('store_issued_details')
            ->select('*', 'store_issued_details.id as id')
            ->leftjoin('users', 'users.id', '=', 'store_issued_details.issued_by')
            ->leftjoin('departments', 'departments.id', '=', 'store_issued_details.department')
            ->leftjoin('request_status', 'request_status.request_statusid', '=', 'store_issued_details.issued_status')
            ->get();
        $departments = DB::table('departments')->get();
        $users = DB::table('users')->get();
        $request_status = DB::table('request_status')->get();
        return view('store.display_issued_items', compact('purchase_order', 'departments', 'users', 'request_status', 'issued_details'));
    }
    public function view_issued_details($request_intendid)
    {
        $requested_items = DB::table('request_intend')
            // ->select(
            //     '*',
            //     'request_intend.request_intendid as request_intendid',
            //     'users.name as name',
            //     'departments.depname as depname',
            //     'pharma_requests.id as id',
            //     'pharma_requests.medicine as medicine',
            //     'store_issued_items.issued_quantity as Issued_quantity',
            //     'store_issued_items.batch_no as Issued_batch'
            // )
            ->leftjoin('pharma_requests', 'pharma_requests.request_intend', '=', 'request_intend.request_intendid')
            ->leftjoin('medicines', 'medicines.id', '=', 'pharma_requests.medicine')
            ->leftjoin('users', 'users.id', '=', 'request_intend.request_intendadded_by')
            // ->leftjoin('departments', 'departments.id', '=', 'users.departments')
            ->leftjoin('request_status', 'request_status.request_statusid', '=', 'request_intend.request_intendstatus')
            // ->leftjoin('store_issued_items', 'store_issued_items.id', '=', 'request_intend.request_intendid')
            // ->where('request_intend.request_intendid', $request_intendid)
            ->get();
        $departments = DB::table('departments')->get();
        $users = DB::table('users')->get();
        $request_status = DB::table('request_status')->get();
        return view('store.view_issued_items_details', compact('departments', 'users', 'request_status', 'requested_items'));
    }
    //Inventory Setting
    public function inventory_setting()
    {
        $methods = DB::table('stock_methods')->get();
        return view('store.inventory_method', compact('methods'));
    }
    public function accounting_method(Request $Request)
    {

        $hospital = Auth::user()->Hospital;
        $method = DB::table('hospitals')->where('hospitals.name', '=', $hospital)->select('accounting_method')->get();
        if (!empty($Request->edit_method_modalzz)) {

            $id = $Request['edit_method_modalzz'];
            $data = array('accounting_method' => $id);
            DB::table('hospitals')->where('name', Auth::user()->Hospital)->update($data);
            return back();
        }
        $methods = DB::table('stock_methods')->get();

        return view('store.inventory_method', compact('methods', 'hospital', 'method'));
    }


    // public function profit_percentage(Request $Request){
    // $hospital=Auth::user()->Hospital;
    // $profit_percentage=$Request->input('profit_percentage');
    // DB::insert('insert into  hospitals(profit_percentage) values (?)',[$profit_percentage]);
    // $profits=DB::table('hospitals')->where('hospitals.name','=',$hospital)->select('profit_percentage')->get();
    // if(!empty($Request->profit_percentage)){

    //     $id=$Request['profit'];
    //     $data=Array('profit_percentage'=>$id);
    //     DB::table('hospitals')->where('name',Auth::user()->Hospital)->update($data);
    //     return back();
    // }
    // $profit=DB::table('hospitals')->get();
    //     return view('store.inventory_method',compact('methods','hospital','profit'));
    // }

    public function view_request()
    {
        return view('store.view_item_details');
    }
    //Add New item
    public function create_item_details()
    {
        $new_item = DB::table('medicines_details')->get();
        return view('store.Add_new_item_views', compact('new_item'));
    }
    public function add_item(Request $Request)
    {
        $brand_name = $Request['brand_name'];
        $new_item = $Request['item_name'];
        $profit_percentage = $Request['profit_percentage'];
        DB::insert('insert into  medicines_details  (brand_name,medicine_name,profit_percentage) values (?,?,?)', [$brand_name, $new_item, $profit_percentage]);
        return back()->withInput();
    }
    public function edit_item($id)
    {

        $new_item = medicines_details::find($id);
        return view('store.Add_new_item_views', compact('new_item', 'id'));
    }
    public function update_new_item(Request $Request)
    {
        $id = $Request['item_id'];
        $brand_name = $Request['brand_name'];
        $new_item = $Request['item_name'];
        $profit_percentage = $Request['profit_percentage'];

        $editdata = array('brand_name' => $brand_name, 'medicine_name' => $new_item, 'profit_percentage' => $profit_percentage);

        DB::table('medicines_details')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    //sarjana added payment type
    public function create_payment_type()
    {
        $payment_type = DB::table('payment_type')->get();
        return view('store.create_payment_type', compact('payment_type'));
    }
    public function add_payment_type(Request $Request)
    {
        $id = $Request['id'];
        $payment_name = $Request['payment_name'];
        DB::insert('insert into  payment_type(payment_name) values (?)', [$payment_name]);
        return back()->withInput();
    }
    public function edit_payment_type($payment_id)
    {
        $payment_type = payment_type::find($payment_id);
        return view('store.create_payment_type', compact('payment_type', 'payment_id'));
    }
    public function update_payment_type(Request $Request)
    {
        $edit_payment_id = $Request['edit_payment_id'];
        $edit_payment_type = $Request['edit_payment_type'];
        $editdata = array('payment_name' => $edit_payment_type);
        DB::table('payment_type')->where('payment_id', $edit_payment_id)->update($editdata);
        return back()->withInput();
    }
    public function delete_payment_type($payment_id)
    {
        DB::table('payment_type')->where('payment_id', $payment_id)->delete();
        DB::table('purchase')->where('payment_type', $payment_id)->delete();
        return back();
    }

    public function get_item_data_ajax(Request $request)
    {

        $item_id = $request->item_id;
        $purchase_order =  DB::table('purchase_items')
            ->select('*', 'purchase_items.batch_no as batch_no', 'purchase_items.quantity as quantity,purchase.id as id,purchase_items.price as price')
            ->leftjoin('medicines_details', 'medicines_details.id', '=', 'purchase_items.item_name', 'purchase_items.profit_persentage')
            ->where('purchase_items.id', $item_id)
            ->get();

        return response()->json([
            'item' => $purchase_order
        ]);
    }
    public function substore_details(Request $request)
    {
        $departments = DB::table('departments')->get();
        return view('store.substore_details', compact('departments',));
    }
    public function add_substore(Request $request)
    {
        $departments = DB::table('departments')->get();
        $department_name = $request->input('department_name');
        $substore_name = $request->input('sub_store_name');
        if (is_array($substore_name)) {
            foreach ($substore_name as $idx => $val) {
                $final_array[] = [$val, $department_name[$idx]];
            }
            foreach ($final_array as $f_array) {


                DB::table('sub_store')->insert(
                    array(
                        'sub_store_name'   =>   $f_array[0],
                        'department_id'  =>    $department_name,
                    )
                );
            }
        }
        return view('store.substore_details', compact('department_name', 'substore_name', 'departments'));
    }
    public function view_substore(Request $request)
    {
        $substore_details =DB::table('sub_store')
        ->select('*','sub_store.id as substore_id','departments.depname as department_name')
        ->leftjoin('departments', 'departments.id', '=', 'sub_store.department_id')
        ->get();
        return view('store.view_substore_details', compact('substore_details'));
    }
    public function edit_substore($id)
    {
        $substore_details =DB::table('sub_store')
        ->select('*','sub_store.id as substore_id','departments.depname as department_name')
        ->leftjoin('departments', 'departments.id', '=', 'sub_store.department_id')
        ->get();
        return view('store.update_substore', compact('substore_details','id'));
    }
    public function update_substore(Request $Request)
    {
        $id = $Request['id'];
        $substore = $Request['sub_store_name'];
        $department = $Request['department_name'];

        $editdata = array('sub_store_name' => $substore, 'department_id' =>  $department);

        DB::table('sub_store')->where('id', $id)->update($editdata);
        return back()->withInput();
    }
    public function delete_substore($id)
    {
        DB::table('sub_store')->where('id',$id)->delete();
         return back();
    }
    public function show_substore(Request $request)
    {
        $substore_details =DB::table('sub_store')
        ->select('*','sub_store.id as substore_id','departments.depname as department_name')
        ->leftjoin('departments', 'departments.id', '=', 'sub_store.department_id')
        ->get();
        $departments = DB::table('departments')->get();
        return view('store.show_substore', compact('substore_details','departments'));
    }
    public function show_store_details($id)
    {
        $substore_details =DB::table('sub_store')
        ->select('*','sub_store.id as substore_id','departments.depname as department_name')
        ->leftjoin('departments', 'departments.id', '=', 'sub_store.department_id')
        ->where('sub_store.department_id',$id)
        ->get();
        $departments = DB::table('departments')->get();
        return view('store.show_store_details', compact('substore_details','departments','id'));
    }
    public function department_store_details($id)
    {
        $substore_details =DB::table('sub_store')
        ->select('*','sub_store.id as substore_id','departments.depname as department_name')
        ->leftjoin('departments', 'departments.id', '=', 'sub_store.department_id')
        ->leftjoin('request_intend','request_intend.substore_id', '=', 'sub_store.id')
        ->leftjoin('pharma_requests','pharma_requests.pharma_substore_id', '=', 'sub_store.id')
        ->where('sub_store.id',$id)
        ->get();
        $departments = DB::table('departments')->get();
        return view('store.department_store_details', compact('substore_details','departments','id'));
    }

}
