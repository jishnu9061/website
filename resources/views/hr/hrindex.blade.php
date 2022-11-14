@extends('layouts.hmsmain')
@section('content')
    {{-- heading --}}
   <h4 id="hdtpa"><b>HR</b></h4>
   <br>

        
   

        <div class="row sm">
                <!-- <div class="col-sm-4 "> <a href="{{ url('addstaffs') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Add Staffs</button></a></div> -->
            <div class="col-sm-4 "> <a href="{{ url('staffs') }}"><img class="logo_size"
                src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Manage Staffs</button></a></div>
            <div class="col-sm-4 "> <a href="{{url('recruitment')}}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Recruitment</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('performance_form') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Perfomence</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('loans') }}"><img class="logo_size"
                src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Loans</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('payslip') }}"><img class="logo_size"
                src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Payslip (Bulk)</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('attendanceview') }}"><img class="logo_size"1
                 src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                 class="btn btn-primary btn_align_btn">Attendance(Manual)</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('attendance') }}"><img class="logo_size"
                 src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                 class="btn btn-primary btn_align_btn">Attendance(CSV Uploaded)</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('over_time') }}"><img class="logo_size"
                 src="assets\image\File list progress report.png" alt=""><button type="button"
                 style="width:70%;" class="btn btn-primary btn_align_btn"> Over Time</button></a></div>
            <div class="col-sm-4 "> <a href="{{url('addallowance')}}"><img class="logo_size"
                 src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                 class="btn btn-primary btn_align_btn"> Settings</button></a></div>
                            
         </div>
                        
                        
                        

    

            
              
                
           
           
@endsection

