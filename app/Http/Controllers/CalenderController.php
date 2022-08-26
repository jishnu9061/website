<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\calender_model;

class CalenderController extends Controller
{
    public function index(Request $request)
    {
		// dd($request->route('id'));
		$patient_details=DB::table('patient')->get();
		$operation_t=DB::table('operation_theatre')->get();
		// $patient_id=DB::table('patient')->where('id',$id)->get();
        if($request->ajax())
    	{
			$surgery=DB::table('surgery')
			->leftjoin('users','users.id','=','surgery.doctor')
			->get();
			$pre=[];
			foreach($surgery as $sur)
			{
				$surgery_date =$sur->surgery_date;
				$start_time=$sur->start_time;
				$end_time=$sur->end_time;
				$title=$sur->title;
				$doctor=$sur->name;
				$event_color=$sur->event_color;
               $post=[
				"start"=>$surgery_date.' '.$start_time,
				"end"=>$surgery_date.' '.$end_time,
				"title"=>$title,
				"doctor"=>$doctor,
				"color"=>$event_color,
			];
			array_push($pre,$post);
			}
            // $data=DB::table('calender')->get();
            return response()->json($pre);
    		// $data = calender_model::whereDate('start', '>=', $request->start)
            //            ->whereDate('end',   '<=', $request->end)
            //            ->get(['id', 'title', 'start', 'end']);
            // return response()->json($data);
    	}
        return view('procedure.full-calender',compact('operation_t','patient_details'));
        
    }
    // public function action(Request $request)
    // {
    // 	if($request->ajax())
    // 	{
    // 		if($request->type == 'add')
    // 		{
    // 			$event = DB::table('calender')->insert([
    // 				'surgery_name'		=>	$request->title,
    // 				'start_date'		=>	$request->start,
    // 				'end_date'		=>	$request->end
    // 			]);

    // 			return response()->json($event);
    // 		}
    // 	}
    //     // if($request->type == 'update')
    // 	// 	{
    //     //         $event=DB::table('calender')->where('íd',$request->id)->update([
    // 	// 		// $event = Event::find($request->id)->update([
    // 	// 			'title'		=>	$request->title,
    // 	// 			'start'		=>	$request->start,
    // 	// 			'end'		=>	$request->end
    // 	// 		]);

    // 	// 		return response()->json($event);
    // 	// 	}
    // }
    // public function add_apitest($id)
    // {
    //     $surgery=DB::table('appointments')
    //     ->where('token',$id)
    //     ->select('Department','appointmentdate')
    //     // ->take(3)
    //     ->get();
    //     if(count( $surgery)==0)
    //     {
    //         $hello=['success'=>true,'result'=> $surgery,'message'=>'empty array fetched'];
    //         return response()->json($hello,200);
    //     }
    //     else{
    //         $hello=['success'=>true,'result'=> $surgery,'message'=>'successfully fetched'];
    //     return response()->json($hello,200);
    //     }
        
    // }
}
?>

