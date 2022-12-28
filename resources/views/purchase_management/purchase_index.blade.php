@extends('layouts.hmsmain')
@section('content')
    <section>
        {{-- heading --}}
        <h4 id="hdtpa"><b>Procurement Management</b></h4>
        <br>
        <div class="row sm">
            <div class="col-sm-4 "> <a href="{{ url('purchase_order') }}"><img class="logo_size"
                        src="assets\image\File progress report.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">New Purchase Orders </button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('purchase_order_report') }}"><img class="logo_size"
                        src="assets\image\File list progress report.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Purchase Order Reports</button></a></div>
            
            <div class="col-sm-4 "> <a href="{{ url('vendor_performance_report') }}"><img class="logo_size"
                        src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Payment Details</button></a></div>
                        
            <div class="col-sm-4 "> <a href="{{ url('supplier') }}"><img class="logo_size"
                        src="assets\image\Bring up report.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Supplier </button></a></div>

            <!-- <div class="col-sm-4"> <a href="{{ url('cost_variation_report') }}"><img class="logo_size"
                        src="assets\image\File status report summary.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Cost Variation Report</button></a></div> -->
            <!-- <div class="col-sm-4"> <a href="{{ url('ledger_details') }}"><img class="logo_size"
                        src="assets\image\File status report summary.png" alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Ledger Details</button></a></div> -->
           
          
        </div>

<section >


@endsection