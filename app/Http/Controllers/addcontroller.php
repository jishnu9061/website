<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Hash;
use App\salary;
use App\model\allowance;
use App\model\giveallowance;
Use \Carbon\Carbon;

class addcontroller extends Controller
{
   public function addstaffs()
   {

     $hospital=Auth::user()->Hospital;
   	 $adminroles=DB::table('roles')->get();
     $hospitals=DB::table('hospitals')->get();
     $departments=DB::table('departments')->get();
     $medicaldepartments=DB::table('medicaldepartments')->get();
     $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
     $nonfixdallowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','nonfixedallowance')->get();
     $deductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
     $leavetype=DB::table('leave_types')->get();
     $staffstatus=DB::table('staffstatus')->get();
   	return view('add.staffs',['roles'=>$adminroles,'hospitals'=>$hospitals,'departments'=>$departments,'medicaldepartments'=>$medicaldepartments,'allowancedata'=>$allowancedata,'deductiondata'=>$deductiondata,'leavetype'=>$leavetype,'staffstatus'=>$staffstatus,'nonfixdallowancedata'=>$nonfixdallowancedata]);
   }
   public function addthestaffs(Request $Request)
   {
     
   	  $hospital=Auth::user()->Hospital;
      $depatmntz=$Request['depname'];
   	  // // // $hospitaldata=DB::table('hospitals')->where('name',$hospital)->select('id')->first();
   	  // // $hospitalid=$hospitaldata->id;
   	  // // $hospitalid=$hospitaldata->id;
   	  // $hosid=str_pad($hospitalid, 2, "0", STR_PAD_LEFT);
      $seldep=DB::table('users')
      ->leftjoin('departments','departments.id','=','users.departments')
      ->select('uniqueid')->first();
      $seldepis=$seldep->uniqueid;
      $seldepid=str_pad($seldepis, 2, "0", STR_PAD_LEFT);
   	  $uniqId=random_int(100000,999999);
      $check_if_duplicate_exisit = User::where('uniqueid', $uniqId)->first();
      // dd($uniqId);
     
      $stame=$Request['name'];
      $al_email=$Request['email'];
      $staffs=new User();
      $staffs->name=$Request['name'];
      $staffs->email=$Request['email'];
      $staffs->age=$Request['age'];
      $staffs->phone=$Request['phoneno'];
      $password=$Request['password'];
      $staffs->password=Hash::make($password);
      $staffs->date_of_joining=$Request['date_of_joining'];
      $staffs->sex=$Request['sex'];
      $staffs->departments=$Request['departments'];
      $staffs->role=$Request['role'];
      $staffs->status=$Request['status'];
      $staffs->status_date=$Request['status_date'];
      $staffs->address=$Request['address'];
      $staffs->branch=$Request['branch'];
      $staffs->postal_code=$Request['postal_code'];
      $staffs->town=$Request['town'];
      $staffs->salary=$Request['salary'];
      $staffs->partner=$Request['partner'];
      $staffs->NSSF=$Request['NSSF'];
      $staffs->NHIF=$Request['NHIF'];
      $staffs->cra_pin=$Request['cra_pin'];
      $staffs->tax=$Request['tax'];
      $staffs->deduction=$Request['deduction'];
      $staffs->NSSF_contribution=$Request['contribution'];
      $staffs->leave=$Request['leave'];
      $staffs->pension_rate=$Request['pension_rate'];
      $staffs->bank=$Request['bank'];
      $staffs->bank_branch=$Request['bank_branch'];
      $staffs->branch_code=$Request['branch_code'];
      $staffs->account=$Request['account'];
    
      

      // $staffs->sex=$Request['sex'];
      // $staffs->email=$Request['email'];
      // $staffs->age=$Request['age'];
      // $staffs->phoneno=$Request['phoneno'];
      // $password=$Request['password'];
      // $staffs->password=Hash::make($password);
      // $staffs->role= $Request['role'];
      $staffs->address= $Request['address'];
      $staffs->date_of_joining= $Request['date_of_joining'];
      $staffs->account_no= $Request['accountnumber'];
      $staffs->bank= $Request['bankname'];
      // $staffs->ifsc= $Request['ifsc'];
      // $staffs->consultation_fee=$Request['cons_fee'];
      $staffs->uniqueid= $uniqId;
      $staffs->salary=$Request['salary'];
      $staffs->sex=$Request['sex'];
      // $staffs->yearsexp=$Request['yearsexp'];
      $staffs->dob=$Request['dob'];
      // $staffs->Hospital=$hospital;
      $staffs->status=$Request['status'];
      $staffs->releving_date=$Request['releving_date'];
      $staffs->departments= $Request['depname'];
      // $staffs->medicaldepartments= $Request['depname'];
      // $staffs->cv= $Request['cv'];
      if($Request->hasFile('cv')){
        $this->validate($Request,[
            'cv' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
        ]);
        if(request()->hasfile('cv')){
          $uploadedImage = $Request->file('cv');
          $imageName     = time() .'.'. $uploadedImage->getClientOriginalExtension();
          $destinationPath = public_path('images/file');
          $image_location="/CRA/public/images/file/";
          $uploadedImage->move($destinationPath,$imageName);
          $staffs->cv    =  $image_location.$imageName;
        }
      }
     
    if($Request->hasFile('photo')){
      $this->validate($Request,[
          'photo' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
      ]);
      if(request()->hasfile('photo')){
        $uploadedImage = $Request->file('photo');
        $imageName     = time() .'.'. $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images/file');
        $image_location="/CRA/public/images/file/";
        $uploadedImage->move($destinationPath,$imageName);
        $staffs->photo    =  $image_location.$imageName;
    }
    }
 
  if($Request->hasFile('signature')){
    $this->validate($Request,[
        'signature' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
    ]);
  }
if(request()->hasfile('signature')){
    $uploadedImage = $Request->file('signature');
    $imageName     = time() .'.'. $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images/file');
    $image_location="/CRA/public/images/file/";
    $uploadedImage->move($destinationPath,$imageName);
    $staffs->signature    =  $image_location.$imageName;
}
    $staffs->save();
    $Request->session()->put('staffregistered','Staff Registered');
     return redirect('/staffs');
   }

