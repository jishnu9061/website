@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Client Management</a> /
        <a href="#" style="color: #1D1D50;">Corporate Client List</a>
    </nav>
    <br><br>
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

    <div class="container">
        <h4 id="hdtpa"><b>Corporate Client List</b></h4>
        <br>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Corporate</button>
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
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr>
                                <th class="text-center">Client No</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Mobile No</th>
                                <th class="text-center">Email Address</th>
                                <th class="text-center">Documents</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($corporate_list as $list)
                                <tr id="data">
                                    <td scope="row" class="text-center">{{ $list->client_number}}</td>
                                    <td scope="row" class="text-center" id="medicine_name_1">
                                            {{ $list->client_name}}</td>
                                    <td scope="row" class="text-center" id="medicine_name_1">
                                            {{ $list->designation}}</td>
                                    <td scope="row" class="text-center" id="medicine_name_1">
                                            {{ $list->Mobile_no }}</td>
                                    <td scope="row" class="text-center" id="medicine_name_1">{{ $list->Email_address }} </td>
                                    <td scope="row" class="text-center" >
                                        <a href="{{url('corporate-document',$list->corporate_id)}}"><button style="font-size: 12px; min-width:120px"
                                                class="btn btn-primary ">Add Document</button></a>
                                        <a href="{{url('corporate-document-details',$list->corporate_id)}}"><button style="font-size: 12px; min-width:120px"
                                                class="btn btn-primary ">View Document</button></a>
                                    </td>

                                    <td scope="row" class="text-center" id="medicine_name_1">
                                            <a href="{{ url('edit_client', $list->corporate_id)}}"><i style="color:black;"
                                                    class="fa fa-edit" aria-hidden="true"></i>
                                                <a onClick="return myFunction();"
                                                    href="{{ url('delete_client', $list->corporate_id)}}"
                                                    style="color:black;"><i class="fas fa-trash-alt"></i></a>
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
                            <li data-page="prev">
                                <span>
                                    < <span class="sr-only">(current)
                                </span></span>
                            </li>
                            <li data-page="next" id="prev">
                                <span> > <span class="sr-only">(current)</span></span>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="rows_count"></div>
                <!-- 		End of Container -->
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Corporate Client</b></h2>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('add_corporate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Client Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" name="number" id="username" value="" required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Name is required.
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Client Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="type" id="cars">
                                                <option>Corporate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Citizen Status</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <select name="citizen" id="cars" required> 
                                                <option value="">Select</option>
                                                <option value="residential">Residential</option>
                                                <option value="Non Residential">Non Residential</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Certificate Of Incorporation</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="corporation"
                                                            id="age" value="" min="0" max="99">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Age is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Country</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <select name="country" id="cars">
                                                            <option>Kenya</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Telephone No</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="telephone"
                                                            value="" id="confirm_password">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Fax No</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="faxno" id="age"
                                                            value="" min="0" max="99">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Age is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Email Address</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="email" class="form-control" name="email" value=""
                                                            id="password" required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Web Site</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="website" value=""
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
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Brought In By</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <select name="brought">
                                                            <option>Select</option>
                                                            <option>Agent</option>
                                                            <option>Staff</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Status Reporting Day</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="status" id="cars">
                                                            <option>Select</option>
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednesday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client Source</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="source" id="cars">
                                                            <option>Select</option>
                                                            <option>Excisting Client</option>
                                                            <option>Online</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client Source Narration</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="narration" class="form-control" name="narration"
                                                            value="" id="confirm_password">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="name" value=""
                                                            id="confirm_password" required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client Industry</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="industry" id="cars">
                                                            <option>Select</option>
                                                            <option>Commerce</option>
                                                            <option>Construction</option>
                                                            <option>Education</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Pin No</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="pin" id="age"
                                                            value="" min="0" max="99">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Age is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Postal Address</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="address" value=""
                                                            id="password">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Password is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Postal Code</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" class="form-control" name="code" value=""
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
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Town</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <select name="town" id="cars">
                                                            <option>Nairobi</option>

                                                        </select>

                                                        <!-- <input type="text" class="form-control" name="town" id="age"
                                                            value="" min="0" max="99"> -->

                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Age is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Physical Address</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" id="form7Example7" rows="3"
                                                            name="physicaladdress"></textarea>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Postal Address is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Notes</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" id="form7Example7" rows="3"
                                                            name="notes"></textarea>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Postal Address is required.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                        <h4 id="hdtpa"><b>Contact Person</b></h4>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="username">Person Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="person"
                                                                id="age" value="" placeholder="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="username">Designation</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="Designation" id="cars">
                                                                <option>Select</option>
                                                                @if(count($list_designation))
                                                                @foreach ($list_designation as $list)
                                                                <option>{{$list->role_name}}</option>
                                                                @endforeach
                                                                @endif

                                                            </select>
                                                            <!-- <input type="text" class="form-control" name="Designation"
                                                                id="age" value="" placeholder="" min="0" max="99"> -->
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Mobile No is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="username">Mobile No</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="no" id="age"
                                                                value="" placeholder="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Mobile No
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="username">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="person_email"
                                                                id="age" value="" placeholder="" min="0" max="99">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-1">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <button type="submit" class="btn btn-primary" style="width:45%;">Save</button>
                                                        <button type="button" class="btn btn-primary"  data-dismiss="modal" style="width:45%;">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                        </form>
                    </div>
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
        var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name')
            .val();
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
