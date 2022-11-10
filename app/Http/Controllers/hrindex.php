<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function over_time_list()
    {
        return view('hr.over_time');
    }

    public function  viewover_time_list()
    {
        $list = DB::table('cra_add_task')->get();
        return view('hr.view_over_time',compact('list'));
    }

    public function add_assignment(Request $Request)
    {
        $Assignment = $Request['assignment'];
     

        DB::table('cra_add_task')->insert([
            
            'assignment' =>  $Assignment,
         ]);
         return redirect('/view_over_time');
    }

   public function editassigment($id){
        $edit_assigment = DB::table('cra_add_task')->where('id',$id)->first();
        return view('hr.edit-assigment',compact('edit_assigment','id'));
   }
   
public function updateassigment(Request $Request)
{
    $id = $Request['id'];
     $Assignment = $Request['assignment'];
     

    DB::table('cra_add_task')->where('id',$id)->update([
        
        'assignment' =>  $Assignment,
     ]);
     return redirect('/view_over_time');
}

public function dropassigment($id){
    $drop_list = DB::table('cra_add_task')->where('id',$id)->delete();
    return redirect('/view_over_time');
}



   
   
    

    


}