<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class surgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_surgery_types()
    {
        $sur_types=DB::table('surgery_types')
        ->leftjoin('departments','departments.id','=','surgery_types.surgery_dept')
        ->select('*','departments.id as id','surgery_types.id as id')
        ->get();
        $dept=DB::table('departments')->get();
        return view('surgery.view_surgerytypes',compact('dept','sur_types'));
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
        $s_name=$request->input('surgery_name');
        $s_dept=$request->input('surgery_dept');
        DB::insert('insert into surgery_types(surgery_name,surgery_dept)values(?,?)',[$s_name,$s_dept]);
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
        $sur_id=$request->input('sur_id');
        $sur_name=$request->input('sur_name');
        $sur_dept=$request->input('sur_dept');
        $editdata=array('surgery_name'=>$sur_name,'surgery_dept'=>$sur_dept);
        DB::table('surgery_types')->where('id',$sur_id)->update($editdata);
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('surgery_types')->where('id',$id)->delete();
        return back();
    }
}
