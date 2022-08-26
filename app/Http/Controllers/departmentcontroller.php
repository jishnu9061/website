<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\departments;
use Illuminate\Support\Facades\DB;
use Auth;



class departmentcontroller extends Controller
{
   public function index()
   {
    $departments=DB::table('departments')->get();
    return view('store.view_departments',compact('departments'));
   }
   public function create(Request $request)
   {
    $department_name=$request->input('department_name');
    DB::insert('insert into departments (depname) values (?)',[$department_name]);
    return back()->withInput();
   }
   public function depstaffs()
   {
      $departments=Auth::user()->departments;
      $doctors=DB::table('users')->where('role','Doctor')->where('departments',$departments)->get();
      $nurses =DB::table('users')->where('role','nurse')->where('departments',$departments)->get();
      $pharma =DB::table('users')->where('role','pharma')->where('departments',$departments)->get();
      $labs   =DB::table('users')->where('role','lab')->where('departments',$departments)->get();
      $allusers =DB::table('users')->where('departments',$departments)->get();
      return view('add.allstaffs',['allusers'=>$allusers,'doctors'=>$doctors,'nurses'=>$nurses,'pharma'=>$pharma,'labs'=>$labs]);
   }
   public function managedepstaff($id)
   {
    $schedule=DB::table('dutyschedule')->where('staffid',$id)->get();
    return view('departments.managedepstaff',['schedule'=>$schedule,'staffid'=>$id]);
   }
   public function depstock()
   {
    $depstock=DB::table('pharma_requests')->get();
    return view('departments.depstock',['depstock'=>$depstock]);
   }
  public function depbeds(Request $Request)
  {


      $cat=$Request['roomcat'];

      $usershospital=Auth::user()->Hospital;
      $usersdep=Auth::user()->departments;
       //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
       //$roomcount=$hospitalbeds->rooms;
      $searchroom=$Request['searchroom'];
        $beds= DB::table('beds')->where('hospital',$usershospital)->get();
        $departments= DB::table('departments')->get();
        $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->get();
        $acrooms= DB::table('rooms')->where('hospital',$usershospital)->paginate(120);
        $color="white";
        $roomcats=DB::table('roomcategories')->get();

      $room=DB::table('rooms')->where('category',$cat)->where('Department',$usersdep)->get();
          return view('patient.beds',['rooms'=>$rooms,'acrooms'=>$acrooms,'color'=>$color,'departments'=>$departments,'roomcats'=>$roomcats,'room'=>$room,'cat'=>$cat]);


  }
  public function deppats()
  {
    $hospital=Auth::user()->Hospital;
    $departments=Auth::user()->departments;
    $pats=DB::table('patient')->where('hospital',$hospital)->join('appointments', 'patient.id', '=', 'appointments.patientid')
    ->select('patient.*','appointments.Department')->where('Department',$departments)->get();
    return view('departments.deppats',['pats'=>$pats]);
  }
  public function depleaves()
  {
    $departments=Auth::user()->departments;

    $leaves=DB::table('leaves')
    ->where('department',$departments)->get();
    return view('departments.depleaves',['leaves'=>$leaves]);
  }
  public function leaveapprove(Request $Request)
  {

     $leaveid=$Request->input('leaveidapprove');

     $data=array('status'=>'Admin Approved');
     DB::table('leaves')->where('id',$leaveid)->update($data);
     $Request->session()->put('leaveapprove','Leave Approved');
     return back();
  }
  public function leavedecline(Request $Request)
  {
    $leaveid=$Request['leaveiddecline'];
    $data=array('status'=>'Admin Declined');
    DB::table('leaves')->where('id',$leaveid)->update($data);
    $Request->session()->put('leavedecline','Leave Declined');
    return back();
  }

public function removepatientfrombed(Request $Request)
{
  $roomnom=$Request->input('roomnom');
  $data=array('allocateduser'=>'','css'=>'','username'=>'');
  DB::table('rooms')->where('id',$roomnom)->update($data);
  return redirect('/beds');
}
}
