@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:12px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">Store & Inventory-Index</a>
</nav>
<br><br>
    <section>
        {{-- heading --}}
        <h4 id="hdtpa"><b>Store & Inventory</b></h4>
        <br>
        <div class="row sm">
        <div class="col-sm-4"> <a href="{{ url('stock_list') }}"><img class="logo_size"
                        src="assets\image\Monthly file status report.png" 
                        alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Stock list </button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('add_categories') }}"><img class="logo_size"
                        src="assets\image\File progress report.png" 
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Manage Categories </button></a></div>
           <div class="col-sm-4 "> <a href="{{ url('manage_items') }}"><img class="logo_size" 
                        src="assets\image\Bring up report.png"
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Manage Items</button></a></div>
            <div class="col-sm-4 "> <a href="{{ url('request_item') }}"><img class="logo_size"
                        src="assets\image\Bring up report.png"
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">View Request</button></a></div>
            <div class="col-sm-4"> <a href="{{ url('item_movement') }}"><img class="logo_size"
                        src="assets\image\File status report summary.png" 
                        alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Item Movement Report </button></a></div>
            <div class="col-sm-4"> <a href="{{ url('re_order') }}"><img class="logo_size"
                        src="assets\image\Monthly file status report.png" 
                        alt=""><button type="button"
                        style="width:70%;" class="btn btn-primary btn_align_btn">Re-order Report </button></a></div>
          
        </div>

<section >


@endsection