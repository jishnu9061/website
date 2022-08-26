<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class operation_theatre_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_theatre()
    {
        $theatre=DB::table('operation_theatre')
        ->select('*','departments.id as id','operation_theatre.id as id')
        ->leftjoin('departments','departments.id','=','operation_theatre.department')->get();
        $dprmt=DB::table('departments')->get();
        return view('theatre.theatre_view',compact('dprmt','theatre'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $ot_name=$request->input('theatre_name');
       $department=$request->input('dept_name');
       $ot_status=$request->input('ot_status');
       DB::insert('insert into operation_theatre(theatre_name,department,status)values(?,?,?)',[$ot_name,$department,$ot_status]);
       return back()->withInput();
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
    public function update(Request $request)
    {
        $theatreid=$request->input('theatre_id');
        $theatre_name=$request->input('theatre_n');
        $department=$request->input('depmt_name');
        $theatre_status=$request->input('theatre_status');
        $editdata=array('theatre_name'=>$theatre_name,'department'=>$department,'status'=>$theatre_status);
        DB::table('operation_theatre')->where('id',$theatreid)->update($editdata);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('operation_theatre')->where('id',$id)->delete();
       return back();
    }
}
