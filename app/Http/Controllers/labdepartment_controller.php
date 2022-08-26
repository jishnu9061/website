<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\model\callambulance_model;
use Illuminate\Support\Facades\DB;

class labdepartment_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_labdept()
    {
        $labdept=DB::table('lab_department')
        ->leftjoin('departments','departments.id','=','lab_department.dep_name')
        ->leftjoin('floor','lab_department.floor','=','floor.floor_id')
        ->get();
        $dprmt=DB::table('departments')->get();
        $lab_floor=DB::table('floor')->get();
        //  dd($dprmt);
        return view('lab_department.labdept_view',compact('labdept','dprmt','lab_floor'));
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
        $l_deptname=$request->input('labdept_name');
        $deptname=$request->input('dept_name');
        $floor=$request->input('floor_name');
        // dd($deptname);
        DB::insert('insert into lab_department (lab_deptname,dep_name,floor) values (?,?,?)',[$l_deptname,$deptname,$floor]);
        return redirect('add_labdept')->withInput();
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
    public function update(Request $Request)
    {
        // $department_name=$Request['labdept_name2'];
        // $depid=$Request['dep_id'];
        // $data=array('lab_deptname'=>$department_name);
        // DB::table('lab_department')->where('id',$depid)->update($data);
        // $Request->session()->put('depupdated','Department Updated');
        // return back();
        $depid=$Request['dept_id'];
        $department_name=$Request['dep_modal_name'];
        $main_dpmt=$Request['dept_modal_name'];
        $labfloor=$Request['floor_modal_name'];
        // dd($department_name);
        $editdata=array('lab_deptname'=> $department_name,'dep_name'=>$main_dpmt,'floor'=>$labfloor);
        DB::table('lab_department')->where('lab_deptid',$depid)->update($editdata);
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $Request,$id)
    {
        DB::table('lab_department')->where('lab_deptid',$id)->delete();
        // $Request->session()->put('depdeleted','Lab Department Removed');
        return back();
    }
    public function doctor_preclabtest()
    {
        $test_view=DB::table('patient_labtest')
        ->leftjoin('patient','patient.id','=','patient_labtest.patient_id')
        ->leftjoin('lab_department','lab_department.lab_deptid','=','patient_labtest.lab_name')
        ->get();
        // dd($test_view);
        return view('lab.doctor_pre_view',compact('test_view'));
    }
    public function display_test_details($id,$patient_id)
    {
        // dd($patient_id);
        $test_details=DB::table('patient_labtest')
        ->leftjoin('lab_department','lab_department.lab_deptid','=','patient_labtest.lab_name')
        ->where('patient_id',$patient_id)->get();
        $patient=DB::table('patient')->where('id',$patient_id)->get();
        $patient_test=DB::table('prescribed_labtest')
        ->leftjoin('labprofiles','labprofiles.id','=','prescribed_labtest.profile')
        ->leftjoin('labtests','labtests.id','=','prescribed_labtest.test')
        ->select('labprofiles.name as combo_name','labtests.name as test_name')
        ->where('patient_labtest_id',$id)->get();
        return view('lab.display_details',compact('test_details','patient','patient_test'));
    }

}
