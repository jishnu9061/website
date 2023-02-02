@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">Workflow Management</a>
</nav>
<br><br>


<!-- <head>
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
    </head> -->



<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Workflow Management</b></h4>
    <br>



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
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <br>
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr>

                                <th class="text-center">Date</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Comments</th>
                                <th class="text-center">Start Report</th>
                                <th class="text-center">Start Name</th>
                                <th class="text-center">Duration (days)</th>
                                <th class="text-center">Created By</th>


                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($flow as $list)
                            <tr>

                                <td class="text-center">{{$list->Date_Created}}</td>
                                <td class="text-center">{{$list->Workflow_Name}}</td>
                                <td class="text-center">{{$list->Workflow_Comments}}</td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">{{$list->Duration}}</td>
                                <td class="text-center"></td>

                                <td scope="row" class="text-center">
                                    <a href="{{url('edit-workflow',$list->id)}}"><i style="  color:rgb(13, 1, 56);"
                                            class="fa fa-edit"></i>
                                        <a onClick="return myFunction();" href="{{url('delete-workflow',$list->id)}}">
                                            <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                                            {{-- <a href="{{url('edit-workflow',$list->id)}}"><i
                                                style="  color:rgb(13, 1, 56);" class="fa fa-eye"></i> --}}
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

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2 class="text-center"><b>Add Work Flow</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{ url('new-workflow') }}"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Date Created</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="date" class="form-control" name="date"
                                                            id="confirm_password" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Workflow Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="text" class="form-control" name="flow_name"
                                                            id="confirm_password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Start Date</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="date" class="form-control" name="start_date"
                                                            id="confirm_password" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Duration(Days)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="text" class="form-control" name="duration"
                                                            id="confirm_password" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Workflow Comments</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <textarea class="form-control" id="edit_medicine_details1"
                                                            name="flow_comments" rows="3" placeholder=""></textarea>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Telephone Number is required.
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
                                            Style="width:60%;">Save </button>
                                        <button type="button" class="btn btn-primary float:right;"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>





                    <!-- <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:60%;">Save Workflow</button>
                            <button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>




</div> -->

                    <!-- Supplier modal Edit End -->

                    <!-- Delete  confirmation Message -->

                    <!-- End delete confirmation message -->

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
