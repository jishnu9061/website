<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ClientController;
use DB;

class filemanagement extends Controller
{
    public function index()
    {
        return view('file_management.file_managementindex');
    }


    public function view()
    {
        $file_list=DB::table('cra_open_new_file_details')->get();
        return view('file_management.file-list',compact('file_list'));
    }

    public function edit($id)
    {
    
        $edit =DB::table('cra_open_new_file_details')->where('id',$id)->first();
        return view('file_management.edit-file',compact('edit','id'));
    }

    public function file_destroy($id)
    {
        $edit =DB::table('cra_open_new_file_details')->where('id',$id)->delete();
        return redirect ('/file-list');
    }

    public function addnew(Request $request)
    {

        $Associate_handling=$request['associate_handling'];
        $Client_type=$request['client_type'];
        $opening_date=$request['opening_date'];
        $Client_ref_no=$request['client_ref_no'];
        $our_file_reference_no=$request['our_file_ref_no'];
        $File_name=$request['file_name'];
        $Approval_partner=$request['approval_partner'];
        $Customer_name=$request['customer_name'];
        $Address=$request['address'];
        $Telephone=$request['telephone'];
        $email=$request['email'];
        $amount=$request['amount'];
        $workflow=$request['workflow'];

        DB::table('cra_open_new_file_details')->insert([
            
            'Associate_handling' => $Associate_handling,
            'Client_type' => $Client_type,
            'opening_date' => $opening_date,
            'Client_ref_no' => $Client_ref_no,
            'our_file_reference_no' => $our_file_reference_no,
            'File_name' => $File_name,
            'Approval_partner' => $Approval_partner,
            'Customer_name' => $Customer_name,
            'Address' => $Address,
            'Telephone' => $Telephone,
            'email' => $email,
            'amount' => $amount,
            'workflow' => $workflow,
        ]);
        return redirect('/file-list');
    }


    //document temblates
    public function template()
    {
        return view('file_management.template-category');
    }

    public function addtemplate()
    {
        return view('file_management.add-template');
    }


    //document temblates

    //manage files
    public function filearchive(Request $request)
    {
        
        $Box_type=$request['box_type'];
        $Box_number=$request['box_no'];

        DB::table('cra_add_box')->insert([
            'type' =>  $Box_type,
            'number' =>  $Box_number,

        ]);

        return view('file_management.file-archive');
    }


    public function addboxno()
    {
        return view('file_management.add-box-no');
    }

    public function editboxno()
    {
        return view('file_management.edit-box-no');
    }
    //manage files

    //file progress

    public function progressbringup()
    {
        
        return view('file_management.progress-bringup');
    }

    public function addbringup(Request $request)
    {
       


        return view('file_management.add-new-bringup');
    }


    public function addprogress(Request $request )

