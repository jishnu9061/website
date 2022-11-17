@extends('layouts.hmsmain')
@section('content')
    <section>
        {{-- heading --}}
        <h4 id="hdtpa"><b>Store & Inventory</b></h4>
        <br>
        <div class="row sm">
            <div class="col-sm-4 "> <a href="{{ url('manage_categories') }}"><img class="logo_size"
                        src="assets\image\File progress report.png" 
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Manage Categories </button></a></div>
           <div class="col-sm-4 "> <a href="{{ url('manage_items') }}"><img class="logo_size" 
                        src="assets\image\Bring up report.png"
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Manage Items</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('stock_list_report') }}"><img class="logo_size"
                        src="assets\image\Bring up report.png"
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Stock List Report</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\File status report summary.png" 
                        alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Item Movement Report </button></a></div>
            <div class="col-sm-4"> <a href="{{ url('') }}"><img class="logo_size"
                        src="assets\image\Monthly file status report.png" 
                        alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Re-order Advice Report </button></a></div>
          
        </div>

<section >


@endsection