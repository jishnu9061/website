<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

// use Illuminate\Support\Facades\DB;


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


  

    public function create_job_post(Request $request)

    {
        $job_title=$request['job_title'];
        $job_location=$request['job_location'];
        $qualification=$request['qualification'];
        $work_experience=$request['work_experience'];
        $employment_type=$request['employment_type'];
        $job_nature=$request['job_nature'];
        $job_type=$request['job_type'];
        $salary_range=$request['salary_range'];
        $start_date=$request['start_date'];
        $end_date=$request['end_date'];
        $job_description=$request['job_description'];
        $job_responsibilities=$request['job_responsibilities'];
        

        DB::table('cra_hr_create_post')->insert([
            
            'job_title' => $job_title,
            'job_location' => $job_location,
            'qualification' => $qualification,
            'work_experience' => $work_experience,
            'employment_type' => $employment_type,
            'job_nature' => $job_nature,
            'job_type' => $job_type,
            'salary_range' => $salary_range,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'job_description' => $job_description,
            'job_responsibilities' => $job_responsibilities,
            
        ]);
        return view('hr.create_job_post');
    }

    public function job_posts()
    {
        $job_details=DB::table('cra_hr_create_post')->get();
        return view('hr.job_posts',['job_details'=> $job_details]);
        // return view('hr.job_posts',compact('job_details'));
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