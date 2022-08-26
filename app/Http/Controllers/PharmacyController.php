<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\hospitals;
use App\User;
use App\beds;
use App\rooms;
use App\model\users;
use App\model\medicines;
use App\model\servedmedicines;
use App\appointment;
use Redirect;
use Storage;
use DB;
use App\adit;
use Hash;
use Auth;
use Response;
Use \Carbon\Carbon;
use Session;
use Illuminate\Http\UploadedFile;



class PharmacyController extends Controller
{
    public function pharmacy()
    {
    	$appz=DB::table('appointments')->whereDate('created_at', Carbon::today())->where('status','called')->count();
    	$appzz=DB::table('appointments')->whereDate('created_at', Carbon::today())->where('status','called')->orderby('created_at','DESC')->first();
    	$prescription=$appzz->prescription;
    	$medicine=$appzz->medicine;
    	$lab=$appzz->lab;
    	$id=$appzz->id;
    	$data=DB::table('appointments')->where('status','called')->get();
    	return view ('pharmacy.pharmacy',['data'=>$data,'lab'=>$lab,'medicine'=>$medicine,'prescription'=>$prescription,'appz'=>$appz,'id'=>$id]);

    }

    public function addmedicinez(Request $Request)
    {
      $medicine= new medicines();
      $medicine->medicinename= $Request['medicinename'];
      $medicine->quantity= $Request['quantity'];
      $medicine->price= $Request['price'];
      $medicine->expirydate= $Request['expirydate'];
      $medicine->save();
      $Request->session()->put('medicineadded','Medicine Added');
      return redirect('/addmedicines');
    }

    public function allmedicinez()
    {
    	$allmedicines=DB::table('medicines')->paginate(10);
        dd($allmedicines);
    	return view ('pharmacy.allmedicines',['allmedicines'=>$allmedicines]);
    }
    public function alldoctors()
     {
      $hospital=Auth::user()->Hospital;
      $alldoctors=DB::table('users')->where('role','doctor')->where('hospital',$hospital)->get();
      return view ('Pharmacy.alldoctors',['alldoctors'=>$alldoctors]);
     }

    public function serving(Request $Request)
    {
     $date = Carbon::now();
     $hospital=Auth::user()->Hospital;
     $appointments=DB::table('appointments')->where('status','appointed')->where('hospital',$hospital)->whereDate('created_at',$date)->
      orderBy('updated_at')->select('token','id','files','prescription')->first();
        if(isset($appointments))
        {
     $token=$appointments->token;
     $appz=$appointments->id;
     $filesfetch=$appointments->files;
     $prescription=$appointments->prescription;
        }
        else
        {
     $token='--';
     $appz='--';
     $filesfetch='--';
     $prescription='--';
     $Request->session()->put('nopharmques','No More Patients in the Queue');
        }
          if($Request['searchmed'])
    {

     $quantity=$Request['quantity'];
     $medz=$Request['searchmed'];
     $medprice=DB::table('medicines')->where('medicinename',$medz)->select('selling_price')->first();
     $medpricing=$medprice->selling_price;
     $total=$medpricing * $quantity;
     $serv=new servedmedicines();
     $serv->medicinename=$Request['searchmed'];
     $serv->quantity=$Request['quantity'];
     $serv->priceperitem=$medpricing;
     $serv->totalprice=$total;
     $serv->appz=$appz;
     $serv->save();
     $medquantity=DB::table('medicines')->where('medicinename',$medz)->select('quantity')->first();
     $realquantity=$medquantity->quantity;
     $updatedquantity=$realquantity-$quantity;
     $data=array('quantity'=>$updatedquantity);
     DB::table('medicines')->where('medicinename',$medz)->update($data);
    }
     $servedmedz=DB::table('servedmedicines')->where('appz',$appz)->get();
     $counts=DB::table('servedmedicines')->where('appz',$appz)->sum('totalprice');
     $appzfiles=DB::table('files')->where('appointmentid',$appz)->get();
    return view('pharmacy.serving',['filesfetch'=>$filesfetch,'token'=>$token,'appz'=>$appz,'prescription'=>$prescription,'appzfiles'=>$appzfiles,'servedmedz'=>$servedmedz,'counts'=>$counts]);
    }
    public function pharmacyserved($Request)
    {
     $quantity=$Request['quantity'];
     $medz=$Request['searchmed'];
     $medprice=DB::table('medicines')->where('medicinename',$medz)->select('price')->first();
     $medpricing=$medprice->price;
     $total=$medpricing * $quantity;
     $serv=new servedmedicines();
     $serv->medicinename=$Request['searchmed'];
     $serv->quantity=$Request['quantity'];
     $serv->priceperitem=$medpricing;
     $serv->totalprice=$total;
     $serv->appz=$appz;
     $serv->save();

     return redirect('/serving#Paris');
    }

