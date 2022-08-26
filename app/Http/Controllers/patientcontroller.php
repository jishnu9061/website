<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\patinsurance;
use RealRashid\SweetAlert\Facades\Alert;
use Redirect;
use DB;
use Auth;


class patientcontroller extends Controller
{


public function patientregistration(Request $Request)
  {
      $Request->session()->forget('patientregistered');
      $department=DB::table('departments')
      ->get();
      $doctor=DB::table('users')
        // ->where('role',$Request->group)

      ->get();

    return view('patient.patientregistration',compact('department','doctor'));
}
public function getdepartmentdoctor(Request $Request) {
    $result = DB::table('users')
    ->where('name',$Request->group)
    ->get();
    return response()->json([$result]);

}
	public function addpatient(Request $Request)
	{

	    $patient= new patient();
        $patient->firstname= $Request['firstname'];
        $patient->email= $Request['email'];
        $patient->phoneno= $Request['phoneno'];
        $patient->address= $Request['address'];
        $patient->place= $Request['place'];
        $patient->age= $Request['age'];
        $patient->dateofbirth= $Request['dateofbirth'];
        $patient->gender= $Request['gender'];
        $patient->height= $Request['height'];
        $patient->weight= $Request['weight'];
        $patient->temparature= $Request['temparature'];
        $patient->save();
        $Request->session()->put('patientregistered','Patient Registered');
        toast('patient added','success');
        return redirect('/allpatients');
	}

  public function allpatients(Request $Request)
  {
    $patients=DB::table('patient')->orderBy('id','DESC')->get();
    return view('patient.allpatients',['patients'=>$patients]);
  }
  public function viewpatient(Request $Request ,$id)
  {
   $Request->session()->forget('patientaltered');
    $viewpatient=DB::table('patient')->where('id',$id)->first();
    return view('patient.viewpatient',['viewpatient'=>$viewpatient]);
  }
    public function editpatient(Request $Request ,$id)
  {

  $editpatient=DB::table('patient')->where('id',$id)->get();
//   dd($editpatient);
    return view('patient.editpatient',['editpatient'=>$editpatient]);
  }
    public function editthepatient(Request $Request)
  {
    $id=$Request['patientid'];
    $firstname=$Request['firstname'];
    $email=$Request['email'];
    $phoneno=$Request['phoneno'];
    $address=$Request['address'];
    $place=$Request['place'];
    $age=$Request['age'];
    $dateofbirth=$Request['dateofbirth'];
    $gender=$Request['gender'];
    $height=$Request['height'];
    $weight=$Request['weight'];
    $temparature=$Request['temparature'];

    $data=array('id'=>$id,'firstname'=>$firstname,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address,'place'=>$place,'age'=>$age,'dateofbirth'=>$dateofbirth,'gender'=>$gender,'height'=>$height,'weight'=>$weight,'temparature'=>$temparature);
    DB::table('patient')->where('id',$id)->update($data);
    return redirect('allpatients');
  }
  public function detailpatient($id)

  {
    $patient=DB::table('patient')->where('id',$id)->select('firstname','email','phoneno','address','place','age','dateofbirth','gender','height','weight','temparature')->first();
    $patname=$patient->firstname;
    $patphn=$patient->phoneno;
    $pataddrs=$patient->address;
    $patage=$patient->age;
    $patemail=$patient->email;

    $apps=DB::table('appointments')->where('patientid',$id)->get();
    return view('patient.detailspatient',['patname'=>$patname,'patphn'=>$patphn,'pataddrs'=>$pataddrs,'patage'=>$patage,'patemail'=>$patemail,'apps'=>$apps]);
  }

   public function addpatinsurance(Request $Request)

  {

   $patient= new patinsurance();
    $patient->name= $Request['name'];
     $patient->address= $Request['address'];
      $patient->phone= $Request['phone'];
       $patient->occupation= $Request['occupation'];
        $patient->employer= $Request['employer'];
         $patient->empphoneno= $Request['empphoneno'];
          $patient->empaddress= $Request['empaddress'];
           $patient->bday= $Request['bday'];
            $patient->groupno= $Request['groupno'];
             $patient->policyno= $Request['policyno'];
              $patient->copayment= $Request['copayment'];
               $patient->patienthere= $Request['patienthere'];
                $patient->save();
      $Request->session()->put('patinsurance','Insurance Added');


  return redirect('/patientinsurance');



  }

  public function beds()
  {
    return view('patient.beds');
  }

  public function ip()
  {
    $hos=Auth::user()->Hospital;
    $ips=DB::table('appointments')->where('status','inbed')->where('hospital',$hos)->get();
    return view('patient.ip',compact('ips'));
  }
  public function dischargepatient($id)
  {
   $dis=array('status'=>'discharged');
   DB::table('appointments')->where('patientid',$id)->update($dis);
   $dat= array('Roomno'=>'','allocateduser'=>'','username'=>'','css'=>"white");
   DB::table('rooms')->where('allocateduser',$id)->update($dat);
   return back();
  }
}
