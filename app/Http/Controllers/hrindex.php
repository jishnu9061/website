<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class hrindex extends Controller
{
    public function index()
    {
        return view('hr.hrindex');
    }
    public function recruitment()
    {
        return view('hr.recruitment_index');
    }
    public function create_job_post()
    {
        return view('hr.create_job_post');
    }
    public function job_posts()
    {
        return view('hr.job_posts');
    }
    public function view_job_applications()
    {
        return view('hr.view_job_applications');
    }
    public function reviewed_details()
    {
        return view('hr.reviewed_details');
    }
    public function performance_form()
    {
        return view('hr.performance_form');
    }

   
     
 
    

    


}






