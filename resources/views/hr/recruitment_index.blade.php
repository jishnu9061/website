@extends('layouts.hmsmain')
@section('content')

<section >
   {{-- heading --}}
   <h4 id="hdtpa"><b>HR</b></h4>
   <br><br>
 
   <br>

        
       {{--sub heading --}}
    {{-- <h5 id="hdbtb">Maintenance</h5>
    <br> --}}

            <div class="row sm">
                <div class="col-sm-4 "> <a href="{{url('create_job_post')}}"><img class="logo_size"
                            src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Create New Job Post</button></a></div>
                            <div class="col-sm-4 "> <a href="{{url('job_posts')}}"><img class="logo_size"
                            src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">View Job Post</button></a></div>
                <div class="col-sm-4 "> <a href="{{ url('view_job_applications') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                            alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">View Job Applications</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('reviewed_details') }}"><img class="logo_size"
                            src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Reviewed Applications</button></a></div>
                <!-- <div class="col-sm-4"> <a href="{{ url('payslip') }}"><img class="logo_size"
                            src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Payslip (Bulk)</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('attendanceview') }}"><img class="logo_size"1
                            src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Attendance(Manual)</button></a></div>
                <div class="col-sm-4"> <a href="{{ url('attendance') }}"><img class="logo_size"
                            src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Attendance(CSV Uploaded)</button></a></div>
                            <div class="col-sm-4 "> <a href="{{ url('addstaffs') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                            alt=""><button type="button" style="width:70%;"
                            class="btn btn-primary btn_align_btn">Perfomence</button></a></div> -->
            </div>
          
          
   
    

            
              
                
           
           

            </section>


@endsection