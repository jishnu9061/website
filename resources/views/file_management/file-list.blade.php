@extends('layouts.hmsmain')
@section('content')


<h4 id="hdtpa"><b>File List</b></h4>
<br><br>

<!-- <div> -->
<!-- <div class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Corporate Client List</u></b></span></div><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">

            </div> -->
<div class="text-center">
    <input class="btn btn-primary" type="button" value="All">
    <input class="btn btn-primary" type="button" value="Open">
    <input class="btn btn-primary" type="button" value="Pending">
    <input class="btn btn-primary" type="button" value="Closed">
</div>
<br>

<!-- <div id="" class=""> -->
<!-- <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label> -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-1">Columns
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalb">Filter
                  </button>
                </div>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  File</button>


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalaa">temp
                    </button
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Filter
                  </button> -->
<!-- </div>
                -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
    File</button>


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
                <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <!-- <th class="text-center"> <input type="checkbox"></th> -->

                            <!-- <th class="text-center">*</th> -->
                            <!-- <th class="text-center">File No</th> -->
                            <th class="text-center">Client</th>
                            {{-- <th class="text-center">File Name</th> --}}
                            <th class="text-center">File Open</th>
                            <!-- <th class="text-center">Responsible<br>Advocate</th>
                                        <th class="text-center">Most Recent Progress</th> -->
                            <th class="text-center">Date Closed</th>
                            <th class="text-center">File & Fee Balances</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($file_list as $list)

                        <tr id="" class="text-center">

                            <!-- <td scope="row">{{$list->id}}</td> -->
                            <!-- <td scope="row">{{$list->id}}</td> -->
                            <td scope="row">{{$list->client}}</td>
                            {{-- <td scope="row">{{$list->file}}</td> --}}
                            <td scope="row">{{$list->open_date}}</td>

                            <!-- <td scope="row">{{$list->advocate}}</td> -->
                            <!-- <td scope="row">{{$list->recent_progress}}</td> -->

                            <td scope="row">{{$list->close_date}}</td>
                            <td scope="row">{{$list->amount}}</td>
                            <td scope="row">{{$list->status}}</td>
                            <td scope="row"><a href="{{url('view-list',$list->id)}}"><i style="color:black;"
                                        class="fa fa-eye" aria-hidden="true"></i>

                                    <a href="{{url('edit-file',$list->id)}}"><i style="color:black;" class="fa fa-edit"
                                            aria-hidden="true"></i>
                                        <a onClick="return myFunction();" href="{{url('file_destroy',$list->id)}}"
                                            style="color:black;"><i class="fas fa-trash-alt"></i></a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center"><b>Add New File</b></h2>

                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" action="{{ url('add-new-file') }}" enctype="multipart/form-data">

                                    @csrf
                                    <br>
                                    <div class="text-center">
                                        <h4><b> Matter </b></h4>
                                    </div>
                                    <br>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Associative Handling</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <select name="assoc_handling" id="cars">
                                                        <option>Select</option>
                                                        <option>Residensial</option>
                                                        <option>Non Residensial</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Client</label>
                                                <select class="form-select" name="client" aria-label="Default select example">
                                                @if(count($client_list))
                                            @foreach($client_list as $list_category)
                                            <option>{{$list_category->client_name}}</option>
                                            @endforeach
                                          @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="age"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Telephone</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" name="phone" id="age"
                                                        value="">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Age is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Address</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" name="address" id="age"
                                                        value="">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Age is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">File No</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <select>
                                                        <option value="">---select---</option>
                                                        <option value="">file 1</option>
                                                        <option value="">file 2</option>
                                                        <option value="">file 3</option>

                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="file_name" value=""
                                                        id="confirm_password"> -->
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Responsible Advocate</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <select name="assoc_handling" id="cars">
                                                        <option>Select</option>
                                                        <option>Advocate 1</option>
                                                        <option>Advocate 2</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="advocate" id="age"
                                                        value="" min="0" max="99"> -->
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Age is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Most Recent Progress</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" name="recent_progress"
                                                        id="age" value="" min="0" max="99">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Age is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Work Flow</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" name="work_flow" id="age"
                                                        value="" min="0" max="99">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Age is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="">Practice Area</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select>
                                                        <option value="select">---select---</option>
                                                        <option value="Family Law">Family Law</option>
                                                        <option value="Personal Injury">Personal Injury</option>
                                                        <option value="General Practice">General Practice</option>
                                                        <option value="Estate Planning">Estate Planning</option>
                                                        <option value="Real Estate">Real Estate</option>
                                                        <option value="Criminal Law">Criminal Law</option>
                                                        <option value="Civil Litigation">Civil Litigation</option>
                                                        <option value="Business Law">Business Law</option>
                                                        <option value="Guardianship Law">Guardianship Law</option>
                                                        <option value="Probate Law">Probate Law</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Opening Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="date" class="form-control" name="close_date" id="age"
                                                        value="" min="0" max="99">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="username">Closing Date </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="date" class="form-control" name="close_date" id="age"
                                                        value="" min="0" max="99">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Status</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <select name="status">
                                                        <option value="select">---select---</option>
                                                        <option value="Opened">Opened</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Closed">Closed</option>

                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-1">
                                                <label for="username">Comments</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <textarea class="form-control" id="form7Example7" rows="2"
                                                        name="comments"></textarea><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <hr>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Notification</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="email" class="form-control" name="notifi_email"
                                                        placeholder="Enter your email" id="confirm_password"><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Telephone No.</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter your telephone number"
                                                        id="confirm_password"><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Billing</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="text" class="form-control" name="amount"
                                                        placeholder="Enter the amount" id="confirm_password"><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>








                                    <!-- <h4><b> Notification </b></h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-1">
                                                <label for="username">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="email" class="form-control" name="notifi_email"
                                                        value="" id="confirm_password"><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4><b> Contacts </b></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-1">
                                                <label for="username">Telephone</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="number" class="form-control" name="con_phone" value=""
                                                        id="confirm_password">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-1">
                                                <label for="username">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="email" class="form-control" name="con_email"
                                                        value=""><br>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4><b> Billing </b></h4>
                                    <div class="row">

                                        <div class="col-md-8">
                                            <div class="mb-1">
                                                <label for="username">Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="text" class="form-control" name="amount" value=""
                                                        id="confirm_password"><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br> -->
                                    <!-- <hr>
                                    <h4><b> Task </b></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-1">
                                                <label for="username">Task</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <select name="task" id="cars">
                                                        <option>Select</option>
                                                        <option>Residensial</option>
                                                        <option>Non Residensial</option>
                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-1">
                                                <label for="username"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>

                                                    <button type="button" class="btn btn-primary" style="width:60%" ;><a
                                                            href="{{url('add-task')}}"><i class="fa fa-plus"><span
                                                                    class="m-3">Add</span></i></a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">

                                            </div>
                                        </div>
                                    </div> -->
                                    <br>

                                    <div class="row">
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">
                                            <br>
                                            <button type="submit" class="btn btn-primary float:right;"
                                                Style="width:45%;">Save</button>
                                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>




                    @endsection

                    <script>
                    function myFunction() {
                        if (!confirm("Are you sure to delete this"))
                            event.preventDefault();
                    }
                    </script>
                    <!-- <script>
                            $(function() {
                                $("#new-item").dataTable();
                            })
                        </script>

                        {{-- Search booking script --}}
                        <script>
                            $(document).ready(function() {
                                $('.searchingBook').select2();
                            });
                        </script> -->
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
                    <!-- <script type="text/javascript" charset="utf8"
                            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->

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