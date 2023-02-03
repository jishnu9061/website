<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Response; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee_list($id)
    {
        $employee_list = DB::table('employee_details')->where('id', $id)->get();
        $result = [];
        foreach($employee_list as $employee){
            if(!empty($employee->role)){
                $role=DB::table('roles')->where('id',$employee->role)->select('*')->first();
                if(!empty($role->department_category)){
                    switch ($role->department_category) {
                        case 3:
                          $department='Legal Dept';
                          break;
                        case 4:
                            $department='HR Dept';
                          break;
                        case 5:
                            $department='Account Dept';
                          break;
                        default:
                            $department='Not fount';
                          break;
                      }
                }else{
                    $department='Dept Head';
                }
            }
            if(!empty($role->branch_id)){
                $branch=DB::table('cra_company_branch_details')->where('id',$role->branch_id)
                ->select('*')->first();
            }else{
                $branch="Not Assinged";
            }
            $result_1 = [
                "id"=>$employee->id,
                "uniqueid"=>$employee->uniqueid,
                "name"=>$employee->first_name.' '.$employee->last_name,
                "photo"=>$employee->photo,
                "designation"=>$role->role.'/ '.$department.'/ '.$branch,
                "email"=>$employee->email,
                "contact"=>$employee->contact_no,
                "status"=>$employee->status,
                "branch"=>$employee->branch_id,
            ];
            array_push($result,$result_1);
        }
        return view('employee.employee_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
