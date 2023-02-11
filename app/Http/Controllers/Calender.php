<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;


class Calender extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
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
        $start_t=date('Y-m-d H:i:s', strtotime($request->start_date_m));
        $end_t=date('Y-m-d H:i:s', strtotime($request->end_date_m));
        $request->validate([
            'title' => 'required|string',
            'end_date_m' => 'required|date|after:start_date_m',
        ]);
          
        $events = DB::table('event')->insertGetId([
            'uniqueid'=>Auth::user()->uniqueid,
            'company_id'=>Auth::user()->company_id,
            'branch_id'=>Auth::user()->branch_id??null,
            'title' => $request->title,
            'description' => $request->description,
            'start' => $start_t,
            'end' =>$end_t,
        ]);
        $color=null;
        $events_dets=DB::table('event')->where('id',$events)->first();
        return response()->json([
            'id' => $events_dets->id,
            'start' => $events_dets->start,
            'end' => $events_dets->end,
            'title' => $events_dets->title,
            'color' => $color ? $color: '',
        ]);
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
            if($request->ajax()){
            $data = DB::table('event')->whereDate('start', '>=', $request->start)
                    ->where('uniqueid',Auth::user()->uniqueid)
                    ->whereDate('end','<=', $request->end)->get();
            return response()->json($data);
        }
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
    public function updateall(Request $request, $id)
    {
        $e_start_t=date('Y-m-d H:i:s', strtotime($request->e_start));
        $e_end_t=date('Y-m-d H:i:s', strtotime($request->e_end));

         DB::table('event')->where('id',$id)->update([
            'title' => $request->e_title,
            'description' => $request->e_description,
            'start' => $e_start_t,
            'end' =>$e_end_t,
        ]);
        return redirect('/home');
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
        $event=DB::table('event')->where('id',$id)->first();
        if(empty($event)) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        DB::table('event')->where('id',$id)->update([
            'start' => $request->start_date,
            'end' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=DB::table('event')->where('id',$id)->first();
        if(empty($event)) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        DB::table('event')->where('id',$id)->delete();
        return $id;
    }
}
