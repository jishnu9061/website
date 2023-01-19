<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
//
class filemanagement extends Controller
{
    public function index()
    {
        return view('file_management.file_managementindex');
    }


    public function views()
    {
        $client_list = DB::table('cra_mixed_table')->get();
        $file_list = DB::table('cra_open_new_file_details')->get();
        
        // ->select('*')  
        // ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_open_new_file_details.id')
        // ->get();    
        return view ('file_management.file-list',compact('file_list','client_list'));
        // return view('file_management.file-list',compact('file_list'));
    }

    public function viewlist($id)
    {
        $view_list = DB::table('cra_open_new_file_details')->where('id',$id)->first();
        return view('file_management.view-list',compact('view_list','id'));
                                                                  
    }


    public function edit($id)
    {
    
        $edit =DB::table('cra_open_new_file_details')->where('id',$id)->first();
        return view('file_management.edit-file',compact('edit','id'));
    }

    public function file_destroy($id)
    {
        $edit =DB::table('cra_open_new_file_details')->where('id',$id)->delete();
        
        return redirect ('/file-list');
    }

    public function addtask()
{
    return view('file_management.add-task');                                                             
}

    public function addnew(Request $request)
    {

        $client=$request['client'];
        $email=$request['email'];
        $phone=$request['phone'];
        $address=$request['address'];
        $file_name=$request['file_name'];
        $open_date=$request['open_date'];
        $close_date=$request['close_date'];
        $comments=$request['comments'];
        $notifi_email=$request['email'];
        $con_phone=$request['phone'];
        $amount=$request['amount'];
        $task=$request['task'];
        $status=$request['status'];

        DB::table('cra_open_new_file_details')->insert([
            
            'client' => $client,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'file_name' => $file_name,
            'open_date' => $open_date,
            'close_date' => $close_date,
            'comments' => $comments,
            'notifi_email' => $notifi_email,
            'con_phone' => $con_phone,
            'amount' => $amount,
            'task' => $task,
            'status' => $status,

        ]);
        return redirect('/file-list');
    }
    public function update(Request $request)
    {
        $id =$request['id'];
        $client=$request['client'];
        $email=$request['email'];
        $phone=$request['phone'];
        $address=$request['address'];
       
        $open_date=$request['open_date'];
        $close_date=$request['close_date'];
        $comments=$request['comments'];
        $notifi_email=$request['notifi_email'];
        $con_phone=$request['con_phone'];
        $con_email=$request['con_email'];
        $amount=$request['amount'];
        $task=$request['task'];

        DB::table('cra_open_new_file_details')->where('id',$id)->update([

           
            'client' => $client,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
           
            'open_date' => $open_date,
            'close_date' => $close_date,
            'comments' => $comments,
            'notifi_email' => $notifi_email,
            'con_phone' => $con_phone,
            'con_email' => $con_email,
            'amount' => $amount,
            'task' => $task,
        ]);
      

        return redirect('/file-list');

        // return view('file_management.template-category');
    }



    //document temblates
    public function template()
    {
        $template_list=DB::table('cra_open_new_file_details')->get();
        return view('file_management.template-category',compact('template_list'));

        return view('file_management.template-category');
    }

    public function addtemplate(Request $request)
    {
        $doc_type=$request['doc_type'];
        $title=$request['title'];
        $to_upload=$request['to_upload'];

        DB::table('cra_add_template')->insert([
            'doc_type' =>  $doc_type,
            'title' =>  $title,
            'to_upload' =>  $to_upload,

        ]);
        
        return redirect('/template-category');
        // return view('file_management.add-template');
    }


    //document temblates

    //manage files
    public function filearchive()
    {

        $file_progress_list = DB::table('cra_add_box')
      ->select('*')  
      ->leftjoin('cra_open_new_file_details','cra_add_box.id','=','cra_open_new_file_details.id')
       ->get();    
        return view('file_management.file-archive',compact('file_progress_list'));

        // return view('file_management.file-archive');

    }

    public function addboxno(Request $request)
    {
        $Box_type=$request['box_type'];
        $Box_number=$request['box_no'];

        DB::table('cra_add_box')->insert([
            'type' =>  $Box_type,
            'number' =>  $Box_number,

        ]);
        
        return redirect('/file-archive');
    }

    public function editboxno($id)
    {
        $edit =DB::table('cra_add_box')->where('id',$id)->first();
        return view('file_management.edit-box-no',compact('edit','id'));
        
        // return view('file_management.edit-box-no');
    }

    public function deleteboxno($id)
    {
        DB::table('cra_add_box')->where('id',$id)->delete();
        return redirect('/file-archive');
        
        // return view('file_management.edit-box-no');
    }


    public function updatebox(Request $request)
    {
        $id=$request['id'];
        $Box_type=$request['box_type'];
        $Box_number=$request['box_no'];

        DB::table('cra_add_box')->where('id',$id)->update([
            'type' =>  $Box_type,
            'number' =>  $Box_number,

        ]);
        
        return redirect('/file-archive');
    }


    
    //manage files

    //file progress

    public function progressbringup()
    {
        return view('file_management.progress-bringup');
    }

    public function addbringup()
    {
        return view('file_management.add-new-bringup');
    }





    public function addprogress(Request $request )