    public function pharmacyserve(Request $Request,$id)
    {

      $data=array('status'=>'medicinated');
      DB::table('appointments')->where('id',$id)->update($data);
      return redirect('serving');
    }
    public function filedownload(Request $Request,$id)
    {
      $file=DB::table('files')->where('id',$id)->select('filename')->first();
      if($file->filename == "")
      {
      return Redirect::back();
      }
      elseif($file->filename =="NULL")
      {
     return Redirect::back();
      }
      else
      {
         $filedata='app/'.$file->filename;
    return Response::download(storage_path($filedata));
      }
    }

    public function searchmeds(Request $request)
    {

       $data = DB::table('medicines')
                ->where('medicinename','like', '%' . $request->term . '%')
                ->get();
       $dataModified = array();
     foreach ($data as $dat)
     {
       $dataModified[] = $dat->medicinename;
     }

    return response()->json($dataModified);

    }
    public function reorder()
    {
      $reorder=DB::table('medicines_details')->whereRaw('quantity < 20')->get();
      return view('Pharmacy.reorder',['reorder'=>$reorder]);
    }
    public function expired()
    {
      $date=Carbon::now()->addDays(30);
      $currentDate = date('Y-m-d');
      $expired=DB::table('medicines')->where('expirydate','<=',$date)->get();
      return view('pharmacy.expired',['expired'=>$expired]);
    }

