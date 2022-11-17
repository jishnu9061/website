@extends('layouts.hmsmain')
@section('content')
    <section>
        {{-- heading --}}
        <h4 id="hdtpa"><b>Purchase Management</b></h4>
        <br>
        <div class="row sm">
            <div class="col-sm-4 "> <a href="{{ url('staffs') }}"><img class="logo_size"
                        src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Local Purchase Orders </button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('recruitment') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Purchase Order Reports</button></a></div>
            {{-- <div class="col-sm-4 "> <a href="{{ url('addstaffs') }}"><img class="logo_size" src="assets\image\Bring up report.png"
                                    alt=""><button type="button" style="width:70%;"
                                    class="btn btn-primary btn_align_btn">Item Arrival Report</button></a></div> --}}
                                    <div class="col-sm-4 "> <a href="{{ url('addstaffs') }}"><img class="logo_size"
                                                src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;"
                                                class="btn btn-primary btn_align_btn">Vendor Performance Report</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('loans') }}"><img class="logo_size"
                        src="assets\image\File status report summary.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Cost Variation Report</button></a></div>
           
          
        </div>

<section >


@endsection