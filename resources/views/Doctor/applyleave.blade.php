@extends('layouts.hmsmain')
@section('content')
@if(Session::has('leavesapplied'))
   <div class="alert alert-dark" role="alert">
   {{ Session::get('leavesapplied')}}
   </div>                      
@endif
<form action="{{url('appliedleave')}}" method="post">
	@csrf
<div class="row">
	<div class="col-md-6">
		<p>From</p>
		<hr class="mb-4">
		<input type="date" class="form-control" name="from" placeholder="">
	</div>
	<div class="col-md-6">
		<p>To</p>
		<hr class="mb-4">
		<input type="date" class="form-control" name="to">
	</div>
	
</div>
<br>
<p>Leave Type</p>
<hr class="mb-4">
<div class="p-3" style="text-align: center;">
<div class="row">
<select name="getleav" class="form-control">
@foreach($leavedata as $leave)
<option value="{{$leave->id}}">{{$leave->leave_type}}[{{$leave->leaves_left}}]</option>
@endforeach
</select>
</div>
</div>

     <div  style="padding-top: 6px;">
      <p>Leave application</p>
	  <hr class="mb-4">
     <textarea class="form-control" name="application" style="height: 200px;" required=""> 
     </textarea>
    </div>
    <div class="row">
	<div class="col-md-8">

	</div>
	<div class="col-md-4" style="padding-top: 8px;">	
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</div>
	
</div>
</form>
 {{ Session::forget('leavesapplied')}}
 <script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
	 $(".test").change(function(){
        $('.test').each(function() {
			alert('d');
          $(this).prop('selected',true);
       });
	 });
	
</script>
@endsection