    { 
        $id =$request['id'];
        $client_name=$request['client_name'];
        $progress_date=$request['date_progress'];
        $next_action=$request['next_action'];      
        $bringup_date=$request['bringup_date'];
        $file_name=$request['file_name'];
        $reminder_period=$request['reminder_period'];
        $action_type=$request['action_type'];
        $action_description=$request['action_description'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $item_type=$request['item_type'];
        $currency=$request['currency'];
        $amount=$request['amount'];
        $start_time=$request['start_time'];
        $activity_type=$request['activity_type'];
        $activity=$request['activity'];



        DB::table('cra_add_file_progress')->insert([
            
            'progress_date' => $progress_date,
            'next_action' => $next_action,
            'client_name' => $client_name,
            'bringup_date' => $bringup_date,
            'file_name' => $file_name,
            'reminder_period' => $reminder_period,
            'action_type' => $action_type,
            'action_description' => $action_description,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'item_type' => $item_type,
            'currency' => $currency,
            'amount' => $amount,
            'start_time' => $start_time,
            'activity_type' => $activity_type,
            'activity' => $activity,
        ]);
        // return back()->withInput();
        // return view('file_management.add-new-file');
        return view('file_management.add-file-progress');
    }






    // public function editprogress($id)
    
    // {
    //     return view('file_management.add-file-progress');
    // }

    public function editprogress($id)

    {
        $edit_progress =DB::table('cra_add_file_progress')->where('id',$id)->first();
        return view('file_management.edit-file-progress',compact('edit_progress','id'));
       
    }

    public function update_progress(Request $request){

        $id =$request['id'];
        $client_name=$request['client_name'];
        $progress_date=$request['date_progress'];
        $next_action=$request['next_action'];      
        $bringup_date=$request['bringup_date'];
        $file_name=$request['file_name'];
        $reminder_period=$request['reminder_period'];
        $action_type=$request['action_type'];
        $action_description=$request['action_description'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $item_type=$request['item_type'];
        $currency=$request['currency'];
        $amount=$request['amount'];
        $start_time=$request['start_time'];
        $activity_type=$request['activity_type'];
        $activity=$request['activity'];



        DB::table('cra_add_file_progress')->where('id',$id)->update([
            
            'progress_date' => $progress_date,
            'next_action' => $next_action,
            'client_name' => $client_name,
            'bringup_date' => $bringup_date,
            'file_name' => $file_name,
            'reminder_period' => $reminder_period,
            'action_type' => $action_type,
            'action_description' => $action_description,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'item_type' => $item_type,
            'currency' => $currency,
            'amount' => $amount,
            'start_time' => $start_time,
            'activity_type' => $activity_type,
            'activity' => $activity,
        ]);

        return redirect('/file-progress-list');

    }

    
    public function fileactionhours()
    {
        return view('file_management.file-action-hours');

    }

    public function fileprogresslist()
    {

        $file_progress_list=DB::table('cra_add_file_progress')->get();
        return view('file_management.file-progress-list',compact('file_progress_list'));
        
        
    }

    public function addfileprogressaction()
    {
        return view('file_management.add-file-progress-action');
        
    }


    public function addfilebringupreminder()
    {
        return view('file_management.add-file-bringup-reminder');
        
    }

    public function bookcourt()
    {
        return view('file_management.book-court');
        
    }

    public function courtattendance()
    {
        return view('file_management.court-attendance-sheet');
        
    }
    public function arbirationsheet()
    {
        return view('file_management.arbiration-sheet');
        
    }
    public function conveyance()
    {
        return view('file_management.conveyance-sheet');
        
    }
    public function filelistprogressreport()
    {
        return view('file_management.file-list-progress-report');
        
    }

    public function staffmonthlystatusreport(Request $request)
    {
        $id =$request['id'];
        $Department =$request['department'];
        $Month =$request['month'];
        $Year =$request['year'];

        DB::table('cra_staff_monthly_status_report')->insert([

            'id' =>  $id,
            'Department' =>  $Department,
            'Month' =>  $Month,
            'Year' =>  $Year,

        ]);
        return view('file_management.staff-monthly-status-report');
        
    }

    //file progress


    //monthly file status report



    //monthly file status report
     public function clientmonthlystatus(Request $request)
     {
        $id =$request['id'];
        $Report_type =$request['report_type'];
        $Client =$request['client'];
        $Month =$request['month'];
        $Year =$request['year'];
        DB::table('cra_client_monthly_file_status_report')->insert([

            'id' =>  $id,
            'Report_Type' => $Report_type,
            'Client' =>   $Client,
            'Month' =>  $Month,
            'year' =>  $Year,

        ]);
         return view('file_management.client-monthly-file-status');
     }

     public function fileprogressreport(Request $request)
     {
        $id =$request['id'];
        $Client =$request['client'];
        $File =$request['file'];
        $Date_from =$request['date_from'];
        $Date_to =$request['date_to'];
        
        DB::table('cra_file_progress_report')->insert([

            'id' =>  $id,
            'Client' =>  $Client,
            'File' =>   $File,
            'Progress_Date_From' =>   $Date_from,
            'Progress_Date_To' =>   $Date_to,

        ]);
         return view('file_management.file-progress-report');
     }

     public function filestatussummary(Request $request)
     {
        $id =$request['id']; 
        $Date_To =$request['date_to'];
        $File =$request['file'];
        $Instruction_Category =$request['category'];
        $Receiver =$request['receiver'];
        $Currency =$request['currency'];
        $Exchange_Rate =$request['exchange_rate'];
        $Turn_Around_Time =$request['turn_around_time'];
        $Priority =$request['priority'];
        $Details =$request['details'];

        DB::table('cra_file_status_summary')->insert([

            'id' =>  $id,
            'Date_to' =>  $Date_To,
            'File' =>   $File,
            'Instruction_Category' =>   $Instruction_Category,
            'Receiver' =>  $Receiver,
            'Currency' =>  $Currency,
            'Exchange_Rate' =>  $Exchange_Rate,
            'Turn_Around_Time' =>  $Turn_Around_Time,
            'Priority' =>  $Priority,
            'Details' =>  $Details 

        ]);
         return view('file_management.file-status-summary');
     }


     public function workflow()
     {
         return view('file_management.work-flow');
     }

     public function newworkflow()
     {
         return view('file_management.new-workflow');
     }


     //document manager

     public function diarymanagement()
     {
         return view('file_management.diary-management');
     }

     public function addevent()
     {
         return view('file_management.add-event');
     }

     public function meetingrooms()
     {
         return view('file_management.meeting-rooms');
     }

     public function documentmanager()
     {
         return view('file_management.document-manager');
     }

     public function uploaddocument()
     {
         return view('file_management.upload-document');
     }

     public function generatedocument()
     {
         return view('file_management.generate-document');
     }
 


     public function bringup(Request $request)
     {
        $id =$request['id'];
        $Client =$request['client'];
        $File =$request['file'];
        $Registered_by =$request['registered_by'];
        $Responsible =$request['responsible'];
        $Data_from =$request['data_from'];
        $Data_to =$request['date_to'];

        DB::table('cra_bringup')->insert([

            'id' => $id,
            'Client' => $Client,
            'File' =>  $File,
            'Registered_By' => $Registered_by,
            'Responsible_Advocate' => $Responsible,
            'Date_From' => $Data_from,
            'Date_To' => $Data_to,

        ]);
         return view('file_management.bringup');
     }
       //document manager


       //File Reports
       public function filereport(Request $request)
       {
        $id =$request['id'];
        $Resposible_advocate =$request['resposible_advocate'];
        $Data_from =$request['data_from'];
        $Date_to =$request['date_to'];

        DB::table('cra_file_report')->insert([

            'id' => $id,
            'Responsible_Advocate' => $Resposible_advocate,
            'Date_From' => $Data_from,
            'Date_To' => $Date_to,

        ]);
           return view('file_management.file-report');
       }

       public function fileopenreport()
       {
           return view('file_management.file-opened-report');
       }

       public function fileclosedreport()
       {
           return view('file_management.file-closed-report');
       }

       public function filepending()
       {
           return view('file_management.file-pending');
       }

       public function filependingapproval()
       {
           return view('file_management.file-pending-approval');
       }

       public function instructionspast()
       {
           return view('file_management.instructions-past');
       }
       //File Reports


       //add ons
        public function outgoingletter()
        {
             return view('file_management.outgoing-letters');
        }

        public function addoutgoingletters()
        {
             return view('file_management.add-outgoing-letters');
        }


        public function incommingletters()
        {
             return view('file_management.incomming-letters');
        }

        public function addincommingletters()
        {
             return view('file_management.add-incomming-letters');
        }

        public function safeitemrequest()
        {
             return view('file_management.safe-item-request');
        }

        public function saferegisterreport(Request $request)
        {
           $id =$request['id'];
           $Client =$request['client'];
           $File =$request['file'];
           $Document_type =$request['document_type'];
           $Safe_name =$request['safe_name'];
           $Approver =$request['approver'];
           $Given_to =$request['given_to'];
           $Requsted_by =$request['requsted_by'];
            $Date =$request['date'];
           $And =$request['and'];
           $Document_condition =$request['document_condition'];
           $Status =$request['status'];


           DB::table('cra_safe_register_report')->insert([

            'id' => $id,
            'Client' =>  $Client,
            'File' =>  $File,
            'Document_Type' => $Document_type,
            'Safe_Name' => $Safe_name,
            'Approver' => $Approver,
            'Given_To' => $Given_to,
            'Requested_By' => $Requsted_by,
            'Date' => $Date,
            'and' => $And,
            'Document_Condition' => $Document_condition,
            'Status' =>  $Status,

        ]);


             return view('file_management.safe-register-report');
        }
       //add ons
       



    
    public function u_details()
    {
        return view('system-settings.u_details');
    }

    public function add_user()
    {
        return view('system-settings.User.add_user');
    }
    public function change_password()
    {
        return view('system-settings.User.change_password');
    }
    public function new_instructions()
    {
        return view('file_management.office_instructions');
    }
 

public function add_new_instructions()
{
    return view('file_management.new_office_instructions');
}

public function view_new_instructions(Request $request)
{
   $id =$request['id'];
   $Report_category =$request['report_category'];
   $Instruction_type =$request['instruction_type'];
   $Expense_category =$request['expense_category'];
   $Report_type =$request['report_type'];
   $Date_from =$request['date_from'];
   $Date_to =$request['date_to'];

   DB::table('cra_instructions_report')->insert([

    'id' => $id,
    'Report_Category' => $Report_category,
    'Instruction_Type' => $Instruction_type,
    'Expense_Category' => $Expense_category,
    'Report_Type' => $Report_type,
    'Date_From' =>  $Date_from,
    'Date_To' =>   $Date_to,
]);

    return view('file_management.instructions_report');
}

public function new_file_instructions()
{
    return view('file_management.file_instruction');
}

public function add_new_file_instructions()
{
    return view('file_management.file_new_instruction');                                                             
}

public function safe_management_list()
{
    return view('file_management.Safe_management');                                                             
}

public function new_safe_management_list()
{
    return view('file_management.new_Safe_management');                                                             
}

public function Request_staff_item_list()
{
    return view('file_management.Request_staff_item');                                                             
}

public function add_Request_staff_item_list()
{
    return view('file_management.new_Request_staff_item');                                                             
}

public function Process_Request_list()
{
    return view('file_management.Process_Request');                                                             
}

public function edit_file_instruction_list()
{
    return view('file_management.edit_file_instruction');                                                             
}

public function edit_office_instruction_list()
{
    return view('file_management.edit_office_instruction');                                                             
}

}



