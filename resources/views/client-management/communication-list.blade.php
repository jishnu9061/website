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
                                                    <a class="dropdown-item" href="{">View
                                                        Communication Details
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit_communication_details" data-id="{{ $communication->id }}" onclick="edit_communication(this)" href="#">Edit
                                                        Client
                                                        Details
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
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 20%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="gender"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                                </label>
                                                                <input type="time" placeholder=""
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="time" id=""
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 46%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Client" id="" required>
                                                                <option>Select a Client</option>
                                                                <option>Client 1</option>
                                                                <option>Client 2</option>
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
                                                                name="File" id="" required>
                                                                <option>Choose a File</option>
                                                                <option>File 1</option>
                                                                <option>File 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Customer</label>
                                                                <input type="text" placeholder="Customer"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="customer" id=""
                                                                    value="">
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
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                                Address
                                                            </label>
                                                            <input type="text" placeholder="Email Address"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="Email" id=""
                                                                value="">
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Sources" id="" required>
                                                                <option>Source</option>
                                                                <option>Reception</option>
                                                                <option>Scretary</option>
                                                                <option>Advocate</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mode
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Communication" id="" required>
                                                                <option>Communication Mode</option>
                                                                <option>Telephone</option>
                                                                <option>Email</option>
                                                                <option>Post</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                                with
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Communicated" id="" required>
                                                                <option>Source</option>
                                                                <option>Person 1</option>
                                                                <option>Person 2</option>
                                                                <option>Person 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other
                                                                </label>
                                                                <input type="text" placeholder="Other"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="other_communication"
                                                                    id="" value="">
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Duration(Minutes)
                                                                </label>
                                                                <input type="text" placeholder="Duration"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="duration" id=""
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div style="width:50%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="postal_addr"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                                </label>
                                                                <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Communication Description"
                                                                    name="communication_description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div style="width:49%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="postal_addr"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                                    Plan
                                                                </label>
                                                                <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Action Plan"
                                                                    name="action_plan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="" style="width: 50%">
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Person
                                                                Handling
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="handling" id="" required>
                                                                <option>Source</option>
                                                                <option>Person 1</option>
                                                                <option>Person 2</option>
                                                                <option>Person 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="" style="width: 49%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Other</label>
                                                                <input type="text" placeholder="Other"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="Other_handling"
                                                                    id="" value="">
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
                                                                <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                                                Style="width:45%;" value="submit">Save</button>
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
                    <div class="modal fade" id="edit_communication_details" style="">
                        <!-- create company -->
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!---- Modal Header -->
                                <form method="post" action="" id="update_communication"  enctype="multipart/form-data"
                                    id="addemployee">
                                    @csrf
                                    <h5><b>Edit Communication Details:-</b></h5>
                                      <input type="hidden" id="id" name="id">
                                    <div class="row">
                                        <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="username" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="date" class="form-control" name="dateid" id="dateid"
                                                                id="username" value=""  style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 20%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                        </label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="time" id="time"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 46%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client" id="client" required>
                                                        <option>Select a Client</option>
                                                        <option>Client 1</option>
                                                        <option>Client 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file" id="file" required>
                                                        <option>Choose a File</option>
                                                        <option>File 1</option>
                                                        <option>File 2</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Customer</label>
                                                        <input type="text" placeholder="Customer"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="customer" id="customer"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                            No</label>
                                                        <input type="text" placeholder="Telephone No"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="telephone" id="telephone"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <label for="client_no"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                        Address
                                                    </label>
                                                    <input type="text" placeholder="Email Address"
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="email" id="email"
                                                        value="">
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="source" id="source" required>
                                                        <option>Source</option>
                                                        <option>Reception</option>
                                                        <option>Scretary</option>
                                                        <option>Advocate</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mode
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="communication" id="communication" required>
                                                        <option>Communication Mode</option>
                                                        <option>Telephone</option>
                                                        <option>Email</option>
                                                        <option>Post</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                        with
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="communicated" id="communicated" required>
                                                        <option>Source</option>
                                                        <option>Person 1</option>
                                                        <option>Person 2</option>
                                                        <option>Person 3</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other Communication
                                                        </label>
                                                        <input type="text" placeholder="Duration"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="other_communication" id="other_communication"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Duration(Minutes)
                                                        </label>
                                                        <input type="text" placeholder="Duration"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="duration" id="duration"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="width:50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="postal_addr"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Communication
                                                        </label>
                                                        <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Communication Description"
                                                            name="communication_description" id="communication_description"></textarea>
                                                    </div>
                                                </div>
                                                <div style="width:49%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="postal_addr"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                            Plan
                                                        </label>
                                                        <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Action Plan"
                                                            name="action_plan" id="action_plan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 50%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Person
                                                        Handling
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="handling" id="handling" required>
                                                        <option>Source</option>
                                                        <option>Person 1</option>
                                                        <option>Person 2</option>
                                                        <option>Person 3</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 49%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                            Other handling</label>
                                                        <input type="text" placeholder="Other"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="other_handling" id="other_handling"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class style="width: 20%">
                                            </div>
                                            <div class="col-sm">
                                                <br>
                                                <button type="submit" class="btn btn-primary float:right;"
                                                    style="margin-left: 61%;--clr: #1D1D50;width:19%;
                            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                                                </button>
                                                <button type="button" class="btn btn-primary float:left"
                                                    Style="width:19%;" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                      function edit_communication(param) {
            var id = $(param).data('id');
            $.ajax({
                type: 'GET',
                url: 'edit-communication/' + id,

                success: function(response) {
                    $('#id').val(response.result.id);
                    $('#dateid').val(response.result.communication_date);
                    $('#client').val(response.result.client);
                    $('#file').val(response.result.file);
                    $('#customer').val(response.result.customer);
                    $('#telephone').val(response.result.telephone_no);
                    $('#email').val(response.result.email);
                    $('#source').val(response.result.communication_source);
                    $('#communication').val(response.result.mode_of_communication);
                    $('#communicated').val(response.result.communicated);
                    $('#duration').val(response.result.duration);
                    $('#handling').val(response.result.person_handling);
                    $('#time').val(response.result.time);
                    $('#other_handling').val(response.result.others_handling);
                    $('#other_communication').val(response.result.other_communication);
                    $('#communication_description').val(response.result.communicated_description);
                    $('#action_plan').val(response.result.action_plan);
                    $('#update_communication').attr('action', "{{url('update-communication')}}" + "/" + id);
                }
            });
        }
                    </script>
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
                <script src="{{ url('assets/js') }}/jquery.min.js"></script>
                <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
                <script type="text/javascript" charset="utf8"
                    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
@endsection
