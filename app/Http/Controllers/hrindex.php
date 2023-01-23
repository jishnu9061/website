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
        $departments=DB::table('cra_add_user_department')->get();
        return view('hr.performance_department',compact('departments'));
    }

    public function recruitment()
    {
        return view('hr.recruitment_index');
    }



//Subhasree


public function view_staff_details($id)
{
    $department=DB::table('cra_add_user_department')->select('id as department_id','department_name')->get();
    $roles=DB::table('cra_add_user_department')->select('id as roles_id','role_name')->get();
    $view_list = DB::table('users')->where('id',$id)->first();

    return view('hr.view_staff_details',compact('view_list','id'));
}



 public function edit_staff_details()
 {

    return view('hr.edit_staff_details');
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
        $user_roles=DB::table('cra_add_user_roles')->get();
        $departments=DB::table('cra_add_user_department')->get();
        // $add_kpi=DB::table('cra_add_kpi')->get();
        return view('hr.quarterly_performance_form',compact('departments','user_roles'));

    }
    public function add_kpi(Request $Request)
    {
        $department= $Request['department'];
        $designation= $Request['role_name'];
        $kpi = $Request['kpi'];

        DB::table('cra_add_kpi')->insert([
            'department' =>$department,
            'designation' =>$designation,
            'kpi' =>$kpi,
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
//Subhasree
public function leave_request()
{
    $name_list = DB::table('users')->get();

    $leave_request=DB::table('cra_leave_request_details')->get();
    return view('hr.leave_request_details',compact('leave_request','name_list'));


    // $department_list = DB::table('cra_manage_user_department')->get();

    // $leave_request=DB::table('cra_leave_request_details')->get();
    // return view('hr.leave_request_details',compact('leave_request','department_list'));

    // $leave_request = DB::table('users')
    // ->Select ('*')
    // ->leftjoin('users','users.name','=','cra_leave_request_details.name')
    // ->leftjoin('cra_manage_user_department','cra_manage_user_department.department_name','=','cra_leave_request_details.department')
    // ->get();
    //     dd($leave_request);
    // return view ('hr.leave_request_details',compact('leave_request'));

    // $leave_request = DB::table('cra_leave_request_details')
    // ->Select ('name' , 'department_name')
    // ->from('users')
    // ->leftjoin('cra_manage_user_department', 'users.name', '=' ,'cra_manage_user_department.department_name')
    // ->get();

    // return view ('hr.leave_request_details',compact('leave_request'));

}





public function addleaverequest(Request $Request)
{

    $name = $Request['name'];
    $department = $Request['department'];
    $apply_date = $Request['apply_date'];
    $leave_type = $Request['leave_type'];
    $date_from = $Request['date_from'];
    $date_to = $Request['date_to'];
    $number_of_days = $Request['number_of_days'];
    $reason = $Request['reason'];
    $image=  $Request['document'];

    if($Request->hasFile('document')){
        $this->validate($Request,[
            'document' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
        ]);
        if(request()->hasfile('document')){
          $uploadedImage = $Request->file('document');
          $imageName     = time() .'.'. $uploadedImage->getClientOriginalExtension();
          $destinationPath = public_path('images/file');
          $image_location="/CRA/public/images/file/";
          $uploadedImage->move($destinationPath,$imageName);
          $image->document    =  $image_location.$imageName;
        }
      }
      $remarks = $Request['remarks'];
    // $document = $Request['document'];
    // $status = $Request['status'];

    DB::table('cra_leave_request_details')->insert([
        'name' => $name,
        'department' => $department ,
        'apply_date' => $apply_date,
        'leave_type' => $leave_type,
        'date_from' => $date_from,
        'date_to' => $date_to,
        'number_of_days' => $number_of_days,
        'reason' => $reason,
        'document' => $image,
        'remarks' => $remarks,
    ]);
    return redirect('/leave_request_details');

}
public function approve_leave_request()
{
    return view('hr.approve_leave_request');
}
public function view_leave_request($id)
{
    $view_leave_request=DB::table('cra_leave_request_details')->where('id',$id)->first();
    return view('hr.view_leave_request',compact('view_leave_request','id'));

}


public function edit_leave_request($id)
{

    // $name_list = DB::table('users')->get();

    // $leave_request=DB::table('cra_leave_request_details')->get();
    // return view('hr.leave_request_details',compact('leave_request','name_list'));

    // $department_list = DB::table('cra_manage_user_department')->get();

    // $leave_request=DB::table('cra_leave_request_details')->get();
    // return view('hr.leave_request_details',compact('leave_request','department_list'));

    $leave_request=DB::table('cra_leave_request_details')->where('id',$id)->first();
    return view('hr.edit_leave_request',compact('leave_request','id'));

}

public function update_leave_request(Request $Request)


    {
        $id = $Request['id'];
        $name = $Request['name'];
        $name_list = DB::table('users')->get();
        $addleaverequest = DB::table('cra_leave_request_details')

       ->get();
       return view ('hr.leave_request_details',compact('leave_request','name_list'));
        $department  = $Request['department'];
        $department_list = DB::table('cra_manage_user_department')->get();
        $addleaverequest = DB::table('cra_leave_request_details')

       ->get();
       return view ('hr.leave_request_details',compact('leave_request','department_list'));
        $apply_date = $Request['apply_date'];
        $leave_type = $Request['leave_type'];
        $date_from = $Request['date_from'];
        $date_to = $Request['date_to'];
        $number_of_days = $Request['number_of_days'];
        $reason = $Request['reason'];
        $document = $Request['document'];
        $remarks = $Request['remarks'];

        $update_leave_request = array(
        'name' => $name,
        'department' => $department ,
        'apply_date' => $apply_date,
        'leave_type' => $leave_type,
        'date_from' => $date_from,
        'date_to' => $date_to,
        'number_of_days' => $number_of_days,
        'reason' => $reason,
        'document' => $document,
        'remarks' => $remarks,
        );
        DB::table('cra_leave_request_details')->where('id', $id)->update( $update_leave_request );
        return redirect('/leave_request_details');



    }

    public function leave_balance()
{
    return view('hr.leave_balance');
}

    public function attendance_sheet()
{
    return view('hr.attendance_sheet');
}


public function view_attendance()
{
    return view('hr.view_attendance');
}

public function manage_salary()
{
    return view('hr.manage_salary');
}

public function manage_salary_index()
{
    return view('hr.manage_salary_index');
}

public function allowances()
{
    return view('hr.allowances');
}

public function commissions()
{
    return view('hr.commissions');
}

public function loan()
{
    return view('hr.loan');
}

public function statutory_deductions()
{
    return view('hr.statutory_deductions');
}

public function other_payment()
{
    return view('hr.other_payment');
}

public function overtime()
{
    return view('hr.overtime');
}
//Subhasree


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

public function internal_memos()
{
    return view('hr.internal_memos');
}
public function view_memo()
{
    return view('hr.view_memo');
}
public function edit_memo()
{
    return view('hr.edit_memo');
}






}
