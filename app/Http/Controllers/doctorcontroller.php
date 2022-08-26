<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\hospitals;
use App\User;
use App\beds;
use App\rooms;
use App\appointment;
use App\model\files;
use Redirect;
use Storage;
// use DB;
use App\adit;
use Hash;
// use Auth;
Use \Carbon\Carbon;
use Illuminate\Http\UploadedFile;
class doctorcontroller extends Controller
{
    public function consultation(Request $Request,$id,$patient_id)
    {
        // dd($patient_id);
    	$date = Carbon::now();
    	$hospital=Auth::user()->Hospital;
        $presc_id=$Request['presc_id'];
        $dept=DB::table('users')->where('departments',Auth::user()->departments)->get();
        $sub_dept=DB::table('pharmacy_dept')->get();
        $view_history=DB::table('history')
        ->select('*','users.name as history_addedby','users.departments as history_dept')
        ->leftJoin('users','users.id','=','history.history_addedby')
        ->leftjoin('appointments','appointments.id','=','history.history_appid')
        ->where('patientid',$patient_id)
        ->get();
        $presc=DB::table('prescription')
        ->select('*','users.name as name','pharmacy_dept.phar_sub_deptname as phar_sub_deptname','floor.floor_name as floor_name','prescription.id as id')
        ->leftjoin('pharmacy_dept','pharmacy_dept.phar_deptid','=','prescription.presc_subdept')
        ->leftjoin('floor','floor.floor_id','=','prescription.presc_floor')
        ->leftjoin('users','users.id','=','prescription.presc_addedby')
        ->leftjoin('appointments','appointments.id','=','prescription.presc_appid')
        ->where('patientid',$patient_id)
        ->get();
        $users=DB::table('users')->where('id',Auth::user()->id)->get();
        $medicines=DB::table('medicines_details')
        ->leftjoin('medicines','medicines.id','=','medicines_details.Item_name')
        ->get();
        $appointmentstucked=DB::table('appointments')->where('status','called')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->whereDate('created_at',$date)->orderBy('created_at')->select('token','id')->first();
        $appointments=DB::table('appointments')
        ->select('*','firstname','appointments.token as token','appointments.id as id','patient.id as patientid')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->where('appointments.status',"called")
        ->where('appointments.hospital',$hospital)
        ->where('appointments.id',$id)
        ->where('appointments.Department',Auth::user()->departments)
        ->whereDate('appointments.appointmentdate',$date)
        ->get();
        if(isset($appointmentstucked))
        {
            //  $token=$appointmentstucked->token;
             $appz=$appointmentstucked->id;
             $call='Call Next';
        }
        elseif(isset($appointments))
        {
            //  $token=$appointments->token;
            //  $appz=$appointments->id;
             $call='Call Next';
        }
       else
        {
            // $token='--';
            $appz='0';
            $call='Call Patient';
            $Request->session()->put('noappointmentstoday','No more appointments');
        }
        $data=array('status'=>"called");
        DB::table('appointments')->where('status','queue')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->update($data);
        // $data=array('serve'=>$token);
        DB::table('users')->where('id',$id)->update($data);
        //vipin lab test
        $labtests=DB::table('labtests')->get();
        $labprofile=DB::table('labprofile')->get();
        $labprofiles=DB::table('labprofiles')->get();
        // $labdetailss=DB::table('patient_labtest')->get();
        $labdetails=DB::table('patient_labtest')
        // ->leftjoin('prescribed_labtest','patient_labtest.patientlab_id','=','prescribed_labtest.patient_labtest_id')
        ->leftjoin('lab_department','patient_labtest.lab_name','=','lab_department.lab_deptid')
        ->select('patient_labtest.*','lab_department.lab_deptname')
        ->where('patient_id',$patient_id)
        ->get();
        //  dd($labdetails);
        $lab_dept=DB::table('lab_department')->get();
        // $lab_dept=DB::table('lab_department')
        // ->join('lab_department','patient_labtest.lab_name','=','lab_department.lab_deptid')
        // ->get();
        // dd($lab_dept);
        $presc_labtest=DB::table('prescribed_labtest')->get();
        $surgery_dtl=DB::table('surgery')
        ->leftjoin('surgery_types','surgery_types.id','=','surgery.surgery_name')
        ->leftjoin('operation_theatre','operation_theatre.id','=','surgery.theatre_name')
        ->leftjoin('users','users.id','=','surgery.doctor')
        ->select('*','surgery.id as id','surgery_types.id as surgery_types_id','operation_theatre.id as operation_theatre_id','surgery.surgery_name as surgery_surgeryid')
        ->where('patient',$patient_id)
        ->get();
        $surgery=DB::table('surgery_types')->get();
        return view('Doctor.consultation',['labtests'=>$labtests,'labprofiles'=>$labprofiles,'labdetails'=>$labdetails,'lab_dept'=>$lab_dept,'presc_labtest'=>$presc_labtest,'dept'=>$dept,'medicines'=>$medicines,'presc'=>$presc,'users'=>$users,'appointments'=>$appointments,'date'=>$date,'call'=>$call,'view_history'=>$view_history,'sub_dept'=>$sub_dept,'surgery_dtl'=>$surgery_dtl,'surgery'=>$surgery]);
        //vipin lab test
        // return view('Doctor.consultation',['dept'=>$dept,'medicines'=>$medicines,'presc'=>$presc,'users'=>$users,'appointments'=>$appointments,'date'=>$date,'appz'=>$appz,'call'=>$call,'view_history'=>$view_history]);
    }
    public function file(Request $request)
    {
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $store = $file->store('myfiles');
                $appz=$request['appz'];
                $file= new files();
                $file->filename=$store;
                $file->appointmentid=$appz;
                $file->save();
            }
            return redirect('/Consultation');
        }
    }
    public function consult(Request $Request)
    {
        $appz=$Request['appz'];
    	$prescription=$Request['prescription'];
    	$lab=$Request['lab'];
        $surgery=$Request['surgery'];
        $surgerydate=$Request['surgerydate'];
        $nextappointment=$Request['nextappointment'];
        if($nextappointment)
        {
            $status='next';
        }
        else
        {
            $status='appointed';
        }
    	$medicine=$Request['medicine'];
        if($Request->hasfile('filenames'))
        {
            foreach($Request->fphpile('filenames') as $file)
            {
                $store = $file->store('myfiles');
                $appz=$Request['appz'];
                $file= new files();
                $file->filename=$store;
                $file->appointmentid=$appz;
                $file->save();
            }
            $data=array('prescription'=>$prescription,'lab'=>$lab,'medicine'=>$medicine,'surgery'=>$surgery,'surgerydate'=>$surgerydate,'nextappointment'=>$nextappointment,'status'=>$status);
            DB::table('appointments')->where('id',$appz)->update($data);
        }
        else
        {
            $data=array('prescription'=>$prescription,'lab'=>$lab,'medicine'=>$medicine,'surgery'=>$surgery,'surgerydate'=>$surgerydate,'nextappointment'=>$nextappointment,'status'=>$status);
            DB::table('appointments')->where('id',$appz)->update($data);
        }
        $Request->session()->put('appointed','Patient queued to next procedures');
    	return redirect('Consultation');
    }
    public function todaysappointments()
    {
        $date = Carbon::now();
        $today = date("d-m-Y");
        $dep=Auth::user()->departments;
        $todaysappz=DB::table('appointments')
        ->select('*','appointments.id as id')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->leftjoin('users','users.id','=','appointments.doctor')
        ->where('appointments.Department',$dep)
        ->whereDate('appointments.appointmentdate',$date)
        // ->orderBy('appointments.created_at',"desc")
        ->get();
        return view('doctor.todaysappointments',['todaysappz'=>$todaysappz]);
    }
    public function reappointments()
    {
        $dep=Auth::user()->departments;
        $date = Carbon::now();
        $todaysappz=DB::table('appointments')
        ->where('Department',$dep)->whereNotNull('nextappointment')->get();
        return view('doctor.reappointments',['todaysappz'=>$todaysappz]);
    }
    public function depqueue()
    {
        $date = Carbon::now();
        $dep=Auth::user()->departments;
        $hospital=Auth::user()->Hospital;
        $role=Auth::user()->role;
        $doctors=DB::table('users')->where('Hospital',$hospital)->where('departments',$dep)->where('role',$role)->get();
        $depqueue=DB::table('appointments')->where('Department',$dep)->whereDate('created_at',$date)->where('status','queue')->get();
        $quecount=DB::table('appointments')->where('Department',$dep)->whereDate('created_at',$date)->where('status','queue')->count();
        $filcount=DB::table('users')->where('Hospital',$hospital)->where('departments',$dep)->where('role',$role)->count();
        return view('doctor.depqueue',['depqueue'=>$depqueue,'quecount'=>$quecount,'doctors'=>$doctors,'filcount'=>$filcount,'dep'=>$dep]);
    }
    public function dutyschedulefetch()
    {
        $date = Carbon::now();
        $month=$date->month;
        $staffid=Auth::user()->uniqueid;
        $schedule=DB::table('dutyschedule')->where('staffid',$staffid)->whereMonth('fromdate',$month)->get();
        return view('doctor.dutyschedulefetch',['schedule'=>$schedule]);
    }
    public function applyleave()
    {
        $staffid=Auth::user()->uniqueid;
        $leavedata=DB::table('staff_leaves')->where('staff_id',$staffid)
        ->join('leave_types', 'staff_leaves.leave_type_id', '=', 'leave_types.id')
        ->select('staff_leaves.*','leave_types.leave_type','leave_types.abbreviation')
        ->get();
        return view ('doctor.applyleave',['leavedata'=>$leavedata]);
    }
    public function addhistory(Request $Request)
    {
        $history_appid=$Request->input('history_appid');
        $date=$Request->input('history_date');
        $history=$Request->input('history');
        $image = $Request->input('image');
        if(!empty($Request->file('image'))){
            $this->validate($Request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            ]);
        }
        $input = $Request->all();
        if($image = $Request->file('image'))
        {
            $destinationPath = 'images/history/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $paths = $profileImage;
        }
        else
        {
            $paths = '';
        }
        DB::insert('insert into history(history_appid,history_date,history_detailes,history_doc,history_dept,history_addedby) values (?,?,?,?,?,?)',[$history_appid,$date,$history,$paths,Auth::user()->departments,Auth::user()->id]);
        return back();
    }
    public function edit_history($history_id)
    {
        $edit_history=DB::table('history')
        ->select('*')
        ->where('history.history_id',$history_id)
        ->get();
        return view('doctor.edit_history',['edit_history'=>$edit_history]);
    }
    public function update_history(Request $Request)
    {
        $history_id=$Request->input('history_id');
        $date=$Request->input('history_date');
        $history=$Request->input('history');
        $image = $Request->input('image');
        if(!empty($Request->file('image'))){
            $this->validate($Request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            ]);
        }
        if($Request->file != ''){
            $path = public_path().'/uploads/images/';

            //code for remove old file
            if($history->file != ''  && $history->file != null){
                 $file_old = $path.$history->file;
                 unlink($file_old);
            }

            //upload new file
            $file = $Request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $history->update(['history_doc' => $filename]);
       }
    //    $editdata=array('history_appid'=>$history_appid,'history_date'=>$date,'history_detailes'=> $history,'history_doc'=>$paths);
    }
    public function add_prescription(Request $Request)
    {
        $prescription_appid=$Request->input('prescription_appid');
        $request_date=$Request->input('prescription_date');
        $sub_dept=$Request->input('sub_dept');
        $floor=$Request->input('floor');
        $added_by=$Request->input('prescription_addedby');
        $prescription_dept=$Request->input('prescription_dept');
        $values=DB::table('prescription')->insertGetId([
            'presc_appid'=>$prescription_appid,
            'presc_date'=>$request_date,
            'presc_subdept'=>$sub_dept,
            'presc_floor'=>$floor,
            'presc_addedby'=>$added_by,
            'presc_department'=>$prescription_dept
        ]);
        $item_name=$Request->input('item_name');
        $dosage=$Request->input('dosage');
        $instruction=$Request->input('instruction');
        if(is_array($item_name))
        {
            foreach ($item_name as $idx=>$val)
            {
                $final_array[] = [ $val,$dosage[$idx],$instruction[$idx]];
            }
            foreach($final_array as $f_array){
                DB::table('prescription_medicine')->insert(
                array(
                       'presc_id'  => $values,
                       'presc_medicine'   =>   $f_array[0],
                       'presc_dosage'  =>   $f_array[1],
                       'presc_instruction'  =>   $f_array[2]
                    )
                );
            }
        }
        return back()->withInput();
    }
    public function view_prescription($id)
    {
        $view_presc=DB::table('prescription')
        ->select('*','pharmacy_dept.phar_sub_deptname as phar_sub_deptname','floor.floor_name as floor_name','prescription.id as presc_id','prescription_medicine.presc_medicine')
        ->leftjoin('prescription_medicine','prescription_medicine.presc_id','=','prescription.id')
        // ->leftjoin('medicines_details','medicines_details.id','=','prescription_medicine.presc_medicine')
        ->leftjoin('medicines','medicines.id','=','prescription_medicine.presc_medicine')
        ->leftjoin('users','users.id','=','prescription.presc_addedby')
        ->leftjoin('pharmacy_dept','pharmacy_dept.phar_deptid','=','prescription.presc_subdept')
        ->leftjoin('floor','floor.floor_id','=','prescription.presc_floor')
        ->where('prescription.id',$id)
        ->get();
        return view('doctor.view_prescription',['view_presc'=>$view_presc]);
    }
    public function edit_prescription($id)
    {
        $edit_presc=DB::table('prescription')
        ->select('*','pharmacy_dept.phar_sub_deptname as phar_sub_deptname','floor.floor_name as floor_name','prescription.id as presc_id','prescription_medicine.presc_medicine as presc_medicine')
        ->leftjoin('prescription_medicine','prescription_medicine.presc_id','=','prescription.id')
        ->leftjoin('users','users.id','=','prescription.presc_addedby')
        ->leftjoin('medicines_details','medicines_details.id','=','prescription_medicine.presc_medicine')
        ->leftjoin('medicines','medicines.id','=','prescription_medicine.presc_medicine')
        ->leftjoin('pharmacy_dept','pharmacy_dept.phar_deptid','=','prescription.presc_subdept')
        ->leftjoin('floor','floor.floor_id','=','prescription.presc_floor')
        ->where('prescription.id',$id)
        ->get();
        // echo $edit_presc;die;
        $sub_pharmacy=DB::table('pharmacy_dept')->get();
        $floor=DB::table('floor')->get();
        // dd($edit_presc);
        $medicines=DB::table('medicines_details')
        ->select('*')
        ->leftjoin('medicines','medicines.id','=','medicines_details.Item_name')
        ->get();
        return view('doctor.edit_prescription',['edit_presc'=>$edit_presc,'medicines'=>$medicines,'sub_pharmacy'=>$sub_pharmacy,'floor'=>$floor]);
    }
    public function update_prescription(Request $Request)
    {
        $presc_id=$Request->input('presc_id');
        $item_name=$Request->input('item_name');
        $dosage=$Request->input('dosage');
        $instruction=$Request->input('instruction');
        // dd($instruction);
        if(is_array($presc_id))
        {
            foreach ($presc_id as $idx=>$val)
            {
                $final_array[] = [$val,$item_name[$idx],$dosage[$idx],$instruction[$idx]];
            }
            foreach($final_array as $f_array){
            // echo $final_array;die;
            // dd($final_array);
             DB::table('prescription_medicine')->where('presc_medid',$f_array[0])
            ->update(
                array(
                       'presc_medicine'   =>   $f_array[1],
                       'presc_dosage'  =>   $f_array[2],
                       'presc_instruction'  =>  $f_array[3],
                    )
                );
            }
        }
        $presc_id=$Request->input('prescription');
        $medicine_name=$Request->input('medicine_name');
        $dosage1=$Request->input('dosage1');
        $instruction1=$Request->input('instruction1');
        // dd($instruction1);
        if(is_array($medicine_name))
        {
            foreach ($medicine_name as $idx=>$val)
            {
                $final_array1[] = [ $val,$presc_id[$idx],$dosage1[$idx],$instruction1[$idx]];
            }
            // dd($final_array1);
            // print_r($final_array1);die;
            foreach($final_array1 as $f_array)
            {
                DB::table('prescription_medicine')->insert(
                    array(
                            'presc_id'  => $f_array[1],
                            'presc_medicine'   =>  $f_array[0],
                            'presc_dosage'  =>  $f_array[2],
                            'presc_instruction'  =>   $f_array[3]
                        )
                );
            }
        }
        return back()->withInput();
    }
    public function add_labtest(Request $Request)
    {
        $patient_id=$Request->input('test_id');
        // $date=date(('Y-m-d H:i:s'),strtotime($Request->test_date));
        // dd($date);
        $date=$Request->input('test_date');
        $l_name=$Request->input('lab_name');
        $added_by=$Request->input('test_addedby');
        $department=$Request->input('test_added_dept');
        $values=DB::table('patient_labtest')->insertGetId([
            'patient_id'=>$patient_id,
            'date'=>$date,
            'lab_name'=>$l_name,
            'added_by'=>$added_by,
            'department'=>$department,
        ]);
        $testname=$Request->input('testname');
        $profilename=$Request->input('profilename');
        if($Request->test_type==1)
        {
            foreach($testname as $key)
            {
                DB::table('prescribed_labtest')->insert(
                    array(
                           'patient_labtest_id'  => $values,
                           'test'   => $key,

                        )
                    );
            }
        }
        else
        {
            foreach($profilename as $key)
            {
                DB::table('prescribed_labtest')->insert(
                    array(
                           'patient_labtest_id'  => $values,
                           'profile'   => $key,

                        )
                    );
            }
        }
        // if(is_array($testname))
        // {
        //     foreach ($testname as $idx=>$val)
        //     {
        //         $final_array[] = [$val,$profilename[$idx]];
        //     }
        //     foreach($final_array as $f_array){


        //         DB::table('prescribed_labtest')->insert(
        //         array(
        //                'patient_labtest_id'  => $values,
        //                'test'   =>   $f_array[0],
        //                'profile'  =>   $f_array[1],

        //             )
        //         );
        //     }

        // }
        return back()->withInput();
    }
    public function view_lab_description($id)
    {
    //   dd($id);
      $view_desc=DB::table('patient_labtest')
      ->select('*','labprofiles.id as id','labtests.id as id','labtests.name as name','labprofiles.name as profile')
      ->leftjoin('lab_department','lab_department.lab_deptid','=','patient_labtest.lab_name')
      ->leftjoin('prescribed_labtest','patient_labtest.patientlab_id','=','prescribed_labtest.patient_labtest_id')
      ->leftjoin('labtests','labtests.id','=','prescribed_labtest.test')
      ->leftjoin('labprofiles','labprofiles.id','=','prescribed_labtest.profile')
      ->where('patient_labtest_id',$id)
      ->get();
    //   dd($view_desc);
      return view('Doctor.view_clinical_observation',compact('view_desc'));

    }
    public function edit_labtest($id)
    {
        // dd($id);
        // $edit_test=DB::table('patient_labtest')
        // ->select('*')
        // ->leftjoin('lab_department','patient_labtest.lab_name','=','lab_department.lab_deptid')
        // ->leftjoin('prescribed_labtest','patient_labtest.patientlab_id','=','prescribed_labtest.patient_labtest_id')
        // ->where('patient_labtest.patientlab_id',$patientlab_id)
        // ->get();
        // rework
        $edit_test=DB::table('prescribed_labtest')
        // ->select('*','prescribed_labtest.id as id')
        // ->leftjoin('lab_department','patient_labtest.lab_name','=','lab_department.lab_deptid')
        ->leftjoin('patient_labtest','patient_labtest.patientlab_id','=','prescribed_labtest.patient_labtest_id')
        ->where('patient_labtest_id',$id)
        ->get();
        // $edit_labtest=DB::table('prescribed_labtest')->get();
        // rework
        $lab_dept=DB::table('lab_department')->get();
        $users=DB::table('users')->where('id',Auth::user()->id)->get();
        $dept=DB::table('users')->where('departments',Auth::user()->departments)->get();
        $labtests=DB::table('labtests')->get();
        $labprofiles=DB::table('labprofiles')->get();
        return view('Doctor.edit_labtest',['edit_test'=>$edit_test,'lab_dept'=>$lab_dept,'users'=>$users,'dept'=>$dept,'labtests'=>$labtests,'labprofiles'=>$labprofiles]);
    }
    public function update_labtest(Request $Request)
    {
        // dd($Request->input('testname1'));
        if($Request->lab_type==1)
        {
            $testname1=$Request->input('testname1');
            $testname=$Request->input('testname');
            $id=$Request->input('presc_item_id');
           if(!empty($Request->input('testname')))
           {

            $lab_test=array_combine($id,$testname);
            // dd($lab_test);
            foreach($lab_test as $key=>$value)
            {
                DB::table('prescribed_labtest')->where('id',$key)->update(
                    array(
                           'test'   =>   $value,

                        )
                    );
            }
            // return back();
        }
        if(!empty($Request->input('testname1')))
        {


            foreach($Request->input('testname1') as $key)
            {
                DB::table('prescribed_labtest')->insert(
                    array(
                           'test'   =>   $key,
                           'patient_labtest_id'=>$Request['tests_id'],

                        )
                    );
            }

        }
        }
        else{
            $profilename1=$Request->input('profilename1');
            $profilename=$Request->input('profilename');
            $id=$Request->input('presc_item_id');
           if(!empty($Request->input('profilename')))
           {

            $lab_test=array_combine($id,$profilename);
            // dd($lab_test);
            foreach($lab_test as $key=>$value)
            {
                DB::table('prescribed_labtest')->where('id',$key)->update(
                    array(
                           'profile'   =>   $value,

                        )
                    );
            }
            // return back();
        }
        if(!empty($Request->input('profilename1')))
        {


            foreach($Request->input('profilename1') as $key)
            {
                DB::table('prescribed_labtest')->insert(
                    array(
                           'profile'   =>   $key,
                           'patient_labtest_id'=>$Request['tests_id'],

                        )
                    );
            }

        }
        }
        return back();

        // dd($Request->request);
    //     $test_id=$Request['tests_id'];
    //     $test_date=$Request['tests_date'];
    //     $lab_name=$Request['testlab_name'];
    //     $add_by=$Request['dr_name'];
    //     $add_dept=$Request['dr_depmt'];
    //    $id=DB::table('patient_labtest')->where('patientlab_id',$test_id)->update([
    //         'date'=>$test_date,
    //         'lab_name'=>$lab_name,
    //         'added_by'=>$add_by,
    //         'department'=>$add_dept,
    //     ]);
        // $id=$Request->input('presc_item_id');
        // $testname=$Request->input('testname');
        // $profilename=$Request->input('profilename');

        // if(is_array($testname))
        // {
        //     foreach ($testname as $idx=>$val)
        //     {
        //         $final_array[] = [ $val,$id[$idx],$profilename[$idx]];
        //     }
        //     // dd($final_array);
        //     foreach($final_array as $f_array){

        //         DB::table('prescribed_labtest')->where('id',$f_array[1])->update(
        //             array(
        //                    'test'   =>   $f_array[0],
        //                    'profile'  =>   $f_array[2],

        //                 )
        //             );
        //     }
        // }

        // $testname1=$Request->input('testname1');
        // $profilename1=$Request->input('profilename1');
        // if(is_array($testname1))
        // {
        //     foreach($testname1 as $key1)
        //     {
        //         DB::table('prescribed_labtest')->insert(
        //             array(
        //                    'patient_labtest_id'  =>$test_id,
        //                    'test'   =>   $key1,
        //                 //    'profile'  =>   $key,

        //                 )
        //             );
        //     }

        // }
        // if(is_array($profilename1))
        // {
        //     foreach($profilename1 as $key2)
        //     {
        //         DB::table('prescribed_labtest')->insert(
        //             array(
        //                    'patient_labtest_id'  =>$test_id,
        //                    'profile'  =>   $key2,

        //                 )
        //             );
        //     }
        // }
        return back();
    }
    public function delete_labtest(Request $Request,$id)
    {
    //    dd($id);
        DB::table('patient_labtest')->where('patientlab_id',$id)->delete();
        $Request->session()->put('depdeleted','Lab Department Removed');
        return back();
    }
    public function delete_preclab($id)
    {
        DB::table('prescribed_labtest')->where('id',$id)->delete();
        return back();
    }
    public function delete_prescription_med($presc_id)
    {
        DB::table('prescription')
        ->leftJoin('prescription_medicine','prescription_medicine.presc_id','=','prescription.presc_id')
        ->where('prescription.presc_id','=',$presc_id)
        ->delete('prescription','prescription_medicine');
        return redirect(route('Consultation'));
    }
    public function add_surgery(Request $Request)
    {
        $date=$Request->input('surgery_date');
        $surgery=$Request->input('surgery_name');
        $doctor=$Request->input('dr_name');
    if(!empty($Request->file('document'))){
        $this->validate($Request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ]);}
        $input = $Request->all();

        if ($image = $Request->file('document')) {

            $destinationPath = 'image/patient_document/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $upload_doc = $profileImage;

        }else{
            $upload_doc = '';
        }
        // $document=$Request->input('document');
        DB::insert('insert into surgery(surgery_date,surgery_name,doctor,document)values(?,?,?,?)',[$date,$surgery,$doctor,$upload_doc]);
        return back()->withInput();

    }
    public function add_procedure($id)
    {  

        $surgery_dtl=DB::table('surgery')->get();
        $users=DB::table('users')->where('id',Auth::user()->id)->get(); 

        // $users=DB::table('users')->where('id',Auth::user()->id)->get();
        $department=DB::table('users')->where('departments',Auth::user()->departments)->get();
        $patient_id=$id;
        $patient_details=DB::table('patient')->get();
        $procedure=DB::table('operation_theatre')
        ->leftjoin('departments','departments.id','=','operation_theatre.department')
        ->select('*','departments.id as id','operation_theatre.id as id')
        ->get();
        // $dept = DB::table('users')->where('users.departments',Auth::user()->departments)->get();
        // dd($dept);
        $surgery=DB::table('surgery_types')->get();
        return view('procedure.procedure_view',compact('procedure','surgery','patient_id','patient_details','users','department'));
    }
    public function otpatient_details(Request $request)
    {
        $patient=DB::table('patient')->find($request->patients_id);
        return json_encode($patient);
    }
    public function add_ot_patient(Request $request)
    {
        // $date=$request->input('sur_date');
        //dateformate change
        $str= strtotime($request->input('sur_date'));
        $date = date("Y-m-d",$str);
        $title=$request->input('sur_title');
        $start=$request->input('start_time');
        $end=$request->input('end_time');
        $theatre=$request->input('theatre_name');
        $surgery_name=$request->input('sur_name');
        $patient_name=$request->input('ot_patient');
        $doctor=$request->input('doctor_name');
        $department=$request->input('dept_name');
        $color=$request->input('color');
        $name=DB::table('surgery')->where('surgery_date',$date)->where('end_time','>=',$start)->count();
        if($name==0)
        {
            DB::insert('insert into surgery(surgery_name,doctor,theatre_name,patient,department,surgery_date,start_time,end_time,title,event_color)values(?,?,?,?,?,?,?,?,?,?)',[$surgery_name,$doctor,$theatre,$patient_name,$department,$date,$start,$end,$title,$color]);
            return back();
        }
        else {
            return redirect::to('calendar_event')->with('message', 'Thanks for registering!');
        //     return redirect()->route('calendar_event')
        // ->with('error','You have no permission for this page!');
        }
        // DB::insert('insert into surgery(surgery_name,doctor,theatre_name,patient,department,surgery_date,start_time,end_time,title)values(?,?,?,?,?,?,?,?,?)',[$surgery_name,$doctor,$theatre,$patient_name,$department,$date,$start,$end,$title]);
        // return back();
    }
    public function update_ot_patient(Request $request)
    {
        $ot_id=$request->input('ot_id');
        $theatre_id=$request->input('theatre_id');
        $surge_name=$request->input('surge_name');
        $start=$request->input('sur_starttime');
        $end=$request->input('end_surtime');
        $editdata=array('surgery_name'=>$surge_name,'start_time'=>$start,'end_time'=>$end);
        DB::table('surgery')->where('id',$ot_id)->update($editdata);
        return back();

    }
    public function surgery_delete($id)
    {
        DB::table('surgery')->where('id',$id)->delete();
        return back();
    }
}

