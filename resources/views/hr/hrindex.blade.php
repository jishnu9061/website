@extends('layouts.hmsmain')
@section('content')

<section >
   {{-- heading --}}
   <h4 id="hdtpa"><b>HR</b></h4>
   <br><br>
 


        
       {{--sub heading --}}
    <h5 id="hdbtb">Maintenance</h5>
    <br>

            <div class="row sm">
                <div class="col-sm-4 "> <a href="{{url('addallowance')}}"><img class="logo_size"
                            src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn"> Settings</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('bringup') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                            alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Add Staffs</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('file-progress-report') }}"><img class="logo_size"
                            src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Manage Staffs</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('file-status-summary') }}"><img class="logo_size"
                            src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Loans</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('client-monthly-file-status') }}"><img class="logo_size"
                            src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Payslip (Bulk)</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('staff-monthly-status-report') }}"><img class="logo_size"
                            src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Attendance(Manual)</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('staff-monthly-status-report') }}"><img class="logo_size"
                            src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Attendance(CSV Uploaded)</button></a></div>
            </div>
          
   
    
              
                
           
           

            </section>


@endsection