
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Attendance (Manual)</a>
</nav>
<br><br>
{{-- heading --}}
  <div class="container">
   <h4 id="hdtpa"><b>Attendance (Manual)</b></h4>
   <br>



<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="post" action="monthwise">
        @csrf
<div class="row" style="padding-bottom:24px;padding:15px;">

<div class="col-md-3">
<select class="form-control" name="departmentx">
<option value="allstaffs">All Staffs</option>
@foreach($deps as $dep)
<option  value="{{$dep->depname}}">{{$dep->depname}}</option>

@endforeach
</select>
</div>
<div class="col-md-3">

<select id="b" class="form-control" name="year">

@for($i=2022;$i<=2080;$i++)
<option value="{{$i}}">{{$i}}</option>
@endfor
</select>
</div>
<div class="col-md-4" id="selll">
<select id="b" class="form-control" name="month" id="sele">

<option id="01" value="01">January</option>
<option  value="02">February</option>
<option  value="03">March</option>
<option  value="04">April</option>
<option  value="05">May</option>
<option  value="06">June</option>
<option  value="07">July</option>
<option  value="08">August</option>
<option  value="09">September</option>
<option  value="10">October</option>
<option  value="11">November</option>
<option  value="12">December</option>

</select>
</div>
<div class="col-md-2">
    <button type="submit" class="btn btn-primary form-control">Submit</button>
</div>

</form>

<div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>

        </div>
      </div>
      <div class="tb_search">
       <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>

<!-- <table class="table table-bordered table-responsive"> -->
<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">

	<th class="text-center" id="dayget">
        <td><b>Employee Name</b></td>
        <td><b>Employee Id</b></td>
	@for($i=1;$i<=$daysinmonth;$i++)
<td id="daygeton">{{$i}}</td>
@endfor


	</th>
    @foreach($attendancedata as $staff)
	<tr class="data; text-center" id="datax">
    <td></td>

    <td>{{$staff->staffname}}</td>
    <td id="texst">{{$staff->staffid}}</td>

@php
$attendancedatax=DB::table('dailyattendances')->where('month',$month)->where('year',$year)->where('staffname',$staff->staffname)->limit($daysinmonth)->get();
@endphp

@foreach($attendancedatax as $t)
@for($i=1;$i<=$daysinmonth;$i++)
<input type="hidden" id="loop" value="{{$i}}">
@endfor

<td><select id="mark" onchange="myFunction()"
style="padding: 0.25px;
    margin:0;
    color: #000;
    font-size: 12px;
    background: transparent;
    -webkit-appearance: none;
    border-radius:3px;"
>

<option selected value="{{$t->attendance}}">{{$t->attendance}}</option>
@if($t->attendance != 'P')
{
<option value="{{$t->id}}P">P</option>
}
@endif
  <option value="{{$t->id}}CL">CL</option>
  <option value="{{$t->id}}ML">ML</option>
  <option id="{{$t->id}}AB" value="{{$t->id}}AB">A</option>
</select> <input type="hidden" class="hiddenalways" value="{{$t->id}}"></td>
@endforeach

	</tr>
    @endforeach

	</table>
</div>
    <br>

    <!--		Start Pagination -->
    <div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->

    <script src="{{ url('assets/js') }}/jquery.min.js"></script>



    <script type="text/javascript">

$(function () {
 $('[data-toggle="popover"]').popover()
})
    $(document).on('change','#mark',function(){
        var a=this.value;

        var onename = $(this).closest('#datax').find('#hiddenalways').val();
        var qw = $(this).closest('#datax').find('#qw').val();




        $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });


         $.ajax({
           method:"POST",
           url:"/attendancetostaff",
           data:{
               'a':a,
               'onename':onename,

           },

           //success: function (response){
             //  alert(response.status);
           //},


         });

    })
</script>

<script>
$( document ).ready(function() {
    var sel = $(this).closest('#sele').find('#ds').val();

});
</script>
    @endsection
