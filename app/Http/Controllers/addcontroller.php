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
      $leavetype_items = $Request->input('leaves');
      $erere= array_sum($leavetype_items);
      if($erere > 366)
      {
        $Request->session()->put('leavevalidat','Sum of number of leaves alloted must be less than 366');
        return back();
      }
   	  $hospital=Auth::user()->Hospital;
      $depatmntz=$Request['depname'];
   	  $hospitaldata=DB::table('hospitals')->where('name',$hospital)->select('id')->first();
   	  $hospitalid=$hospitaldata->id;
   	  $hospitalid=$hospitaldata->id;
   	  $hosid=str_pad($hospitalid, 2, "0", STR_PAD_LEFT);
      $seldep=DB::table('users')
      ->leftjoin('departments','departments.id','=','users.departments')
      ->select('uniqueid')->first();
      $seldepis=$seldep->uniqueid;
    //  $seldepid=str_pad($seldepis, 2, "0", STR_PAD_LEFT);
   	  $userz=DB::table('users')->where('Hospital',$hospital)->select('id')->orderby('created_at','DESC')->first();
     // $userzz=$userz->id;
    //  $userzid=$userzz + 1;
     // $userzidd=str_pad($userzid, 4, "0", STR_PAD_LEFT);
      //$appendid=$hosid.$seldepid.$userzidd;

      $uniqId=random_int(100000,999999);
      $check_if_duplicate_exisit = User::where('uniqueid', $uniqId)->first();

      // dd($appendid);
      $stame=$Request['name'];
      $al_email=$Request['email'];
      $staffs=new User();
      $staffs->name=$Request['name'];
      $staffs->email=$Request['email'];
      $staffs->age=$Request['age'];
      $staffs->phone=$Request['phoneno'];
      $password=$Request['password'];
      $staffs->password=Hash::make($password);
      $staffs->role= $Request['rolename'];
      $staffs->address= $Request['address'];
      $staffs->date_of_joining= $Request['date_of_joining'];
      $staffs->account_no= $Request['accountnumber'];
      $staffs->bank= $Request['bankname'];
      $staffs->ifsc= $Request['ifsc'];
      $staffs->consultation_fee=$Request['cons_fee'];
      $staffs->uniqueid=$uniqId;
      $staffs->salary=$Request['salary'];
      $staffs->sex=$Request['patienthere'];
      $staffs->yearsexp=$Request['yearsexp'];
      $staffs->dob=$Request['dob'];
      $staffs->Hospital=$hospital;
      $staffs->status=$Request['status'];
      $staffs->releving_date=$Request['releving_date'];
      $staffs->departments= $Request['depname'];
      $staffs->medicaldepartments= $Request['depname'];
      $staffs->save();
      $a=DB::table('users')->where('email',$al_email)->first();
      $b=$a->uniqueid;
      $inputx = $Request->input('category');
      if($inputx)
      {
        foreach($inputx as $service)
        {
          $staffs=new giveallowance();
          $staffs->allowanceid=$service;
          $staffs->staffid=$b;
          $staffs->type='reduction';
          $staffs->save();
        }
        $inputer = $Request->input('allowz');
        foreach($inputer as $servicer)
        {
          $staffs=new giveallowance();
          $staffs->allowanceid=$servicer;
          $staffs->staffid=$b;
          $staffs->type='allowance';
          $staffs->save();
        }
      }
      $date=Carbon::now();
      $todays= $date->toDateString();
      $year= $date->format('Y');
      $month= $date->format('m');
      $monthminusone=$month-1;
      $leavetype = $Request->input('leave_type');
      $final_array=array_combine($leavetype,$leavetype_items);
      foreach($final_array as $key => $value)
      {
        $aq=$value/12;
        $monthlft=12-$monthminusone;
        $leevleft=$monthlft*$aq;
        $realleevlft=round($leevleft);
          $data = array(
                "leave_type_id" => $key,
                "allotted_leaves" => $value,
                "staff_id" => $b,
                "leaves_left" => $realleevlft,
          );
        DB::table('staff_leaves')->insert($data);
      }
        // print_r($leavetype);
        // print_r($leavetype_items);
        // die;
        // dd($leavetype);

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

   public function editstafff(Request $Request)
   {
    $id=$Request['id'];
    $Name=$Request['name'];
    $Role=$Request['Role'];
    $Phone=$Request['phoneno'];
    $Email=$Request['email'];
    $age=$Request['age'];
    $role= $Request['rolename'];
    $address= $Request['address'];
    $date_of_joining= $Request['date_of_joining'];
    $account_no= $Request['accountnumber'];
    $bank= $Request['bankname'];
    $ifsc= $Request['ifsc'];
    $consultation_fee=$Request['cons_fee'];
    $salary=$Request['salary'];
    $yearsexp=$Request['yearsexp'];
    $dob=$Request['dob'];
    $status=$Request['status'];
    $status_date=$Request['status_date'];
    $departments= $Request['medname'];
    $medicaldepartments= $Request['depname'];
    $password=$Request['password'];
    $pwdzx=Hash::make($password);
    if($Request['password'] == '')
    {
      $data=array('name'=>$Name,'email'=>$Email,'age'=>$age,'role'=>$Role,'departments'=>$departments,'phone'=>$Phone,'salary'=>$salary,'yearsexp'=>$yearsexp,'dob'=>$dob,'status'=>$status,'consultation_fee'=>$consultation_fee,'ifsc'=>$ifsc,'bank'=>$bank,'account_no'=>$account_no,'address'=>$address,'date_of_joining'=>$date_of_joining,'releving_date'=>$status_date);
    }
    else{
      $data=array('name'=>$Name,'email'=>$Email,'age'=>$age,'role'=>$Role,'departments'=>$departments,'phone'=>$Phone,'salary'=>$salary,'yearsexp'=>$yearsexp,'dob'=>$dob,'status'=>$status,'consultation_fee'=>$consultation_fee,'ifsc'=>$ifsc,'bank'=>$bank,'account_no'=>$account_no,'address'=>$address,'password'=>$pwdzx,'date_of_joining'=>$date_of_joining,'releving_date'=>$status_date);
    }

    DB::table('users')->where('id',$id)->update($data);

    // $leavetype = $Request->input('leave_type');
    // $leavetype_items = $Request->input('leaves');
    // $final_array=array_combine($leavetype,$leavetype_items);

    // foreach($final_array as $key => $value)
    // {
    //   $fillleavslft=DB::table('staff_leaves')->where('id',$key)->select('allotted_leaves','leaves_left')->first();
    //   $fildatxz=$fillleavslft->allotted_leaves;

    //   $levlft=$fillleavslft->leaves_left;
    //   $minuzx=$value-$fildatxz;

    //   $pluzx=$fildatxz-$value;
    //   $ddie=substr($minuzx, 0, 1);

    //   if($ddie == '-')
    //   {

    //  $leevlftupdate=$levlft-$pluzx;
    //  $ddiemhn=substr($leevlftupdate, 0, 1);
    //  if($ddiemhn == '-')
    //  {
    //   $leevlftupdate=0;
    //  }
    //   }
    //   else
    //   {
    //     $leevlftupdate=$levlft+$minuzx;
    //   }
    //     $data = array(
    //         "allotted_leaves" => $value,
    //         "leaves_left"=>$leevlftupdate,

    //     );
  // DB::table('staff_leaves')->where('id',$key)->update($data);
  //   }

  //   // $Request->session()->put('detailupdate','Details Updated');
  //   // return back();
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
