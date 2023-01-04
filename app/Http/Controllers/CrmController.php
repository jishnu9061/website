<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CrmController extends Controller
{
    public function index_view()
    {
        return view('CRM.Crm_index');
    }
    public function manage_tasks()
    {
        return view('CRM.manage_tasks');
    }
    public function view_manage_task()
    {
        return view('CRM.view_manage_task');
    }
    public function edit_manage_task()
    {
        return view('CRM.edit_manage_task');
    }
    public function projects()
    {
        return view('CRM.projects');
    }
    public function view_project()
    {
        return view('CRM.view_project');
    }
    public function edit_project()
    {
        return view('CRM.edit_project');
    }

    public function Corporates()
    {
    $Corporates_list = DB::table('cra_corporate_customers')->get();
    return view('CRM.Corporate',compact('Corporates_list'));
        
    }

    public function add_Corporates(Request $Request)
    {
        $name = $Request['name'];
        $office = $Request['office'];
        $gst = $Request['gst'];
        $security = $Request['security'];
        $customer = $Request['customer'];
        $phone = $Request['phone'];
        $fax = $Request['fax'];
        $email = $Request['email'];
        $web = $Request['web'];
        $country = $Request['country'];
        $state = $Request['state'];
        $city = $Request['city'];
        $town = $Request['town'];
        $post = $Request['post'];
        $Address = $Request['address'];

        DB::table('cra_corporate_customers')->insert([
            'Name' => $name,
            'GST_Office' => $office,
            'GST_Number' => $gst,
            'Social_Security_Number' => $security,
            'Customer_Authority' => $customer,
            'Phone' => $phone,
            'FAX' => $fax,
            'Email' => $email,
            'Web' => $web,
            'Country' =>$country,
            'State' => $state,
            'City' => $city,
            'Town' => $town,
            'Post_Code' => $town,
            'Address' =>  $Address,

        ]);    

        return redirect('Corporate');
    }
    public function edit_Corporates($id)
    {
        $update_list= DB::table('cra_corporate_customers')->where('id',$id)->first();
        return view('CRM.edit_Corporate',compact('update_list','id'));
    }

    public function view_Corporates()
    {
        return view('CRM.view_Corporate');
    }
    public function expense()
    {
        return view('CRM.expense');
    }
    public function view_expense()
    {
        return view('CRM.view_expense');
    }
    public function edit_expense()
    {
        return view('CRM.edit_expense');
    }


    public function update_Corporates(Request $Request)
    {
        $id = $Request['id'];
        $name = $Request['name'];
        $office = $Request['office'];
        $gst = $Request['gst'];
        $security = $Request['security'];
        $customer = $Request['customer'];
        $phone = $Request['phone'];
        $fax = $Request['fax'];
        $email = $Request['email'];
        $web = $Request['web'];
        $country = $Request['country'];
        $state = $Request['state'];
        $city = $Request['city'];
        $town = $Request['town'];
        $post = $Request['post'];
        $Address = $Request['address'];

        DB::table('cra_corporate_customers')->where('id',$id)->update([
            'Name' => $name,
            'GST_Office' => $office,
            'GST_Number' => $gst,
            'Social_Security_Number' => $security,
            'Customer_Authority' => $customer,
            'Phone' => $phone,
            'FAX' => $fax,
            'Email' => $email,
            'Web' => $web,
            'Country' =>$country,
            'State' => $state,
            'City' => $city,
            'Town' => $town,
            'Post_Code' => $town,
            'Address' =>  $Address,

        ]);    
        return redirect('/Corporate');
    }

}








