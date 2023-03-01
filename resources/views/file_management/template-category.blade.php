@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">Document Templates</a>
</nav>
<br><br>
<html>

<head>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Template Category</b></h3> -->
        <div>
            {{-- heading --}}
            <h4 id="hdtpa"><b>Template Category</b></h4>
            <br>
        </div>
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    Template</button>
            </div>


            <!--
        <a href="{{url('add-template')}}"><button class="btn btn-primary add-btn">Add Template</button></a>
        <div class="tab-content" id="myTabContent"> -->

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



                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>


                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="table-id">
                            <thead>
                                <tr>

                                    <th class="text-center">Template Category</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($template_list as $template)
                                <tr id="data">


                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center">{{$template->title}}</td>
                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_template" onclick="edittemplate(this)"
                                                    data-id="{{$template->id}}" href="#">Edit
                                                    Template</a>
                                                <a class="dropdown-item" data-id="{{$template->id}}"
                                                    onclick="deletetemplate(this)" data-toggle="modal"
                                                    data-name="{{$template->title}}" data-target="#deletetemp"
                                                    href="#">Delete
                                                    Template</a>
                                            </div>
                                        </div>
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

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-template') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h4 class=""><b>Add Template:-</b></h4>
                                            <div class="row">
                                                <div class="col-md-4" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="template"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="doc_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>template 1</option>
                                                            <option>template 2</option>
                                                            <option>template 3</option>
                                                            <option>template 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="title"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Title</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="title" id="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="to_upload"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Template
                                                            To Upload</label>
                                                        <input type="file" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="to_upload" id="" value=""
                                                            required>
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
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:45%;">Save</button>
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="mymodal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-body">
                                        <form action="">
                                            <div>
                                                <input type="text" name="type" class="form-control"
                                                    placeholder="Client Type">
                                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="my">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-body">
                                    <form action="">
                                        <div>
                                            <input type="text" name="type" class="form-control" placeholder="Country">
                                            <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <div class="modal fade" id="edit_template">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="#" id="update_temp" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <h4 class=""><b>Edit Template:-</b></h4>
                                <input type="hidden" name="id" id="edit_id">
                                <div class="row">
                                    <div class="col-md-4" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="template"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                            <select class="form-select" aria-label="Default select example"
                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                name="doc_type" id="doc_type" required>
                                                <option>---select---</option>
                                                <option>template 1</option>
                                                <option>template 2</option>
                                                <option>template 3</option>
                                                <option>template 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="title"
                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Title</label>
                                            <input type="text" placeholder=""
                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                class="form-control" name="title" id="title" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="to_upload"
                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Template
                                                To Upload</label>
                                            <input type="file" placeholder=""
                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                class="form-control" name="to_upload" id="to_upload" value="" required>
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
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:45%;">Update</button>
                                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
                <div class="modal" id="mymodal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-body">
                                    <form action="">
                                        <div>
                                            <input type="text" name="type" class="form-control"
                                                placeholder="Client Type">
                                            <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="my">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-body">
                                <form action="">
                                    <div>
                                        <input type="text" name="type" class="form-control" placeholder="Country">
                                        <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ------------------------------------delete template modal ---------------------------->

        <div class="modal fade" id="deletetemp" style="">
            <!-- delete company -->
            <div class="modal-dialog modal-lg" style="width:30%;">
                <div class="modal-content">
                    <!---- Modal Header -->
                    <form method="post" id="delete_template" action="#" enctype="multipart/form-data">
                        @csrf
                        <input type="text" id="delete_id" value="">
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;">
                                <h4 class="text-centre"><b>Delete <span id="del_template"></span></b></h4>
                            </div>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <h6><b><span>Are you sure?</span></b></h6>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 30%;">
                                    </div>
                                    <div lass="" style="width: 0%"></div>
                                    <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                        <br>
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:45%;background-color:#DD4132;">Yes</button>
                                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                            data-dismiss="modal">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
        function edittemplate(param) {
            var id = $(param).data('id');
            $.ajax({
                type: 'GET',
                url: 'edit_template/' + id,

                success: function(response) {
                    $('#edit_id').val(response.result.id);
                    $('#doc_type').val(response.result.doc_type);
                    $('#title').val(response.result.title);
                    $('#to_upload').val(response.result.to_upload);
                    $('#update_temp').attr('action', "{{url('update_template')}}" + "/" + id);
                }
            });
        }

        function deletetemplate(param) {
            var id = $(param).data('id');
            $('#delete_id').val(id);
            var template_name = $(param).data('name')
            $('#del_template').html(template_name);
            $('#delete_template').attr('action', "{{url('delete_template')}}" + "/" + id);

        }
        </script>

      

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