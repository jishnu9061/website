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
    public function performance_department()
    {
        return view('hr.performance_department');
    }

    public function recruitment()
    {
        return view('hr.recruitment_index');
    }


public function job_posts()
    {
        $job_details=DB::table('cra_hr_create_post')->get();
        return view('hr.job_posts',compact('job_details'));

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
        return redirect('/job_posts');
        //return view('hr.create_job_post');
    }
    public function edit_job_post($id)
    {
        $job_details= DB::table('cra_hr_create_post')->where('id',$id)->first();
        return view('hr.edit_job_post',compact('job_details','id'));
}
public function update_job_post(Request $request){
    $id = $request['id'];
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


    $update_job_post = array(
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
    );
    DB::table('cra_hr_create_post')->where('id', $id)->update($update_job_post );
    return redirect('/job_posts');
}
public function delete_job_post($id){
    DB::table('cra_hr_create_post')->where('id',$id)->delete();
    return redirect('/job_posts');
}
public function view_job_post($id)
{
    $job_details= DB::table('cra_hr_create_post')->where('id',$id)->first();
    return view('hr.view_job_post',compact('job_details','id'));
    $id = $request['id'];
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


    $update_job_post = array(
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
    );
    // DB::table('cra_hr_create_post')->where('id', $id)->update($update_job_post );
    // return redirect('/job_posts');
}

    public function view_job_applications()
    {
        return view('hr.view_job_applications');
    }
    public function view_job_appl_details_1()
    {
        return view('hr.view_job_appl_details_1');
    }
    public function view_job_appl_details_2()
    {
        return view('hr.view_job_appl_details_2');
    }

    public function reviewed_details()
    {
        return view('hr.reviewed_details');
    }


    public function quarterly_performance_form()
    {
        $add_kpi=DB::table('cra_add_kpi')->get();
        return view('hr.quarterly_performance_form',compact('add_kpi'));

    }
    public function add_kpi(Request $Request)
    {
        $select_department= $Request['department'];
        $enter_kpi = $Request['kpi'];

        DB::table('cra_add_kpi')->insert([
            'select_department' => $select_department,
            'enter_kpi' => $enter_kpi,
        ]);

        return redirect('/quarterly_performance_form');

    }


    public function mid_year_performance()
    {
        return view('hr.mid_year_performance');
    }
    public function annual_performance_form()
    {
        return view('hr.annual_performance_form');
    }
    public function bank_names()
    {

        $bank_list = DB::table('cra_add_bank_name')->get();
        return view('hr.bank_names',compact('bank_list'));
    }

    public function addbanknames(Request $request)
    {
        $bank_name = $request['bank_name'];
        $branch = $request['branch'];

        DB::table('cra_add_bank_name')->insert([
            'bank_name' => $bank_name,
            'branch' => $branch,
        ]);
        return redirect('/bank_names');
    }

    public function editbanknames($id)
    {
        $edit_bank=DB::table('cra_add_bank_name')->where('id',$id)->first();
        return view('hr.edit_bank_name',compact('edit_bank','id'));
    }

    public function updatebankname(Request $request)
    {
        $id = $request['id'];
        $bank_name = $request['bank_name'];
        $branch = $request['branch'];

        DB::table('cra_add_bank_name')->where('id',$id)->update([

            'id' => $id,
            'bank_name' => $bank_name,
            'branch' => $branch,
        ]);
       return redirect('/bank_names');
    }

    public function deletebank($id)
    {
        $delete_bank = DB::table('cra_add_bank_name')->where('id',$id)->delete();
        return redirect('/bank_names');
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

public function task_allocation()
{
    return view('hr.task_allocation');
}

public function view_task_allocation()
{
    return view('hr.view_task_allocation');
}

public function edit_task_allocation()
{
    return view('hr.edit_task_allocation');
}

public function timesheets()
{
    return view('hr.timesheet');
}

public function timesheetweeks()
{
    return view('hr.timesheetweek');
}

public function viewsheets()
{
    return view('hr.viewsheet');
}

public function timesheetmonths()
{
    return view('hr.timesheetmonth');
}

public function monthviewsheets()
{
    return view('hr.monthviewsheet');
}





}