<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\model\visitersmodel;
use App\patient;
use Auth;
use Illuminate\Support\Facades\DB;

class casualitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
        $Request->session()->forget('patientregistered');
        // $patient=DB::table('patient')->get();
        $casu_type=DB::table('casuality_type')->get();
        return view('casuality.patientregister',compact('casu_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casuality.patientdetails');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pname=$request->input('patient_name');
        // dd($pname);
        $vtype=$request->input('visiting');
        $date=$request->input('date');
        $bname=$request->input('b_name');
        $baddress=$request->input('address');
        $bcnt=$request->input('phoneno');
        $dept='casuality';
        DB::insert('insert into appointments (patientid,Department,casuality_type,appointmentdate,bystander_name,bystander_address,contact_no) values (?,?,?,?,?,?,?)',[$pname,$dept,$vtype,$date,$bname,$baddress,$bcnt]);
        return redirect('casuality_patient')->withInput();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addpatient(Request $Request)
	{

        $patient_id = DB::table('patient')->insert([
            'firstname' => $Request['firstname'],
            'email' => $Request['email'],
            'phoneno' => $Request['phoneno'],
            'address' => $Request['address'],
            'place' => $Request['place'],
            'age' => $Request['age'],
            'dateofbirth' => $Request['dateofbirth'],
            'gender' => $Request['gender'],
            'height' => $Request['height'],
            'weight' => $Request['weight'],
            'temparature' => $Request['temparature']
        ]);
        $patient=DB::table('patient')->get();
        $Request->session()->put('patientregistered','Patient Registered');
        toast('patient added','success');
          return view('casuality.patientregister',compact('patient_id','patient'));
        return redirect('casuality_patient')->withInput();
	}
    public function allpatients(Request $Request)
    {
        $patients=DB::table('appointments')
        ->join('patient','patient.id','=','appointments.patientid')->select('appointments.*','patient.*')->groupBy('appointments.patientid')->get();
        return view('casuality.allpatients',compact('patients'));
    }
    public function update_cpatient(Request $Request)
    {
    $cpatient_id=$Request['pt_id'];
    $cpatient=$Request['patient_n'];
    $cpatient_a=$Request['patient_a'];
    $cpatient_age=$Request['patient_age'];
    $cpatient_m=$Request['patient_m'];
    $editdata=array('firstname'=> $cpatient,'address'=>$cpatient_a,'age'=> $cpatient_age,'phoneno'=> $cpatient_m);
    DB::table('patient')->where('id',$cpatient_id)->update($editdata);
    return back()->withInput();
  }
    public function show(Request $Request,$id)
    {
        // dd ($id);
        // $Request->session()->forget('patientaltered');
        $viewpatient=DB::table('appointments')->leftjoin('patient','patient.id','=','appointments.patientid')
        ->where('casuality_type','emergency')->where('appointments.patientid',$id)->get();
        // print_r($viewpatient);
        // die;
        return view('casuality.viewpatient',compact('viewpatient'));
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

    public function patient_details(Request $request){
        $patient=DB::table('patient')->find($request->patient_id);
        return json_encode($patient);
    }
    public function casuality_billing(Request $Request,$id)
    {
        $ctyp_bill=DB::table('appointments')->leftjoin('patient','patient.id','=','appointments.patientid')
        ->where('casuality_type','emergency')->where('appointments.patientid',$id)->get();
        // dd($viewpatient);
        return view('casuality.cpatientbill',compact('ctyp_bill'));
    }
    public function manage_casu_type()
    {
        $casu_type=DB::table('casuality_type')->get();
        return view('casuality.casuality_type',compact('casu_type'));
    }
    public function save_casu_type(Request $Request)
    {
        DB::table('casuality_type')->insert(
            array(
                   'casu_name'     =>   $Request->casu_type,
                   'hospital'   =>   Auth::user()->Hospital,
            )
        );
        return back();
    }
    public function update_casu_type(Request $Request)
    {
        $type_name=$Request['type_name1'];
        $type_id=$Request['type_id1'];
        $data=array('casu_name'=>$type_name);
        DB::table('casuality_type')->where('id',$type_id)->update($data);
        return back();
    }
    public function delete_casuality_type($id)
    {
        DB::table('casuality_type')->where('id',$id)->delete();
   	    return back();
    }
    public function search_casu_pat(Request $Request)
    {
        $id=$Request['custName'];
        // dd($id);
        $patient=DB::table('patient')
        ->select('*')
        ->where( 'id', 'LIKE', '%' . $id . '%')
        ->get();
        return view('casuality.patientregister',compact('patient'));
        // return redirect('casuality_patient');
        // return redirect('casuality_patient')->withInput('patient');
    }
}
