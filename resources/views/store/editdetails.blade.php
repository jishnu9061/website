@extends('layouts.mainlayout')

@section('content')

{{-- <div class="main-container"> --}}
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="table-responsive">
					<div class="pd-20 card-box mb-30">

						@php
							var_dump($supplay);
							die;
						@endphp
						{{-- <form action="{{ route('patient_update',$id)}}" method="PATCH" > --}}
							<form action="{{ url('patient_update/'.$patient->id) }}" method="POST">
							@csrf
						
						
							  <div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Patient Name</label>
									  <div class="col-sm-12 col-md-10">
									{{-- <input type="hidden" name="id" value="{{ $patient->id }}" class="form-control" id="" aria-describedby="" placeholder=""> 
										<input name="id" type="hidden" value="PATCH">  --}}
											  <input type="text" name="patient_name" value="{{ $patient->patient_name }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Address</label>
									  <div class="col-sm-12 col-md-10">
											  <input type="text" name="address" value="{{ $patient->address }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Age</label>
									  <div class="col-sm-12 col-md-10">
											  <input type="number" name="age" value="{{ $patient->age }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Sex</label>
									  <div class="col-sm-12 col-md-10">
											  <input type="text" name="sex" value="{{ $patient->sex }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Blood Group</label>
									  <div class="col-sm-12 col-md-10">
										<select class="form-control" name="blood" required="" value="">
											<option value="{{ $patient->blood_group }}">{{ $patient->blood_group }}</option> 
											@foreach($bloodgroups as $row)
									  		<option value="{{$row->blood_groups}}">
												{{$row->blood_groups}}
											</option>
                      						@endforeach
                					
											</select>	
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Mobile</label>
									  <div class="col-sm-12 col-md-10">
											  <input type="number" name="mobile" value="{{ $patient->mobile }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Email</label>
									  <div class="col-sm-12 col-md-10">
											  <input type="text" name="email" value="{{ $patient->email }}" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" >Submit</button>
								<button type="button" class="btn btn-primary" onclick="goBack()">Cancel</button>
							</div>
							 
						</form>
					</div>
				</div>
				</div>
			
		</div>
	</div>
{{-- </div> --}}
<!-- Default Basic Forms End -->
<script>
  function goBack() 
  {
    window.history.back();
  }
</script>


@endsection