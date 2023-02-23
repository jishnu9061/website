@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Client Follow-up</a>
</nav>
<br><br>
<html>

<head>
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

</head>

<body>

    <!-- <h1  style="color: #070344;  text-align:center;"><b>Customer Follow Up</b></h1> -->


    <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Follow Up</u></b></span> -->
    {{-- heading --}}
    <div class="container">


        <div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;"> Add
                Follow Up</button>
            </div>

            <div class="col-sm-4" style="">
                <h4
                    style="border: 0.5px solid #f1d9b0;
                    border-radius: 25px;
                    background-color: #f1d9b0;
                    padding: 2%;
                    width: 100%;
                    height:90%;
                    text-align:center;
                    box-shadow: inset 0 0 3px #d3d0ca;
                    opacity: .9;">
                    <b style="font-size:18px;">Follow Up Details</b>
                </h4>
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






            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>
                            <tr>
                                <!-- <th class="text-center">No</th> -->
                                <th class="text-center">Date</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Next Date</th>
                                <th class="text-center">Alert Period</th>
                                <th class="text-center">Responsible Staff</th>
                                <th class="text-center">Registered By</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($followup as $list)
                            <tr id="data">
                                <!-- <td scope="row" class="text-center" id="medicine_name_1">{{$list->id}}</td> -->
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->followup_date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->followup_type}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->customer}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->description}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->next_bringup_date}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->alert_period}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->staff_responsible}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->registered_by}}</td>

                                <!-- <td scope="row" class="text-center">
                                    <a href="{{url('edit-follow',$list->id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    <span class="m-1"></span>
                                    <a onClick="return myFunction();" href="{{url('delete-follow',$list->id)}}"
                                        style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                </td> -->

                                <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="#">View Follow Up</a>
                                                    {{-- <a class="dropdown-item"
                                                        href="{{url('edit-follow',$list->id)}}">Edit Follow Up</a> --}}
                                                        <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit_follow_up" href="#">Edit Follow Up</a>
                                                    <a class="dropdown-item"
                                                        {{-- href="{{url('delete-follow',$list->id)}}">Delete Follow Up</a> --}}
                                                        href="#"onclick=deletefollowup(this) data-id="{{ $list->id }}"data-toggle="modal"
                                                        data-target="#deleteFollowup">Delete Follow-up</a>
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

                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->



                            <div class="modal-header">
                                <h2 class="text-center"><b>Add FollowUp</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 order-md-1">
                                            <form method="post" action="{{url('add-follow')}}" id="form">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value="" required>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Follow Up Date is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="client" id="cars">
                                                                <option>--select--</option>
                                                                    @if(count($client))
                                                                    @foreach($client as $page)
                                                                    <option>{{$page->client_name}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Types</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="type" id="cars">
                                                                    <option>---select---</option>
                                                                    <option>type-1</option>
                                                                    <option>type-2</option>
                                                                    <option>type-3</option>
                                                                    <option>type-4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Staff Responsible</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="responsible" id="cars">
                                                                    <option>---select---</option>
                                                                    <option>staff-1</option>
                                                                    <option>staff-2</option>
                                                                    <option>staff-3</option>
                                                                    <option>staff-4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Send Remainder To</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Remainder" id="cars">
                                                                    <option>---select---</option>
                                                                    <option>remainder-1</option>
                                                                    <option>remainder-2</option>
                                                                    <option>remainder-3</option>
                                                                    <option>remainder-4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Next Bring Up Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="Bring"
                                                                    value="" id="password" placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Next Bring Up Date is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Alert Period</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Alert"
                                                                    id="age" value="" placeholder="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Alert is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Email Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="" id="password" placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Email is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username"> Registered By</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control"
                                                                    name="Registered" value="" id="password"
                                                                    placeholder="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Email is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-1">
                                                            <label for="username"> Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="description"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Description Address is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm">

                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:50%;">Save</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
{{-- Start Edit Follow Up --}}
<div class="modal fade" id="edit_follow_up" style="">
    <!-- edit follow up -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Follow Up:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="follow_up_date"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Follow Up Date
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="date" class="form-control" name="date"
                                                id="username" value="" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Follow Up Date is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="client"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="client" id="cars">
                                            <option>--select--</option>
                                                @if(count($client))
                                                @foreach($client as $page)
                                                <option>{{$page->client_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="follow_up_types"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Follow Up Types</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="type" id="cars">
                                                <option>---select---</option>
                                                <option>type-1</option>
                                                <option>type-2</option>
                                                <option>type-3</option>
                                                <option>type-4</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="staff_responsible"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Staff Responsible</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="responsible" id="cars">
                                                <option>---select---</option>
                                                <option>staff-1</option>
                                                <option>staff-2</option>
                                                <option>staff-3</option>
                                                <option>staff-4</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="send_remainder_to"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send Remainder To</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="Remainder" id="cars">
                                            <option>---select---</option>
                                            <option>remainder-1</option>
                                            <option>remainder-2</option>
                                            <option>remainder-3</option>
                                            <option>remainder-4</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="next_bringup_date"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next Bring Up Date
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="date" class="form-control" name="Bring"
                                            value="" id="password" placeholder="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Next Bring Up Date is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="alert_period"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Alert Period
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="Alert"
                                                id="age" value="" placeholder="" min="0" max="99">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Alert is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="email_address"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="email" class="form-control" name="email"
                                            value="" id="password" placeholder="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email is required.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="registered_by"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Registered By</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control"
                                            name="Registered" value="" id="password"
                                            placeholder="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email is required.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="description"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="form7Example7"
                                            rows="3" name="description"></textarea>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Description Address is required.
                                        </div>
                                    </div>
                            </div>
                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class style="width: 20%">
                </div>
                <div class="col-sm">

                    <button type="submit" class="btn btn-primary float:right;"
                        style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                    </button>
                    <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                        onclick="history.back()">Cancel</button>
                </div>
        </div>
        </form>
    </div>
</div>
{{-- End edit follow up --}}


            <!-- Delete  confirmation Message -->
            <div class="modal fade" id="deleteFollowup" style=""> <!-- delete corporate -->
                <div class="modal-dialog modal-lg" style="width:30%;">
                    <div class="modal-content">
                        <!---- Modal Header -->
                        <form method="post"  id="delete_followup" action="{{url('delete-follow',$list->id)}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" value="id">
                            <div class="modal-header" style="padding:0rem 0rem;">
                                <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_followup"></span></b></h4></div>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body" >
                                <div class="container">
                                    <div class="row"><h6><b><span>Are you sure?</span></b></h6>
                                    </div>
                                        <div class="row">
                                            <div class="" style="width: 30%;">
                                            </div>
                                            <div lass="" style="width: 0%"></div>
                                            <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                                <br>
                                                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#DD4132;">Yes</button>
                                                <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
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
