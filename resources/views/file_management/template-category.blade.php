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
        <!-- <h3 class="text-center" style="color: #070344;"><b>Template Category</b></h3> -->
        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Template Category</u></b></span></div><br>
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->

        
            </div>

        <br>

<!-- 
        <a href="{{url('add-template')}}"><button class="btn btn-primary add-btn">Add Template</button></a>
        <div class="tab-content" id="myTabContent"> -->
        {{-- <a href="{{('')}}"><button class="btn btn-primary">Add Template</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Template</button>

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p style="margin-top:2%;">Total Results:</p>
                <div class="table-responsive">
                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Template Category</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center"><input type="radio"></th>

                        </tr>
                    </thead>

                </table>

                <p>Business Formation:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>

                    </tbody>
                </table>
                <p>Business Operation:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Business Property:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Employment:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Financial:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Personal & Family:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Real Estate:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                <p>Will& Estate Planning:</p>
                <table class="table table-bordered" id="new-item">
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center">1</td>

                            <td scope="row" class="text-center">Employment Agent</td>
                            <td scope="row" class="text-center">Active</td>
                            <td scope="row" class="text-center">Edit</td>
                            <td scope="row" class="text-center"><input type="radio"></td>


                    </tbody>
                </table>
                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-center"><b>Add Template</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('template-category') }}"
                                                enctype="multipart/form-data">
                                                @csrf




                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Document Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="doc_type" id="cars">
                                    <option value="volvo">type 1</option>
                                    <option value="volvo">type 2</option>
                                    <option value="volvo">type 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Template Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="title" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Template To Upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="file" class="form-control" name="to_upload" id="confirm_password" required>
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
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                    </div>
                </div>
        </div>



    </div>





    </tbody>
    </table>
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