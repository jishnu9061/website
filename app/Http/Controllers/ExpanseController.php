<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ExpanseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expanse_type=DB::table('expanse_type')->get();
        return view('expanse_type.index',compact('expanse_type'));
    }

    

    public function save_expanse_type(Request $request){

        DB::table('expanse_type')->insert(
            array(
                   'expanse_type_name'     =>   $request->expanse_type_name,
                   'expanse_type_status'   =>   $request->expanse_type_status
            )
       );

       return redirect(route('expanse_type'));

    }


    public function update_expanse_type( Request $request){

        $data= array('expanse_type_name'=>$request->expanse_type_name,'expanse_type_status'=>$request->expanse_type_status);
        DB::table('expanse_type')->where('id', $request->expanse_type_id)->update($data);

        return redirect(route('expanse_type'));

    }

    public function delete_ledger_accounts($id)
    {
     DB::table('expanse_type')->where('id',$id)->delete();
     return redirect(route('expanse_type'));
    }

   
}
