<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Response; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee_list($id)
    {
        $employee_list = DB::table('employee_dets')->where('employee_dets.company_id', $id)->where('employee_job_history.doe',null)
        ->leftjoin('employee_job_history','employee_job_history.unique_id','employee_dets.unique_id')
        ->select('employee_dets.id as id',
        'employee_dets.unique_id as uniqueid',
        'employee_dets.first_name as first_name',
        'employee_dets.last_name as last_name',
        'employee_dets.email as email',
        'employee_dets.contact_no as contact_no',
        'employee_dets.passport_photo as photo',
        'employee_job_history.role_id as role_id',
        'employee_job_history.dept_id as dept_id',
        'employee_job_history.branch_id as branch_id'
        )->orderBy('employee_dets.id', 'desc')
        ->get();
        $all_employee =[] ;
        foreach($employee_list as $employee){
            $employee_branch=DB::table('cra_company_branch_details')->where('id',$employee->branch_id)->first();
            if( empty($employee_branch)){
                continue;
            }
            $employee_role = DB::table('roles')->where('id', $employee->role_id)->first();
            $employee_depart=DB::table('departments')->where('id',$employee->dept_id)->first();
            $result_1 = [
                "id"=>$employee->id,
                "uniqueid"=>$employee->uniqueid,
                "name"=>$employee->first_name.' '.$employee->last_name,
                "photo"=>$employee->photo,
                "depart"=>$employee_depart->depname,
                "barnch"=>$employee_branch->branch_name,
                "designation"=>$employee_role->role,
                "email"=>$employee->email,
                "contact"=>$employee->contact_no,
                "status"=>'',
            ];
            array_push($all_employee,$result_1);
        }
    
        
        return view('employee.employee_list',compact('all_employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $departments= DB::table('departments')->get();
        $branch_list = DB::table('cra_company_branch_details')->where('company_id', $id)->get();
        return view('hr.add_staff', compact('departments','branch_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company_id = Auth::user()->company_id;
        $job_status = 1;
        if(!empty($request->exdoc)){// more document details start
        $ext_doc = $request->exdoc;
        $extra_doc=[];
        foreach($ext_doc as $ex){
            $doc_dets=[
                "doc_name" => $ex[0],
                "doc_id" => $ex[1],
            ];
            array_push($extra_doc,$doc_dets);
        }
        $doc_json = json_encode($extra_doc);
        }else{
            $doc_json = "";
        }// --------------------------more document details end
        if(!empty($request->decduct)){//more decduct percentage start
            $decduct = $request->decduct;
            $decduct_arr = [];
            foreach($decduct as $dec){
                $dect = [
                    "decduct_name"=> $dec[0],
                    "decduct_percentage"=>$dec[1],
                ];
                array_push($decduct_arr, $dec);
            }
            $decduct_dets = json_encode($decduct_arr);
        }else{
            $decduct_dets = "";
        }//----------------------------more decduct percentage start
        $employee_id = DB::table('employee_dets')->insertGetId([
            "company_id"=>$company_id,
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "dob"=>$request->dob,
            "gender"=>$request->gender,
            "email"=>$request->email,
            "postal_addr"=>$request->postal_addr,
            "city"=>$request->city,
            "postal_code"=>$request->postal_code,
            "national_type"=>$request->national_type,
            "contact_no"=>$request->contact_no,
            "kin_name"=>$request->kin_name,
            "kin_relation"=>$request->kin_contact_no,
            "educ_qualif"=>$request->educ_qualif,
            "extra_doc"=>$doc_json,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        $role=sprintf("%02d",$request->job_title);
        $comp_id=sprintf("%04d", $employee_id);
        $uniqueid =$role.$comp_id;
        DB::table('employee_job_history')->insert([
            "unique_id"=>$uniqueid,
            "dept_id"=>$request->department,
            "role_id"=>$request->job_title,
            "branch_id"=>$request->branch,
            "reporting_to"=>$request->reporting_to,
            "process_payroll"=>$request->process_payroll,
            "contract_type"=>$request->contract_type,
            "job_status"=>$job_status,
            "doj"=>$request->doj,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('employee_salary_dets')->insert([
            "unique_id"=>$uniqueid,
            "basic_salary"=>$request->basic_salary,
            "parters_drawing"=>$request->parters_drawing,
            "payroll_decduction_from"=>$request->payroll_decduction,
            "taxed"=>$request->taxed,
            "decduct_percent"=>$decduct_dets,
            "bank_name"=>$request->bank,
            "acc_no"=>$request->acc_no,
            "bank_code"=>$request->bank_branch,
            "created_at"=>date('Y-m-d H:i:s'),
        ]);
        if(!empty($request->updoc)){
            $file_1 = $request->updoc;
            foreach($file_1 as $file){
                $file_name = $file[0];
                $file_doc = $file[1];
                $file_name_doc=$file_name .time().'.'.$file_doc->getClientOriginalExtension();
                $file_doc->move(public_path('\employee_dets\files'),$file_name_doc);
                DB::table('employee_doc_dets')->insert([
                    "unique_id"=>$uniqueid,
                    "doc_name"=>$file_name,
                    "file_path"=>$file_name_doc,
                ]);
            }
        }
        if($request->hasfile('passport_photo')){
            $passport_photo = $request->passport_photo;
            $photoname = time() . '.' . $passport_photo->getClientOriginalExtension();
            // $passport_photo->move(public_path('\employee_dets\photo'),$photoname);
            $passport_photo->move(public_path('\images\faces'),$photoname);
        }
        if($request->hasfile('employ_sign')){
            $employ_sign = $request->employ_sign;
            $employ_sign_name = time() . '.' . $employ_sign->getClientOriginalExtension();
            $employ_sign->move(public_path('\employee_dets\sign'),$employ_sign_name);
            
        }
        DB::table('employee_dets')->where('id', $employee_id)->update([
            "unique_id"=>$uniqueid,
            "passport_photo"=>$photoname,
            "employ_sign"=>$employ_sign_name,
        ]);
        $pass = Hash::make($request->password);
        DB::table('users')->insert([
            'uniqueid'=>$uniqueid,
            'username'=>$request->username,
            'status'=>1,
            'role'=>$request->job_title,
            'company_id'=>$company_id,
            'email' =>$request->email,
            'password'=>$pass,
            'photo_path'=>$photoname,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        return redirect('employee_list/'.$company_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_employee($id)
    {
       $edit = DB::table('employee_dets')->where('id',$id)->first();
       return view('employee.employee_list',compact('edit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
