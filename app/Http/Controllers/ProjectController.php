<?php

namespace App\Http\Controllers;
use model\Project;
use App\imports\ProjectsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class ProjectController extends Controller
{
    public function importProject()
    {
    	Excel::import(new ProjectsImport,request()->file('file'));
    	return back()->with('success','project created successfully');
    }
}
