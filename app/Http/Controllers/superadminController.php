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
    public function index()
    {
        $total = DB::table('company_details')->count()??0;
        $active = DB::table('company_details')->where('status',1)->count()??0;
        $inactive = DB::table('company_details')->where('status',0)->count()??0;
        return view('superadmin.superadminhome',compact('total','active','inactive'));
    }
    public function show_company_list()
    {
        
        $user_list =DB::table('company_details')
        ->leftJoin('users','users.company_id','company_details.id')
        ->select('company_details.uniqueid as uniqueid',
        'company_details.company_name as company_name',
        'users.username as users_name',
        'company_details.CITY as city',
        'company_details.status as status',
        'company_details.id as company_id'
        )->orderBy('company_details.id', 'desc')->get();
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
        $company=DB::table('company_details')->insertGetId([
            'company_name' =>$request->company_name,
            'company_type' =>$request->company_type,
            'address' =>$request->address,
            'city' =>$request->city,
            'postal_code' =>$request->postal_code,
            'GSTin' =>$request->GSTin,
            'status' =>1,
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
}
