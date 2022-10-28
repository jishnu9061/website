@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('staffregistered'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('staffregistered')}}
            </div>
        @endif
        @if(Session::has('leavevalidat'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('leavevalidat')}}
            </div>
        @endif
          {{-- heading --}}
    <h4 id="hdtpa"><b>Add staffs</b></h4>
    <br><br>
        
        <hr class="mb-4">
    </div>
    <h6>Basic Details</h6>
    <hr class="mb-4">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="{{url('addthestaffs')}}" id="form">
	                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Staff Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="name" id="username" placeholder="Name" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Name is required.
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Staff Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                                <input type="email" class="form-control" name="email" id="username" placeholder="Email" required>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Policy No is required.
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Staff Phone number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <input type="number" class="form-control" name="phoneno" id="username" placeholder="Phone no" required min="0" max="9999999999">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Phone No: is required.
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-1">
                                            <label for="username">Age</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                        <input type="number" class="form-control" name="age" id="age" placeholder="Age" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Age is required.
                                                            </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="staff Password" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Passeord is required.
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Confirm Password</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                                <input type="password" class="form-control" name="password" id="confirm_password" placeholder="Confirm Password" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                            </div>
                                                        </div>
                                                </div>
                                               <div id="test" style="height:20px;"></div>
                                            </div>
                                    </div>
                                    <label for="username">Address</label>
                                        <textarea class="form-control" name="address"></textarea>
                                            <div id="test" style="height:20px;"></div>
                                            <div class="row">
                                            {{-- <div id="test" style="height:20px;"></div> --}}
                                                {{-- <div class="form-group col-md-4">
                                                <label for="username">Roles</label>
                                                    <div class="form-group col-md-4">
                                                        <select class="custom-select my-1 mr-sm-2 btn btn-secondary dropdown-toggle me-2" name="rolename" id="inlineFormCustomSelectPref">
                                                            <option value="">Select</option>
                                                            @foreach($roles as $role)
                                                                <option  class="dropdown-item" value="{{$role->rolename}}">{{$role->rolename}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div> --}}
                                                    {{-- <div class="form-group col-md-5">
                                                        <label for="username">Departments</label>
                                                            <div class="form-group col-md-5">
                                                                <select class="custom-select my-1 mr-sm-2 btn btn-secondary dropdown-toggle me-2" name="depname" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select</option>
                                                                    @foreach($departments as $department)
                                                                        <option  class="dropdown-item" value="{{$department->id}}">{{$department->depname}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                    </div> --}}
                                                    <div class="form-group col-md-7">
                                                        <label for="username">Date Of Joining</label>
                                                        <div class="form-group col-md-7">
                                                                <input type="date" class="form-control" name="date_of_joining" id="date_of_joining" placeholder="" min="0">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group col-md-7">
                                                        <label for="username">Consulatation Fees</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                    <input type="number" class="form-control" name="cons_fee" id="cons_fee" placeholder="" min="0">
                                                                    <div class="invalid-feedback" style="width: 100%;"></div>
                                                            </div>
                                                    </div> --}}
                                                            <div class="col-md-4 col-lg-2">
                                                                <p class="card-title"><b>Sex</b></p>
                                                                    <div class="card-body">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="patienthere" value="male" id="flexRadioDefault1">
                                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                                    Male
                                                                                </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="patienthere" value="female" id="flexRadioDefault1"checked>
                                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                                    Female
                                                                                </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="patienthere" value="others" id="flexRadioDefault1" checked>
                                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                                    Others
                                                                                </label>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div style="height:50px;">
                                                    </div>
                                                    <h6>Salary And Allowances</h6>
                                                    <hr class="mb-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Salary</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                                <input type="number" class="form-control" name="salary" id="username" placeholder="Salary" min="0">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Salary is required.
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Years of experience</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"></div>
                                                                                    <input type="number" class="form-control" name="yearsexp" id="username" placeholder="Experience" min="0" max="70">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Years of experience is required.
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">D.O.B</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"></div>
                                                                                    <input type="date" class="form-control" name="dob" id="username" placeholder="DOB">
                                                                                        <div class="invalid-feedback" style="width: 100%;">
                                                                                            dob is required.
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                {{ Session::forget('staffregistered')}}
                                                                {{ Session::forget('leavevalidat')}}
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-1">
                                                                            <label for="username">Bank Name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"></div>
                                                                                <input type="text" class="form-control" name="bankname" id="username" placeholder="Bank Name">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Bank Name is required.
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-1">
                                                                            <label for="username">Account Number</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                        <input type="number" class="form-control" name="accountnumber" id="username" placeholder="Account Number" min="0">
                                                                                        <div class="invalid-feedback" style="width: 100%;">
                                                                                            Account number is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="mb-1">
                                                                                <label for="username">IFSC code</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                        <input type="text" class="form-control" name="ifsc" id="username" placeholder="Ifsc Code">
                                                                                        <div class="invalid-feedback" style="width: 100%;">
                                                                                            IFSC Code is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="mb-1">
                                                                                <br>
                                                                                    <h6>No: of Leaves(Annual)</h6>
                                                                                    <div id="messagelev" style="height:20px; float:right;padding-bottom:10px;height:30px;"></div>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-prepend"></div>
                                                                                                <table class="table">
                                                                                                    <tr>
                                                                                                        @foreach($leavetype as $data)
                                                                                                            <td>{{$data->leave_type}}
                                                                                                                <input type="hidden" name="leave_type[]" value="{{$data->id}}"></td>
                                                                                                                <td><input type="number" class="form-control leaves" name="leaves[]" value="0" min="0" max="365" width="auto"></td>
                                                                                                        @endforeach
                                                                                                    </tr>
                                                                                                </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div style="height: 50px;"></div>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-lg-4">
                                                                                    <p><b>Fixed Allowances</b></p>
                                                                                    <table class="table table-bordered">
                                                                                        <tbody>
                                                                                            @foreach($allowancedata as $data)
                                                                                                <tr>
                                                                                                    <td>{{$data->allowancename}}</td>
                                                                                                        <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
                                                                                                        <td><input type="checkbox" class="checkz" name="allowz[]" value="{{$data->id}}"></td>
                                                                                                </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="col-md-4 col-lg-4">
                                                                                    <p><b>Non-Fixed Allowances</b></p>
                                                                                        <table class="table table-bordered">
                                                                                            <tbody>
                                                                                                @foreach($nonfixdallowancedata as $data)
                                                                                                    <tr>
                                                                                                        <td>{{$data->allowancename}}</td>
                                                                                                        <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
                                                                                                        <td><input type="number" class="checkz" name="nonfx[]" min="0" value="0"></td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                </div>
                                                                                <div class="col-md-4 col-lg-4">
                                                                                    <p><b>Deductions</b></p>
                                                                                        <table class="table table-bordered">
                                                                                            <tbody>
                                                                                                @foreach($deductiondata as $data)
                                                                                                    <tr>
                                                                                                        <td>{{$data->allowancename}}</td>
                                                                                                        <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
                                                                                                        <td><input type="checkbox" class="checkz" name="category[]" value="{{$data->id}}"></td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="mb-1">
                                                                                        <label for="username">Staff Status</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-prepend"></div>
                                                                                                <select class="form-control" name="status" id="status">
                                                                                                    <option value="">Select</option>
                                                                                                        @foreach ($staffstatus as $key )
                                                                                                            <option value="{{ $key->status}}">{{ $key->name}}</option>
                                                                                                        @endforeach
                                                                                                        <div class="invalid-feedback" style="width: 100%;"></div>
                                                                                                </select>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="mb-1">
                                                                                        <label for="username">Status Date</label>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-prepend"></div>
                                                                                                <input type="date" class="form-control" name="releving_date" id="releving_date">
                                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                                    </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="mb-4">
                                                                            <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add staffs</button>
                                                                        </div>
                                                                    </div>
                </form>
</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
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
<script>

 $('.leaves').on('keyup', function () {
    var total = 0;
    $('.leaves').each(function (index, element) {
        total = total + parseFloat($(element).val());
    });
   if(total >365)
   {
    $('#messagelev').html('No ' + total +' days in a Year').css('color', 'red');
   }
   else
   {
    $('#messagelev').html('');
   }


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
