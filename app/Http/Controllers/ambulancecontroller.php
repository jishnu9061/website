<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\model\ambulancemodel;
use App\model\callambulance_model;
use Illuminate\Support\Facades\DB;

class ambulancecontroller extends Controller
{
    public function index()
    {
        $ambulance=DB::table('amb_ulance')->get();
        $patient=DB::table('patient')->get();
        return view('ambulance.amb_view',compact('ambulance','patient'));
    }
    public function store_data(Request $request)
    {
        $v_name=$request->input('vname');
        $v_model=$request->input('vmodel');
        $year=$request->input('year');
        $d_name=$request->input('dname');
        $d_lice=$request->input('dlicense');
        $d_contact=$request->input('contact');
        $v_type=$request->input('vtype');
        $status=$request->input('status');
        DB::insert('insert into amb_ulance ( vehicle_name,vehicle_model,year_made,driver_name,driver_license,driver_contact,vehicle_type,status)values(?,?,?,?,?,?,?,?)',
        [$v_name,$v_model,$year,$d_name,$d_lice,$d_contact,$v_type,$status,]);
        return back()->withInput();
    }
    public function update_data(Request $Request)
    {   
        $id=$Request['ambu_id'];
        $name=$Request['vname'];
        $model=$Request['vmodel'];
        $year=$Request['year'];
        $drname=$Request['dr_name'];
        $drlic=$Request['dlicense'];
        $contact=$Request['contact'];
        $vtype=$Request['vtype'];
        $vstatus=$Request['status'];

        
        $editdata=array('vehicle_name'=> $name,'vehicle_model'=>$model,'year_made'=> $year,'driver_name'=> $drname,'driver_license'=>$drlic,'driver_contact'=>$contact,'vehicle_type'=>$vtype,'status'=>$vstatus);
        DB::table('amb_ulance')->where('id',$id)->update($editdata);
        return back()->withInput();


    }
    public function destroy($id)
    {
        DB::table('amb_ulance')->where('id',$id)->delete();
   	   return redirect('/Add_Ambulance_details');
    }
    public function save(Request $request)
    {
        $amb_id=$request->input('ambid');
        $p_name=$request->input('pname');
        $p_address=$request->input('paddress');
        $des=$request->input('desc');
        DB::insert('insert into patientambus ( ambulance_id,patient_name,patient_address,descripton)values(?,?,?,?)',
        [$amb_id,$p_name,$p_address,$des]);
        return back()->withInput();
    }
    public function ambulance_details()
    {
        $ambulance=DB::table('amb_ulance')
        ->leftjoin('callambulance', 'amb_ulance.id', '=', 'callambulance.ambulance_id')
        ->select('amb_ulance.*','callambulance.*','amb_ulance.id as id')
        ->get();
        // $ambulance=DB::table('amb_ulance')->get();
        // $callambulance=DB::table('callambulance')->get();
        $usershospital=Auth::user()->Hospital;
    
      $color="white";
    return view('ambulance.casualityamb_view',compact('ambulance'));
    }
    public function allocateamb(Request $Request)
    {
        $patientid=$Request['patientid'];
        $checkpatients=DB::table('patient')->select('id','firstname')->where('id',$patientid)->first();
        if (isset($checkpatients))
        {
        $patientname=$checkpatients->firstname;
        $ambno= $Request['ambulance_id'];
        $data= array('patient'=>$patientid,'patient_name'=>$patientname,'css'=>"black");
        // $data= array('Roomno'=>$roomno,'allocateduser'=>$patientid,'username'=>$patientname,'css'=>"black");
     $statusupdate=DB::table('amb_ulance')->where('id', $ambno)->update($data);
            //  $usershospital=Auth::user()->Hospital;
        //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
        //$roomcount=$hospitalbeds->rooms;
        //  $beds= DB::table('beds')->where('hospital',$usershospital)->get();
        //  $departments= DB::table('departments')->get();
        //  $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->paginate(12);
        //  $acrooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','ac')->paginate(12);
         $color="white";
       return view('ambulance.casualityamb_view',compact('ambulance'));
        }
        else
        {
            $Request->session()->put('nopatient','No patient with this id registered');
         $usershospital=Auth::user()->Hospital;
        //$hospitalbeds=DB::table('hospitals')->where('name',$usershospital)->select('rooms','acrooms','wardbeds','categoryrooms')->first();
        //$roomcount=$hospitalbeds->rooms;
        //  $beds= DB::table('beds')->where('hospital',$usershospital)->get();
        //  $departments= DB::table('departments')->get();
        //  $rooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','nonac')->paginate(12);
        //  $acrooms= DB::table('rooms')->where('hospital',$usershospital)->where('category','ac')->paginate(12);
        //  $color="white";
    //    return view('patient.beds',['rooms'=>$rooms,'acrooms'=>$acrooms,'color'=>$color,'departments'=>$departments]);
        }
    }
    public function addamb_patient(Request $Request)
    {
    // $patient=DB::table('amb_ulance')
    //   ->join('patient', 'amb_ulance.patient', '=', 'patient.id')
    //  ->select('amb_ulance.*','patient.id','patient.firstname')
    //   ->get();
    //   dd($patient);

      $ambid=$Request['ambulance_id'];
      $pid=$Request['patient_id'];
              $pname=$Request['patient_name'];
      $update=array('patient'=>$pid,'patient_name'=> $pname);
              DB::table('amb_ulance')->where('id',$ambid)->update($update);
        
        // $ambid=$Request['ambulance_id'];
        // $vname=$Request['v_name'];
        // $dname=$Request['driver_name'];
        // $mobile=$Request['driver_contact'];
        // $type=$Request['vehicle_type'];
        // $pid=$Request['patient_id'];
        // $pname=$Request['display_pt_name'];
        // $stat='running';
        // $update=array('patient'=>$pid,'patient_name'=> $pname,'id'=>$ambid,'status'=>$stat,'css'=>"#0dcaf0 ");
        //  DB::table('amb_ulance')->where('id',$ambid)->update($update);
        // return redirect('/ambulance_details');

        $ambid=$Request->input('ambulance_id');
        $pid=$Request->input('patient_id');
        $from=$Request->input('from');
        $to=$Request->input('to');
        $dis=$Request->input('distance');
        $amt=$Request->input('amount');
        $p_status=$Request->input('pstatus');
        $t_status=$Request->input('tstatus');
        $date=$Request->input('date');
        $loans =new callambulance_model();
        $loans->ambulance_id=$ambid;
        $loans->Patient_id=$pid;
        $loans->from=$from;
        $loans->to=$to;
        $loans->distance=$dis;
        $loans->amount=$amt;
        $loans->paid_status=$p_status;
        $loans->trip_status=$t_status;
        $loans->date=$date;
        $loans->save();
        $data=array('status'=>'2');
        DB::table('amb_ulance')->where('id',$ambid)->update($data);
        return back()->withInput();
    
    }
    public function ambpatient_details(Request $request){
        $patient=DB::table('patient')->find($request->patient_id);
        return json_encode($patient);
    }
    public function cancel_patient(Request $Request)
    {
        // $ambid=$Request['ambulance_id'];
        // // dd($ambid);
        // $stat='available';
        // $update=array('status'=>$stat,'css'=>"blue");
        //  DB::table('amb_ulance')->where('id',$ambid)->update($update);
        // // dd($update);
        // return redirect('/ambulance_details');
        $ambid=$Request['ambulance_id'];
        dd($ambid);
        $pid=$Request[''];
        $pname=$Request[''];
        $editdata=array('patient'=> $pid,'patient_name'=>$pname);
        DB::table('amb_ulance')->where('id',$ambid)->update($editdata);
        return back()->withInput();
    }

}
