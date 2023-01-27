@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:12px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">Store & Inventory-Manage Items</a>
</nav>
<br><br>
<html>

<head>
    <style>

    </style>

</head>

<body>

    <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->

    <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Manage Items</b></h4>

        <br>


        <div>
            <button type="button" class="btn btn-primary complaint_btn btn " data-toggle="modal"
                data-target="#myModal">Add New Item</button></a>
        </div>
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
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="table-id">

                            <thead>
                                <tr>

                                    <th class="text-center">Category</th>
                                    <th class="text-center">Item Type</th>

                                    <th class="text-center">Item Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                @foreach($manage_list as $list)

                                <tr id="data" class="text-center">
                                    <td>{{$list->Item_Type}}</td>
                                    <td>{{$list->Item_Name}}</td>
                                    <td>{{$list->Category}}</td>
                                    <td scope="row">

                                        <a href="{{url('edit_manage_items',$list->id)}}"> <i
                                                style="  color:rgb(13, 1, 56);" class="fa fa-edit"></i>
                                            <span class="m-2"></span>
                                            <a href="{{url('drop_manage_items',$list->id)}}"> <i
                                                    style=" color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

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
                    <div class="rows_count">Showing 11 to 20 of 100</div>

                    <!-- 		End of Container -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Add Items</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">


                                        <form method="post" action="addmanage_items" id="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label for="username">Category</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>

                                                            <select name="category" id="username" style="width:100%;">
                                                                <option>select</option>
                                                                @if(count($get_items))
                                                                @foreach($get_items as $lists)
                                                                <option>{{$lists->category_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Town is required.
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label for="username">Item Type</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" name="type" list="cityname"
                                                                style="width:100%;">
                                                            <datalist id="cityname" style="width:100%;">
                                                                <option value="Book">
                                                                <option value="Pen">
                                                                <option value="Ink">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Item Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="name"
                                                                id="age">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Reorder Level</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="level"
                                                                id="age">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Stock Level</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="stock"
                                                                id="age">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                           



                                            <br>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Cancel</button>


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
                                                    <input type="text" name="reorder" id="edit_reorder"
                                                        class="form-control" placeholder=""><br>
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
                                                    <input type="file" name="editimage" id="edit_image"
                                                        class="form-control" placeholder="Image"><br>
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