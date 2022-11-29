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
                <h4 id="hdtpa"><b>Edit Category</b></h4>
                <br>
            </div>
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form method="post" action="{{url('update_category')}}" id="form">
                        @csrf
                        <input type="hidden" name="id" value="{{$edit->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Category Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="category_name" id="username"
                                            value="{{$edit->category_name}}" placeholder="" required>
                                        <div class="invalid-feedback" style="width: 100%;">

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
                                <button type="submit" class="btn btn-primary float:right;"
                                    Style="width:50%;">Update</button>
                                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
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