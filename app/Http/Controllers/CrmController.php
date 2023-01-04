<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

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
        return view('CRM.Corporate');
    }
    public function edit_Corporates()
    {
        return view('CRM.edit_Corporate');
    }

    public function view_Corporates()
    {
        return view('CRM.view_Corporate');
    }

}








