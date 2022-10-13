<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function filearchive()
    {
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

    public function addbringup()
    {
        return view('file_management.add-new-bringup');
    }

    public function addprogress()
    {
        return view('file_management.add-file-progress');
    }

    public function editprogress()
    {
        return view('file_management.edit-file-progress');
    }

    
    public function fileactionhours()
    {
        return view('file_management.file-action-hours');

    }

    public function fileprogresslist()
    {
        return view('file_management.file-progress-list');
        
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

    public function staffmonthlystatusreport()
    {
        return view('file_management.staff-monthly-status-report');
        
    }

    //file progress


    //monthly file status report



    //monthly file status report
     public function clientmonthlystatus()
     {
         return view('file_management.client-monthly-file-status');
     }

     public function fileprogressreport()
     {
         return view('file_management.file-progress-report');
     }

     public function filestatussummary()
     {
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
 


     public function bringup()
     {
         return view('file_management.bringup');
     }
       //document manager


       //File Reports
       public function filereport()
       {
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

        public function saferegisterreport()
        {
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

public function view_new_instructions()
{
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



