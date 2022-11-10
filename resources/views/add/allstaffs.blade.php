@extends('layouts.hmsmain')
@section('content')
    <style>
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
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
            width: 20%;
            float: right;
            text-align: right;
            color: #999;
        }
    </style>
    <h4 id="hdtpa"><b>Staff Details</b></h4><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Staff</button>
    <div class="header_wrap">
        <div class="num_rows">
            <div class="form-group">
                <!--		Show Numbers Of Rows 		-->
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
                <tr>
                    <!-- <th>Sl No</th> -->
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($allusers as $alluser)
                    <tr>
                        <input id="t_id" type="hidden" value="{{ $alluser->id }}">
                        <td>{{ $alluser->uniqueid }}</td>
                        <td>{{ $alluser->name }}</td>
                        <td>{{ $alluser->email }}</td>
                        <td>{{ $alluser->phone }}</td>
                        <td><a href="{{ url('managestaff' . $alluser->uniqueid) }}" style="color:rgb(13, 1, 56);"><i
                                    class="fa fa-edit"></i></a></td>
                @endforeach
                </tr>
            <tbody>
        </table>
    </div>
    <!--		Start Pagination -->
    <div class='pagination-container'>
        <nav>
            <ul class="pagination">
                <!--	Here the JS Function Will Add the Rows -->
            </ul>
        </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 91</div>

    <!-- 		End of Container -->


    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <div class="modal fade" id="myModal">
        <div class="modal-fullscrean">
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
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="name" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" id="address" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="phoneno" id="address" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                                <textarea class="form-control" name="address" col="2"></textarea>
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
                                <input type="date" class="form-control" name="
                                " id="password"
                                    placeholder="staff Password" required>
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
                                            <input type="hidden" name="leave_type[]"
                                                value="{{ $data->id }}">
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
            </div>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
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
@endsection
