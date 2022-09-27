<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filemanagement extends Controller
{
    public function index()
    {
        return view('file_management.file_managementindex');
    }


    public function view()
    {
        return view('file_management.file-list');
    }

    public function edit()
    {
        return view('file_management.edit-file');
    }

    public function addnew()
    {
        return view('file_management.add-new-file');
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

     //document manager

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
 
       //document manager



    
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

}
