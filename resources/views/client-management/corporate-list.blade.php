@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
   
        <div class="container">
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
                <b><u>Corporate Client List</u></b>
            </div><br><br>
            <div>
                <!-- <div class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Corporate Client List</u></b></span></div><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">

            </div> -->

                <div id="mydatatable_filter" class="dataTables_filter">
                    <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
                </div>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
                    Corporate</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="new-item">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No</th>
                                        <th class="text-center">Client_name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Mobile No</th>
                                        <th class="text-center">Email Address</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($corporate_list as $list)
                                        <tr id="data">
                                            <td scope="row" class="text-center">{{ $list->Client_no }}</td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list->Client_name }}</td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list->designation }}</td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list->Mobile_no }}</td>
                                            <td scope="row" class="text-center" id="medicine_name_1">{{ $list->email }}
                                            </td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                <a href="{{ url('edit_client', $list->id) }}"><i style="color:black;"
                                                        class="fa fa-edit" aria-hidden="true"></i>
                                                    <a href="{{ url('delete_client', $list->id) }}"><i style="color:black;"
                                                            class="fa fa-trash" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-center"><b>Add Corporate Client</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Number</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="number"
                                                                    id="username" value="" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Name is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <!-- <select name="type" id="cars">
                                                                    <option value="Corporate">Corporate</option>
                                                                </select> -->
                                                                <select name="type" id="cars">
                                                                    <option value="Corporate">Corporate</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Citizen Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="citizen" id="cars">
                                                                    <option value="volvo">Select</option>
                                                                    <option value="Residensial">Residensial</option>
                                                                    <option value="Non Residensial">Non Residensial
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Certificate Of Incorporation</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="corporation" id="age" value=""
                                                                    min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Country</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="country" id="cars">
                                                                    <option value="volvo">Select</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="India">India</option>
                                                                    <option value="America">America</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Telephone No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="telephone" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Fax No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="faxno"
                                                                    id="age" value="" min="0"
                                                                    max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Email Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="" id="password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Web Site</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="website"
                                                                    value="" id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Brought In By</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select name="brought">
                                                                    <option value="volvo">Select</option>
                                                                    <option value="Agent">Agent</option>
                                                                    <option value="Staff">Staff</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Status Reporting Day</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="status" id="cars">
                                                                    <option value="">Select</option>
                                                                    <option value="Monday">Monday</option>
                                                                    <option value="Tuesday">Tuesday</option>
                                                                    <option value="Wednesday">Wednesday</option>
                                                                    <option value="Thursday">Thursday</option>
                                                                    <option value="Friday">Friday</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Source</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="source" id="cars">
                                                                    <option value="volvo">Select</option>
                                                                    <option value="Excisting">Excisting Client</option>
                                                                    <option value="Online">Online</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Source Narration</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="narration" class="form-control"
                                                                    name="narration" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="" id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Industry</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="industry" id="cars">
                                                                    <option value="volvo">Select</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                    <option value="Construction">Construction</option>
                                                                    <option value="Education">Education</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Pin No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="pin"
                                                                    id="age" value="" min="0"
                                                                    max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Postal Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="address"
                                                                    value="" id="password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Postal Code</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="code"
                                                                    value="" id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Town</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="town"
                                                                    id="age" value="" min="0"
                                                                    max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Physical Address</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7" rows="3" name="physicaladdress"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Postal Address is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Notes</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7" rows="3" name="notes"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Postal Address is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="btn btn-primary"
                                                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
                                                    <b>Contact Person</b></span></div><br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="mb-1">
                                                            <label for="username">Person Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="person"
                                                                    id="age" value="" placeholder=""
                                                                    min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-1">
                                                            <label for="username">Designation</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="Designation" id="age" value=""
                                                                    placeholder="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Mobile No is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-1">
                                                            <label for="username">Mobile No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="no"
                                                                    id="age" value="" placeholder=""
                                                                    min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Mobile No
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-1">
                                                            <label for="username">Contact Person Email</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="person_email" id="age" value=""
                                                                    placeholder="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                </div>
                                                                <br>
                                                            </div>


                                                        </div>


                                                    </div>
                                                    <br><br>
                                                    <div class="modal-footer" style="background-color:#d6ba8a">
                                                        <button type="submit" class="btn btn-primary"
                                                            data-dismiss="modal"
                                                            style="width:15%;background-color:white;color:black">Save</button>
                                                        <button type="button" class="btn btn-primary"
                                                            style="width:15%;background-color:white;color:black">Cancel</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>





                            </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <br>
            <!-- Supplier modal Edit End -->

            <!-- Delete  confirmation Message -->

            <!-- End delete confirmation message -->
        </div>
        <script>
            function myFunction() {
                if (!confirm("Are you sure to delete this"))
                    event.preventDefault();
            }
        </script>
        <script>
            $(function() {
                $("#new-item").dataTable();
            })
        </script>

        {{-- Search booking script --}}
        <script>
            $(document).ready(function() {
                $('.searchingBook').select2();
            });
        </script>
        {{-- search booking script end --}}
        <!-- Delete  confirmation Message -->
        <script>
            function myFunction() {
                if (!confirm("Are you sure to delete this"))
                    event.preventDefault();
            }
        </script>
        <!-- End delete confirmation message -->

        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

        {{-- Supplier Edit start --}}

        <script>
            $(document).on('click', '#edit_medicine_details', function() {

                var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden').val();
                var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
                var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name').val();
                var medicine_group = $(this).closest('#data').find('#medicine_group').val();
                var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1').val();
                var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name').val();
                var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name')
                    .val();
                var medicine_supplier_name = $(this).closest('#data').find('#medicine_supplier_name').val();
                var medicine_minimum_level = $(this).closest('#data').find('#medicine_minimum_level').val();
                var medicine_reorder_level = $(this).closest('#data').find('#medicine_reorder_level').val();
                var medicine_unit_packing = $(this).closest('#data').find('#medicine_unit_packing').val();
                var medicine_composition = $(this).closest('#data').find('#medicine_composition').val();
                var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
                var medicine_images = $(this).closest('#data').find('#medicine_images').val();



                $("#edit_id").val(medicine_id_hidden);
                $("#edit_medicine_name").val(medicine_name);
                $("#edit_brand_name").val(medicine_brand_name);
                $("#edit_medicine_group").val(medicine_group);
                $("#edit_category_name").val(medicine_category_name);
                $("#edit_generic_name").val(medicicine_genric_name);
                $("#edit_manufacture_name").val(medicine_manufactuure_name);
                $("#edit_supplier_name").val(medicine_supplier_name);
                $("#edit_minimum_level").val(medicine_minimum_level);
                $("#edit_reorder").val(medicine_reorder_level);
                $("#edit_minimum_level").val(medicine_minimum_level);
                $("#edit_unit_packing").val(medicine_unit_packing);
                $("#edit_medicine_details1").val(medicine_composition);
                $("#edit_medicine_note").val(medicine_notes);
                $("#edit_image").val(medicine_images);
            });
        </script>
        {{-- Supplier Edit End --}}
    @endsection
