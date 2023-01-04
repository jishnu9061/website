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
    <div class="container">
        <form method="post" action="{{ url('editstafff') }}" id="form">
            @csrf
            <div class="row">
                    <h5><u>Basic Details</u></h5>
                    <br>
                    <input type="hidden" name="id" value="{{$users->id}}">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" id="address" value="{{$users->email}}"  value="" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="phoneno" id="phone_no" value="{{$users->phoneno}}"  value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Age</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="age" id="age" value="{{$users->age}}"  min="0"
                                    max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="password" value="{{$users->password}}"  id="password"
                                    placeholder="staff Password" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Confirm Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="password" value="{{$users->password}}"  id="confirm_password"
                                    placeholder="Confirm Password" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                            <div id="test" style="height:20px;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Date Of Joining</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" value="{{$users->date_of_joining}}"  name="date_of_joining"
                                    id="password" placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Gender:&nbsp;</label>
                            <select class="form-select" aria-label="Default select example"  name="sex">
                                <option value="">{{$users->sex}}</option>
                                <option>Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Departments:&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" value=""  name="departments">
                                <option value="">{{$users->departments}}</option>
                                <option selected>Select</option>
                                <option value="Legal Department">Legal Department</option>
                                <option value="HR Department">HR Department</option>
                                <option value="Account Department">Account Department</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Roles&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="">{{$users->role}}</option>
                                <option>Select</option>
                                <option value="Active">HR Manager</option>
                                <option value="Inactive">Jr.Advocate</option>
                                <option value="Resigned">Sr.Advocate</option>
                                <option value="Suspended">Hr Executive</option>
                                <option value="Suspended">Receptionist</option>
                            </select>
                        </div>
                        {{-- <div id="test" style="height:20px;"></div> --}}
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Status:&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="">{{$users->status}}</option>
                                <option selected>Select</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Resigned">Resigned</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Status Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" value="{{$users->status_date}}"  name="status_date"
                                    id="password" placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <h5><u>Address</u></h5>
                    <br>
                    <br>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Postal Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="{{$users->address}}"  name="address" id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Branch</label>
                            <select class="form-select" aria-label="Default select example" value=""  name="branch">
                                <option value="">{{$users->branch}}</option>
                                <option selected>Select</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Nakuru
                                ">Nakuru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Postal Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="postal_code" value="{{$users->postal_code}}"  id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Town/City</label>
                            <select class="form-select" aria-label="Default select example" value=""  name="town">
                                <option value="">{{$users->name}}</option>
                                <option selected>Select</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Nakuru">Nakuru</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <h5><u>Account Details</u></h5>
                    <br>
                    <br>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Basic Salary(Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="salary" value="{{$users->salary}}"  id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Partners Drawing</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="partner" value="{{$users->partner}}"  id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>N.S.S.F Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="NSSF" value="{{$users->NSSF}}"  id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>N.H.I.F Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="NHIF" value="{{$users->NHIF}}"  id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>CRA PIN Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="cra_pin" value="{{$users->cra_pin}}"  id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Should be taxed?</label>
                            <select class="form-select" aria-label="Default select example" value="{{$users->tax}}"  name="tax">
                                <option selected value="Yes">Yes</option>
                                <option value="Active">N0</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Payroll Deductions</label>
                            <select class="form-select" aria-label="Default select example" value="{{$users->deduction}}"  name="deduction">
                                <option selected value="From Salary">From Salary</option>
                                {{-- <option value="Active">N0</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Company NSSF Contribution</label>
                            <select class="form-select" aria-label="Default select example" value=""  name="contribution">
                                <option value="">{{$users->contribution}}</option>
                                <option selected value="Deduct From Company">Deduct From Company</option>
                                <option value="Active">Nairobi</option>
                                <option value="Inactive">Mombasa</option>
                                <option value="Resigned">Kisumu</option>
                                <option value="Suspended">Nakuru</option> --}}
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Leave Days per Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="leave" value="{{$users->leave}}"  id="name"
                                    value="21" disabled>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Pension Rate(as % of Basic)</label>
                            <select class="form-select" aria-label="Default select example" value="{{$users->pension_rate}}"  name="pension_rate">
                                <option selected value="5%">5%</option>
                               <option value="Active">N0</option> 
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <h5><u>Bank Details</u></h5>
                    <br>
                    <br>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Bank Name</label>
                            <select class="form-select" aria-label="Default select example" value=""  name="bank">
                                <option >{{$users->name}}</option>
                                <option selected value="">Select</option>
                                <option value="UBA Kenya Bank Ltd">UBA Kenya Bank Ltd</option>
                                <option value="Inactive">The Co-operative Bank</option>
                                <option value="Resigned">Suntra Investment Bank Ltd</option>
                                <option value="Suspended">Sterling Investment Bank</option>
                                <option value="Suspended">Prime Bank</option>
                                <option value="Suspended">Paramount Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="{{$users->account}}"   name="account" id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Branch</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="{{$users->bank_branch}}"   name="bank_branch" id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Branch Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="{{$users->branch_code}}"   name="branch_code" id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
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
                        <button type="submit" class="btn btn-primary">Update</button>
                        <span class="m-2"></span>
                        <button type="button" class="btn btn-primary" onclick="history.back();">Cancel</button>
                    </div>
                </div>
        </form>
        {{ Session::forget('detailupdate') }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
@endsection
