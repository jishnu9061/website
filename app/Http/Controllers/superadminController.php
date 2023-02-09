<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Response; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;

class superadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $total = DB::table('company_details')->where('deleted_at',null)->count()??0;
        $active = DB::table('company_details')->where('deleted_at',null)->where('status',1)->count()??0;
        $inactive = DB::table('company_details')->where('deleted_at',null)->where('status',0)->count()??0;
        return view('superadmin.superadminhome',compact('total','active','inactive'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_company_list()
    {
        
        $user_list =DB::table('company_details')
        ->leftJoin('users','users.uniqueid','company_details.uniqueid')
        ->select('company_details.uniqueid as uniqueid',
        'company_details.company_name as company_name',
        'users.username as users_name',
        'company_details.CITY as city',
        'company_details.status as status',
        'company_details.id as company_id'
        )->orderBy('company_details.id', 'desc')->where('company_details.deleted_at',null)->get();
        return view('superadmin.company_list_admin',compact('user_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a company list in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @author udayan <arockiaudayan@gmail.com>
     */
    public function reg_company(Request $request)
    {
        $pass = Hash::make($request->password);
        if($request->hasfile('com_logo')){
            $com_logo = $request->com_logo;
            $com_logoname = time() . '.' . $com_logo->getClientOriginalExtension();
            $com_logo->move(public_path('\images\logo'),$com_logoname);
        }else{
            $com_logoname = '';
        };
        $company=DB::table('company_details')->insertGetId([
            'company_name' =>$request->company_name,
            'company_type' =>$request->company_type,
            'address' =>$request->address,
            'city' =>$request->city,
            'postal_code' =>$request->postal_code,
            'GSTin' =>$request->GSTin,
            'status' =>1,
            'company_logo'=>$com_logoname,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        $role=sprintf("%02d",2);
        $comp_id=sprintf("%04d", $company);
        $uniqueid = $role . $comp_id;
        if($request->hasfile('logo')){
            $logo = $request->logo;
            $logoname = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('\images\faces'),$logoname);
        }else{
            $logoname = '';
        };
        DB::table('users')->insert([
            'uniqueid'=>$uniqueid,
            'username'=>$request->username,
            'status'=>1,
            'role'=>2,
            'company_id'=>$company,
            'email' =>$request->email,
            'password'=>$pass,
            'photo_path'=>$logoname,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        $company=DB::table('company_details')->where('id',$company)
        ->update([
            'uniqueid'=>$uniqueid,
        ]);
        return redirect('/company_list');
    }

    /**
     * change status of company.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @author udayan <arockiaudayan@gmail.com>
     */
    public function changestatus_company(Request $request)
    {
        $uniqueid = $request->user_id;
        $status = DB::table('company_details')->where('uniqueid', $uniqueid)->select('status')->first();
        if($status->status == 1){
            DB::table('company_details')->where('uniqueid', $uniqueid)->update(['status'=>0]);
            DB::table('users')->where('uniqueid', $uniqueid)->update(['status'=>0]);
        }else{
            DB::table('company_details')->where('uniqueid', $uniqueid)->update(['status'=>1]);
            DB::table('users')->where('uniqueid', $uniqueid)->update(['status'=>1]);
        }
        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @author udayan <arockiaudayan@gmail.com>
     */
    public function edit_company($id)
    {
        $user_edit = DB::table('company_details')->where('company_details.uniqueid', $id)
            ->leftJoin('users', 'users.uniqueid', 'company_details.uniqueid')
        ->select('company_details.company_name as company_name',
        'company_details.address as address',
        'company_details.city as city',
        'company_details.company_website as company_website',
        'company_details.company_type as company_type',
        'company_details.postal_code as postal_code',
        'company_details.GSTin as GSTin',
        'company_details.company_logo as company_logo',
        'users.username as users_name',
        'users.email as email',
        'users.password as password',
        'users.photo_path as photo_path'
        )->where('company_details.deleted_at',null)->first();

        return response()->json([
            'status' => 200,
            'result' => $user_edit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_company(Request $request, $id)
    {
        $user_update = DB::table('company_details')->where('company_details.uniqueid', $id)
                ->leftJoin('users', 'users.uniqueid', 'company_details.uniqueid')
            ->select('company_details.company_name as company_name',
            'company_details.address as address',
            'company_details.city as city',
            'company_details.company_website as company_website',
            'company_details.company_type as company_type',
            'company_details.postal_code as postal_code',
            'company_details.GSTin as GSTin',
            'company_details.company_logo as company_logo',
            'users.username as users_name',
            'users.email as email',
            'users.password as password',
            'users.photo_path as photo_path'
            )->where('company_details.deleted_at',null)->first();

        if($request->hasfile('e_logo')){
            if (!empty($user_update->photo_path)) {
                unlink(public_path('\images\faces'). DIRECTORY_SEPARATOR .$user_update->photo_path);
            }
            $logo = $request->e_logo;
            $logoname = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('\images\faces'),$logoname);
            DB::table('users')->where('uniqueid', $id)->update(['photo_path' => $logoname]);
        }
        if($request->hasfile('e_com_logo')){
            if (!empty($user_update->company_logo)) {
                unlink(public_path('\images\logo'). DIRECTORY_SEPARATOR . $user_update->company_logo);
            }
            $com_logo = $request->e_com_logo;
            $com_logoname = time() . '.' . $com_logo->getClientOriginalExtension();
            $com_logo->move(public_path('\images\logo'),$com_logoname);
            DB::table('company_details')->where('uniqueid', $id)->update(['company_logo' =>$com_logoname]);
        }
        if(!empty($request->password)){
            $pass = Hash::make($request->password);
            DB::table('users')->where('uniqueid', $id)->update([
                'password'=>$pass,
            ]);
        }
        DB::table('company_details')->where('uniqueid', $id)->update([
            'company_name' =>$request->company_name,
            'company_type' =>$request->company_type,
            'address' =>$request->address,
            'city' =>$request->city,
            'postal_code' =>$request->postal_code,
            'GSTin' =>$request->GSTin,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->where('uniqueid', $id)->update([
            'username'=>$request->username,
            'email' =>$request->email,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        return redirect('/company_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_company($id)
    {
        DB::table('users')->where('uniqueid', $id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
            'status'=>0
        ]);
        DB::table('company_details')->where('uniqueid', $id)->update([
            'deleted_at'=>date('Y-m-d H:i:s'),
            'status'=>0
        ]);
        return redirect('/company_list');
    }
}
