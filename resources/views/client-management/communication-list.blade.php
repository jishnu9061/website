@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Client Management</a> /
        <a href="#" style="color: #1D1D50;">Communication Details</a>
    </nav>
    <br><br>

    {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}
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

            /* Add a green text color and a checkmark when the requirements are right */
            .passvalid {
                color: green;
                margin: 0px;
                font-size: 10px;
            }

            .passvalid:before {
                position: relative;
                left: 0px;
                content: "✔";
            }

            /* Add a red text color and an "x" when the requirements are wrong */
            .passinvalid {
                color: red;
                margin: 0px;
                font-size: 10px;
                padding-left: 10px;
            }

            .passinvalid:before {
                position: relative;
                left: 0px;
                content: "✖";
            }

            /*Toggle button*/
            .switch {
                position: relative;
                display: inline-block;
                width: 50px;
                height: 20px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #6c757d;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 15px;
                width: 15px;
                left: 4px;
                bottom: 2.5px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .check:checked+.slider {
                background-color: #0edb7c;
            }

            .check:focus+.slider {
                box-shadow: 0 0 1px #0edb7c;
            }

            .check:checked+.slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>

    </head>

    <body>

        <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Client
                                                                Conversation</u></b></div><br><br> -->
        {{-- heading --}}
        <div class="container">
            <h4 id="hdtpa"><b> Communication Details </b></h4>
            <br>

            <div>
                <button type="submit" class="btn btn-primary float:right;" data-toggle="modal" data-target="#myModal"
                    Style="width:18%;">Add Communication</button>
                <a href="{{ url('client-pickup') }}"><button type="submit" class="btn btn-primary float:right;"
                        Style="width:14%;">Client Pickup</button></a>
                <a href="{{ url('client-service') }}"><button type="submit" class="btn btn-primary float:right;"
                        Style="width:14%;"> Client Services</button></a>
                <button type="submit" class="btn btn-primary float:right;" Style="width:13%;">Client Portal</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:16%;">Internal Message</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:11%;">Phone Log</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:11%;">Email Log</button>
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
                                    <th class="text-center">*</th>
                                    <th class="text-center" style="width:20%;">Date</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Client</th>
                                    <th class="text-center">File Ref</th>
                                    <th class="text-center">Tel No</th>
                                    <th class="text-center">Source</th>
                                    <th class="text-center">Mode</th>
                                    <th class="text-center">Communicated with</th>
                                    <th class="text-center">Nature of Communication</th>
                                    <th class="text-center">Action Plan</th>
                                    <th class="text-center">Person Handling</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_communication as $communication)
                                    <tr id="data">
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->id }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->communication_date }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->time }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->client }}
                                        </td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->file }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->telephone_no }}
                                        </td>
                                        <td></td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->mode_of_communication }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->communicated }}
                                        </td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->communication_date }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->person_handling }}</td>
                                        <td class="text-center" id="medicine_name_1">
                                            {{ $communication->person_handling }}</td>
                                        <td class="text-center"><label class="switch">
                                                <input type="checkbox" data-id="" onclick="changestatus(this)"
                                                    id="status" class="check">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td scope="row"class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('show-client') }}">View
                                                        Communication Details
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit_corporate_client_details"
                                                        href="{{ url('edit-communication', $communication->id) }}">Edit
                                                        Communication Details
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('delete-communication', $communication->id) }}"
                                                        data-toggle="modal" data-id=""
                                                        data-name=""onclick="deletecompany(this)"
                                                        data-target="#deletecompany">Delete Communication
                                                        Details</a>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td class="text-center"><a
                                                href=""><i
                                                    style="color:black;" class="fa fa-edit" aria-hidden="true"></i></a>
                                            <span class="m-1"><span>
                                                    <a onClick="return myFunction();"
                                                        href=""
                                                        style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                        </td> --}}
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
                    <div class="modal fade" id="">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Add Communication</b></h2>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="post" action="{{ url('add-communication') }}"
                                                    id="form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="date" class="form-control"
                                                                        name="date" id="date" value=""
                                                                        placeholder="" required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Date is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Time</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="time" class="form-control"
                                                                        name="Timer" id="username" value=""
                                                                        placeholder="" required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Date is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Client</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Client" id="cars">
                                                                        <option>Select</option>
                                                                        <option>Client Category1
                                                                        </option>
                                                                        <option>Client Category2
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">File </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <select name="File" id="cars">
                                                                        <option>Select</option>
                                                                        <option>Type 1</option>
                                                                        <option>Type 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Customer</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Customer" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Telephone Number</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="telephone" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">E-mail</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Email" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Source</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Sources" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Mode of Communication</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Communication" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication With </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Communicated" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Duration (Minutes)</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Duration" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Description</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Description" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Action Plan</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Action" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Person Handling</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Handling" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Other</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Others" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
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
                                                                Style="width:45%;">Save</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                {{-- <div class="modal-header">
                                                <h2 class="text-center"><b>Add Individual Client</b></h2>
        
                                            </div> --}}

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="post" action="{{ url('add-communication') }}">
                                                    <h5><b>Create New Communication Details:-</b></h5>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                                    Date</label>
                                                                <input type="date" placeholder=""
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="date" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 20%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="gender"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                                    </label>
                                                                    <input type="time" placeholder=""
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="timer" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 46%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                                </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="cityzen" id="" required>
                                                                <option>Select a Client</option>
                                                                <option value="1">Test 1</option>
                                                                <option value="2">Test 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File
                                                                </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="cityzen" id="" required>
                                                                <option>Choose a File</option>
                                                                <option value="1">File 1</option>
                                                                <option value="2">File 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country</label>
                                                                <input type="text" placeholder="Country"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="country" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                                    No</label>
                                                                <input type="text" placeholder="Telephone No"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="telephone" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Fax
                                                            </label>
                                                            <input type="text" placeholder="Fax"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="faxno" id=""
                                                                value="" required>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                                </label>
                                                                <input type="email" placeholder="Email"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="faxno" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Website
                                                            </label>
                                                            <input type="text" placeholder="Website"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="website" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Brougt
                                                                In
                                                                By</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="brought" id="" required>
                                                                <option>Select Brought In</option>
                                                                <option value="1">Agent</option>
                                                                <option value="2">Staff</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status
                                                                Reporting
                                                                Day</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="status" id="" required>
                                                                <option>Select Reporting Day</option>
                                                                <option value="1">Monday</option>
                                                                <option value="2">Tuesday</option>
                                                                <option value="2">Wednesday</option>
                                                                <option value="2">Thursday</option>
                                                                <option value="2">Friday</option>
                                                                <option value="2">Saturday</option>
                                                                <option value="2">Sunday</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                                Source</label>
                                                            <input type="text" placeholder="Client Source"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="source" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                Source Narration</label>
                                                            <input type="text" placeholder="Client Source"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="narration" id=""
                                                                value="" required>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Client Name</label>
                                                                <input type="text" placeholder="Client Name"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="name" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                Client Industry</label>
                                                            <input type="text" placeholder="Client Industry"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="industry" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Practice
                                                                Area
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="practice_aera" id="" required>
                                                                <option>Select Practice Area</option>
                                                                <option value="1">Family Law</option>
                                                                <option value="2">Personal Injury</option>
                                                                <option value="2">General Practice</option>
                                                                <option value="2">Estate Planning</option>
                                                                <option value="2">Real Estate</option>
                                                                <option value="2">Criminal Law</option>
                                                                <option value="2">Civil Litigation</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Postal Address</label>
                                                                <input type="text" placeholder="Postal Address"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="narration" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                Postal Code</label>
                                                            <input type="text" placeholder="Postal Code"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="narration" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 50%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Pin No</label>
                                                                <input type="text" placeholder="Pin No"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="narration" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 49%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Town</label>
                                                                <input type="text" placeholder="Town"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="narration" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div style="width:50%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="postal_addr"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Physical
                                                                    Address</label>
                                                                <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Physical Address"
                                                                    name="postal_addr" form="addemployee"></textarea>
                                                            </div>
                                                        </div>
                                                        <div style="width:49%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="postal_addr"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes
                                                                </label>
                                                                <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Notes" name="postal_addr"
                                                                    form="addemployee"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="width:45%;">Save</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    style="width:45%;">Cancel</button>
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
                    <div class="modal fade" id="deletecompany" style="">
                        <!-- delete company -->
                        <div class="modal-dialog modal-lg" style="width:30%;">
                            <div class="modal-content">
                                <!---- Modal Header -->
                                <form method="post" id="delete_company" action="#" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="deleteuniqueid" value="uniqueid">
                                    <div class="modal-header" style="padding:0rem 0rem;">
                                        <div style="padding:1rem 1rem;">
                                            <h4 class="text-centre"><b>Delete <span id="deletcompany_name"></span></b>
                                            </h4>
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
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;"data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function deletecompany(param) { //Delete clent confirmation message 
                            var deleteuniqueid = $(param).data('id');
                            var deletecompany_name = $(param).data('name');
                            $('#deleteuniqueid').val(deleteuniqueid);
                            $('#deletcompany_name').html(deletecompany_name);
                            document.getElementById("deletcompany_name").innerHTML = deletecompany_name;
                            $('#delete_company').attr('action', "{{ url('delete_company') }}" + "/" + deleteuniqueid);
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
                    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
                    <script type="text/javascript" charset="utf8"
                        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

                    {{-- Supplier Edit start --}}

                    <script>
                        $(document).on('click', '#edit_medicine_details', function() {

                            var medicine_id_hidden = $(this).closest('#data').find(
                                '#medicine_id_hidden').val();
                            var medicine_name = $(this).closest('#data').find(
                                    '#medicine_name_1')
                                .val();
                            var medicine_brand_name = $(this).closest('#data').find(
                                '#medicine_brand_name').val();
                            var medicine_group = $(this).closest('#data').find(
                                    '#medicine_group')
                                .val();
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
                            var medicine_notes = $(this).closest('#data').find(
                                    '#medicine_notes')
                                .val();
                            var medicine_images = $(this).closest('#data').find(
                                    '#medicine_images')
                                .val();



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
