@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Manage Staffs</a>
</nav>
<br><br>
    <style>
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #010305;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #f1d9b0;
        }

        .pagination>.active>span {
            z-index: 3;
            color: rgb(5, 4, 4);
            cursor: default;
            background-color: #f1d9b0;
            border-color: #f1d9b0;
        }

        .pagination {
            margin: 0;
        }

        .pagination li:hover {
            cursor: pointer;
        }

        .header_wrap {
            padding: 30px 0;
        }

        .num_rows {
            width: 20%;
            float: left;
        }

        .tb_search {
            width: 20%;
            float: right;
        }

        .pagination-container {
            width: 70%;
            float: left;
        }

        .rows_count {
            width: 30%;
            float: right;
            text-align: right;
            color: #999;
        }
    </style>
    <div class='container'>
        <h4 id="hdtpa"><b>Staff Details</b></h4><br>
        <a type="button" class="btn btn-primary" href="{{ url('add_staff') }}">Add New Staff</a>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="form-group">
                    <!-- Show Numbers Of Rows -->
                    <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="5000">Show ALL Rows</option>
                    </select>
                </div>
            </div>
            <div class="tb_search">
                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                    class="form-control">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-class" id="table-id">
                <thead>
                    <tr class="text-center">
                        <!-- <th>Sl No</th> -->
                        <th>User Id</th>
                        <th>user Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allusers as $alluser)
                        <tr class="text-center">
                            <input id="t_id" type="hidden" value="{{ $alluser->id }}">
                            <td>{{ $alluser->uniqueid }}</td>
                            <td>{{ $alluser->username }}</td>
                            <td>{{ $alluser->email }}</td>
                            <td>
                                <a href="{{ url('view_staff_details', $alluser->id) }}"> <i
                                        style="color:rgb(13, 1, 56);"class="fa fa-eye"></i><span class="m-1"></span>
                                    <a href="{{ url('edit_staff_details', $alluser->id) }}"> <i
                                            style="color:rgb(13, 1, 56);"class="fa fa-edit"></i><span class="m-1"></span>
                        </tr>
                    @endforeach
                <tbody>
            </table>
        </div>
        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <li data-page="prev">
                        <span>
                            < <span class="sr-only">(current)
                        </span></span>
                    </li>
                    <li data-page="next" id="prev">
                        <span> > <span class="sr-only">(current)</span></span>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="rows_count"></div>
        <!-- 		End of Container -->
    </div>

    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>Add Staff Details</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('addthestaffs') }}" enctype="multipart/form-data">
                            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
                            <!-- --------------------------------------image------------------------------------------------->



                            <!--
                                                                                                                            <label>add logo</label>
                                                                                                                            <div class="input-group">
                                                                                                                                <div class="custom-file">
                                                                                                                                   <input type="file"name="image"class="custom-file-input">
                                                                                                                                   <label class="custom-file-label">choose file</label> -->
                    </div>
                </div>
                <!-- --------------------------------------image------------------------------------------------->

                @csrf
                <div class="row">
                    <h5><u>Basic Details</u></h5>
                    <br>
                    <br>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="name" value=""
                                    required>
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
                                <input type="email" class="form-control" name="email" id="address" value=""
                                    required>
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
                                <input type="text" class="form-control" name="phoneno" id="phone_no" value="">
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
                                <input type="number" class="form-control" name="age" id="age" min="0"
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
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="staff Password" required>
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
                                <input type="password" class="form-control" name="password" id="confirm_password"
                                    placeholder="Confirm Password" required>
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
                                <input type="date" class="form-control" name="date_of_joining" id="password"
                                    placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Gender:&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" name="sex">
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
                            <select class="form-select" aria-label="Default select example" name="departname">
                                <option>select</option>
                                @if (count($get_department))
                                    @foreach ($get_department as $list_department)
                                        <option value="{{ $list_department->id }}">{{ $list_department->department_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Roles&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option>select</option>
                                @if (count($get_role))
                                    @foreach ($get_role as $list_role)
                                        <option value="{{ $list_role->id }}">{{ $list_role->role_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        {{-- <div id="test" style="height:20px;"></div> --}}
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Status:&nbsp;</label>
                            <select class="form-select" aria-label="Default select example" name="status">
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
                                <input type="date" class="form-control" name="status_date" id="password"
                                    placeholder="staff Password">
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
                                <input type="text" class="form-control" name="address" id="name"
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
                            <select class="form-select" aria-label="Default select example" name="branch">
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
                                <input type="text" class="form-control" name="postal_code" id="address"
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
                            <select class="form-select" aria-label="Default select example" name="town">
                                <option>select</option>
                                @if (count($get_town))
                                    @foreach ($get_town as $list_city)
                                        <option value="{{ $list_city->id }}">{{ $list_city->Town_City }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <h5><u>Salary Details & Allowances</u></h5>
                    <br>
                    <br>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Basic Salary(Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="salary" id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Bank Name</label>
                            <select class="form-select" aria-label="Default select example" name="bank">
                                <option>select</option>
                                @if (count($get_bank))
                                    @foreach ($get_bank as $list_bank)
                                        <option value="{{ $list_bank->id }}">{{ $list_bank->bank_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="account" id="name"
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
                                <select name="bank_branch" id="address">
                                    <option>select</option>
                                    @if (count($get_bank))
                                        @foreach ($get_bank as $branch_list)
                                            <option value="{{ $branch_list->id }}">{{ $branch_list->bank_name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label>Bank Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="branch_code" id="address"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Should be taxed?</label>
                            <select class="form-select" aria-label="Default select example" name="tax">
                                <option selected value="Yes">Yes</option>
                                <option value="Active">N0</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Payroll Deductions</label>
                            <select class="form-select" aria-label="Default select example" name="deduction">
                                <option selected value="From Salary">From Salary</option>
                                {{-- <option value="Active">N0</option> --}}
                    {{-- </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Company NSSF Contribution</label>
                            <select class="form-select" aria-label="Default select example" name="NSSF_contribution">
                                <option selected value="Deduct From Company">Deduct From Company</option>
                                <option value="Active">Nairobi</option>
                                <option value="Inactive">Mombasa</option>
                                <option value="Resigned">Kisumu</option>
                                <option value="Suspended">Nakuru</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <h5><u>No. of Leaves (Annual)</u></h5>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($leavetype as $data)
                                <td> <input type="hidden" name="leave_type[]"
                                        value="{{ $data->id }} ">{{ $data->leave_type }}</td>
                                <td> <input type="number" class="form-control leaves" name="leaves[]" value="0"
                                        min="0" max="365"></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div style="height: 50px;"></div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <p><b>Fixed Allowances</b></p>
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach ($allowancedata as $data)
                                        <tr>
                                            <td>{{ $data->allowancename }}</td>
                                            <input type="hidden" name="{{ $data->allowancename }}"
                                                value="{{ $data->allowancename }}">
                                            <td><input type="checkbox" class="checkz" name="allowz[]"
                                                    value="{{ $data->id }}"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <p><b>Non-Fixed Allowances</b></p>
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach ($nonfixdallowancedata as $data)
                                        <tr>
                                            <td>{{ $data->allowancename }}</td>
                                            <input type="hidden" name="{{ $data->allowancename }}"
                                                value="{{ $data->allowancename }}">
                                            <td><input type="number" class="checkz" name="nonfx[]" min="0"
                                                    value="0"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <p><b>Deductions</b></p>
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach ($deductiondata as $data)
                                        <tr>
                                            <td>{{ $data->allowancename }}</td>
                                            <input type="hidden" name="{{ $data->allowancename }}"
                                                value="{{ $data->allowancename }}">
                                            <td><input type="checkbox" class="checkz" name="category[]"
                                                    value="{{ $data->id }}"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="mb-1">
                        <br>
                            {{-- <h6>No: of Leaves(Annual)</h6> --}}
                    {{-- <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                        <table class="table">
                                            <tr>
                                                @foreach ($leavetype as $data)
                                                    <td>
                                                        <input type="hidden" name="leave_type[]" value="{{$data->id}}"></td>
                                                        <td><input type="number" class="form-control leaves" name="leaves[]" value="0" min="0" max="365" ></td>
                                                @endforeach
                                            </tr>
                                        </table>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Bank Name</label>
                            <select class="form-select" aria-label="Default select example" name="bank">
                            <option>select</option>
                            @if (count($get_bank))
                                            @foreach ($get_bank as $list_bank)
                                            <option value="{{$list_bank->id}}">{{$list_bank->bank_name}}</option>
                                            @endforeach
                                          @endif
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="account" id="name"
                                    value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="mb-1">
                            <label>Branch</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                    <select name="bank_branch" id="address">
                                    <option>select</option>
                                    @if (count($get_bank))
                                            @foreach ($get_bank as $branch_list)
                                            <option value="{{$branch_list->id}}">{{$branch_list->bank_name}}</option>
                                            @endforeach
                                          @endif
                                    </select>

                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Upload CV</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file" class="form-control" name="cv" id=""
                                    placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Passport size Photograph</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file" class="form-control" name="photo" id=""
                                    placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Signature</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file" class="form-control" name="signature" id=""
                                    placeholder="staff Password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Passeord is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
            </form>
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
    {{-- <script>
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
    </script> --}}
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