   public function allstaffs()
   {
    $hospital=Auth::user()->Hospital;
   	$allusers=DB::table('users')
       ->leftjoin('departments','departments.id','=','users.departments')
       ->orderby('users.created_at','DESC')->where('users.Hospital',$hospital)->get();
    $leavetype=DB::table('leave_types')->get();
   	return view('add.allstaffs',['allusers'=>$allusers,'leavetype'=>$leavetype]);
   }

   public function editstafff(Request $Request )
   {
    $id=$Request['id'];
    $name=$Request['name'];
    $email=$Request['email'];
    $phoneno=$Request['phoneno'];
    $password=$Request['password'];
    $password=Hash::make($password);
    $password=$Request['password'];
    $date_of_joining=$Request['date_of_joining'];
    $sex=$Request['sex'];
    $departments=$Request['departments'];
    $role=$Request['role'];
    $status=$Request['status'];
    $status_date=$Request['status_date'];
    $address=$Request['address'];
    $branch=$Request['branch'];
    $postal_code=$Request['postal_code'];
    $town=$Request['town'];
    $salary=$Request['salary'];
    $partner=$Request['partner'];
    $NSSF=$Request['NSSF'];
    $NHIF=$Request['NHIF'];
    $cra_pin=$Request['cra_pin'];
    $tax=$Request['tax'];
    $deduction=$Request['deduction'];
    $contribution=$Request['contribution'];
    $leave=$Request['leave'];
    $pension_rate=$Request['pension_rate'];
    $bank=$Request['bank'];
    $bank_branch=$Request['bank_branch'];
    $branch_code=$Request['branch_code'];
    $account=$Request['account'];
    $pwdzx=Hash::make($password);
    
    if($Request['password'] == '')
    {
      $data=array('name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'date_of_joining'=>$date_of_joining,'departments'=>$departments,'sex'=>$sex,
      'role'=>$role,'status'=>$status,'status_date'=>$status_date,'address'=>$address,'branch'=>$branch,
      'postal_code'=>$postal_code,'town'=>$town,'salary'=>$salary,'partner'=>$partner,'NSSF'=>$NSSF,
      'cra_pin'=>$cra_pin,'tax'=>$tax,'deduction'=>$deduction,'contribution'=>$contribution,'leave'=>$leave,'pension_rate'=>$pension_rate,
      'bank'=>$bank,'bank_branch'=>$bank_branch,'branch_code'=>$branch_code,'account'=>$account);
    }
    else{
      $data=array('name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'date_of_joining'=>$date_of_joining,'departments'=>$departments,'sex'=>$sex,
      'role'=>$role,'status'=>$status,'status_date'=>$status_date,'address'=>$address,'branch'=>$branch,
      'postal_code'=>$postal_code,'town'=>$town,'salary'=>$salary,'partner'=>$partner,'NSSF'=>$NSSF,
      'cra_pin'=>$cra_pin,'tax'=>$tax,'deduction'=>$deduction,'contribution'=>$contribution,'leave'=>$leave,'pension_rate'=>$pension_rate,
      'bank'=>$bank,'bank_branch'=>$bank_branch,'branch_code'=>$branch_code,'account'=>$account);
    }

    DB::table('users')->where('id',$id)->update($data);

  //   $leavetype = $Request->input('leave_type');
  //   $leavetype_items = $Request->input('leaves');
  //   $final_array=array_combine($leavetype,$leavetype_items);

  //   foreach($final_array as $key => $value)
  //   {
  //     $fillleavslft=DB::table('staff_leaves')->where('id',$key)->select('allotted_leaves','leaves_left')->first();
  //     $fildatxz=$fillleavslft->allotted_leaves;

  //     $levlft=$fillleavslft->leaves_left;
  //     $minuzx=$value-$fildatxz;

  //     $pluzx=$fildatxz-$value;
  //     $ddie=substr($minuzx, 0, 1);

  //     if($ddie == '-')
  //     {

  //    $leevlftupdate=$levlft-$pluzx;
  //    $ddiemhn=substr($leevlftupdate, 0, 1);
  //    if($ddiemhn == '-')
  //    {
  //     $leevlftupdate=0;
  //    }
  //     }
  //     else
  //     {
  //       $leevlftupdate=$levlft+$minuzx;
  //     }
  //       $data = array(
  //           "allotted_leaves" => $value,
  //           "leaves_left"=>$leevlftupdate,

  //       );
  //       DB::table('staff_leaves')->where('id',$key)->update($data);
  //     }

  //  $Request->session()->put('detailupdate','Details Updated');
  //  return back();
    return redirect('/staffs');
   }
   public function disableuser($id)
   {
   	 $hospital=Auth::user()->Hospital;
   	 $data=array('status'=>'enable');
     DB::table('users')->where('id',$id)->update($data);
     return redirect('/staffs');
   }
    public function enableuser($id)
   {
   	 $hospital=Auth::user()->Hospital;
   	 $data=array('status'=>'disable');
     DB::table('users')->where('id',$id)->update($data);
     return redirect('/staffs');
   }
   public function staffsalary(Request $Request,$id)
   {
    $basicpay=DB::table('users')->where('uniqueid',$id)->select('salary')->first();
    $thatsalary=$basicpay->salary;
    $staffallowance=DB::table('giveallowance')->where('type','allowance')->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->get();
    $staffallowancesum=DB::table('giveallowance')->where('type','allowance')->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->sum('allowance.price');

    $staffallowancepercentsum=DB::table('giveallowance')->where('type','allowance')->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->sum('allowance.percent');
    $realpercent=$staffallowancepercentsum/100*$thatsalary;
    $totalallowsum=$staffallowancesum+$realpercent;
    $staffreduction=DB::table('giveallowance')->where('type','reduction')->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->get();
     $staffreductionsum=DB::table('giveallowance')->where('type','reduction')
    ->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->sum('allowance.price');
    $staffreductionpercentsum=DB::table('giveallowance')->where('type','reduction')
    ->where('staffid',$id)
    ->join('allowance', 'giveallowance.allowanceid', '=', 'allowance.id')
    ->select('giveallowance.*','allowance.allowancename','allowance.price','allowance.percent')
    ->sum('allowance.percent');
    $realreductpercent=$staffreductionpercentsum/100*$thatsalary;
    $totalreductsum=$staffreductionsum+$realreductpercent;

    $usersalary=DB::table('users')->where('uniqueid',$id)->select('salary')->first();
    $staffsalary=$usersalary->salary;
    $per_day_amount=$staffsalary/30;
     $attendance=DB::table('atttendance')->where('Employee Code',$id)->select('PresentDays')->first();
     if($attendance)
     {
      $no_of_days_present=$attendance->PresentDays;
     }
     else
     {
      $no_of_days_present='0';
     }

    $leave=30-$no_of_days_present;
    $final=$leave*$per_day_amount;
    $loan=DB::table('loans')->where('uniqueid',$id)->get();
    $loanfirst=DB::table('loans')->where('uniqueid',$id)->first();
    if($loanfirst)
    {
      $lon=$loanfirst->deduct;
    }
    else
    {
      $lon=0;
    }

    $finalsalary=$thatsalary+$totalallowsum-$totalreductsum-$final-$lon;
    return view('add.salary',['id'=>$id,'staffallowance'=>$staffallowance,'staffreduction'=>$staffreduction,'staffsalary'=>$staffsalary,'loan'=>$loan,'final'=>$final,'finalsalary'=>$finalsalary]);
   }
   public function paysalary(Request $Request)
   {
     $salary=new salary();
     $salary->employeeid=$Request['employeeid'];
     $salary->Basicpay=$Request['aa'];
     $salary->travelallowance=$Request['bb'];
     $salary->insurance=$Request['cc'];
     $salary->medicalallowance=$Request['dd'];
     $salary->contributionallowance=$Request['ee'];
     $salary->otherallowance=$Request['ff'];
     $salary->pf=$Request['gg'];
     $salary->esi=$Request['hh'];
     $salary->professionaltax=$Request['ii'];
     $salary->totalpay=$Request['sumtotal'];
     $salary->save();
     $Request->session()->put('salaryadded','Salary Added');
     return view('add.salary',['id'=>$salary->employeeid]);
   }
   public function addsalary()
   {
    $date = Carbon::now();
    $year= $date->year;
    $month= $date->month;
    $numberofdays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
   }
    public function addallowance(Request $Request)
    {

      $hospital=Auth::user()->Hospital;
      $check=$Request['allowance1'];
      if(isset($check))
      {
      $allowance=new allowance();
      $allowance->allowancename=$Request['allowance1'];
      $allowance->price=$Request['allowance1price'];
      $allowance->percent=$Request['allowance1percent'];
      $allowance->status='allowance';
      $allowance->hospital=$hospital;
      $allowance->save();
      }
      $check1=$Request['allowance1price'];
     $nondata=DB::table('allowance')->where('hospital',$hospital)->where('status','nonfixedallowance')->get();
     $staffdata=DB::table('users')->where('hospital',$hospital)->get();
     $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
     $reductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
     $leavetype=DB::table('leave_types')->get();


     return view('add.addallowance',['nondata'=>$nondata,'allowancedata'=>$allowancedata,'staffdata'=>$staffdata,'reductiondata'=>$reductiondata,'leavetype'=>$leavetype
      ]);

    }
     public function addnonfixedallowance(Request $Request)
    {

      $hospital=Auth::user()->Hospital;
      $check=$Request['allowance1'];
      if(isset($check))
      {
      $allowance=new allowance();
      $allowance->allowancename=$Request['allowance1'];
      $allowance->price=$Request['allowance1price'];
      $allowance->percent=$Request['allowance1percent'];
      $allowance->status='nonfixedallowance';
      $allowance->hospital=$hospital;
      $allowance->save();
      }
      $check1=$Request['allowance1price'];
     $staffdata=DB::table('users')->where('hospital',$hospital)->get();
     $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
     $nondata=DB::table('allowance')->where('hospital',$hospital)->where('status','nonfixedallowance')->get();
     $reductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
     $leavetype=DB::table('leave_types')->get();
     return view('add.addallowance',['allowancedata'=>$allowancedata,'staffdata'=>$staffdata,'reductiondata'=>$reductiondata,'nondata'=>$nondata,'leavetype'=>$leavetype]);

    }
     public function addreduction(Request $Request)
    {

      $hospital=Auth::user()->Hospital;
      $check=$Request['allowance1'];
      if(isset($check))
      {
      $allowance=new allowance();
      $allowance->allowancename=$Request['allowance1'];
      $allowance->price=$Request['allowance1price'];
      $allowance->percent=$Request['allowance1percent'];
      $allowance->status='reduction';
      $allowance->hospital=$hospital;
      $allowance->save();
      }
      $nondata=DB::table('allowance')->where('hospital',$hospital)->where('status','nonfixedallowance')->get();
      $staffdata=DB::table('users')->where('hospital',$hospital)->get();
      $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
      $reductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
      $leavetype=DB::table('leave_types')->get();


      return view('add.addreduction',['nondata'=>$nondata,'allowancedata'=>$allowancedata,'staffdata'=>$staffdata,'reductiondata'=>$reductiondata,'leavetype'=>$leavetype
       ]);

    }
    public function addleavetype(Request $Request)
    {
        // $hospital=Auth::user()->Hospital;
        $leave_type = $Request->input('leavetype');
        $abbreviation = $Request->input('abbreviation');
        $data = array(
            "leave_type" => $leave_type,
            "abbreviation" => $abbreviation,
        );
        DB::table('leave_types')->insert($data);
// dd($leave_type);

     return redirect ('/addallowance');

    }
    public function editleavetype(Request $Request)
    {
        // $hospital=Auth::user()->Hospital;
        $uniqid=$Request->input('leevuniqids');
        $abbrtype = $Request->input('abbr_type');
        $leavetype = $Request->input('leave_type');
        $data = array(
            "leave_type" => $leavetype,
            "abbreviation" => $abbrtype,
        );
        DB::table('leave_types')->where('id',$uniqid)->update($data);
// dd($leave_type);

     return redirect ('/addallowance');

    }

