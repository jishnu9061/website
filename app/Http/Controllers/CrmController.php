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
        $task_list = DB::table('cra_manage_task')->get();
        return view('CRM.manage_tasks',compact('task_list'));
    }
    public function view_manage_task($id)
    {
        $task_list = DB::table('cra_manage_task')->where('id',$id)->first();
        return view('CRM.view_manage_task',compact('task_list','id'));
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
        $Status = $Request['Status'];

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
            'Post_Code' => $post,
            'Address' =>  $Address,
            'status' =>  $Status,

        ]);    

        return redirect('Corporate');
    }
    public function edit_Corporates($id)
    {
        $update_list= DB::table('cra_corporate_customers')->where('id',$id)->first();
        return view('CRM.edit_Corporate',compact('update_list','id'));
    }

    public function view_Corporates($id)
    {
        $view_corporates = DB::table('cra_corporate_customers')->where('id',$id)->first();
        return view('CRM.view_Corporate',compact('view_corporates','id'));
    }
    public function expense()
    {
        $expense_list = DB::table('cra_add_expense')->get();
        return view('CRM.expense',compact('expense_list'));
    }

    public function view_expense($id)
    {
        $view_expense_list =DB::table('cra_add_expense')->where('id',$id)->first();
        return view('CRM.view_expense',compact('view_expense_list','id'));
    }

   
    public function crm_panel()
    {
        return view('CRM.crm_panel');
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
        $Status = $Request['Status'];

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
            'Post_Code' => $post,
            'Address' =>  $Address,
            'status' =>  $Status,

        ]);
        return redirect('/Corporate');
    }

    public function drop_Corporates($id)
    {
        DB::table('cra_corporate_customers')->where('id',$id)->delete();
        return redirect('/Corporate');
    }

    public function leads()
    {
        return view('CRM.lead');
    }

    public function view_leads()
    {
        return view('CRM.view_lead');
    }

    public function proposal_leads()
    {
        return view('CRM.proposal_lead');
    }

    public function add_manage_tasks(Request $Request)
    {
        $task = $Request['task'];
        $milestone = $Request['milestone'];
        $assigned = $Request['assigned'];
        $start = $Request['start'];
        $end = $Request['end'];
        $priority = $Request['priority'];
        $status = $Request['status'];
        $description = $Request['description'];

        DB::table('cra_manage_task')->insert([

            'task_name' => $task,
            'milestone' => $milestone,
            'task_assigned_by' => $assigned,
            'start_date' => $start,
            'end_date' => $end,
            'task_priority' => $priority,
            'task_status' => $status,
            'task_description' => $description,

        ]);
        return redirect('manage_tasks');
    }

    public function edit_manage_task($id)
    {
        $edit_manage_task = DB::table('cra_manage_task')->where('id',$id)->first();
        return view('CRM.edit_manage_task',compact('edit_manage_task','id'));
    }

    public function update_manage_task(Request $Request){
        $id   = $Request['id'];
        $task = $Request['task'];
        $milestone = $Request['milestone'];
        $assigned = $Request['assigned'];
        $start = $Request['start'];
        $end = $Request['end'];
        $priority = $Request['priority'];
        $status = $Request['status'];
        $description = $Request['description'];

        DB::table('cra_manage_task')->where('id',$id)->update([

            'task_name' => $task,
            'milestone' => $milestone,
            'task_assigned_by' => $assigned,
            'start_date' => $start,
            'end_date' => $end,
            'task_priority' => $priority,
            'task_status' => $status,
            'task_description' => $description,

        ]);
        return redirect('manage_tasks');
    }

    public function drop_manage_task($id)
    {
        DB::table('cra_manage_task')->where('id',$id)->delete();
        return redirect('manage_tasks');
      
    }

    public function add_expense(Request $Request)
    {

        $date = $Request['date'];
        $staff_name = $Request['staff_name'];
        $reference = $Request['reference'];
        $type = $Request['type'];
        $assigned_by = $Request['assigned_by'];
        $billing = $Request['billing'];
        $description = $Request['description'];
        $status = $Request['status'];
        $support_detail = $Request['support_detail'];

        DB::table('cra_add_expense')->insert([
            
            'date' => $date,
            'staff_name' => $staff_name,
            'expense_reference' => $reference,
            'customer_type' => $type,
            'task_assigned_by' => $assigned_by,
            'billing' => $billing,
            'description' => $description,
            'status' => $status,
            'supporting_details' => $support_detail,

        ]);
        return redirect('expense');

    }

    public function update_expense(Request $Request)
    {
        $id   = $Request['id'];
        $date = $Request['date'];
        $staff_name = $Request['staff_name'];
        $reference = $Request['reference'];
        $type = $Request['type'];
        $assigned_by = $Request['assigned_by'];
        $billing = $Request['billing'];
        $description = $Request['description'];
        $status = $Request['status'];
        $support_detail = $Request['support_detail'];

        DB::table('cra_add_expense')->where('id',$id)->update([
            
            'date' => $date,
            'staff_name' => $staff_name,
            'expense_reference' => $reference,
            'customer_type' => $type,
            'task_assigned_by' => $assigned_by,
            'billing' => $billing,
            'description' => $description,
            'status' => $status,
            'supporting_details' => $support_detail,

        ]);
        return view('CRM.view_lead');
    }

    public function edit_expense($id)
    {
        $edit_expense_task = DB::table('cra_add_expense')->where('id',$id)->first();
        return view('CRM.edit_expense',compact('edit_expense_task','id'));
    }

    public function drop_expense($id){
        DB::table('cra_add_expense')->where('id',$id)->delete();
        return redirect('/expense');
    }

}








