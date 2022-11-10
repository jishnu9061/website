@extends('layouts.hmsmain')
@section('content')
<div class="container">
        @if(Session::has('detailupdate'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('detailupdate')}}
            </div>
        @endif
 
  {{ Session::forget('detailupdate')}}
</div>
    <div class="container">
        <form method="post" action="{{ url('editstafff') }}" enctype="multipart/form-data">
           
    </div>
@csrf
<br><br>
<h4 id="hdtpa"><b>Edit {{$users->name}} [{{$users->uniqueid}}]</b></h4><br>
<div class="row">
    <br>
    <h5><u>Basic Details</u></h5>
    <br>
    <br>
    <div class="col-md-4">
        <div class="mb-1">
            <label>Name</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="text" class="form-control" name="name" id="username" value="{{$users->name}}" placeholder="Name" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label>Email</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="hidden" value="{{$users->id}}" name="id">
                                    <input type="email" class="form-control" name="email" id="email" value="{{$users->email}}" placeholder="Email" required>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label>Phone Number</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="number" class="form-control" name="phoneno" id="username" value="{{$users->phone}}" placeholder="Phone no" required min="0" max="9999999999">
                                            <div class="invalid-feedback" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Age</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="number" class="form-control" name="age" id="age" value="{{$users->age}}" placeholder="Age" min="0" max="99">
                                        <div class="invalid-feedback" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-1">
            <label for="username">Password</label>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="staff Password" required>
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
                <input type="password" class="form-control" name="password" id="confirm_password"
                    placeholder="Confirm Password" required>
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
                <textarea class="form-control" name="address">
                    {{$users->address}}
                </textarea>
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
            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1" {{ ($users->sex == 'male') ? "checked" : "" }}>
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="patienthere" id="flexRadioDefault1"
            {{ ($users->sex == 'female') ? "checked" : "" }} >
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineCheckbox1"
                value="Other">
            <label class="form-check-label" for="inlineCheckbox1">Other</label>
        </div>
    </div>
</div>
<div style="height:25px;">
</div>
<div class="row">
  <h5><u>Salary and Allowances</u></h5>
  <div class="col-md-4">
      <div class="mb-1">
          <label for="username">Salary</label>
          <div class="input-group">
              <div class="input-group-prepend"></div>
              <input type="number" class="form-control" name="salary" id="username"
                  placeholder="Salary" min="0">
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
              <input type="number" class="form-control" name="yearsexp" id="username"
                  placeholder="Experience" min="0" max="70">
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
              <input type="date" class="form-control" name="dob" id="username"
                  placeholder="DOB">
              <div class="invalid-feedback" style="width: 100%;">
                  dob is required.
              </div>
          </div>
      </div>
  </div>
</div>
{{ Session::forget('staffregistered') }}
{{ Session::forget('leavevalidat') }}
<div class="row">
<div class="col-md-4">
    <div class="mb-1">
        <label for="username">Bank Name</label>
        <div class="input-group">
            <div class="input-group-prepend"></div>
            <input type="text" class="form-control" name="bankname" id="username"
                placeholder="Bank Name">
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
            <input type="number" class="form-control" name="accountnumber" id="username"
                placeholder="Account Number" min="0">
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
            <input type="text" class="form-control" name="ifsc" id="username"
                placeholder="Ifsc Code">
            <div class="invalid-feedback" style="width: 100%;">
                IFSC Code is required.
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="mb-1">
        <br>
        <h5><u>No: of Leaves(Annual)</u></h5>
        <div id="messagelevave" style="width:20px; float:right;padding-bottom:10px;height:30px;">
        </div>
        <div class="input-group">
            <div class="input-group-prepend"></div>
            <table class="table" style="width:65%">
                <tr>
                    @foreach ($leavetype as $data)
                        <td>{{ $data->leave_type }}
                            {{-- <input type="text" name="leave_type[]"
                                value="{{ $data->id }}"> --}}
                        </td>
                        <td><input type="number" class="form-control leaves" name="leaves[]"
                                value="0" min="0" max="365" width="auto">
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
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
                        <div class="invalid-feedback" style="width:60%;">
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
<div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">

    </div>
    <div class="col-sm">
        <br>
        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
        <button type="button" class="btn btn-primary float:left" onclick="history.back()"
            Style="width:45%;" data-dismiss="modal">Cancel</button>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
$('#password, #confirm_password').on('keyup', function() {
var v = $('#password').val();
var b = $('#confirm_password').val()
if (v != b) {
$('#test').html('Not Matching').css('color', 'red');
} else {
$('#test').html('Matching').css('color', 'green');
}
if ($('#password').val() == $('#confirm_password').val()) {

$('#message').html('Matching').css('color', 'green');
} else
$('#message').html('Not Matching').css('color', 'red');
});
</script>
<script>
$('.leaves').on('keyup', function() {
var total = 0;
$('.leaves').each(function(index, element) {
total = total + parseFloat($(element).val());
});
if (total > 365) {
$('#messageleave').html('No ' + total + ' days in a Year').css('color', 'red');
} else {
$('#messageleave').html('');
}


});
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$('#form').validate({
rules: {
  name: {
      required: true
  },
  email: {
      required: true,
      email: true
  },
  phoneno: {
      required: true
  }
  number: {
      required: true,
      digits: true

  },
},
errorElement: 'span',
errorPlacement: function(error, element) {
  error.addClass('invalid-feedback');
  element.closest('.form-group').append(error);
},
highlight: function(element, errorClass, validClass) {
  $(element).addClass('is-invalid');
},
unhighlight: function(element, errorClass, validClass) {
  $(element).removeClass('is-invalid');
}
});
});
</script>
<script>
$(function() {
$("#allpatients").dataTable();
})
</script>
<script>
$(document).on('click', '#stafedit', function() {
//var itemvalue = $(this).val();
var t_id = $(this).closest('#data').find('#t_id').val();
var t_name = $(this).closest('#data').find('#t_name').text();
var t_role = $(this).closest('#data').find('#t_role').text();
var t_department = $(this).closest('#data').find('#t_department').text();
var t_email = $(this).closest('#data').find('#t_email').text();
var t_phone = $(this).closest('#data').find('#t_phone').text();
var t_sex = $(this).closest('#data').find('#t_sex').text();
var t_dob = $(this).closest('#data').find('#t_dob').text();


$("#Id").val(t_id);
$("#Name").val(t_name);
$("#Role").val(t_role);
$('#Phone').val(t_phone);
$("#Email").val(t_email);
$("#Salary").val(driver_n);
$("#Experience").val(driver_n);
$("#Department").val(t_department);
$("#Sex").val(t_sex);
$("#Dob").val(t_dob);


});
</script>
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
