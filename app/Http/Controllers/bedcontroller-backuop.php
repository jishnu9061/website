<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Auth;

class bedscontroller extends Controller
{
	public function beds(Request)
	{
    $usershospital=Auth::user()->Hospital;
     //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
     //$roomcount=$hospitalbeds->rooms;
      $beds= DB::table('beds')->where('hospital',$usershospital)->get();
      $departments= DB::table('departments')->get();
      $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->paginate(12);
      $acrooms= DB::table('rooms')->where('hospital',$usershospital)->paginate(70);
      $color="white";
    return view('patient.beds',['rooms'=>$rooms,'acrooms'=>$acrooms,'color'=>$color,'departments'=>$departments]);
	}
	public function createbeds(Request $Request)
	{
     $Request->session()->forget('nopatient','No patient with this id registered');
    return view('beds',['beds'=>$beds]);
	}
   public function allocateroom(Request $Request)
   {
    
   	 $patientid=$Request['patientid'];
     $checkpatients=DB::table('patient')->select('id','firstname')->where('id',$patientid)->first();
     if (isset($checkpatients))
     {
     $patientname=$checkpatients->firstname;
     $roomno= $Request['roomno'];
     $data= array('Roomno'=>$roomno,'allocateduser'=>$patientid,'username'=>$patientname,'css'=>"black");
     $statusupdate=DB::table('rooms')->where('Roomno', $roomno)->where('category',"ac")->update($data); 
     $discharge=array('status'=>'inbed');
     DB::table('appointments')->where('patientid',$patientid)->whereNotIn('status',['discharged','out','dead'])->update($discharge);
     $usershospital=Auth::user()->Hospital;
     //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
     //$roomcount=$hospitalbeds->rooms;
      $beds= DB::table('beds')->where('hospital',$usershospital)->get();
      $departments= DB::table('departments')->get();
      $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->paginate(12);
      $acrooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','ac')->paginate(12);
      $color="white";
    return view('patient.beds',['rooms'=>$rooms,'acrooms'=>$acrooms,'color'=>$color,'departments'=>$departments]);
     }
     else
     {
      $Request->session()->put('nopatient','No patient with this id registered');
      $usershospital=Auth::user()->Hospital;
     //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
     //$roomcount=$hospitalbeds->rooms;
      $beds= DB::table('beds')->where('hospital',$usershospital)->get();
      $departments= DB::table('departments')->get();
      $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->paginate(12);
      $acrooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','ac')->paginate(12);
      $color="white";
    return view('patient.beds',['rooms'=>$rooms,'acrooms'=>$acrooms,'color'=>$color,'departments'=>$departments]);
     }

     
  
   }
    public function allocatenonacroom(Request $Request)
   {
     $patientid=$Request['patientid'];
    
     $checkpatients=DB::table('patient')->select('id','firstname')->where('id',$patientid)->first();
     if (isset($checkpatients))
     {
     $roomno= $Request['roomno'];
     $patientname=$checkpatients->firstname;
     $data= array('Roomno'=>$roomno,'allocateduser'=>$patientid,'username'=>$patientname,'css'=>"black");
     $statusupdate=  DB::table('rooms')->where('Roomno', $roomno)->where('category',"nonac")->update($data);
        return Redirect::back();
     }
     else
     {
     dd("Patient not exist");
     }

     
  
   }
   public function allocatebedsandrooms()
   {
    $departments=DB::table('medicaldepartments')->get();
    return view('hospitals/bedandroomallocate',['departments'=>$departments]);
   }
    public function clinicalnotes(Request $Request)
   {
       $usershospital=Auth::user()->Hospital;
       $clinicalnotes=$Request['clinicalnotes'];
       $roomno=$Request['aa'];
       $catno=$Request['cc'];

      
       $updatestatus=array('clinicalnotes'=>$clinicalnotes);
        DB::table('rooms')->where('hospital',$usershospital)->where('Roomno',$roomno)->where('category',$catno)->update($updatestatus);
        return redirect('/beds');
    
   }
}
