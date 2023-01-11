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
    <div class="col-sm-4 "> <a href="{{ url('performance_department') }}"><img class="logo_size"
                src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Performance</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('loans') }}"><img class="logo_size"
                src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Loans</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('payslip') }}"><img class="logo_size"
                src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Payslip (Bulk)</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('attendanceview') }}"><img class="logo_size" 1
                src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Attendance (Manual)</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('attendance') }}"><img class="logo_size"
                src="assets\image\Monthly Staff status report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Attendance (CSV Uploaded)</button></a></div>
    <!-- <div class="col-sm-4 "> <a href="{{ url('over_time') }}"><img class="logo_size"
                 src="assets\image\File list progress report.png" alt=""><button type="button"
                 style="width:70%;" class="btn btn-primary btn_align_btn"> Over Time</button></a></div> -->

    <div class="col-sm-4 "> <a href="{{ url('timesheet') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn"> Time sheet</button></a></div>

    <div class="col-sm-4 "> <a href="{{ url('task_allocation') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn"> Task Allocation</button></a></div>

    <div class="col-sm-4 "> <a href="{{ url('leave_request_details') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn"> Leave Request Details</button></a></div>

    <div class="col-sm-4 "> <a href="{{ url('attendance_sheet') }}"><img class="logo_size"
                    src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                    class="btn btn-primary btn_align_btn"> Attendance Sheet</button></a></div>




</div>


<br>
{{--sub heading --}}
<h5 id="hdbtb">Settings</h5>
<br>


<div class="row sm">

    <div class="row sm">

        <div class="col-sm-4 "> <a href="{{url('bank_names')}}"><img class="logo_size"
                    src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"
                    class="btn btn-primary btn_align_btn">Add Bank</button></a></div>
        <div class="col-sm-4 "> <a href="{{url('internal_memos')}}"><img class="logo_size"
                    src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                    class="btn btn-primary btn_align_btn">Internal Memos</button></a></div>

    </div>
</div>








@endsection