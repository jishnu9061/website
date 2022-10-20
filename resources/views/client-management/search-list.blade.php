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
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Client
                    List</u></b></div><br><br>
        <!-- <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px" width ><b><u>Client List</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
        <br>

        <div id="mydatatable_filter" class="dataTables_filter">
            <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
        </div>
        <button class="btn btn-primary add-btn"  data-toggle="modal" data-target="#myModal">Register Client</button></a>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-bordered" id="new-item">
                        <thead>
                            <tr>
                                <th class="text-center"> No</th>
                                <th class="text-center"> Client Type</th>
                                <th class="text-center">Client Category</th>
                                <th class="text-center">File Type</th>
                                <th class="text-center">Country</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_search as $search)
                            <tr id="data">
                                <td scope="row" class="text-center">{{$search->id}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->client_type}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->client_category}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->file_type}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->country}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->status}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$search->registration_date}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background-color:#d6ba8a">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color:#d6ba8a">
                                <h2 class="text-center" ><b>Register Client</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="background-color:white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{url('add-register')}}" id="form">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="type" id="cars">
                                                                    <option>Select</option>
                                                                    <option value="Corporate">Corporate</option>
                                                                    <option value="Individual">Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Client Category</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Category" id="cars">
                                                                    <option>Select</option>
                                                                    <option value="Client Category1">Client Category1
                                                                    </option>
                                                                    <option value="Client Category2">Client Category2
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">File Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select name="File" id="cars">
                                                                    <option>Select</option>
                                                                    <option value="Type 1">Type 1</option>
                                                                    <option value="Type 2">Type 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Country</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="country" id="cars">
                                                                    <option>Select</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="India">India</option>
                                                                    <option value="America">America</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Status</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Status" id="cars">
                                                                    <option>Select</option>
                                                                    <option value="Process">Process</option>
                                                                    <option value="Pending">Pending </option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Registration Date(From)</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value="" placeholder="" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Date is required.
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
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Search</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;">close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
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
                                                            <input type="text" id="edit_medicine_name"
                                                                name="medicine_name" class="form-control" required><br>
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
                                                            <input type="text" id="edit_minimum_level"
                                                                name="minimum_level" class="form-control"><br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label>Reorder Level</label>
                                                            <input type="text" name="reorder" id="edit_reorder"
                                                                class="form-control" placeholder=""><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <label class="text-color:white;">Unit/Packing</Label>
                                                            <input type="text" name="unit_packing"
                                                                id="edit_unit_packing" class="form-control"
                                                                placeholder=""><br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label>Upload Medicine Image</label>
                                                            <input type="file" name="editimage" id="edit_image"
                                                                class="form-control" placeholder="Image"><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <label>Medicine Composition</label>
                                                            <textarea class="form-control" id="edit_medicine_details1"
                                                                name="medicine_detailss" rows="3"
                                                                placeholder=""></textarea><br>
                                                        </div>
                                                        <div class="col-sm">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" id="edit_medicine_note"
                                                                name="medicine_note" rows="3"
                                                                placeholder=""></textarea><br>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control" id="edit_id"
                                                                name="method_id">

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
                    <script type="text/javascript" charset="utf8"
                        src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
                    </script>
                    <script type="text/javascript" charset="utf8"
                        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

                    {{-- Supplier Edit start --}}

                    <script>
                    $(document).on('click', '#edit_medicine_details', function() {

                        var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden').val();
                        var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
                        var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name').val();
                        var medicine_group = $(this).closest('#data').find('#medicine_group').val();
                        var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1')
                            .val();
                        var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name')
                            .val();
                        var medicine_manufactuure_name = $(this).closest('#data').find(
                            '#medicine_manufactuure_name').val();
                        var medicine_supplier_name = $(this).closest('#data').find('#medicine_supplier_name')
                            .val();
                        var medicine_minimum_level = $(this).closest('#data').find('#medicine_minimum_level')
                            .val();
                        var medicine_reorder_level = $(this).closest('#data').find('#medicine_reorder_level')
                            .val();
                        var medicine_unit_packing = $(this).closest('#data').find('#medicine_unit_packing')
                            .val();
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