@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<h4 id="hdtpa"><b>Customer Relationship Management</b></h4>
<br>




<div class="row sm">
    <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer registeration.png" alt=""><a
            href="{{ url('view-registration') }}"><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">
                Client Registration</button></a></div>
    <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Follow up.png" alt=""><a
            href="{{ url('follow-up') }}"><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">Client
                Follow Up</button></a></div>
    <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Quotation.png" alt=""><a
            href="{{ url('Quotation') }}"><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">
                Client Quotation</button></a></div>
    <div class="col-sm-4 "><img class="logo_size" src="assets\image\Manage User Accounts.png" alt=""><a
            href="{{ url('manage_tasks') }}"><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">
                Manage Tasks</button></a></div>
    <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer registeration.png" alt=""><a
            href="{{ url('projects') }}"><button type="button" style="width:70%;"
                class="btn btn-primary btn_align_btn">
                Projects</button></a></div>



</div>
@endsection