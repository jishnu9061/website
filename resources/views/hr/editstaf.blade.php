@extends('layouts.hmsmain')
@section('content')
    @if (Session::has('detailupdate'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('detailupdate') }}
        </div>
    @endif

    <div class="container">
        <h4 id="hdtpa"><b>Manage {{ $users->name }} [{{ $users->uniqueid }}]</b></h4>
        <br>
    </div>
    <br>
    <h4>Basic Details</h4>
    <br>
    <div class="container">
      <form method="post" action="{{url('editstafff')}}" id="form">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1"  class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$users->name}}" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="" value="{{$users->email}}" name="email">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="" name="phoneno" id="username" value="{{$users->phone}}" >
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" class="form-control" placeholder="" name="age" id="age" value="{{$users->age}}">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password" value="" id="password" placeholder="Password">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="conpassword" value="" id="confirm_password" placeholder="Confirm Password">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date of Joining</label>
                    <input type="date" class="form-control" placeholder="" name="date_of_joining" id="date_of_joining" value="{{ date('d-m-Y',strtotime($users->date_of_joining))}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--- select ---</option>
                        {{-- @foreach($users as $user)
                       
                                            <option value="{{$department->id}}" {{ ($department->id == $users->departments) ? "selected" : "" }} > {{ $department->depname }}</option>
                                        @endforeach --}}
                    </select>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Departments</label>
                    <select class="form-select" aria-label="Default select example" name="medname">
                        <option selected>--- select ---</option>
                        <option value="">Select</option>
                            @foreach($departments as $department)
                              <option value="{{$department->id}}" {{ ($department->id == $users->departments) ? "selected" : "" }} > {{ $department->depname }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Roles</label>
                    <select class="form-select" aria-label="Default select example" name="rolename">
                      @if($users->role != ''))
                      <option selected>{{$users->role}}</option>
                  @endif
                  @foreach($roles as $role)
                      <option  class="dropdown-item" value="{{$role->name}}">{{$role->name}}</option>
                  @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                      @foreach ($staffstatus as $key )
                      <option value="{{ $key->status}}" {{ ($key->status == $users->status) ? "selected" : "" }}>{{ $key->name}}</option>
                  @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status Date</label>
                    <input type="date" class="form-control" placeholder="" value="{{date('d-m-Y',strtotime($users->releving_date))}}">
                </div>
            </div>
        </div>
    </div>
    <br>
    <h4>Address</h4>
    <br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Postal Address</label>
                    <input type="text" class="form-control" placeholder="" name="address" value="{{$users->address}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Branch</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--- select ---</option>
                        <option value="1">Nairobi</option>

                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Postal Cide</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Town / City</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--- select ---</option>
                        <option value="1">Nairobi</option>

                    </select>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h4>Account Details</h4>
    <br>


    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Basic Salary (Kshs)</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Partners Drawing</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">N.S.S.F Number</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">N.H.I.F Number</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CRA PIN Number</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Should be Tax ?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Yes</option>
                        <option value="1">No</option>

                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Payroll deductions</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>From Salary</option>
                        <!-- <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option> -->
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Company NSSF Contribution</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Deduct by Company</option>
                        <!-- <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option> -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Leave Days Per Year</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pension Rate (as % of Basic)</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>5</option>
                        <!-- <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option> -->
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">

                </div>
            </div>
            <div class="col">
                <div class="mb-3">

                </div>
            </div>
        </div>
    </div>
    <br>
    <h4>Bank Details</h4>
    <br>

    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bank Name</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--- select ---</option>
                        <option value="1">UBA Kenya Bank Ltd</option>
                        <option value="2">Co-operative Bank</option>
                        <option value="3">Suntra Inverstment Bank Ltd</option>
                        <option value="3">Sterling Inverstment Bank Ltd</option>
                        <option value="3">Prime Bank</option>
                        <option value="3">Paramount Bank</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Account Number</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Branch</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Branch Code</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <br>


        <div class="container">
            <div class="row align-items-start">
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary">Update</button>
                    <span class="m-2"></span>
                    <button type="button" class="btn btn-primary" onclick="history.back();">Cancel</button>
                </div>
            </div>
          </form>
          {{ Session::forget('detailupdate')}}
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#password, #confirm_password').on('keyup', function () {
  var v=$('#password').val();
  var b=$('#confirm_password').val()
  if(v!=b)
  {
    $('#test').html('Not Matching').css('color', 'red');
  }
  else
  {
     $('#test').html('Matching').css('color', 'green');
  }
  if ($('#password').val() == $('#confirm_password').val()) {

    $('#message').html('Matching').css('color', 'green');
  } else
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phoneno:{
              required:true
            }
            number: {
                required: true,
                digits: true

            },
        },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
    });
    });
    </script>    
    @endsection
