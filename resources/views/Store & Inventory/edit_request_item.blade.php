@extends('layouts.hmsmain')
@section('content')
<html>

<head>
    <style>


    </style>

</head>

<body>
    <div class="container">
        <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->
        <div>
            <div>
                <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
                {{-- heading --}}
                <h4 id="hdtpa"><b>Edit Item Request</b></h4>
                <br>
            </div>

           
                                            <div class="row">
                                                <div class="col-md-12 order-md-1">
                                                    <form method="post" action="{{url('add-registration')}}" id="form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Date</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>
                                                                        <input type="date" class="form-control"
                                                                            name="date" id="username" value=""
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">User Request</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>

                                                                        <select name="user_request" id="username"
                                                                            style="width:100%;">
                                                                            <option>---select--- </option>
                                                                            <option>name 1 </option>
                                                                            <option>name 2</option>
                                                                            <option>name 3</option>


                                                                        </select>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Town is required.
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Branch</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"></div>

                                                                        <select name="branch" id="username"
                                                                            style="width:100%;">
                                                                            <option>---select--- </option>
                                                                            <option>name 1 </option>
                                                                            <option>name 2</option>
                                                                            <option>name 3</option>


                                                                        </select>
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Town is required.
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div>
                                                            <h4 id="hdtpa"><b>Item </b></h4>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-class"
                                                                id="table-id">

                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Category</th>
                                                                        <th class="text-center">Item Type</th>
                                                                        <th class="text-center">Item Name</th>
                                                                        <th class="text-center">Quantity</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <td scope="row" class="text-center">
                                                                        <div class="mb-1">

                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"></div>

                                                                                <select name="category" id="username"
                                                                                    style="width:100%;">
                                                                                    <option>---select--- </option>
                                                                                    <option>name 1 </option>
                                                                                    <option>name 2</option>
                                                                                    <option>name 3</option>


                                                                                </select>
                                                                                <div class="invalid-feedback"
                                                                                    style="width: 100%;">
                                                                                    Town is required.
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td scope="row" class="text-center">
                                                                        <div class="mb-1">

                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"></div>

                                                                                <select name="item_type" id="username"
                                                                                    style="width:100%;">
                                                                                    <option>---select--- </option>
                                                                                    <option>name 1 </option>
                                                                                    <option>name 2</option>
                                                                                    <option>name 3</option>


                                                                                </select>
                                                                                <div class="invalid-feedback"
                                                                                    style="width: 100%;">
                                                                                    Town is required.
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td scope="row" class="text-center">


                                                                        <div style="width: 100%";>
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="text" class="form-control"
                                                                                name="item_name" id="username" value=""
                                                                                placeholder="" required>
                                                                            <div class="invalid-feedback"
                                                                                style="width: 100%;">

                                                                            </div>
                                                                        </div>


                                                                    </td>

                                                                    <td scope="row" class="text-center">
                                                                        <div style="width: 100%";>
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="text" class="form-control"
                                                                                name="quantity" id="username" value=""
                                                                                placeholder="" required>
                                                                            <div class="invalid-feedback"
                                                                                style="width: 100%;">

                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    </tr>

                                                                </tbody>

                                                            </table>
                                                        </div>
                                                        <br>
                                                       
                                                        <div class="row">
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">
                                                                <br>
                                                                <button type="submit"
                                                                    class="btn btn-primary float:right;"
                                                                    Style="width:50%;">Update</button>
                                                                <button type="button" class="btn btn-primary float:left"
                                                                    Style="width:45%;"
                                                                    data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                             
         



            <!--filter-->
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