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
        <!-- <h1  style="color: #070344;  text-align:center;"><b>Customer Follow Up</b></h1> -->
        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Customer Follow Up</u></b></span>
            </div><br>

        </div>
        <br>
        <div>
            <button type="button" class="btn btn-primary complaint_btn" data-toggle="modal" data-target="#myModal"> Add
                Follow
                Up</button></a>
        </div>


        <br>


        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Follow Up date</th>
                            <th class="text-center"> Follow Up Type</th>
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Next BU Date</th>
                            <th class="text-center">Alert Period</th>
                            <th class="text-center">Responsible Staff</th>
                            <th class="text-center">Registered By</th>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($followup as $list)
                        <tr id="data">
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->id}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->followup_date}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->followup_type}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->customer}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->description}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->next_bringup_date}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->alert_period}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->staff_responsible}}</td>
                            <td scope="row" class="text-center" id="medicine_name_1">{{$list->registered_by}}</td>
                            <td><a href="{{url('edit-follow',$list->id)}}"><i style="color:black;" class="fa fa-edit"
                                        aria-hidden="true"></i></a>
                                <a href="{{url('delete-follow',$list->id)}}"><i style="color:black;" class="fa fa-trash"
                                        aria-hidden="true"></i>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background-color:#d6ba8a">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color:#d6ba8a">
                                <h2 class="text-center"><b>Add FollowUp</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="background-color:white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 order-md-1">
                                            <form method="post" action="{{url('add-follow')}}" id="form">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Follow Up Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value="" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Follow Up Date is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="customer" id="cars">
                                                                    <option>select</option>
                                                                    <option>demo1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Follow Up Types</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="type" id="cars">
                                                                    <option>select</option>
                                                                    <option>demo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Staff Responsible</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="responsible" id="cars">
                                                                    <option>select</option>
                                                                    <option>demo11</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Send Remainder To</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Remainder" id="cars">
                                                                    <option>select</option>
                                                                    <option>demo22</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Next Bring Up Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="Bring"
                                                                    value="" id="password" placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Next Bring Up Date is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Alert Period</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Alert"
                                                                    id="age" value="" placeholder="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Alert is required.
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
                                                                    value="" id="password" placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Email is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username"> Registered_by</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="Registered" value="" id="password"
                                                                    placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Email is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username"> Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="Description"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Description Address is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm">

                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"Style="width:50%;">Submit</button>
                                                            <button type="button" class="btn btn-primary float:left"Style="width:45%;">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- The Modal -->
                <div class="modal fade" id="editmed">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color:#435ebe">
                                <h4 class="text-white">Edit Medicine</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{url('update_medicine')}}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h4 class="text-center"><b>Medicine Details</b></h4><br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Brand Name</label>

                                            </div>
                                            <div class="col-sm">
                                                <label for="">Medicine Name</label>
                                                <input type="text" id="edit_medicine_name" name="medicine_name"
                                                    class="form-control" required><br>
                                            </div>
                                            <div class="col-sm">
                                                <div class="col-sm">
                                                    <label for="">Medicine Group</label>

                                                </div>

                                            </div>
                                            <div class="col-sm">
                                                <label for="">Medicine Category Name</label>


                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Generic name</label>

                                            </div>
                                            <div class="col-sm">
                                                <label>Manufacturer Name</label>

                                            </div>
                                            <div class="col-sm">
                                                <label>Supplier Name</label>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">Minimum Level</label>
                                                <input type="text" id="edit_minimum_level" name="minimum_level"
                                                    class="form-control"><br>
                                            </div>
                                            <div class="col-sm">
                                                <label>Reorder Level</label>
                                                <input type="text" name="reorder" id="edit_reorder" class="form-control"
                                                    placeholder=""><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="text-color:white;">Unit/Packing</Label>
                                                <input type="text" name="unit_packing" id="edit_unit_packing"
                                                    class="form-control" placeholder=""><br>
                                            </div>
                                            <div class="col-sm">
                                                <label>Upload Medicine Image</label>
                                                <input type="file" name="editimage" id="edit_image" class="form-control"
                                                    placeholder="Image"><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label>Medicine Composition</label>
                                                <textarea class="form-control" id="edit_medicine_details1"
                                                    name="medicine_detailss" rows="3" placeholder=""></textarea><br>
                                            </div>
                                            <div class="col-sm">
                                                <label>Notes</label>
                                                <textarea class="form-control" id="edit_medicine_note"
                                                    name="medicine_note" rows="3" placeholder=""></textarea><br>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control" id="edit_id" name="method_id">

                                            </div>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary text-white"
                                                style="width:15%;background-color:#435ebe"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color:#435ebe;width:15%;">Update</button>
                                        </div>
                                </div>
                                <div class="container">

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
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
        </script>
        <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
        </script>

        {{-- Supplier Edit start --}}

        <script>
        $(document).on('click', '#edit_medicine_details', function() {

            var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden')
                .val();
            var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
            var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name')
                .val();
            var medicine_group = $(this).closest('#data').find('#medicine_group').val();
            var medicicine_category_name = $(this).closest('#data').find(
                '#medicine_category_name1').val();
            var medicine_generic_name = $(this).closest('#data').find(
                '#medicine_generic_name').val();
            var medicine_manufactuure_name = $(this).closest('#data').find(
                '#medicine_manufactuure_name').val();
            var medicine_supplier_name = $(this).closest('#data').find(
                '#medicine_supplier_name').val();
            var medicine_minimum_level = $(this).closest('#data').find(
                '#medicine_minimum_level').val();
            var medicine_reorder_level = $(this).closest('#data').find(
                '#medicine_reorder_level').val();
            var medicine_unit_packing = $(this).closest('#data').find(
                '#medicine_unit_packing').val();
            var medicine_composition = $(this).closest('#data').find(
                '#medicine_composition').val();
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