    public function allowancedelete($id)
    {

      DB::table('allowance')->where('id',$id)->delete();
      return redirect ('/addallowance');

    }
    public function leavetypedelete($id)
    {

      DB::table('leave_types')->where('id',$id)->delete();
      return redirect ('/addallowance');

    }
      public function reductiondelete($id)
    {

      DB::table('allowance')->where('id',$id)->where('status','reduction')->delete();
      return redirect ('/addreduction');

    }

    public function giveallowance($id)
    {
     $hospital=Auth::user()->Hospital;
     $staffdata=DB::table('users')->where('uniqueid',$id)->select('name','uniqueid')->first();
     $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
     return view ('add.giveallowance',['allowancedata'=>$allowancedata,'staffdata'=>$staffdata]);

    }
     public function givereduction($id)
    {
     $hospital=Auth::user()->Hospital;
     $staffdata=DB::table('users')->where('uniqueid',$id)->select('name','uniqueid')->first();
     $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
     return view ('add.givereduction',['allowancedata'=>$allowancedata,'staffdata'=>$staffdata]);
    }

    public function allowancetostaff(Request $Request)
    {
      // $staffid=$Request['staffid'];
      // $allowancename=$Request->all();
      // $jsondata=json_encode($allowancename);
      // $jsonarray=array('allowance'=>$jsondata);
      // DB::table('users')->where('id',$staffid)->update($jsonarray);
      // $test=DB::table('users')->where('id',$staffid)->select('allowance')->first();
      // $fetchallowance=$test->allowance;
      // $json = json_decode($fetchallowance, true);
      // return response()->json($json);
      // // $data = "123_String";
      // // $whatIWant = substr($data, strpos($data, "_") + 1);
      // // $whatIreallyWant = str_replace($whatIWant, '', $data);

       $staffid=$Request['staffid'];
       $allowanceid=$Request['allowanceid'];
       $status=$Request['status'];
       $allow=new giveallowance();
       $allow->staffid=$staffid;
       $allow->allowanceid=$allowanceid;
       $allow->type=$status;
       $allow->checked='checked=""';
       $allow->save();

      return response()->json(['status'=>'all set']);
      return view ('add.salary',['jsondata'=>$json,'id'=>'2']);

    }

}