    public function view_bill()
    {
        $med_cat=DB::table('medicines')->whereNotNull('medicine_category')->get();
        return view ('pharmacy.manage_bill',['med_cat'=>$med_cat]);
    }
    //sarjna aadded as pharmacy request
    public function request_items(Request $Request)
    {
        $id=$Request['id'];
        $request_intendid=$Request['request_intendid'];
        $users=DB::table('users')->get();
        $department=DB::table('users')
        ->select('*')
        ->leftjoin('departments','departments.id','=','users.departments')
        ->where('users.id',Auth::user()->id)
        ->get();
        $medicines=DB::table('medicines')->get();
        $requested_items=DB::table('request_intend')
        ->select('*','request_intend.request_intendid as request_intendid','users.name as name','departments.depname as depname')
        ->leftjoin('users','users.id','=','request_intend.request_intendadded_by')
        ->leftjoin('departments','departments.id','=','users.departments')
        ->leftjoin('request_status','request_status.request_statusid','=','request_intend.request_intendstatus')
        ->get();
        $substore_details =DB::table('sub_store')
        ->where('sub_store.department_id', '=', 51)
        ->get();
        return view('pharma_request.request_item',compact('medicines','users','department','requested_items','substore_details'));
    }
    public function add_request_items(Request $Request)
	{
		$request_date  = $Request['request_date'];
		$added_by  = $Request['added_by'];
        $request_intendstatus=1;
        $substore= $Request['substore'];
        $values=DB::table('request_intend')->insertGetId([
            'request_intenddate'=>$request_date,
            'request_intendadded_by'=>$added_by,
            'request_intendstatus'=>$request_intendstatus,
            'substore_id'=>$substore
        ]);
        $item_name=$Request['item_name'];
        $quantity=$Request['quantity'];
        // dd($Request->request);
        if(is_array($item_name))
        {
            foreach ($item_name as $idx=>$val)
		    {
                $final_array[] = [ $val,$quantity[$idx]];
            }
            foreach($final_array as $f_array)
            {
                 DB::table('pharma_requests')->insert(
                    array(
                        'request_intend'  => $values,
                        'medicine'   =>   $f_array[0],
                        'requested_quantity'  =>   $f_array[1],
                        'pharma_substore_id	'  =>  $substore
                    )
                );
            }
        }
        return back()->withInput();
    }
    public function view_request_items($request_intendid)
    {
        $requested_items=DB::table('request_intend')
        ->select('*','request_intend.request_intendid as request_intendid','users.name as name','departments.depname as depname')
        ->leftjoin('pharma_requests','pharma_requests.request_intend','=','request_intend.request_intendid')
        ->leftjoin('medicines','medicines.id','=','pharma_requests.medicine')
        ->leftjoin('users','users.id','=','request_intend.request_intendadded_by')
        ->leftjoin('departments','departments.id','=','users.departments')
        ->leftjoin('request_status','request_status.request_statusid','=','request_intend.request_intendstatus')
        ->where('request_intend.request_intendid',$request_intendid)
        ->get();
        return view('pharma_request.view_request_items',compact('requested_items'));
    }
    public function edit_request_items($request_intendid)
    {
        $request_detailes=DB::table('request_intend')
        ->select('*','users.name as name','departments.depname as depname')
        ->leftjoin('users','users.id','=','request_intend.request_intendadded_by')

        ->leftjoin('departments','departments.id','=','users.departments')
        ->where('request_intendid',$request_intendid)
        ->get();
        $department=DB::table('departments')
        ->get();
        $users=DB::table('users')
        ->get();
        $medicine_detailes=DB::table('medicines')
        ->get();
        $requested_items=DB::table('request_intend')
        ->select('*','request_intend.request_intendid as request_intendid','users.name as name','departments.depname as depname')
        ->leftjoin('pharma_requests','pharma_requests.request_intend','=','request_intend.request_intendid')
        ->leftjoin('medicines','medicines.id','=','pharma_requests.medicine')
        ->leftjoin('users','users.id','=','request_intend.request_intendadded_by')
        ->leftjoin('departments','departments.id','=','users.departments')
        ->leftjoin('request_status','request_status.request_statusid','=','request_intend.request_intendstatus')
        ->where('request_intend.request_intendid',$request_intendid)
        ->get();
        return view('pharma_request.edit_request_items',compact('request_detailes','requested_items','department','medicine_detailes','users'));
    }
    public function update_request_items(Request $Request)
    {
            $request_intendid=$Request['request_intendid'];
            $request_date=$Request['request_date'];
            $request_department=$Request['request_department'];
            $request_added_by=$Request['request_added_by'];
            $id=DB::table('request_intend')->where('request_intendid',$request_intendid)->update([
                'request_intenddate'=>$request_date,
                'department'=>$request_department,
                'request_intendadded_by'=>$request_added_by,

            ]);
            $id=$Request['item_id'];
            $item_name=$Request['item_name'];
            $quantity=$Request['quantity'];
            if(is_array($item_name)){
            foreach ($item_name as $idx=>$val)
            {
                $final_array[] = [$val,$id[$idx],$quantity[$idx]];
            }

            // dd($final_array);

            foreach($final_array as $f_array){

                DB::table('pharma_requests')->where('id',$f_array[1])->update(
                array(
                       'medicine'   =>   $f_array[0],
                       'requested_quantity'  => $f_array[2],
                    )
                );
            }
        }
        //  return back()->withInput();
        return redirect('request_items');

    }










    // public function delete_request_items(Request $request)
    // {
    //     $check_datas_exist = DB::table('pharma_requests')
    //     ->where('request_intend', $check_datas_exist);


    // }
}
