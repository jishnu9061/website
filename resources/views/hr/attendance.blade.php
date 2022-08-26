@extends('layouts.hmsmain')
@section('content')
@if(Session::has('attendanceuploded'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('attendanceuploded')}}
   </div>
                          
@endif
<form method="POST" action="{{route('importProject')}}" enctype="multipart/form-data">
   @csrf
<div class="container" style="background-color: #eaeeff;padding: 50px;">	
<div class="row" id="data">
<label>Upload Csv</label>

	<div class="col-md-6 col-lg-6">
	<input type="file" class="form-control" id="months" name="file" placeholder="Upload Csv">	
	
	</div>
	<div class="col-md-6 col-lg-6">
	<button type="submit" id="submitloan" class="btn btn-primary btn-block">Submit</button>

	</div>

</div>
<br>

</div>
</form>
@endsection