@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('detailupdate'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('detailupdate')}}
            </div>
        @endif
        <h4 id="hdtpa"><b>Manage {{$users->name}} [{{$users->uniqueid}}]</b></h4>
    </div>
    <h6>Basic Details</h6>
    <hr class="mb-4">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="{{url('editstafff')}}" id="form">
	                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Staff Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="name" id="username" value="{{$users->name}}" placeholder="Name" required>
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
                                    <input type="hidden" value="{{$users->id}}" name="id">
                                    <input type="email" class="form-control" name="email" id="email" value="{{$users->email}}" placeholder="Email" required>
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
                                        <input type="number" class="form-control" name="phoneno" id="username" value="{{$users->phone}}" placeholder="Phone no" required min="0" max="9999999999">
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
                                        <input type="number" class="form-control" name="age" id="age" value="{{$users->age}}" placeholder="Age" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Age is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Change Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="password" class="form-control" name="password" value="" id="password" placeholder="staff Password">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Password is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="password" class="form-control" name="conpassword" value="" id="confirm_password" placeholder="Confirm Password">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                    </div>
                            </div>
                            <div id="test" style="height:20px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <textarea class="form-control" name="address" col="2">{{$users->address}}</textarea>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Date Of Joining</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input class="form-control" type="text" name="date_of_joining" id="date_of_joining" value="{{ date('d-m-Y',strtotime($users->date_of_joining))}}">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Passeord is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <label>Sex:&nbsp;</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineCheckbox1"
                                    value="Male">
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineCheckbox1"
                                    value="Female">
                                <label class="form-check-label" for="inlineCheckbox1">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineCheckbox1"
                                    value="Other">
                                <label class="form-check-label" for="inlineCheckbox1">Other</label>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                        <div style="height:50px;"></div>
                        <h6>Salary And Allowances</h6>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Salary</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="number" class="form-control" name="salary" value="{{$users->salary}}" id="username" placeholder="Salary" min="0">
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
                                            <input type="number" class="form-control" name="yearsexp" value="{{$users->yearsexp}}" id="username" placeholder="Experience" min="0" max="70">
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
                                        <input type="date" class="form-control" name="dob" id="username" value="{{$users->dob}}" placeholder="DOB">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                dob is required.
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Session::forget('staffregistered')}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Bank Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="bankname" value="{{$users->bank}}" id="username" placeholder="Bank Name">
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
                                            <input type="number" class="form-control" name="accountnumber" value="{{$users->account_no}}" id="username" placeholder="Account Number" min="0">
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
                                                <input type="text" class="form-control" name="isfc" id="username" value="{{$users->ifsc}}" placeholder="Ifsc Code">
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
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <table class="table">
                                                        <tr>
                                                            @foreach($leavetype as $data)
                                                                <td>{{$data->leave_type}}
                                                                <input type="hidden" name="leave_type[]" value="{{$data->id}}"></td>
                                                                <td><input type="number" class="form-control" name="leaves[]" value="{{$data->allotted_leaves}}" min="0" max="365" width="auto"></td>
                                                            @endforeach
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<div style="height: 50px;">

</div>
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
                    <div class="input-group-prepend">
                    </div>
                    <select class="form-control" name="status" id="status">

                        @foreach ($staffstatus as $key )
                            <option value="{{ $key->status}}" {{ ($key->status == $users->status) ? "selected" : "" }}>{{ $key->name}}</option>
                        @endforeach
                        <div class="invalid-feedback" style="width: 100%;">
                        </div>
                    </select>
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Status Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" name="status_date" id="status_date" class="form-control" value="{{date('d-m-Y',strtotime($users->releving_date))}}">
                    {{-- <select class="form-control" name="status_date" id="status_date">
                        @foreach ($users as $key )
                            <option value="{{ $key->releving_date}}">{{ $key->releving_date}}</option>
                        @endforeach
                        <div class="invalid-feedback" style="width: 100%;">
                        </div>
                    </select> --}}
                </div>
        </div>
    </div>
</div>
        <hr class="mb-4">

        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Update Details</button>

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
