@extends('layouts.hmsmain')
@section('content')
@if(Session::has('attendanceuploded'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('attendanceuploded')}}
   </div>
                          
@endif

{{-- heading --}}
   <h4 id="hdtpa"><b>Attendance CSV</b></h4>
   <br>
   <br>
<form method="POST" action="{{route('importProject')}}" enctype="multipart/form-data">
   @csrf
<div class="container">	
<div class="row" id="data">
  <label>Upload Csv</label>

	<div class="col-md-6 col-lg-6">
	<input type="file" class="form-control" id="months" name="file" placeholder="Upload Csv">	
	</div>
	

	 <div class="col-md-6">
	   <button type="submit" id="submitloan" class="btn btn-primary">Submit</button>
	 </div>
	

</div>
<br>

</div>
</form>
@endsection