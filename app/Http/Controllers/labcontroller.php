<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\labcategory;
use App\labtests;
use App\labprofile;
use App\labprofiles; 
use App\patientprofiles; 
use App\patienttests; 
use App\alllabtests;
use Auth;
use Carbon\Carbon;


class labcontroller extends Controller
{
    public function labcategory(Request $Request)
    {
    	if($Request['labcatname'])
    	{
    	  $hospital=Auth::user()->Hospital;
          $lab = new labcategory();
          $lab->name=$Request['labcatname'];
          $lab->hospital=$hospital;
          $lab->save();
    	}
     $labcat=DB::table('labcategory')->get();
     return view('lab.labcategory',compact('labcat'));
    }
    public function dellabcat($id)
    {
    	DB::table('labcategory')->where('id',$id)->delete();
    	return back();
    }

    public function labtests(Request $Request)
    {
    	$hospital=Auth::user()->Hospital;
    	  
        if($Request['labtestname'])
    	{
          $lab = new labtests();
          $lab->name=$Request['labtestname'];
          $lab->category=$Request['labcatname'];
          $lab->price=$Request['labprice'];
          $lab->reference_range=$Request['labref'];
          $lab->hospital=$hospital;
          $lab->unit=$Request['labunit'];
          $lab->method=$Request['labmethod'];
          $lab->save();
    	}
     $labtest=DB::table('labtests')->get();
     $labcat=DB::table('labcategory')->get();
     return view('lab.labtests',compact('labtest','labcat'));
    }

    public function dellabtest($id)
    {
     DB::table('labtests')->where('id',$id)->delete();
     return back();
    }
    public function labprofile(Request $Request)
    {
  $inputx = $Request->input('testname');
   $inputy = $Request->input('labtestname');
   	$hospital=Auth::user()->Hospital;
    	  

        if($inputx)
        {
          foreach($inputx as $service)
        {
       $staffs=new labprofile();
       $staffs->name=$inputy; 
       $staffs->price='5';
       $staffs->tests=$service;
       $staffs->hospital=$hospital;
       $staffs->save(); 
        }

      $labprof=new labprofiles();
      $labprof->name=$inputy;
      $labprof->hospital=$hospital;
      $labprof->save();
    }

     $labtests=DB::table('labtests')->get();
     $labprofile=DB::table('labprofile')->get();
     //  $labprofiles=DB::table('labprofiles')
     // ->join('labprofile', 'labprofiles.name', '=', 'labprofile.name')
     // ->select('labprofiles.*','labprofile.name','labprofile.price','labprofile.tests')
     // ->get();
     $labprofiles=DB::table('labprofiles')->get();
     return view('lab.labprofile',compact('labprofile','labtests','labprofiles'));
    }
    public function labtestpat()
    {
      $hospital=Auth::user()->Hospital;
    	$labtests=DB::table('labtests')->get();
    	$labprofiles=DB::table('labprofiles')->get();
    	return view('lab.labtestpat',compact('labtests','labprofiles'));
    }
    public function dellabprof($id)
    {
    	$hospital=Auth::user()->Hospital;
    	DB::table('labprofiles')->where('name',$id)->where('hospital',$hospital)->delete();
    	DB::table('labprofile')->where('tests',$id)->where('hospital',$hospital)->delete();
      return back();
    }
    public function update_lab_tests(Request $Request)
    {
    $editid=$Request['editid'];
    $editname=$Request['editname'];
    $editcategory=$Request['editcategory'];
    $editprice=$Request['editprice'];
    $editunit=$Request['editunit'];
    $editreference=$Request['editreference'];
    $editmethod=$Request['editmethod'];
    $data=array('name'=>$editname,'category'=>$editcategory,'price'=>$editprice,'reference_range'=>$editreference,'unit'=>$editunit,'method'=>$editmethod);
    DB::table('labtests')->where('id',$editid)->update($data);
    return back();
    }

   public function viewlabproff(Request $Request)
   {
     $hospital=Auth::user()->Hospital;
     $searchvalue=$Request['searchvalue'];
     $filldata=DB::table('labprofile')->where('name',$searchvalue)->where('hospital',$hospital)->get();
     return view('lab.filldatax',compact('filldata'));
   }

    public function alllabtests(Request $Request)
    { 

    $hospital=Auth::user()->Hospital;
    $testname=$Request['testname'];
    $profilename=$Request['profilename'];

     if($Request['name'])
    	{
    $all=new alllabtests();
    $all->patient_id=$Request['id'];
    $all->patient_name=$Request['name'];
    $all->patient_address=$Request['address'];
    $all->patient_phoneno=$Request['phoneno'];
    $all->hospital=$hospital;
    $all->appointment_id=$Request['appz'];
    $all->save();

    
   
    foreach($profilename as $profile)
    {
    $profiles=new patientprofiles();
    $profiles->patientid =$Request['id'];
    $profiles->appointmentid =$Request['id'];
    $profiles->profiles =$profile;
    $profiles->save();
    }
        foreach($Request['testname'] as $key => $value)
    {
    $test=new patienttests();
    $test->patientid =$Request['id'];
    $test->appointmentid =$Request['id'];
    $test->tests =$value;
    $test->save();
    }

    	}
       $alllabtests=DB::table('alllabtests')->where('hospital',$hospital)->get();
       return back();
   
    }
    public function alllabtestsview()
    {
     $hospital=Auth::user()->Hospital;
     $alllabtests=DB::table('alllabtests')->where('hospital',$hospital)->get();
     return view('lab.alllabtests',compact('alllabtests')); 
    }
   
   public function viewlabres($id)
   {
    $date  = Carbon::now();
    $tests = DB::table('patienttests')->where('patientid',$id)
        ->join('labtests', 'patienttests.tests', '=', 'labtests.name')
    ->select('patienttests.*','labtests.reference_range','labtests.price','labtests.unit','labtests.method')
    ->get();
    $patientid=DB::table('patient')->where('id',$id)->first();
    $patientname=$patientid->firstname;
    $patientaddress=$patientid->address;
    $patientphone=$patientid->phoneno;
    
    return view('lab.viewlabres',compact('date','tests','patientname','patientaddress','patientphone'));
   }
   public function uploadlabres($id)
   {
    $patienttests= DB::table('patienttests')->where('patientid',$id)
    ->join('labtests', 'patienttests.tests', '=', 'labtests.name')
    ->select('patienttests.*','labtests.reference_range','labtests.price','labtests.unit','labtests.method')
    ->get();
    return view('lab.uploadlabres',compact('patienttests'));

        $staffallowance=DB::table('giveallowance')->where('type','allowance')->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->get();
   }
   public function submitlabres(Request $Request)
   {
    $hiddenid=$Request['hiddenid'];
    $observed=$Request['observed'];
    $data=array('value'=>$observed);
    DB::table('patienttests')->where('id',$hiddenid)->update($data);
    return back();
    
   }
}
