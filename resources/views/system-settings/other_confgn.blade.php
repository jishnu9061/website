@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Other Configurations</a>
</nav>
<br><br>


    {{-- heading --}}
    {{-- <h4 id="hdtpa"><b>Other Configurations</b></h4>
    <br><br> --}}
    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
        </div>
        <div class="col-sm-4" style="">
            <h4
                style="border: 0.5px solid #f1d9b0;
                border-radius: 25px;
                background-color: #f1d9b0;
                padding: 2%;
                width: 100%;
                height:90%;
                text-align:center;
                box-shadow: inset 0 0 3px #d3d0ca;
                opacity: .9;">
                <b style="font-size:18px;">Other Configurations</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
 <br><br>
 <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('configu_ration')}}"><img class="logo_size"src="assets\image\Configuration.png" alt=""><button type="button"  style="width:70%;" class="btn btn-primary btn_align_btn" > Configurations</button></a></div>
    {{-- <div class="col-sm-4 " > <a href="{{url('company_branch')}}"><img class="logo_size"src="assets\image\Company branch.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Company Branch</button></a></div> --}}
    <div class="col-sm-4 " > <a href="{{url('template_category')}}"><img class="logo_size"src="assets\image\Template category.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Template Category</button></a></div>

    <div class="col-sm-4 " > <a href="{{url('letter_types')}}"><img class="logo_size"src="assets\image\letter type.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Letter Types</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('payment_items')}}"><img class="logo_size"src="assets\image\Payment items.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Payment Items</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('courts')}}"><img class="logo_size"src="assets\image\Courts.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Courts</button></a></div>

    <div class="col-sm-4" > <a href="{{url('description_selectn')}}"><img class="logo_size"src="assets\image\Description selection.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Description Selections</button></a></div>
    <div class="col-sm-4" > <a href="{{url('tax_chart_main')}}"><img class="logo_size"src="assets\image\Taxchart.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Tax Chart</button></a></div>
    <div class="col-sm-4" > <a href="{{url('notifications')}}"><img class="logo_size"src="assets\image\Notification.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Notifications</button></a></div>
  </div>
</div>
<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

@endsection
