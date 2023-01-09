<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\leaves;
use App\model\dutyschedule;
use App\model\loans;
use App\dailyattendance;
use Redirect;
use Storage;
use DB;
use App\adit;
use Hash;
use Auth;
Use \Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class hrcontroller extends Controller
{


   public function appliedleave(Request $Request)
   {
      $getleav=$Request['getleav'];

     $departments=Auth::user()->departments;
     $leaves=new leaves();
     $leaves->from=$Request['from'];
     $leaves->to=$Request['to'];
     $leaves->application=$Request['application'];
     $leaves->department=$departments;
     $leaves->leave_type=$getleav;
     $leaves->applicantid=Auth::user()->uniqueid;
     $leaves->applicantname=Auth::user()->name;
     $leaves->save();
     $Request->session()->put('leavesapplied','Application Sent');
     return redirect('applyleave');

   }
   public function leaves()
   {
   	$leaves=DB::table('leaves')->where('status','Admin Approved')->get();
   	return view('hr.leaves',['leaves'=>$leaves]);
   }
      public function loans()
   {
     $hospital=Auth::user()->Hospital;
    $loans=DB::table('loans')->where('hospital',$hospital)->get();
    return view('hr.loans',['loans'=>$loans]);
   }
   public function dutyschedule(Request $Request)
   {
    if(isset($Request['fromdate']))
    {
    $schedule=new dutyschedule();
    $schedule->fromdate=$Request['fromdate'];
    $schedule->todate=$Request['todate'];
    $schedule->fromtime=$Request['fromtime'];
    $schedule->totime='4:00 PM';
    $schedule->staffid=$Request['staffid'];
    $schedule->save();
    }
    $staffname=$Request['staffname'];
    $staffid=$Request['staffid'];
    $schedule=DB::table('dutyschedule')->where('staffid',$staffid)->get();
    return view('hr.dutyschedule',['staffid'=>$staffid,'staffname'=>$staffname,'schedule'=>$schedule]);
   }

   public function addloan(Request $Request)
   {
     $loanamount=$Request->input('amount');
     $months=$Request->input('term');
     $uniqid=$Request->input('id');
     $validat=DB::table('users')->where('uniqueid',$uniqid)->first();
  
  
     if($validat == '')
     {
       
      $Request->session()->put('nouser','No staff registered with this id');
      return back();
     }

    //  $reasan=$Request->input('reasan');
     $deduct=$loanamount/$months;
     $realdeduct=round($deduct, 2);
     $hospital=Auth::user()->Hospital;

     $loans =new loans();
     $loans->totalamount=$loanamount;
     $loans->duration=$months;
     $loans->uniqueid=$uniqid;
     $loans->amountpaid='0';
     $loans->balanceleft=$loanamount;
    //  $loans->loanreoson=$reasan;
     $loans->deduct=$realdeduct;
     $loans->hospital=$hospital;
     $loans->save();
     $Request->session()->put('loanadded','Loan Added');
  return back();
   }

   public function dutydelete(Request $Request, $id)
   {
    $staffid=$Request['staffid'];
    $staffname=$Request['staffname'];
    $schedule=DB::table('dutyschedule')->where('staffid',$staffid)->get();
    DB::table('dutyschedule')->where('id',$id)->delete();
    return view('hr.dutyschedule',['staffid'=>$staffid,'staffname'=>$staffname,'schedule'=>$schedule]);
   }
      public function managestaff(Request $Request, $id)
   {

    $users=DB::table('users')->where('uniqueid',$id)->first();
    $hospital=Auth::user()->Hospital;
    $staffdata=DB::table('users')->where('uniqueid',$id)->select('name','uniqueid')->first();
    // $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
    //  $nonfixedallowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','onfixedallowance')->get();
    // $deductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
    $particularallow=DB::table('giveallowance')->where('staffid',$id)->where('type','allowance')->get();
     $particularreduct=DB::table('giveallowance')->where('staffid',$id)->where('type','reduction')->get();
    // $loans=DB::table('loans')->where('uniqueid',$id)->get();
    $schedule=DB::table('dutyschedule')->where('staffid',$id)->get();
  
    $adminroles=DB::table('userroles')->get();
  //  $hospitals=DB::table('hospitals')->get();
   
   $departments=DB::table('departments')->get();
  //  dd($departments);
  //  $medicaldepartments=DB::table('medicaldepartments')->get();
  //  $leavetype=DB::table('staff_leaves')->where('staff_id',$id)
  //  ->join('leave_types', 'staff_leaves.leave_type_id', '=', 'leave_types.id')
  //  ->select('staff_leaves.*','leave_types.leave_type')
  //  ->get();
  //  dd($leavetype);
  $leavetype=DB::table('leave_types')->get();
   $staffstatus=DB::table('staffstatus')->get();
    return view('hr.editstaf',['users'=>$users,'staffdata'=>$staffdata,'schedule'=>$schedule,'staffid'=>$id,
    'nonfixdallowancedata'=>$particularallow,'particularreduct'=>$particularreduct,'roles'=>$adminroles,
    'departments'=>$departments,'leavetype'=>$leavetype,'staffstatus'=>$staffstatus]);
   
  }

  public function payslipbulk()
  {
    return view('hr.payslipbulk');
  }

   public function managestaff_backup(Request $Request, $id)
   {

    $users=DB::table('users')->where('uniqueid',$id)->first();
    $hospital=Auth::user()->Hospital;
    $staffdata=DB::table('users')->where('uniqueid',$id)->select('name','uniqueid')->first();
    $allowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','allowance')->get();
     $nonfixedallowancedata=DB::table('allowance')->where('hospital',$hospital)->where('status','onfixedallowance')->get();
    $deductiondata=DB::table('allowance')->where('hospital',$hospital)->where('status','reduction')->get();
    $particularallow=DB::table('giveallowance')->where('staffid',$id)->where('type','allowance')->get();
     $particularreduct=DB::table('giveallowance')->where('staffid',$id)->where('type','reduction')->get();
    $loans=DB::table('loans')->where('uniqueid',$id)->get();
    $schedule=DB::table('dutyschedule')->where('staffid',$id)->get();
    return view('hr.managestaff',['users'=>$users,'staffdata'=>$staffdata,'allowancedata'=>$allowancedata,'loans'=>$loans,'schedule'=>$schedule,'staffid'=>$id,'deductiondata'=>$deductiondata,'particularallow'=>$particularallow,'particularreduct'=>$particularreduct,'$nonfixedallowancedata',$nonfixedallowancedata]);
   }
   public function editdeallowance(Request $Request)
   {
    $allowaname=$Request['allowaname'];
    $allowaprice=$Request['allowaprice'];
    $allowapercent=$Request['allowapercent'];
    $allowaid=$Request['allowaid'];

    $data=array('allowancename'=>$allowaname,'price'=>$allowaprice,'percent'=>$allowapercent);
    DB::table('allowance')->where('id',$allowaid)->update($data);
    return redirect('/addallowance');
   }
   public function payslip()
   {
    return view('hr.payslip');
   }
   public function generatepayslip(Request $Request)
   {
    $hospital=Auth::user()->Hospital;
    $month=$Request['month'];
    $year=$Request['year'];
    $staffs=DB::table('users')->where('hospital',$hospital)->get();
    return view('hr.generatepayslip',['staffs'=>$staffs,'year'=>$year,'month'=>$month]);
   }

   public function generatebbulkpayslip(Request $Request)
   {
   $hospital=Auth::user()->Hospital;
   $month=$Request['month'];
   $year=$Request['year'];
   $users=DB::table('users')->where('hospital',$hospital)->get();
     return view('hr.bulkslip',compact('users','month','year'));

   }

   public function manualattendance()
   {
    $hospital=Auth::user()->Hospital;
    $staffs=DB::Table('users')->where('hospital',$hospital)->get();
    return view('hr.manualattendance',compact('staffs'));
   }

   public function attendanceview()
   {  
      $date=Carbon::now();
      $todays= $date->toDateString();
      $year= $date->format('Y');
      $month= $date->format('m');
      $daysinmonth=Carbon::Parse($todays)->daysInMonth;
   
      $hospital=Auth::user()->Hospital;
      $deps=DB::table('departments')->get();
      $check=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->first();
      if($check)
      {
        $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->groupBy('staffname')->get();
        return view('hr.attendanceview',compact('attendancedata','daysinmonth','year','month','deps'));
      }
      else{
       
         $users=DB::table('users')->where('Hospital',$hospital)->get();
  
         foreach($users as $user)
        {
           for($i=1;$i<=$daysinmonth;$i++)
           {
              $attendance=new dailyattendance();
              $attendance->year=$year;
              $attendance->month=$month;
              $attendance->staffid=$user->uniqueid;
              $attendance->staffname=$user->name;
              $attendance->attendance='P';
              $attendance->date=$i."-".$month."-".$year;
              $attendance->hospital=$hospital;
              $attendance->department=$user->departments;
              $attendance->save();
           }
  
        }        $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->get();

        $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->groupBy('staffname')->get();
        return view('hr.attendanceview',compact('attendancedata','daysinmonth','attendancedataz','year','month','deps'));    
         }
         $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->get();
      return view('hr.attendanceview',compact('daysinmonth','attendancedata','attendancedataz','year','month','deps'));
   }
   public function allstaffsal(Request $Request)
   {
      $hiddenmonth=$Request['hiddenmonth'];
      $hiddenyear=$Request['hiddenyear'];
      $id=$Request['uniq'];    
      $stafnamex=DB::table('users')->where('uniqueid',$id)->select('name')->first();
      $stafnamexx=$stafnamex->name;
      $stafidx=DB::table('users')->where('uniqueid',$id)->select('uniqueid')->first();
      $stafidxx=$stafidx->uniqueid;
      $stafemailx=DB::table('users')->where('uniqueid',$id)->select('email')->first();
      $stafemailxx=$stafemailx->email;
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

      $loan=DB::table('loans')->where('uniqueid',$id)->get();
      $loansum=DB::table('loans')->where('uniqueid',$id)->sum('deduct');
    
      $loanfirst=DB::table('loans')->where('uniqueid',$id)->first();
      if($loanfirst)
      {
        $lon=$loanfirst->deduct;
      }
      else
      {
        $lon=0;
      }

      $no_of_days_present=DB::table('dailyattendances')->where('year',$hiddenyear)->where('month',$hiddenmonth)->where('staffid',$id)->where('attendance','P')->count();
      $grosspay=$staffsalary+$totalallowsum;
      $perdayamt=$grosspay/30;
      $leave=30-$no_of_days_present;
      $fina=$leave*$perdayamt;
      $final=round($fina);
      $rrr=$staffsalary+$totalallowsum-$totalreductsum-$loansum-$final;
      $atlast=round($rrr);
      
     
      $finalsalary=$thatsalary+$totalallowsum-$totalreductsum-$final-$lon;
      return view('hr.stafspayslip',['id'=>$id,'staffallowance'=>$staffallowance,'staffreduction'=>$staffreduction,'staffsalary'=>$staffsalary,'loan'=>$loan,'final'=>$final,
      'finalsalary'=>$finalsalary,'totalallowsum'=>$totalallowsum,'totalreductsum'=>$totalreductsum,'atlast'=>$atlast,'stafnamexx'=>$stafnamexx,'stafidxx'=>$stafidxx,'stafemailxx'=>$stafemailxx,'grosspay'=>$grosspay,'loansum'=>$loansum]);
     }
     public function allstaffsalbackup(Request $Request)
     {
        $hiddenmonth=$Request['hiddenmonth'];
        $hiddenyear=$Request['hiddenyear'];
        $id=$Request['uniq'];    
        $stafnamex=DB::table('users')->where('uniqueid',$id)->select('name')->first();
        $stafnamexx=$stafnamex->name;
        $stafidx=DB::table('users')->where('uniqueid',$id)->select('uniqueid')->first();
        $stafidxx=$stafidx->uniqueid;
        $stafemailx=DB::table('users')->where('uniqueid',$id)->select('email')->first();
        $stafemailxx=$stafemailx->email;
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
        $atlast=$staffsalary+$totalallowsum-$totalreductsum;
        $finalsalary=$thatsalary+$totalallowsum-$totalreductsum-$final-$lon;
        return view('hr.stafspayslip',['id'=>$id,'staffallowance'=>$staffallowance,'staffreduction'=>$staffreduction,'staffsalary'=>$staffsalary,'loan'=>$loan,'final'=>$final,
        'finalsalary'=>$finalsalary,'totalallowsum'=>$totalallowsum,'totalreductsum'=>$totalreductsum,'atlast'=>$atlast,'stafnamexx'=>$stafnamexx,'stafidxx'=>$stafidxx,'stafemailxx'=>$stafemailxx]);
       }
  
   public function attendancetostaff(Request $Request)
   {
    $attendance=$Request['a'];
    if($attendance == 'P')
    {
      $updateid=substr($attendance, 0, -1);
      $needtoupdate=substr($attendance, -1);
    }
    else
    {
      $updateid=substr($attendance, 0, -2);
      $needtoupdate=substr($attendance, -2);
    }

    $id=$Request['onename'];
    $data=array('attendance'=>$needtoupdate);
    DB::table('dailyattendances')->where('id',$updateid)->update($data);
   }
   public function test()
   {
        $attendance=$Request['a'];
  
        $updateid=substr($attendance, 0, -1);
        $needtoupdate=substr($attendance, -1);
        dd($updateid);

   
   }
   public function editdereduction(Request $Request)
 {
   {
      $redctaname=$Request['redctaname'];
      $redctprice=$Request['redctaprice'];
      $redctpercent=$Request['redctapercent'];
      $redctid=$Request['redctaid'];
  
      $data=array('allowancename'=>$redctaname,'price'=>$redctprice,'percent'=>$redctpercent);
      DB::table('allowance')->where('id',$redctid)->update($data);
      return redirect('/addreduction');
     }
 }
   public function hrleaveapprove(Request $Request)
   {
   
    $stafid=$Request['stafid']; 
    $leevid=$Request['leeever'];  
    $levidx=$Request['levidx']; 
    $fromdattt=$Request['fromdattt']; 
    $todattt=$Request['todattt']; 
    $getdat=DB::table('leaves')->where('id',$levidx)->select('from','to')->first();
    $getfromdat=$getdat->from;
    $gettodat=$getdat->to;
 
    $to = Carbon::createFromFormat('Y-m-d', $gettodat);
    $from =Carbon::createFromFormat('Y-m-d',$getfromdat);
    $diff_in_months = $to->diffInDays($from);
    $hehe=$diff_in_months + 1;


    $theman=DB::table('staff_leaves')->where('id',$leevid)->select('leaves_left')->first();
    $eded=$theman->leaves_left;
    $needtoupdate=$eded-$hehe;
   
    $data=array('leaves_left'=>$needtoupdate);
    DB::table('staff_leaves')->where('id',$leevid)->update($data);
    return back();

   }
   public function loandelete($id)
   {
DB::table('loans')->where('id',$id)->delete();
return back();
   }
   public function monthwise(Request $Request)
   {
      $hospital=Auth::user()->Hospital;
      $year=$Request['year'];
      $month=$Request['month']; 
      $department=$Request['departmentx'];   
      $fromdate="01-".$month."-".$year;
      $daysinmonth=Carbon::Parse($fromdate)->daysInMonth;

      $deps=DB::table('departments')->get();
      $check=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->first();
    if($check)
    {
      if($department == 'allstaffs')
    {
      $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->groupBy('staffname')->get();
      $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->get();
    }
      else{
         $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('department',$department)->groupBy('staffname')->get();
         $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('department',$department)->get();
      }
      return view('hr.attendanceview',compact('attendancedata','daysinmonth','attendancedataz','month','year','deps'));
    }
    else{
     
       $users=DB::table('users')->where('Hospital',$hospital)->get();

       foreach($users as $user)
      {
         for($i=1;$i<=$daysinmonth;$i++)
         {
            $attendance=new dailyattendance();
            $attendance->year=$year;
            $attendance->month=$month;
            $attendance->staffid=$user->uniqueid;
            $attendance->staffname=$user->name;
            $attendance->attendance='P';
            $attendance->date=$i."-".$month."-".$year;
            $attendance->hospital=$hospital;
            $attendance->department=$user->departments;
            $attendance->save();
         }

      } 
      if($department == 'allstaffs')
      {
      $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->groupBy('staffname')->get();
      $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->get();
      }
      else{
         $attendancedata=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('department',$department)->groupBy('staffname')->get();
         $attendancedataz=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('department',$department)->get();
      }
    
      return view('hr.attendanceview',compact('attendancedata','daysinmonth','attendancedataz','month','year','deps'));     
       }
   }

}
