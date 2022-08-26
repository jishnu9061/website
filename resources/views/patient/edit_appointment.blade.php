
@extends('layouts.hmsmain')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<div class="container">
    <div class="py-5 text-center">
        {{-- @if(Session::has('patientaltered'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('patientaltered')}}
            </div>
        @endif --}}
        <h2>Edit patient</h2>
        <p class="lead">just analize that human</p>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form action="{{url('update_appointment')}}" method="post" enctype="multipart/form-data">
                @csrf
                @foreach($edit_appointment as $data)
                <input type="hidden" id="id" name="appointmentid" value="{{$data->id}}">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <label for="username">Patient Id</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="pat_id" id="pat_id" value="{{$data->patientid}}" disabled>
                                    <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="username">Patient Name<span class="text-muted"></span></label>
                                <input type="username" class="form-control" name="pat_name" id="pat_name" value="{{$data->firstname}}" disabled>
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="email">Appointment Date&Time<span class="text-muted"></span></label>
                                    <input type="datetime-local" class="form-control" name="app_date" id="app_date" value="{{date(('Y-m-d\TH:i'),strtotime($data->appointmentdate))}}">
                                        <div class="invalid-feedback">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Department</label>
                                    <select class="form-control" id='sel_depart' name='sel_depart'>
                                        <option value='0'>Select department</option>
                                            @foreach($departments as $department)
                                                <option  class="dropdown-item" value="{{$department->depname}}" {{ ($department->depname == $data->Department) ? "selected" : "" }}>{{$department->depname}}</option>
                                            @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="address">Doctor</label>
                                <select class="form-control" id='sel_emp' name='sel_emp'>
                                    <option value='0'>Select Doctor</option>
                                    @foreach($users as $user)
                                                <option  class="dropdown-item" value="{{$user->id}}" {{ ($user->id == $data->doctor) ? "selected" : "" }}>{{$user->name}}</option>
                                            @endforeach
                                </select>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Update patient</button>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type='text/javascript'>

        $(document).ready(function(){

          // Department Change
          $('#sel_depart').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#sel_emp').find('option').not(':first').remove();

             // AJAX request
             $.ajax({
               url: 'getdoctordetails'+id,
               type: 'get',
               dataType: 'json',
               success: function(response){

                 var len = 0;
                 if(response['data'] != null){
                   len = response['data'].length;
                 }

                 if(len > 0){
                   // Read data and create <option >
                   for(var i=0; i<len; i++){

                     var id = response['data'][i].id;
                     var name = response['data'][i].name;

                     var option = "<option value='"+id+"'>"+name+"</option>";

                     $("#sel_emp").append(option);
                   }
                 }

               }
            });
          });

        });

        </script>
