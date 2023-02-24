@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">Request Safe Item</a>
</nav>
<br><br>


<body>

    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Request Safe Item</b></h3> -->
        <div>
            {{-- heading --}}
            <h4 id="hdtpa"><b>Request Safe Item</b></h4>
            <br>
        </div>
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Register
                    Safe
                    Item</button>
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
                                <thead style="font-size:15px; width:100%;">
                                    <tr>
                                        <!-- <th class="text-center">*</th> -->
                                        <th class="text-center">Registered Date</th>
                                        <th class="text-center">Client</th>
                                        <th class="text-center">File NO</th>
                                        <th class="text-center">File Name</th>
                                        <th class="text-center">Documents</th>
                                        <th class="text-center">Requested By</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>

                                        </th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($safe_management as $management)
                                    <tr id="data">

                                        <!-- <td scope="row" class="text-center">{{$management->id}}</td> -->
                                        <td scope="row" class="text-center">{{$management->date}}</td>
                                        <td scope="row" class="text-center">{{$management->client}}</td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">{{$management->file}}</td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">View File
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#edit_safe" href="#">Edit File
                                                    </a>
                                                    <a class="dropdown-item" href="#">Delete
                                                        File </a>
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
                                            <form method="post" action="{{ url('new_Request_staff_item') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h4 class=""><b>Request Safe Item:-</b></h4>
                                                <div class="row">

                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                            <input type="date" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="client" id="" required>
                                                                <option>---select---</option>
                                                                <option>Client 1</option>
                                                                <option>Client 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="file"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="file" id="" required>
                                                                <option>---select---</option>
                                                                <option>file 1</option>
                                                                <option>file 2</option>
                                                                <option>file 3</option>
                                                                <option>file 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="send_instruction"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                                Instruction To</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="send_instruction" id="" required>
                                                                <option>---select---</option>
                                                                <option>Person 1</option>
                                                                <option>person 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="approver"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Approver</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="approver" id="" required>
                                                                <option>---select---</option>
                                                                <option>Admin</option>
                                                                <option>Department Head</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="test" style="height:20px;"></div>
                                        </div>


                                        <div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm">

                                                    </div>
                                                    <div class="col-sm">

                                                    </div>
                                                    <div class="col-sm">
                                                        <button type="submit"
                                                            class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                                                        <button type="button" class="btn btn-primary float:right;"
                                                            data-dismiss="modal" Style="width:45%;">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
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
                                                        <button class="btn btn-primary sub_btnn"
                                                            type="submit">submit</button>
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
                                                    <input type="text" name="type" class="form-control"
                                                        placeholder="Country">
                                                    <button class="btn btn-primary sub_btnn"
                                                        type="submit">submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------- START EDIT REQUEST -------------------------------------------->
                    <div class="modal fade" id="edit_safe">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                  
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h4 class=""><b>Edit Request Safe Item:-</b></h4>
                                                <div class="row">

                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                            <input type="date" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="client" id="" required>
                                                                <option>---select---</option>
                                                                <option>Client 1</option>
                                                                <option>Client 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="file"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="file" id="" required>
                                                                <option>---select---</option>
                                                                <option>file 1</option>
                                                                <option>file 2</option>
                                                                <option>file 3</option>
                                                                <option>file 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="send_instruction"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                                Instruction To</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="send_instruction" id="" required>
                                                                <option>---select---</option>
                                                                <option>Person 1</option>
                                                                <option>person 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="approver"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Approver</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="approver" id="" required>
                                                                <option>---select---</option>
                                                                <option>Admin</option>
                                                                <option>Department Head</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="test" style="height:20px;"></div>
                                        </div>


                                        <div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm">

                                                    </div>
                                                    <div class="col-sm">

                                                    </div>
                                                    <div class="col-sm">
                                                        <button type="submit"
                                                            class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                                                        <button type="button" class="btn btn-primary float:right;"
                                                            data-dismiss="modal" Style="width:45%;">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
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
                                                        <button class="btn btn-primary sub_btnn"
                                                            type="submit">submit</button>
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
                                                    <input type="text" name="type" class="form-control"
                                                        placeholder="Country">
                                                    <button class="btn btn-primary sub_btnn"
                                                        type="submit">submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------------------------------------------- END EDIT REQUEST ---------------------------------------------->
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