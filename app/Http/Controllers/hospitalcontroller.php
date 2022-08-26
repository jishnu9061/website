<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\model\patient;
use App\hospitals;
use App\User;
use App\beds;
use App\rooms;
use App\appointment;
use App\usermanagement;
use App\previlages;
use App\departments;
use App\model\roomtypes;
use App\model\roomcategories;
use App\model\appz;
use Redirect;
use DB;
use App\adit;
use Hash;
use Auth;
Use \Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class hospitalcontroller extends Controller
{
	public function hospitals()
	{
		return view('hospitals.hospital');
	}
    public function addhospital(Request $Request)
    {
        $hospital= new hospitals();
        $hospital->name= $Request['name'];
        $hospital->location= $Request['location'];
        $hospital->category= $Request['category'];
        // $file = $Request->file('hospitalfile');
        // $store=$Request->hospitalfile->store('adminhospitals','public');
        // $hospital->image= $store;
        $hospital->save();
        $Request->session()->put('hospitalregistered','hospital Registered');
        toast('hospital added','success');
        return view('hospitals.hospital');
        $Request->session()->forget('hospitalregistered');
    }
    public function allhospitals()
    {
        $allhospitals=DB::table('hospitals')->get();
        return view('superadmin.allhospitals',['allhospitals'=>$allhospitals]);
    }
    public function addadmins(Request $Request)
    {
        $admins= new User();
        $admins->name= $Request['name'];
        $admins->email= $Request['email'];
        $admins->Hospital= $Request['hospitalname'];
        $admins->role= 'hospitaladmin';
        $admins->departments= $Request['medname'];
        $admins->medicaldepartments= $Request['depname'];
        $password = $Request['password']; // password is form field
        $admins->password = Hash::make($password);
        //$file = $Request->file('hospitalfile');
        // $store=$Request->hospitalfile->store('adminhospitals','public');
        // $hospital->image= $store;
        $admins->save();
        $Request->session()->put('adminregistered','Admin Registered');
        toast('hospital added','success');
        return redirect('/admins');
        $Request->session()->forget('hospitalregistered');
    }
    public function admins(Request $Request)
    {
        $adminroles=DB::table('roles')->get();
        $hospitals=DB::table('hospitals')->get();
        $departments=DB::table('departments')->get();
        $medicaldepartments=DB::table('medicaldepartments')->get();
        return view('hospitals.addadmins',['adminroles'=>$adminroles,'hospitals'=>$hospitals,'departments'=>$departments,'medicaldepartments'=>$medicaldepartments]);
    }
    public function addit(Request $Request)
    {
        $adit= new adit();
        $adit->depname= $Request['name'];
        $adit->save();
        $Request->session()->put('adminregistered','Admin Registered');
        toast('hospital added','success');
        return Redirect::back();
    }
    public function appointment($id)
    {
    	$date = Carbon::now();
        $patient= DB::table('patient')->where('id',$id)->get();
        $departments=DB::table('departments')->get();
        $hospital=Auth::user()->Hospital;
        $dep=Auth::user()->departments;
        $id=Auth::user()->id;
        $appointmentstucked=DB::table('appointments')->where('status','called')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->whereDate('created_at',$date)->orderBy('created_at')->select('token','id')->first();
    	$appointments=DB::table('appointments')->where('status','queue')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->whereDate('created_at',$date)->orderBy('created_at')->select('token','id')->first();
        if(isset($appointmentstucked))
        {
            $token=$appointmentstucked->token;
            $appz=$appointmentstucked->id;
            $call='Call Next';
        }
        elseif(isset($appointments))
        {
            $token=$appointments->token;
            $appz=$appointments->id;
            $call='Call Next';
        }
        else
        {
            $token='--';
            $appz='0';
            $call='Call Patient';
        }
        $data=array('status'=>"called");
        DB::table('appointments')->where('token',$token)->where('status','queue')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->update($data);
        $data=array('serve'=>$token);
        DB::table('users')->where('id',$id)->update($data);
        return view('patient.appointment',['departments'=>$departments,'patient'=>$patient,'date'=>$date]);
    }
    public function getdoctordetails($departmentid)
    {
        $empData['data'] = User::orderby("name","asc")
        ->select('id','name')
        ->where('departments',$departmentid)
        ->where('role','doctor')
        ->get();
        return response()->json($empData);
    }
    public function get_cons_fees(Request $Request)
    {
        $id  = $Request->sel_emp;
		$value   = DB::table('users')
        ->select('consultation_fee')
        ->where('id',$id)->get();
   		echo json_encode($value);
    }
    public function bookappointment(Request $Request)
    {
        //   dd(date(('Y-m-d H:i:s'),strtotime($Request->appointment_date)));
        $appz=DB::table('appointments')->whereDate('created_at', Carbon::today())->count();
        // if($appz == '0')
        // {
        //     $newtoken='1';
        // }
        // else
        // {
        //     $appzz=DB::table('appointments')->whereDate('created_at', Carbon::today())->orderby('created_at','DESC')->first();
        //     $appzztoken=$appzz->token;
        //     $newtoken=$appzztoken + 1;
        // }
        $appointment= new appointment();
        $appointment->patientid=$Request['patient_id'];
        $appointment->token=$Request['token_number'];
        $appointment->appointmentdate=date(('Y-m-d H:i:s'),strtotime($Request->appointment_date));
        $appointment->Department=$Request['sel_depart'];
        $appointment->doctor=$Request['sel_emp'];
        $appointment->cons_fee=$Request['cons_fee'];
        $appointment->reg_fee=$Request['reg_fee'];
        $appointment->hospital=Auth::user()->Hospital;
        $appointment->status="queue";
        $appointment->save();
        $Request->session()->put('appointmentbooked','Appointment Booked');
        return redirect('/allappointment');
    }
    public function allappointment()
    {
        $hospital=Auth::user()->Hospital;
    	$date = Carbon::now();
        $allappointments=DB::table('appointments')
        ->select('*','appointments.id as id','users.name as name')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->leftjoin('users','users.id','=','appointments.doctor')
        ->where('appointments.hospital',$hospital)->orderBy('appointments.created_at','DESC')->get();
        return view('patient.allappointment',['hospital'=>$hospital,'date'=>$date,'allappointments'=>$allappointments]);
    }
    public function print_appointment(Request $Request,$id)
    {
        $hospital=Auth::user()->Hospital;
        $appointment=DB::table('appointments')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->leftjoin('users','users.id','=','appointments.doctor')
        ->leftjoin('hospitals','hospitals.name','=','appointments.hospital')
        ->where('appointments.id',$id)
        ->select('*','patient.id as patientid','patient.firstname','patient.age as age','patient.address as address','appointments.appointmentdate as appointmentdate','appointments.id as id','users.name as name')
        ->get();
        return view('patient.printappointment',compact('appointment','hospital'));
    }
    public function edit_appointment($id)
    {
        $departments=DB::table('departments')->get();
        $users=DB::table('users')->get();
        $edit_appointment=DB::table('appointments')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->leftjoin('users','users.id','=','appointments.doctor')
        ->where('appointments.id',$id)
        ->select('*','patient.firstname','appointments.appointmentdate as appointmentdate','appointments.id as id')
        ->get();
        return view('patient.edit_appointment',['edit_appointment'=>$edit_appointment,'departments'=>$departments,'users'=>$users]);
    }
    public function update_appointment(Request $Request)
    {
        $id=$Request['appointmentid'];
        $appointmentdate=$Request['app_date'];
        $Department=$Request['sel_depart'];
        $doctor=$Request['sel_emp'];
        $data=array('id'=>$id,'appointmentdate'=>$appointmentdate,'Department'=>$Department,'doctor'=>$doctor);
        DB::table('appointments')->where('id',$id)->update($data);
        return redirect('/allappointment');
    }
    public function delete_appointment(Request $Request,$id)
    {
        DB::table('appointments')->where('id',$id)->delete();
        $Request->session()->put('depdeleted','Appointment Removed');
        return back();
    }
    public function cross_consult($id)
    {
        $date = Carbon::now();
        $patient= DB::table('patient')->where('id',$id)->get();
        $departments=DB::table('departments')->get();
        $hospital=Auth::user()->Hospital;
        $dep=Auth::user()->departments;
        $id=Auth::user()->id;
        $appointmentstucked=DB::table('appointments')->where('status','called')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->whereDate('created_at',$date)->orderBy('created_at')->select('token','id')->first();
    	$appointments=DB::table('appointments')->where('status','queue')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->whereDate('created_at',$date)->orderBy('created_at')->select('token','id')->first();
        if(isset($appointmentstucked))
        {
            $token=$appointmentstucked->token;
            $appz=$appointmentstucked->id;
            $call='Call Next';
        }
        elseif(isset($appointments))
        {
            $token=$appointments->token;
            $appz=$appointments->id;
            $call='Call Next';
        }
        else
        {
            $token='--';
            $appz='0';
            $call='Call Patient';
            //   $Request->session()->put('noappointmentstoday','No more appointments');
        }
        $data=array('status'=>"called");
        DB::table('appointments')->where('token',$token)->where('status','queue')->where('hospital',$hospital)->where('Department',Auth::user()->departments)->update($data);
        $data=array('serve'=>$token);
        DB::table('users')->where('id',$id)->update($data);
        return view('patient.crossconsult',['departments'=>$departments,'patient'=>$patient,'date'=>$date]);
    }
    public function allocatebedsnrooms(Request $Request)
    {
        $hospital=Auth::user()->Hospital;
        DB::table('beds')->where('hospital',$hospital)->delete();
        $rooms=$Request['rooms'];
        $roomcharge=$Request['roomcharge'];
        $acrooms=$Request['acrooms'];
        $acroomcharge=$Request['acroomcharge'];
        $categoryrooms=$Request['categoryrooms'];
        $categoryroomcharge=$Request['categoryroomcharge'];
        $wardbeds=$Request['wardbeds'];
        $wardbedcharge=$Request['wardbedcharge'];
        DB::table('beds')->where('hospital',$hospital)->delete();
        for($i=1;$i<=20;$i++)
        {
            $bedavail=$Request['c'.$i];
            for($d=1;$d<=$bedavail;$d++)
            {
                $depa=$Request['d'.$i];
                $depacharge=$Request['b'.$i];
                $bed= new beds();
                $bed->bedname= $i;
                $bed->department= $depa;
                $bed->bedcharge= $depacharge;
                $bed->hospital= Auth::user()->Hospital;
                $bed->save();
            }
        }
        DB::table('rooms')->where('Hospital',$hospital)->where('category','nonac')->delete();
        for($i=1;$i<=$rooms;$i++)
        {
            $room= new rooms();
            $room->Roomno= $i;
            $room->Hospital= Auth::user()->Hospital;
            $room->category= "nonac";
            $room->save();
        }
        DB::table('rooms')->where('Hospital',$hospital)->where('category','ac')->delete();
        for($i=1;$i<=$acrooms;$i++)
        {
            $rooms= new rooms();
            $rooms->Roomno= $i;
            $rooms->Hospital= Auth::user()->Hospital;
            $rooms->category= "ac";
            $rooms->save();
        }
        $data= array(
                'roomcharge'=>$roomcharge,'acrooms'=>$acrooms,
                'acroomcharge'=>$acroomcharge,'categoryrooms'=>$categoryrooms,
                'categoryroomcharge'=>$categoryroomcharge,'wardbeds'=>$wardbeds,
                'wardbedcharge'=>$wardbedcharge,'rooms'=>$rooms);
        $statusupdate=  DB::table('hospitals')->where('name', $hospital)->update($data);
        $Request->session()->put('bednrooms','Rooms and Beds allocated');
        return redirect('/allocatebedsandrooms');
    }
    public function queuemanagement()
    {
        $usershospital=Auth::user()->Hospital;
        $queues= DB::table('appointments')->where('status','queue')->where('hospital',$usershospital)->orderBy('created_at')->select('Department','patientid')->get()->groupBy(function($data) {
        return [$data->Department];});
        $count = DB::table('appointments')->where('status','queue')->where('hospital',$usershospital)
                ->select('Department', DB::raw('count(*) as total'))
                ->groupBy('Department')
                ->get();
            //dd($queues);
            //$queues=DB::table('departments')
            //->join('appointments', 'departments.depname', '=', 'appointments.Department')
            //->get();
           return view('hospitals.queue',['queues'=>$queues,'count'=>$count]);
    }
    public function callthepatient($id)
    {
        $updatestatus=array('status'=>'called');
        DB::table('appointments')->where('status','queue')->where('patientid',$id)->update($updatestatus);
        return redirect('/queuemanagement');
    }
    public function counter()
    {
        $usershospital=Auth::user()->Hospital;
        $date = Carbon::now();
        $queues= DB::table('appointments')->where('status','queue')->whereDate('created_at',$date)->where('hospital',$usershospital)->orderBy('created_at')->select('Department','patientid','token')->paginate(8)->groupBy(function($data) {
                return [$data->Department];});
        $count = DB::table('appointments')->where('status','queue')->where('hospital',$usershospital)
                 ->select('Department', DB::raw('count(*) as total'))
                 ->groupBy('Department')
                 ->get();
        return view('counter.counter',['date'=>$date,'queues'=>$queues,'count'=>$count]);
    }
    public function todaysappointmentsall()
    {
        $date = Carbon::now();
        $todaysappz=DB::table('appointments')
        ->select('*')
        ->leftjoin('patient','patient.id','=','appointments.patientid')
        ->leftjoin('users','users.id','=','appointments.doctor')
        ->whereDate('appointments.created_at',$date)
        ->orderBy('appointments.created_at',"DESC")
        ->get();
        return view('doctor.todaysappointments',['todaysappz'=>$todaysappz]);
    }
    public function usermanagement()
    {
        $userroles=DB::table('userroles')->paginate(10);
        return view('hospitals.usermanagement',['userroles'=>$userroles]);
    }
    public function adddepartments()
    {
        $usershospital=Auth::user()->Hospital;
        $departments=DB::table('departments')->where('hospital',$usershospital)->get();
        return view('hospitals.adddepartments',['departments'=>$departments]);
    }
    //sarjana added departments sub
    public function add_phardept()
    {
        $usershospital=Auth::user()->Hospital;
        $dept=DB::table('departments')->where('hospital',$usershospital)->get();
        $phar_dept=DB::table('pharmacy_dept')
        ->leftjoin('floor','floor.floor_id','=','pharmacy_dept.floor')
        ->where('pharmacy_dept.hospital',$usershospital)->get();
        $floor=DB::table('floor')->where('hospital',$usershospital)->get();
        $edit_detailes=DB::table('pharmacy_sub_dept')
        ->select('*')
        ->leftjoin('pharmacy_dept','pharmacy_dept.phar_deptid','=','pharmacy_sub_dept.phar_dept')
        ->leftjoin('departments','departments.id','=','pharmacy_sub_dept.dept')
        ->get();
        return view('hospitals.add_phardept',['phar_dept'=>$phar_dept,'dept'=>$dept,'floor'=>$floor,'edit_detailes'=>$edit_detailes]);
    }
    public function add_pharmacy_sub(Request $Request)
    {
        $values=DB::table('pharmacy_dept')->insertGetId([
                    'phar_sub_deptname'     =>   $Request->pharmacy_sub,
                    'floor'     =>   $Request->floor,
                    'dept_id'     =>   Auth::user()->departments,
                    'hospital'   =>   Auth::user()->Hospital,
        ]);
        $department=$Request['department'];
        // dd($Request->request);
        if(is_array($department))
        {
            foreach ($department as $idx=>$val)
		    {
                $final_array[] = [ $val];
            }
            foreach($final_array as $f_array)
            {
                DB::table('pharmacy_sub_dept')->insert(
                        array(
                                'phar_dept'  => $values,
                                'dept'   =>   $f_array[0],
                        )
                );
            }
        }
        return back();
    }
    public function view_dept_sub($phar_deptid)
    {
        $usershospital=Auth::user()->Hospital;
        $phar_dept=DB::table('pharmacy_dept')
        ->select('*','pharmacy_dept.dept_id as maindepartment','departments.depname as department')
        ->leftjoin('pharmacy_sub_dept','pharmacy_sub_dept.phar_dept','=','pharmacy_dept.phar_deptid')
        ->leftjoin('floor','floor.floor_id','=','pharmacy_dept.floor')
        ->leftjoin('departments','departments.id','=','pharmacy_sub_dept.dept')
        ->where('pharmacy_dept.phar_deptid',$phar_deptid)
        ->where('pharmacy_dept.hospital',$usershospital)
        ->get();
        return view('hospitals.view_dept_sub',['phar_dept'=>$phar_dept]);
    }
    public function edit_dep_sub($phar_deptid)
    {
        $usershospital=Auth::user()->Hospital;
        $edit_sub_dept=DB::table('pharmacy_dept')
        ->select('*','pharmacy_dept.dept_id as maindepartment','departments.depname as department','pharmacy_sub_dept.id as id')
        ->leftjoin('pharmacy_sub_dept','pharmacy_sub_dept.phar_dept','=','pharmacy_dept.phar_deptid')
        ->leftjoin('floor','floor.floor_id','=','pharmacy_dept.floor')
        ->leftjoin('departments','departments.id','=','pharmacy_sub_dept.dept')
        ->where('pharmacy_dept.phar_deptid',$phar_deptid)
        ->where('pharmacy_dept.hospital',$usershospital)
        ->get();
        $dept=DB::table('departments')->where('hospital',$usershospital)->get();
        $floor=DB::table('floor')->where('hospital',$usershospital)->get();
        return view('hospitals.edit_dept_sub',['edit_sub_dept'=>$edit_sub_dept,'dept'=>$dept,'floor'=>$floor]);
    }
    public function update_phar_dept(Request $Request)
    {
        $phar_deptid=$Request['phar_sub_dept'];
        $departments=$Request['departments'];
        // dd($Request->request);
        // dd($departments);
        if(is_array($departments))
        {
            foreach ($departments as $idx=>$val)
		    {
                $final_array[] = [$val,$phar_deptid[$idx]];
            }
            // dd($final_array);
            foreach($final_array as $f_array)
            {
                DB::table('pharmacy_sub_dept')
                ->where('id',$f_array[1])
                ->update(
                    array(
                            'dept'   =>   $f_array[0],
                    )
                );
            }
        }
        return redirect('add_phardept');
    }
    public function delete_pharma_dept($phar_deptid)
    {
        DB::table('pharmacy_dept')->where('phar_deptid',$phar_deptid)->delete();
        return redirect(route('add_phardept'));
    }
    //sarjana ended
    //sarjana added floor
    public function addfloor()
    {
        $usershospital=Auth::user()->Hospital;
        $floor=DB::table('floor')->get();
        return view('hospitals.floor',['floor'=>$floor,'usershospital'=>$usershospital]);
    }
    public function save_floor(Request $Request)
    {
        DB::table('floor')->insert(
            array(
                   'floor_name'     =>   $Request->floor_name,
                   'hospital'   =>   Auth::user()->Hospital,
            )
        );
        return back();
    }
    public function update_floor(Request $Request)
    {
        $data= array(
            'floor_name'=>$Request->floor_name
        );
        DB::table('floor')->where('floor_id', $Request->floor_id)->update($data);
        return back();
    }
    public function delete_floor($floor_id)
    {
        DB::table('floor')->where('floor_id',$floor_id)->delete();
        return redirect(route('addfloor'));
    }
    //sarjana ended
    public function adddepartmentadmin()
    {
        $usershospital=Auth::user()->Hospital;
        $departments=DB::table('departments')->where('hospital',$usershospital)->get();
        $roles=DB::table('userroles')->where('hospital',$usershospital)->get();
        return view('hospitals.adddepartmentadmin',['departments'=>$departments,'roles'=>$roles]);
    }
    public function view_dept_admin(Type $var = null)
    {
        $usershospital=Auth::user()->Hospital;
        $dept_admin=DB::table('users')->where('hospital',$usershospital)->get();
        $roles=DB::table('userroles')->where('hospital',$usershospital)->get();
        return view('hospitals.view_dept_admin',['dept_admin'=>$dept_admin,'roles'=>$roles]);
    }
    public function adddepadmins(Request $Request)
    {
        $usershospital=Auth::user()->Hospital;
        $r=$Request['depname'];
        $admins= new User();
        $generatdz=str_pad($generatd, 2, "0", STR_PAD_LEFT);
        $admins->name= $Request['name'];
        $admins->email= $Request['email'];
        $admins->role= 'Department Admin';
        $admins->departments= $Request['depname'];
        $admins->hospital= $usershospital;
        $admins->medicaldepartments= $Request['depname'];
        $password = $Request['password']; // password is form field
        $admins->password = Hash::make($password);
        $admins->save();
        $Request->session()->put('depadminregistered','Admin Registered');
        return redirect('/view_dept_admin');
    }
    public function saverole_details(Request $Request)
    {
        $usershospital=Auth::user()->Hospital;
        $saverole= new usermanagement();
        $saverole->name=$Request['name'];
        $saverole->hospital=$usershospital;
        $saverole->save();
        $check=$Request['prev'];
        $name=$Request['name'];
        foreach($check as $prev)
        {
          // if($prev == 'appointments')
          //  {
          //   $arrayhere=['','','']
          //  }
          //  elseif($prev == 'stock')
          //  {

          //  }
          //  else{
            list($value1,$value2) = explode('|',$prev);
            $previlages=new previlages();
            $previlages->name=$name;
            $previlages->text=$value1;
            $previlages->previlages=$value2;
            $previlages->hospital=$usershospital;
            $previlages->save();
        }
        return back();
    }
    public function delete_roles($id)
    {
        $usershospital=Auth::user()->Hospital;
        DB::table('userroles')->where('name',$id)->where('hospital',$usershospital)->delete();
        DB::table('usermanagements')->where('name',$id)->where('hospital',$usershospital)->delete();
        return back();
    }
    public function new_department(Request $Request)
    {
        $usershospital=Auth::user()->Hospital;
        $deps=DB::table('departments')->where('Hospital',$usershospital)->select('*')->orderby('created_at','DESC')->first();
    //   if($deps)
    //   {
    //     $depss=$deps->uniqueid;
    //     $generatd=$depss + 1;

    //     $generatdz=str_pad($generatd, 2, "0", STR_PAD_LEFT);

    //   }

    //    else{
    //     $generatdz='01';
    //    }
        $dep=new departments();
        $dep->depname=$Request['department_name'];
        $dep->hospital=$usershospital;
    //    $dep->uniqueid=$generatdz;
        $dep->save();
        $Request->session()->put('depadded','Department Added');
        return back();
    }
    public function update_department(Request $Request)
    {
        $department_name=$Request['department_name'];
        $depid=$Request['dep_id'];
        $data=array('depname'=>$department_name);
        DB::table('departments')->where('id',$depid)->update($data);
        $Request->session()->put('depupdated','Department Updated');
        return back();
    }
    public function delete_department(Request $Request,$id)
    {
        DB::table('departments')->where('id',$id)->delete();
        $Request->session()->put('depdeleted','Department Removed');
        return back();
    }
    public function addroomtypes()
    {
        $roomcats=DB::table('roomcategories')->get();
        $deps=DB::table('departments')->get();
        $roomtypes=DB::table('roomtypes')->orderBy('id','DESC')->get();
        return view('hospitals.roomtypes',['roomtypes'=>$roomtypes,'roomcats'=>$roomcats,'deps'=>$deps]);
    }
    public function saveroomtypes(Request $Request)
    {
        $hospital=Auth::user()->Hospital;
        $roomtypes=new roomtypes();
        $roomtypes->roomname=$Request['roomname'];
        $roomtypes->no_of_rooms=$Request['noofrooms'];
        $roomtypes->location=$Request['location'];
        $roomtypes->charge=$Request['charge'];
        $roomtypes->department=$Request['department'];
        $roomtypes->tax=$Request['tax'];
        $roomtypes->hospital=$hospital;
        $roomtypes->save();
        $loopstuf=$Request['noofrooms'];
        for($i=1;$i<=$loopstuf;$i++)
        {
            $room =new rooms();
            $room->category=$Request['roomname'];
            $room->Department=$Request['department'];
            $room->hospital=$hospital;
            $room->save();
        }
        $Request->session()->put('roomadded','Room Added');
        return back();
    }
    public function update_roomtypes(Request $Request)
    {
        $roomid=$Request['m_room_id'];
        $roomname=$Request['m_roomtype'];
        $noofrooms=$Request['m_noofrooms'];
        $location=$Request['m_location'];
        $charge=$Request['m_charge'];
        $department=$Request['department'];
        $tax=$Request['m_tax'];
        $data=array('roomname'=>$roomname,'location'=>$location,'charge'=>$charge,'department'=>$department,'tax'=>$tax,'no_of_rooms'=>$noofrooms);
        DB::table('roomtypes')->where('id',$roomid)->update($data);
        $Request->session()->put('roomupdated','Rooms Updated');
        return back();
    }
    public function delroomtypes(Request $Request,$id)
    {
        DB::table('roomcategories')->where('id',$id)->delete();
        $Request->session()->put('roomdeleted','Room Removed');
        return back();
    }
    public function delrooms(Request $Request,$id)
    {
        DB::table('roomtypes')
        ->where('id',$id)->delete();
        $Request->session()->put('roomdeleted','Room Removed');
        return back();
    }
    public function addroomstypes()
    {
        $roomcats=DB::table('roomcategories')->orderBy('id','DESC')->get();
        $deps=DB::table('departments')->get();
        return view('hospitals.addroomstypes',compact('roomcats','deps'));
    }
    public function saveroomstypes(Request $Request)
    {
        $hospital=Auth::user()->Hospital;
        $roomtypes=new roomcategories();
        $roomtypes->category=$Request['roomcat'];
        $roomtypes->hospital=$hospital;
        $roomtypes->save();
        $Request->session()->put('roomadded','Room Type Added');
        return back();
    }
    public function update_roomstype(Request $Request)
    {
        $roomid=$Request['m_room_id'];
        $roomname=$Request['m_roomtype'];
        $data=array('category'=>$roomname);
        DB::table('roomcategories')->where('id',$roomid)->update($data);
        $Request->session()->put('roomupdated','Rooms Updated');
        return back();
    }
    public function get_subdept_floor($id)
    {
        $empData['data'] = DB::table('pharmacy_dept')
        ->select('*','floor.floor_name as floor_name','floor.floor_id as floor_id','pharmacy_dept.floor')
        ->leftjoin('floor','floor.floor_id','=','pharmacy_dept.floor')
        ->where('pharmacy_dept.phar_deptid',$id)
        ->get();
        return response()->json($empData);
    }
}