    { 
        $id = $request['id'];
        $progress_date=$request['date_progress'];
        $next_action=$request['next_action'];      
        $bringup_date=$request['bringup_date'];
        $file_name=$request['file_name'];
        $client_name=$request['client_name'];
        $reminder_period=$request['reminder_period'];
        $action_type=$request['action_type'];
        $action_description=$request['action_description'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $item_type=$request['item_type'];
        $currency=$request['currency'];
        $amount=$request['amount'];
        $start_time=$request['start_time'];
        $activity_type=$request['activity_type'];
        $activity=$request['activity'];



        DB::table('cra_add_file_progress')->insert([

            'id' => $id,
            'progress_date' => $progress_date,
            'next_action' => $next_action,
            'client_name' => $client_name,
            'bringup_date' => $bringup_date,
            'file_name' => $file_name,
            'reminder_period' => $reminder_period,
            'action_type' => $action_type,
            'action_description' => $action_description,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'item_type' => $item_type,
            'currency' => $currency,
            'amount' => $amount,
            'start_time' => $start_time,
            'activity_type' => $activity_type,
            'activity' => $activity,
        ]);
       return redirect('/file-progress-list');
    }






    // public function editprogress($id)
    
    // {
    //     return view('file_management.add-file-progress');
    // }

    public function editprogress($id)

    {
        $edit_progress =DB::table('cra_add_file_progress')->where('id',$id)->first();
        return view('file_management.edit-file-progress',compact('edit_progress','id'));
       
    }

    public function update_progress(Request $request){

        $id =$request['id'];
        $client_name=$request['client_name'];
        $progress_date=$request['date_progress'];
        $next_action=$request['next_action'];      
        $bringup_date=$request['bringup_date'];
        $file_name=$request['file_name'];
        $reminder_period=$request['reminder_period'];
        $action_type=$request['action_type'];
        $action_description=$request['action_description'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $item_type=$request['item_type'];
        $currency=$request['currency'];
        $amount=$request['amount'];
        $start_time=$request['start_time'];
        $activity_type=$request['activity_type'];
        $activity=$request['activity'];



        DB::table('cra_add_file_progress')->where('id',$id)->update([
            
            'progress_date' => $progress_date,
            'next_action' => $next_action,
            'client_name' => $client_name,
            'bringup_date' => $bringup_date,
            'file_name' => $file_name,
            'reminder_period' => $reminder_period,
            'action_type' => $action_type,
            'action_description' => $action_description,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'item_type' => $item_type,
            'currency' => $currency,
            'amount' => $amount,
            'start_time' => $start_time,
            'activity_type' => $activity_type,
            'activity' => $activity,
        ]);

        return redirect('/file-progress-list');

    }

    public function delete_progress($id)
    {
        DB::table('cra_add_file_progress')->where('id',$id)->delete();
        return redirect('/file-progress-list');
    }
    
    public function fileactionhours()
    {
        return view('file_management.file-action-hours');

    }

    public function fileprogresslist()
    {
        $client_list = DB::table('cra_mixed_table')->get();
         $file_progress_list = DB::table('cra_add_file_progress')
        // ->select('*')  
        // ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_add_file_progress.id')
        // ->leftjoin('cra_open_new_file_details','cra_open_new_file_details.id','=','cra_add_file_progress.id')
        ->get();    
        return view ('file_management.file-progress-list',compact('file_progress_list','client_list'));
    }


    public function addfileprogressaction(Request $request)
    {

        $id =$request['id'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];
        $progress_date=$request['progress_date'];      
        $time_taken_hours=$request['time_taken_hours'];
        $action_type=$request['action_type'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $sent_notification=$request['sent_notification'];

        DB::table('cra_add_file_progress_action')->insert([
            
            'client_name' => $client_name,
            'file_name' => $file_name,
            'progress_date' => $progress_date,
            'time_taken_hours' => $time_taken_hours,
            'action_type' => $action_type,
            'time_taken_minutes' => $time_taken_minutes,
            'sent_notification' => $sent_notification,
            
        ]);
        
        return redirect('/file-progress-list');
        
    }


    public function addfilebringupreminder(Request $request)
    {

        $id =$request['id'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];
        $progress_date=$request['progress_date'];      
        $next_bringup_days=$request['next_bringup_days'];
        $remind_period_days=$request['remind_period_days'];
        $send_notification=$request['send_notification'];
        $reason=$request['reason'];

        DB::table('cra_add_file_bringup_reminder')->insert([
            
            'client_name' => $client_name,
            'file_name' => $file_name,
            'progress_date' => $progress_date,
            'next_bringup_days' => $next_bringup_days,
            'remind_period_days' => $remind_period_days,
            'send_notification' => $send_notification,
            'reason' => $reason,
            
        ]);
        return redirect('/file-progress-list');
        
    }

    public function bookcourt (Request $request)
    {


        $id =$request['id'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];
        $court_name=$request['court_name'];      
        $court_event_type=$request['court_event_type'];
        $start_date=$request['start_date'];
        $start_time=$request['start_time'];
        $end_date=$request['end_date'];
        $end_time=$request['end_time'];
        $user_assigned=$request['user_assigned'];
        $send_notification=$request['send_notification'];
        $set_reminder=$request['set_reminder'];
        $notes=$request['notes'];

        DB::table('cra_book_a_court')->insert([
            
            'client_name' => $client_name,
            'file_name' => $file_name,
            'court_name' => $court_name,
            'court_event_type' => $court_event_type,
            'start_date' => $start_date,
            'start_time' => $start_time,
            'end_date' => $end_date,
            'end_time' => $end_time,
            'user_assigned' => $user_assigned,
            'send_notification' => $send_notification,
            'set_reminder' => $set_reminder,
            'notes' => $notes,
          
            
        ]);
        return redirect('/file-progress-list');
        // return view('file_management.book-court');
        
    }

    public function courtattendance(Request $request)
    {
        $id =$request['id'];
        $attendance_date=$request['attendance_date'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];      
        $other_file=$request['other_file'];
        $court_name=$request['court_name'];
        $judicial_officer=$request['judicial_officer'];
        $case_no=$request['case_no'];
        $parties=$request['parties'];
        $acting_for=$request['acting_for'];
        $instructions=$request['instructions'];
        $transpired_in_court=$request['transpired_in_court'];
        $remarks=$request['remarks'];        
        $notes=$request['notes'];
        $person_dealing=$request['person_dealing'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $bring_up_date=$request['bring_up_date'];
        $remind_period_days=$request['remind_period_days'];
        $send_remind_to=$request['send_remind_to'];

        DB::table('cra_court_attendance_sheet')->insert([
            
            'attendance_date' => $attendance_date,
            'client_name' => $client_name,
            'file_name' => $file_name,
            'other_file' => $other_file,
            'court_name' => $court_name,
            'judicial_officer' => $judicial_officer,
            'case_no' => $case_no,
            'parties' => $parties,
            'acting_for' => $acting_for,
            'instructions' => $instructions,
            'transpired_in_court' => $transpired_in_court,
            'remarks' => $remarks,
            'notes' => $notes,
            'person_dealing' => $person_dealing,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'bring_up_date' => $bring_up_date,
            'remind_period_days' => $remind_period_days,
            'send_remind_to' => $send_remind_to,
          
            
        ]);
        return redirect('/file-progress-list');
        // return view('file_management.court-attendance-sheet'); 
    }


    public function arbirationsheet(Request $request)
    {
        $id =$request['id'];
        $court_type=$request['court_type'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];      
        $court_name=$request['court_name'];
        $start_date=$request['start_date'];
        $start_time=$request['start_time'];
        $end_date=$request['end_date'];
        $end_time=$request['end_time'];
        $user_assigned=$request['user_assigned'];
        $sent_notification=$request['sent_notification'];
        $set_reminder=$request['set_reminder'];
        $notes=$request['notes']; 

        DB::table('cra_arbiration_sheet')->insert([
            
            'court_type' => $court_type,
            'client_name' => $client_name,
            'file_name' => $file_name,
            'court_name' => $court_name,
            'start_date' => $start_date,
            'start_time' => $start_time,
            'end_date' => $end_date,
            'end_time' => $end_time,
            'user_assigned' => $user_assigned,
            'sent_notification' => $sent_notification,
            'set_reminder' => $set_reminder,
            'notes' => $notes,
           
            
        ]);
        return redirect('/file-progress-list');
        // return view('file_management.arbiration-sheet');
        
    }

    public function conveyance(Request $request)
    {

        $id =$request['id'];
        $arbiration_date=$request['arbiration_date'];
        $client_name=$request['client_name'];
        $file_name=$request['file_name'];      
        $seller_name=$request['seller_name'];
        $seller_id_no=$request['seller_id_no'];
        $seller_address=$request['seller_address'];
        $seller_contact=$request['seller_contact'];
        $seller_email=$request['seller_email'];
        $land_ref_no=$request['land_ref_no'];
        $title_deed_no=$request['title_deed_no'];
        $location=$request['location'];
        $property_size=$request['property_size']; 
        $buyer_name=$request['buyer_name'];
        $buyer_id_no=$request['buyer_id_no'];
        $buyer_address=$request['buyer_address'];
        $buyer_contact=$request['buyer_contact'];
        $buyer_email=$request['buyer_email'];
        $solving_process=$request['solving_process']; 
        $final_aggremnt=$request['final_aggremnt'];
        $person_dealing=$request['person_dealing'];
        $time_taken_hours=$request['time_taken_hours'];
        $time_taken_minutes=$request['time_taken_minutes'];
        $bringup_date=$request['bringup_date'];
        $remind_period_days=$request['remind_period_days'];
        $send_reminder_to=$request['send_reminder_to']; 
        $next_action=$request['next_action']; 

        DB::table('cra_conveyence_sheet')->insert([
            
            'arbiration_date' => $arbiration_date,
            'client_name' => $client_name,
            'file_name' => $file_name,
            'seller_name' => $seller_name,
            'seller_id_no' => $seller_id_no,
            'seller_address' => $seller_address,
            'seller_contact' => $seller_contact,
            'seller_email' => $seller_email,
            'land_ref_no' => $land_ref_no,
            'title_deed_no' => $title_deed_no,
            'location' => $location,
            'property_size' => $property_size,
            'buyer_name' => $buyer_name,
            'buyer_id_no' => $buyer_id_no,
            'buyer_address' => $buyer_address,
            'buyer_contact' => $buyer_contact,
            'buyer_email' => $buyer_email,
            'solving_process' => $solving_process,
            'final_aggremnt' => $final_aggremnt,
            'person_dealing' => $person_dealing,
            'time_taken_hours' => $time_taken_hours,
            'time_taken_minutes' => $time_taken_minutes,
            'bringup_date' => $bringup_date,
            'remind_period_days' => $remind_period_days,
            'send_reminder_to' => $send_reminder_to,
            'next_action' => $next_action,
              
        ]);
        return redirect('/file-progress-list');
 
        // return view('file_management.conveyance-sheet');
        
    }
    public function filelistprogressreport()
    {

        $file_progress_list = DB::table('cra_add_file_progress')
        ->select('*')  
        ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_add_file_progress.id')
        ->leftjoin('cra_open_new_file_details','cra_open_new_file_details.id','=','cra_add_file_progress.id')
        ->get();    
        return view ('file_management.file-list-progress-report',compact('file_progress_list'));

        // return view('file_management.file-list-progress-report');
        
    }


    public function viewfilelistreport($id)
    {
        $view_list = DB::table('cra_add_file_progress')
        ->select('*')  
        ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_add_file_progress.id')
        ->get(); 
        

        return view('file_management.view-file-list-progress',compact('view_list','id'));
                                                                  
    }

    public function staffmonthlystatusreport(Request $request)
    {
        $id =$request['id'];
        $Department =$request['department'];
        $Month =$request['month'];
        $Year =$request['year'];

        DB::table('cra_staff_monthly_status_report')->insert([

            'id' =>  $id,
            'Department' =>  $Department,
            'Month' =>  $Month,
            'Year' =>  $Year,

        ]);
        return view('file_management.staff-monthly-status-report');
        
    }

    //file progress


    //monthly file status report



    //monthly file status report
    public function clientmonthlystatus(Request $request)
    {
        $client_list = DB::table('cra_mixed_table')->get();

       $id =$request['id'];
       $Report_type =$request['report_type'];
       $Client =$request['client'];
       $Month =$request['month'];
       $Year =$request['year'];
       DB::table('cra_client_monthly_file_status_report')->insert([

           'id' =>  $id,
           'Report_Type' => $Report_type,
           'Client' =>   $Client,
           'Month' =>  $Month,
           'year' =>  $Year,

       ]);
        return view('file_management.client-monthly-file-status',compact('client_list'));
    }

    public function fileprogressreport(Request $request)
    {

        $client_list = DB::table('cra_mixed_table')->get();

       $id =$request['id'];
       $Client =$request['client'];
       $File =$request['file'];
       $Date_from =$request['date_from'];
       $Date_to =$request['date_to'];
       
       DB::table('cra_file_progress_report')->insert([

           'id' =>  $id,
           'Client' =>  $Client,
           'File' =>   $File,
           'Progress_Date_From' =>   $Date_from,
           'Progress_Date_To' =>   $Date_to,

       ]);
        return view('file_management.file-progress-report',compact('client_list'));
    }

    public function filestatussummary(Request $request)
    { 
       $Date_To =$request['date_to'];
       $File =$request['file'];
       $Instruction_Category =$request['category'];
       $Receiver =$request['receiver'];
       $Currency =$request['currency'];
       $Exchange_Rate =$request['exchange_rate'];
       $Turn_Around_Time =$request['turn_around_time'];
       $Priority =$request['priority'];
       $Details =$request['details'];

       DB::table('cra_file_status_summary')->insert([
           'Date_to' =>  $Date_To,
           'File' =>   $File,
           'Instruction_Category' =>   $Instruction_Category,
           'Receiver' =>  $Receiver,
           'Currency' =>  $Currency,
           'Exchange_Rate' =>  $Exchange_Rate,
           'Turn_Around_Time' =>  $Turn_Around_Time,
           'Priority' =>  $Priority,
           'Details' =>  $Details 

       ]);
        return view('file_management.file-status-summary');
    }


     public function workflow()
     {
        $flow=DB::table('cra_work_flow')->get();
         return view('file_management.work-flow',compact('flow'));
     }

     public function newworkflow(Request $request)
     {
        $id =$request['id']; 
        $Date =$request['date']; 
        $Flow_name =$request['flow_name']; 
        $start_date =$request['start_date'];
        $Duration =$request['duration']; 
        $Flow_comments =$request['flow_comments']; 

        DB::table('cra_work_flow')->insert([
            'id' =>  $id,
            'Date_Created' =>  $Date,
            'Workflow_Name' =>  $Flow_name,
            'Start_Date' =>  $start_date,
            'Duration' =>   $Duration,
            'Workflow_Comments' =>   $Flow_comments,
        ]);

     
     return redirect('/work-flow');
     }

     public function updatworkflow(Request $request)
     {
        $id =$request['id']; 
        $Date =$request['date']; 
        $Flow_name =$request['flow_name']; 
        $start_date =$request['start_date'];
        $Duration =$request['duration']; 
        $Flow_comments =$request['flow_comments']; 

        DB::table('cra_work_flow')->where('id',$id)->update([
            'id' =>  $id,
            'Date_Created' =>  $Date,
            'Workflow_Name' =>  $Flow_name,
            'Start_Date' =>  $start_date,
            'Duration' =>   $Duration,
            'Workflow_Comments' =>   $Flow_comments,
        ]);

     
     return redirect('/work-flow');
     }


     public function deleteworkflow($id)
     {
        $delete_flow=DB::table('cra_work_flow')->where('id',$id)->delete();
       return redirect('/work-flow');
      
     }

     public function editworkflow($id)

     {
         $edit_flow =DB::table('cra_work_flow')->where('id',$id)->first();
         return view('file_management.edit-workflow',compact('edit_flow','id'));
        
     }


     //document manager

     public function diarymanagement()
     {

        $client_list = DB::table('cra_mixed_table')->get();

        // $event=DB::table('cra_add_event')->get();
        $event = DB::table('cra_add_event')
    //     ->select('*')  
    //     ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_add_event.id')
    //    ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_add_event.id')
       
    //    ->where('cra_add_event.id',$id)
         ->get();    

         return view('file_management.diary-management',compact('event','client_list'));
     }

     public function eventdelete($id)
     {
        $event_delete=DB::table('cra_add_event')->where('id',$id)->delete();
        return redirect('/diary-management');
        //  return redirect('file_management.diary-management');
     }


     public function editevent($id)

     {
         $edit_event =DB::table('cra_add_event')->where('id',$id)->first();
         return view('file_management.edit_event',compact('edit_event','id'));
        
     }

     public function updateevent(Request $request)
     {
        $id =$request['id'];
        $Event_type =$request['event'];
        $Title =$request['title'];
        $Meeting_room =$request['room'];
        $Location =$request['location'];
        $Start_sate =$request['start_date'];
        $Time =$request['time'];
        $End_date =$request['end_date'];
        $Time_1 =$request['time_1'];
        $Event =$request['event'];
        $User =$request['user'];
        $Others =$request['others'];
        $Client =$request['client'];
        $File =$request['file'];
        $Notes =$request['notes'];
        $Repetition =$request['repetition'];
        $Repetition_end =$request['repetition_end'];
        $Reminder =$request['reminder'];
        

        DB::table('cra_add_event')->where('id',$id)->update([

            
            'Event_Type' =>  $Event_type,
            'Title' =>  $Title,
            'Meeting_Room' =>  $Meeting_room,
            'Location' =>   $Location,
            'Start_Date' =>   $Start_sate,
            'Time' =>  $Time,
            'End_Date' =>  $End_date,
            'Time_End' =>  $Time_1,
            'Event_Booked_For' =>  $Event,
            'User_Invited' =>  $User,
            'Other_Invites' =>  $Others,
            'Client' =>  $Client,
            'File' =>   $File,
            'Notes' =>   $Notes,
            'Set_Repetition' =>   $Repetition,
            'Repetition_End' =>   $Repetition_end,
            'Set_Reminder' =>  $Reminder,

        ]);
        return redirect('/diary-management');
    }
 

     public function addevent(Request $request)
     {
        
        $Event_type =$request['event'];
        // dd($Event_type); 
        $Title =$request['title'];
        $Meeting_room =$request['room'];
        $Location =$request['location'];
        $Start_sate =$request['start_date'];
        $Time =$request['time'];
        $End_date =$request['end_date'];
        $Time_1 =$request['time_1'];
        $Event =$request['event'];
        $User =$request['user'];
        $Others =$request['others'];
        $Client =$request['client'];
        $File =$request['file'];
        $Notes =$request['notes'];
        $Repetition =$request['repetition'];
        $Repetition_end =$request['repetition_end'];
        $Reminder =$request['reminder'];
        

        DB::table('cra_add_event')->insert([

           
            'Event_Type' =>  $Event_type,
            'Title' =>  $Title,
            'Meeting_Room' =>  $Meeting_room,
            'Location' =>   $Location,
            'Start_Date' =>   $Start_sate,
            'Time' =>  $Time,
            'End_Date' =>  $End_date,
            'Time_End' =>  $Time_1,
            'Event_Booked_For' =>  $Event,
            'User_Invited' =>  $User,
            'Other_Invites' =>  $Others,
            'Client' =>  $Client,
            'File' =>   $File,
            'Notes' =>   $Notes,
            'Set_Repetition' =>   $Repetition,
            'Repetition_End' =>   $Repetition_end,
            'Set_Reminder' =>  $Reminder,

        ]);
        return redirect('/diary-management');
        
     }

     public function meetingrooms()
     {
         return view('file_management.meeting-rooms');
     }

     public function documentmanager()
     {
        $new_document=DB::table('cra_upload_document')->get();
        
        return view('file_management.document-manager',compact('new_document'));
        //  return view('file_management.document-manager');
     }

     public function uploaddocument(Request $request)
     {
        
        $client =$request['client'];
        $file =$request['file'];
        $other_file =$request['other_file'];
        $document_category =$request['document_category'];
        $document_title =$request['document_title'];
        $nature_document =$request['nature_document'];
        $search =$request['search'];
        $document_owner =$request['document_owner'];
        $final_aggrement =$request['final_aggrement'];

        $document_upload =$request['document_upload'];
        $folder_upload =$request['folder_upload'];

        if(!empty($request->file('document_upload'))){

            $this->validate($request,[
                'document_upload' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('document_upload')){
            $uploadedImage = $request->file('document_upload');
            $imageName     = time() .'.'. $document_upload->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $document_upload->file    = $destinationPath.$imageName;
        }

        if(!empty($request->file('folder_upload'))){

            $this->validate($request,[
                'folder_upload' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('folder_upload')){
            $uploadedImage = $request->file('folder_upload');
            $imageName     = time() .'.'. $document_upload->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $folder_upload->file    = $destinationPath.$imageName;
        }
       
        // dd(( $imageName ));

        DB::table('cra_upload_document')->insert([

           
            'client' =>  $client,
            'file' =>  $file,
            'other_file' =>  $other_file,
            'document_category' =>   $document_category,
            'document_title' =>   $document_title,
            'nature_document' =>  $nature_document,
            'search' =>  $search,
            'document_owner' =>  $document_owner,
            'final_aggrement' =>  $final_aggrement,
            'document_upload' =>   $imageName ,
            'folder_upload' =>  $imageName,
        
        ]);
        return redirect('/document-manager');
   
     }

     public function generatedocument(Request $request)
     {
        
        $client =$request['client'];
        $file =$request['file'];
        $document_category =$request['document_category'];
        $document_title =$request['document_title'];
        $nature_document =$request['nature_document'];
        $search =$request['search'];
        $document_owner =$request['document_owner'];
        $viewer =$request['viewer'];
        $document_template =$request['document_template'];
        

        DB::table('cra_generate_document')->insert([

           
            'client' =>  $client,
            'file' =>  $file,
            'document_category' =>   $document_category,
            'document_title' =>   $document_title,
            'nature_document' =>  $nature_document,
            'search' =>  $search,
            'document_owner' =>  $document_owner,
            'viewer' =>  $viewer,
            'document_template' =>  $document_template,
        
        ]);
        return redirect('/document-manager');
        //  return view('file_management.generate-document');
     }
 


     public function bringup(Request $request)
     {

        $client_list = DB::table('cra_mixed_table')->get();

        $id =$request['id'];
        $Client =$request['client'];
        $File =$request['file'];
        $Registered_by =$request['registered_by'];
        $Responsible =$request['responsible'];
        $Data_from =$request['data_from'];
        $Data_to =$request['date_to'];

        DB::table('cra_bringup')->insert([

            'id' => $id,
            'Client' => $Client,
            'File' =>  $File,
            'Registered_By' => $Registered_by,
            'Responsible_Advocate' => $Responsible,
            'Date_From' => $Data_from,
            'Date_To' => $Data_to,

        ]);
         return view('file_management.bringup',compact('client_list'));
     }
       //document manager


       //File Reports
       public function filereport(Request $request)
       {
        $id =$request['id'];
        $Resposible_advocate =$request['resposible_advocate'];
        $Data_from =$request['data_from'];
        $Date_to =$request['date_to'];

        DB::table('cra_file_report')->insert([

            'id' => $id,
            'Responsible_Advocate' => $Resposible_advocate,
            'Date_From' => $Data_from,
            'Date_To' => $Date_to,

        ]);
           return view('file_management.file-report');
       }

       public function fileopenreport()
       {

        $file_open_report=DB::table('cra_file_report')
         ->select('*')
         ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_file_report.id')
         ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_file_report.id')
         ->get();    
        return view('file_management.file-opened-report',compact('file_open_report'));

        //    return view('file_management.file-opened-report');
       }

       public function fileclosedreport()
       {

        $file_close_report=DB::table('cra_file_report')
         ->select('*')
         ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_file_report.id')
         ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_file_report.id')
         ->get();    
        return view('file_management.file-closed-report',compact('file_close_report'));

        //    return view('file_management.fsile-closed-report');
       }

       public function filepending()
       {
        $file_pending_closure=DB::table('cra_file_report')
        ->select('*')
        ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_file_report.id')
        ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_file_report.id')
        ->get();    
       return view('file_management.file-pending',compact('file_pending_closure'));
        //    return view('file_management.file-pending');
       }

       public function filependingapproval()
       {

        $file_pending_approval=DB::table('cra_file_report')
        ->select('*')
        ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_file_report.id')
        ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_file_report.id')
        ->get();    
       return view('file_management.file-pending-approval',compact('file_pending_approval'));

        //    return view('file_management.file-pending-approval');
       }

       public function instructionspast()
       {

        $instruction_past=DB::table('cra_file_report')
        ->select('*')
        ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_file_report.id')
        ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_file_report.id')
        ->get();    
       return view('file_management.instructions-past',compact('instruction_past'));
        //    return view('file_management.instructions-past');
       }
       //File Reports


       //add ons
        public function outgoingletter()
        {

            $add_letter=DB::table('cra_add_outgoing_letter')->get();
            return view('file_management.outgoing-letters',compact('add_letter'));
            
        }

        public function addoutgoingletters(Request $request)
        {
          
           $letter_date =$request['letter_date'];
           $client =$request['client'];
           $file =$request['file'];
           $delivered_to =$request['delivered_to'];
           $Document_category =$request['Document_category'];
           $letter_name =$request['letter_name'];
           $originator =$request['originator'];
           $viewers =$request['viewers'];
           $upload_copy =$request['upload_copy'];

           if(!empty($request->file('upload_copy'))){

            $this->validate($request,[
                'upload_copy' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('upload_copy')){
            $uploadedImage = $request->file('upload_copy');
            $imageName     = time() .'.'. $upload_copy->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $upload_copy->file    = $destinationPath.$imageName;
        }
   
           DB::table('cra_add_outgoing_letter')->insert([
   
               
               'letter_date' => $letter_date,
               'client' =>  $client,
               'file' => $file,
               'delivered_to' => $delivered_to,
               'Document_category' => $Document_category,
               'letter_name' => $letter_name,
               'originator' => $originator,
               'viewers' =>  $viewers,
               'upload_copy' => $upload_copy,
   
           ]);
             return view('file_management.outgoing-letters');
        }


        public function incommingletters()
        {
            $add_letter=DB::table('cra_add_incomming_letters')->get();
            return view('file_management.incomming-letters',compact('add_letter'));

        }

        public function addincommingletters(Request $request)
        {
            $add_letter=DB::table('cra_add_incomming_letters')->get();
            $letter_date =$request['letter_date'];
            $client =$request['client'];
            $file =$request['file'];
            $received_form =$request['received_form'];
            $category =$request['category'];
            $letter_name =$request['letter_name'];
            $delivered_by =$request['delivered_by'];
            $other =$request['other'];
            $delivered_to =$request['delivered_to'];
            $viewer =$request['viewer'];
            $upload_copy =$request['upload_copy'];

            if(!empty($request->file('upload_copy'))){

                $this->validate($request,[
                    'upload_copy' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
                ]);
            }
            if(request()->hasfile('upload_copy')){
                $uploadedImage = $request->file('upload_copy');
                $imageName     = time() .'.'. $upload_copy->getClientOriginalExtension();
                $destinationPath = public_path('image');
                $uploadedImage->move($destinationPath,$imageName);
                $upload_copy->file    = $destinationPath.$imageName;
            }
    
    
            DB::table('cra_add_incomming_letters')->insert([
    
                
                'letter_date' => $letter_date,
                'client' =>  $client,
                'file' => $file,
                'received_form' => $received_form,
                'category' => $category,
                'letter_name' => $letter_name,
                'delivered_by' => $delivered_by,
                'other' =>  $other,
                'delivered_to' => $delivered_to,
                'viewer' =>  $viewer,
                'upload_copy' => $upload_copy,
    
            ]);
              return view('file_management.incomming-letters',compact('add_letter'));
            //  return view('file_management.add-incomming-letters');
        }

        public function safeitemrequest(Request $request)
        {
            $id =$request['id'];
            $Client =$request['client'];
            $File =$request['file'];
            $Document_type =$request['document_type'];
            $Staf_name =$request['staf_name'];
            $Approver =$request['approver'];
            $Requested_by =$request['requested_by'];
            $Date =$request['date'];
            $And =$request['and'];
            $Distributed =$request['distributed'];
            $status =$request['status'];

            DB::table('cra_safe_item_request')->insert([

                'id' => $id,
                'Client' => $Client,
                'File' => $File,
                'Document_Type' => $Document_type,
                'Safe_Name' => $Staf_name,
                'Approver' => $Approver,
                'Requested_By' => $Requested_by,
                'Date' =>$Date,
                'And_next' =>$And,
                'Distributed_By' => $Distributed,
                'Status' => $status,

            ]);
             return view('file_management.safe-item-request');
        }

        public function saferegisterreport(Request $request)
        {
           $id =$request['id'];
           $Client =$request['client'];
           $File =$request['file'];
           $Document_type =$request['document_type'];
           $Safe_name =$request['safe_name'];
           $Approver =$request['approver'];
           $Given_to =$request['given_to'];
           $Requsted_by =$request['requsted_by'];
            $Date =$request['date'];
           $And =$request['and'];
           $Document_condition =$request['document_condition'];
           $Status =$request['status'];


           DB::table('cra_safe_register_report')->insert([

            'id' => $id,
            'Client' =>  $Client,
            'File' =>  $File,
            'Document_Type' => $Document_type,
            'Safe_Name' => $Safe_name,
            'Approver' => $Approver,
            'Given_To' => $Given_to,
            'Requested_By' => $Requsted_by,
            'Date' => $Date,
            'and' => $And,
            'Document_Condition' => $Document_condition,
            'Status' =>  $Status,

        ]);


             return view('file_management.safe-register-report');
        }
       //add ons
       



    
    public function u_details()
    {
        return view('system-settings.u_details');
    }

    public function add_user()
    {
        return view('system-settings.User.add_user');
    }
    public function change_password()
    {
        return view('system-settings.User.change_password');
    }


   

public function view_new_instructions(Request $request)
{
   $id =$request['id'];
   $Report_category =$request['report_category'];
   $Instruction_type =$request['instruction_type'];
   $Expense_category =$request['expense_category'];
   $Report_type =$request['report_type'];
   $Date_from =$request['date_from'];
   $Date_to =$request['date_to'];

   DB::table('cra_instructions_report')->insert([

    'id' => $id,
    'Report_Category' => $Report_category,
    'Instruction_Type' => $Instruction_type,
    'Expense_Category' => $Expense_category,
    'Report_Type' => $Report_type,
    'Date_From' =>  $Date_from,
    'Date_To' =>   $Date_to,
]);

    return view('file_management.instructions_report');
}

public function new_file_instructions()
{

    $new_file_instruction=DB::table('cra_add_new_instructions')->get();
    // ->select('*')
    // ->leftjoin('cra_add_file_progress','cra_add_file_progress.id','=','cra_add_new_instructions.id')
    // ->leftjoin('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_add_new_instructions.id')
    // ->get();    
        return view('file_management.file_instruction',compact('new_file_instruction'));
    // return view('file_management.file_instruction');
}





public function add_new_file_instructions(Request $request)
{
    $new_file_instruction=DB::table('cra_add_new_instructions')->get();
   $id =$request['id'];
   $date =$request['date'];
   $client =$request['client'];
   $file =$request['file'];
   $instruction =$request['instruction'];
   $category =$request['category'];
   $receiver =$request['receiver'];
   $currency =$request['currency'];
   $exchange =$request['exchange'];
   $turn_around =$request['turn_around'];
   $priority =$request['priority'];
   $amount =$request['amount'];
   $details =$request['details'];
   $send_notification =$request['send_notification'];

   DB::table('cra_add_new_instructions')->insert([

    'id' => $id,
    'date' => $date,
    'client' => $client,
    'file' => $file,
    'instruction' => $instruction,
    'category' =>  $category,
    'receiver' =>   $receiver,
    'currency' => $currency,
    'exchange' => $exchange,
    'turn_around' => $turn_around,
    'priority' => $priority,
    'amount' =>  $amount,
    'details' =>   $details,
    'send_notification' =>   $send_notification,
]);
    return view('file_management.file_instruction',compact('new_file_instruction'));                                                            
}

public function edit_file_instruction_list($id)
{


    $edit_file_instruction =DB::table('cra_add_new_instructions')->where('id',$id)->first();
    return view('file_management.edit_file_instruction',compact('edit_file_instruction','id'));

                                                             
}

public function updatefileinstruction(Request $request)
{


    $id =$request['id'];
    $date =$request['date'];
    $client =$request['client'];
    $file =$request['file'];
    $instruction =$request['instruction'];
    $category =$request['category'];
    $receiver =$request['receiver'];
    $currency =$request['currency'];
    $exchange =$request['exchange'];
    $turn_around =$request['turn_around'];
    $priority =$request['priority'];
    $amount =$request['amount'];
    $details =$request['details'];
    $send_notification =$request['send_notification'];
 
    DB::table('cra_add_new_instructions')->where('id',$id)->update([
 
     'id' => $id,
     'date' => $date,
     'client' => $client,
     'file' => $file,
     'instruction' => $instruction,
     'category' =>  $category,
     'receiver' =>   $receiver,
     'currency' => $currency,
     'exchange' => $exchange,
     'turn_around' => $turn_around,
     'priority' => $priority,
     'amount' =>  $amount,
     'details' =>   $details,
     'send_notification' =>   $send_notification,
 ]);

 return redirect('/file_instruction');

}

public function destroyfileinstruction($id)
{
    $destroy_file =DB::table('cra_add_new_instructions')->where('id',$id)->delete();
    return redirect ('/file_instruction');
}


public function new_instructions()
{
    $new_office_instruction=DB::table('cra_add_office_instructions')->get();
        
    return view('file_management.office_instructions',compact('new_office_instruction'));
}


public function add_new_instructions(Request $request)
{


   
    $date =$request['date'];
    $instruction_type =$request['instruction_type'];
    $instruction_category =$request['instruction_category'];
    $receiver =$request['receiver'];
    $currency =$request['currency'];
    $exchange_rate =$request['exchange_rate'];
    $expence_category =$request['expence_category'];
    $turn_around =$request['turn_around'];
    $priority =$request['priority'];
    $amount =$request['amount'];
    $detail =$request['detail'];
    $send_notification =$request['send_notification'];
 
    DB::table('cra_add_office_instructions')->insert([
 
    
     'date' => $date,
     'instruction_type' => $instruction_type,
     'instruction_category' => $instruction_category,
     'receiver' => $receiver,
     'currency' =>  $currency,
     'exchange_rate' =>   $exchange_rate,
     'expence_category' => $expence_category,
     'turn_around' => $turn_around,
     'priority' => $priority,
     'amount' => $amount,
     'detail' =>  $detail,
     'send_notification' =>   $send_notification,
 ]);

 return redirect('/office_instructions');

}

public function edit_office_instruction_list($id)
{
    $edit_office_instruction =DB::table('cra_add_office_instructions')->where('id',$id)->first();
    return view('file_management.edit_office_instruction',compact('edit_office_instruction','id'));                                                           
}

public function updateofficeinstructions(Request $request)
{


    $id =$request['id'];
    $date =$request['date'];
    $instruction_type =$request['instruction_type'];
    $instruction_category =$request['instruction_category'];
    $receiver =$request['receiver'];
    $currency =$request['currency'];
    $exchange_rate =$request['exchange_rate'];
    $expence_category =$request['expence_category'];
    $turn_around =$request['turn_around'];
    $priority =$request['priority'];
    $amount =$request['amount'];
    $detail =$request['detail'];
    $send_notification =$request['send_notification'];
 
    DB::table('cra_add_office_instructions')->where('id',$id)->update([
 
     'id' => $id,
     'date' => $date,
     'instruction_type' => $instruction_type,
     'instruction_category' => $instruction_category,
     'receiver' => $receiver,
     'currency' =>  $currency,
     'exchange_rate' =>   $exchange_rate,
     'expence_category' => $expence_category,
     'turn_around' => $turn_around,
     'priority' => $priority,
     'amount' => $amount,
     'detail' =>  $detail,
     'send_notification' =>   $send_notification,
 ]);

 return redirect('/office_instructions');

}

public function destroyofficeinstruction($id)
{
    $destroy_file =DB::table('cra_add_office_instructions')->where('id',$id)->delete();
    return redirect ('/office_instructions');
}



public function safe_management_list()
{
    $safe_management=DB::table('cra_new_safe_management')->get();
        
    return view('file_management.Safe_management',compact('safe_management'));
    // return view('file_management.Safe_management');                                                             
}

public function new_safe_management_list(Request $request)
{


   
    $date =$request['date'];
    $client =$request['client'];
    $file =$request['file'];
    $safe_name =$request['safe_name'];
    $ref_no =$request['ref_no'];
    $approver =$request['approver'];
    $doc_no =$request['doc_no'];
    $category =$request['category'];
    $document =$request['document'];
 
    DB::table('cra_new_safe_management')->insert([
 
    
     'date' => $date,
     'client' => $client,
     'file' => $file,
     'safe_name' => $safe_name,
     'ref_no' =>  $ref_no,
     'approver' =>   $approver,
     'doc_no' => $doc_no,
     'category' => $category,
     'document' => $document,
 ]);

 return redirect('/Safe_management');

    // return view('file_management.new_Safe_management');                                                             
}

public function editsafemanagement_list($id)
{
    $edit_management =DB::table('cra_new_safe_management')->where('id',$id)->first();
    return view('file_management.edit_Safe_management',compact('edit_management','id'));                                                           
}

public function updatesafemanagement_list(Request $request)
{


    $id = $request['id'];
    $date =$request['date'];
    $client =$request['client'];
    $file =$request['file'];
    $safe_name =$request['safe_name'];
    $ref_no =$request['ref_no'];
    $approver =$request['approver'];
    $doc_no =$request['doc_no'];
    $category =$request['category'];
    $document =$request['document'];
 
    DB::table('cra_new_safe_management')->where('id',$id)->update([
 
    'id' => $id,
     'date' => $date,
     'client' => $client,
     'file' => $file,
     'safe_name' => $safe_name,
     'ref_no' =>  $ref_no,
     'approver' =>   $approver,
     'doc_no' => $doc_no,
     'category' => $category,
     'document' => $document,
 ]);

 return redirect('/Safe_management');

    // return view('file_management.new_Safe_management');                                                             
}

public function deletesafemanagement($id)
{
    $destroy_file =DB::table('cra_new_safe_management')->where('id',$id)->delete();
    return redirect ('/Safe_management');
}




public function Request_staff_item_list()
{
    $safe_management=DB::table('cra_request_safe_item')->get();
        
    return view('file_management.Request_staff_item',compact('safe_management'));
                                                              
}

public function add_Request_staff_item_list(Request $request)
{


   
    $date =$request['date'];
    $client =$request['client'];
    $file =$request['file'];
    $send_instruction =$request['send_instruction'];
    $approver =$request['approver'];
   
 
    DB::table('cra_request_safe_item')->insert([
 
    
     'date' => $date,
     'client' => $client,
     'file' => $file,
     'send_instruction' => $send_instruction,
     'approver' =>  $approver,
     
 ]);

 return redirect('/Request_staff_item');
    // return view('file_management.new_Request_staff_item');                                                             
}

public function Process_Request_list()
{
    return view('file_management.Process_Request');                                                             
}








}



