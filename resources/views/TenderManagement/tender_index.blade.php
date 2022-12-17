@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<h4 id="hdtpa"><b>Tender Management</b></h4>
<br>


<div class="row sm">
    <div class="col-sm-4 "> <a href="{{ url('tender_details') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Tender Details</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('apply_tender') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Apply Tender</button></a>
    </div>
    <div class="col-sm-4 "> <a href="{{ url('tender_applied_details') }}"><img class="logo_size"
                src="assets\image\File list progress report.png" alt=""><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn"> Tender Applied Details </button></a>
    </div>



</div>








@endsection