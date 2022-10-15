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
