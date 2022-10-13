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
                <b><u>File List</u></b>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
                    File</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="new-item">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No</th>
                                        <th class="text-center">File No</th>
                                        <th class="text-center">Client Name</th>
                                        <th class="text-center">File Name</th>
                                        <th class="text-center">Date Opened</th>
                                        <th class="text-center">Responsible Advocates</th>
                                        <th class="text-center">Resent Progress</th>
                                        <th class="text-center">Date Closed</th>
                                        <th class="text-center">Fee Balances</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($file_list as $file)
                                        <tr id="data">
                                            <td scope="row">{{ $file->our_file_reference_no }}</td>
                                            <td scope="row">{{ $file->Client_type }}</td>
                                            <td scope="row">{{ $file->File_name }}</td>
                                            <td scope="row">{{ $file->opening_date }}</td>
                                            <td scope="row">{{ $file->Approval_partner }}</td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row">
                                                <a href="{{ url('edit_file', $file->id) }}"><i style="color:black;"
                                                        class="fa fa-edit" aria-hidden="true"></i>
                                                    <a href="{{ url('file_destroy', $file->id) }}"><i style="color:black;"
                                                            class="fa fa-trash" aria-hidden="true"></i>
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
                                        <h2 class="text-centre"><b>Add New File</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-new-file') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="client_type" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Accord University</option>
                                                                    <option>Accounts And Books</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Associate Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="associate_handling" id="cars"
                                                                    disabled>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Opening Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="opening_date" id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Ref.No or(Case No)</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="client_ref_no" id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Our File Ref No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="our_file_ref_no" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">File Name/Subject</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="file_name" id="age" value=""
                                                                 min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Approval Partner</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="approval_partner" id="cars">
                                                                    <option >Select</option>
                                                                    <option >Residensial</option>
                                                                    <option >Non Residensial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="customer_name" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Amount</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="narration" class="form-control" name="amount" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Workflow</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="workflow" id="cars">
                                                                    <option >Select</option>
                                                                    <option >In Progress</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Tel</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="telephone" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer E-mail</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="email" class="form-control" name="email" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <br>
                                                    <div class="modal-footer" style="background-color:#d6ba8a">
                                                        <button type="submit" class="btn btn-primary"
                                                            data-dismiss="modal"
                                                            style="width:15%;background-color:white;color:black">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            style="width:15%;background-color:white;color:black">Save</button>
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

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New File</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                        <form method="post" action="" id="form">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Client</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="client_type" id="cars">
                                                                                <option>Select</option>
                                                                                <option>Accord University</option>
                                                                                <option>Accounts And Books</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Associate Handling</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="associate_handling" id="cars"
                                                                                disabled>
                                                                                <option>Corporate</option>
                                                                                <option>Individual</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Opening Date</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="date" class="form-control" name="opening_date" id="age" value="" min="0" max="99">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Age is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Approval Partner</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                            
                                                                            </div>
                                                                            <select name="approval_partner" id="cars">
                                                                                <option >Select</option>
                                                                                <option >Residensial</option>
                                                                                <option >Non Residensial</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Customer Name</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="text" class="form-control" name="customer_name" value=""
                                                                                id="confirm_password">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Password is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Amount</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="narration" class="form-control" name="amount" value=""
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
                                                                    <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer E-mail</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <input type="email" class="form-control" name="email" value=""
                                                                                        id="confirm_password">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer Address</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="modal-footer"
                                                                style="background-color:#d6ba8a">
                                                                <button type="submit" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    style="width:15%;background-color:white;color:black">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="width:15%;background-color:white;color:black">Save</button>
                                                            </div>
                                                               

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name').val();
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
