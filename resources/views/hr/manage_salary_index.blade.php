@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<h4 id="hdtpa"><b>Manage Salary</b></h4>
<br>




<div class="row sm">
    <div class="col-sm-4 "> <a href="{{ url('allowances') }}"><img class="logo_size"
        src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
        class="btn btn-primary btn_align_btn">Allowances</button></a></div>
    <div class="col-sm-4 "> <a href="{{ url('commissions') }}"><img class="logo_size"
                src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Commissions</button></a></div>
    <div class="col-sm-4 "> <a href="{{url('loan')}}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Loan</button></a></div>
    <div class="col-sm-4 "> <a href="{{ url('statutory_deductions') }}"><img class="logo_size"
                src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Statutory Deductions</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('other_payment') }}"><img class="logo_size"
                src="assets\image\File status report summary.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Other Payment</button></a></div>
    <div class="col-sm-4"> <a href="{{ url('overtime') }}"><img class="logo_size"
                src="assets\image\Monthly file status report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Overtime</button></a></div>
   
</div>




























@endsection

