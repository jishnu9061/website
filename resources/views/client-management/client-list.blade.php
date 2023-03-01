@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Client Management</a> /
        <a href="#" style="color: #1D1D50;">Individual Client List</a>
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

            input[type='file'] {
                opacity: 0
            }

            input[type='file'] {
                color: rgba(0, 0, 0, 0)
            }
        </style>
        <style>
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

            .add_decduct {
                text-decoration: none;
                display: inline-block;
                */width: 30px;
                height: 30px;
                background: #8bc34a;
                font-size: 2rem;
                font-weight: bold;
                color: #1d1d50;
                justify-content: space-evenly;
                align-items: center;
                line-height: 0.9;
                cursor: pointer;
            }

            .decduct_input {
                padding: 8px 10px;
                width: 20%;
                border-radius: 5px;
                border-color: #1d1d50;
            }

            #e_passmessage {
                display: block;
                color: #1d1d50;
                position: relative;
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
        </style>

    </head>

    <body>


        <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
                                                                                                                                                <b><u>Individual Client List</u></b> -->
        {{-- heading --}}
        <div class="container">
            <div class="row" style="height:50px;">
                <div class="col-sm-4" style="padding-top:5px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                        New Client</button>
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
                        <b style="font-size:18px;">Individual Client List</b>
                    </h4>
                </div>
                <div class="col-sm-4" style="">
                </div>
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
                                        <th class="text-center">*</th>
                                        <th class="text-center"> Client No</th>
                                        <th class="text-center">Client Name</th>
                                        <th class="text-center">Email Address</th>
                                        <th class="text-center">File Status</th>
                                        <th class="text-center">Services Offered</th>
                                        <th class="text-center">Status</th>
                                        {{-- <th class="text-center">Documents</th> --}}
                                        <th class="text-center">Actions</th>
                                        <!-- <th class="text-center">Edit</th>
                                                                                                                                                                    <th class="text-center">Delete</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client_list as $list_client)
                                        <tr class="text-center" id="data">
                                            <td scope="row" class="text-center">{{ $list_client->id }}</td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list_client->client_number }}
                                            </td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list_client->client_name }}
                                            </td>
                                            <td scope="row" class="text-center" id="medicine_name_1">
                                                {{ $list_client->email_address }}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center"><label class="switch">
                                                    <input type="checkbox"data-id="{{ $list_client->id }}" onclick="changestatus(this)"
                                                    id="status" class="check"
                                                    {{ $list_client->status == 1 ? 'checked' : '' }}>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td scope="row"class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url('show-client', $list_client->id) }}">View Client
                                                            Details
                                                        </a>
                                                        <a class="dropdown-item" data-toggle="modal"
                                                            data-target="#edit_corporate_client_details"
                                                            href="#">Edit
                                                            Client
                                                            Details
                                                        </a>
                                                        <a class="dropdown-item" href=""data-toggle="modal"
                                                            data-id="" data-name=""onclick="deletecompany(this)"
                                                            data-target="#deletecompany">Delete Client
                                                            Details</a>

                                                        <a class="dropdown-item"
                                                            href="{{ url('create-document', $list_client->id) }}">Add
                                                            Documents</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url('client-document', $list_client->id) }}">View
                                                            Document Details</a>
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
                                                    <form method="post" action="{{ url('add_newclient') }}">
                                                        <h5><b>Create New Client Details:-</b></h5>
                                                        @csrf
                                                        <div class="row">
                                                            <div class="" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="client_no"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                                        No</label>
                                                                    <input type="text" placeholder="Enter Client No "
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="number"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="gender"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                                        Type</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                        name="type" id="" required>
                                                                        <option>Select Client Type</option>
                                                                        <option value="1">Corporate</option>
                                                                        <option value="2">Individual</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="" style="width: 33%">
                                                                <label for="gender"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Citizen
                                                                    Status</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example"
                                                                    style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                    name="citizen" id="" required>
                                                                    <option>Select Cityzen</option>
                                                                    <option value="1">Residental</option>
                                                                    <option value="2">Non Residential</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="" style="width: 33%">
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Certificate
                                                                    No</label>
                                                                <input type="text"
                                                                    placeholder="Certificate Incorporation "
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="incorporation"
                                                                    id="" value="" required>
                                                            </div>
                                                            <div class="" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="client_no"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country</label>
                                                                    <input type="text" placeholder="Country"
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="country"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="client_no"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                                        No</label>
                                                                    <input type="text" placeholder="Telephone No"
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="telephone"
                                                                        id="" value="" required>
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
                                                                        class="form-control" name="email"
                                                                        id="" value="" required>
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
                                                                        class="form-control" name="name"
                                                                        id="" value="" required>
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
                                                                        class="form-control" name="postaladdress"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="" style="width: 33%">
                                                                <label for="client_no"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                    Postal Code</label>
                                                                <input type="text" placeholder="Postal Code"
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="postalcode" id=""
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
                                                                        class="form-control" name="pin"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="" style="width: 49%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="client_no"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                                        Town</label>
                                                                    <input type="text" placeholder="Town"
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="town"
                                                                        id="" value="" required>
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
                                                                        name="physicaladdress"></textarea>
                                                                </div>
                                                            </div>
                                                            <div style="width:49%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="postal_addr"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes
                                                                    </label>
                                                                    <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Notes" name="notes"
                                                                    ></textarea>
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
                    </div>
                    {{-- Start Edit Cororate Client --}}
                    <div class="modal fade" id="edit_corporate_client_details" style="">
                        <!-- create company -->
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!---- Modal Header -->
                                <form method="post" action="{{ url('') }}" enctype="multipart/form-data"
                                    id="addemployee">
                                    @csrf
                                    <h5><b>Edit Client Details:-</b></h5>

                                    <div class="row">
                                        <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                            No</label>
                                                        <input type="text" placeholder="Enter Client No "
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="first_name" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="gender" id="" required>
                                                            <option>Select Client Type</option>
                                                            <option value="1">Corporate</option>
                                                            <option value="2">Individual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Citizen
                                                        Status</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="gender" id="" required>
                                                        <option>Select Cityzen</option>
                                                        <option value="1">Residental</option>
                                                        <option value="2">Non Residential</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <label for="client_no"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Certificate</label>
                                                    <input type="text" placeholder="Enter Certificate "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="first_name" id=""
                                                        value="" required>

                                                </div>
                                                <div class="" style="width:33%;">
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country</label>
                                                    <input type="text" placeholder="Country"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width:33%;"><span style="color: red">*</span>
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                        No</label>
                                                    <input type="text" placeholder="Telephone"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 0px;">
                                                <div class="" style="width: 33%">
                                                    <label for="client_no"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Fax
                                                        No</label>
                                                    <input type="text" placeholder="Fax No "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="first_name" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width:33%;"><span style="color: red">*</span>
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                                    <input type="email" placeholder="Email"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width:33%;">
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Website</label>
                                                    <input type="text" placeholder="Website"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>

                                            </div>
                                            <div class="row" style="margin-top: 0px;">
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Brought
                                                        In
                                                        By</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="gender" id="" required>
                                                        <option>Brought in By</option>
                                                        <option value="1">Corporate</option>
                                                        <option value="2">Individual</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status
                                                        Reporting Day
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="gender" id="" required>
                                                        <option>Select Reporting Day</option>
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                        Source
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="gender" id="" required>
                                                        <option>Select Client Source</option>
                                                        <option value="1">Existing Client</option>
                                                        <option value="2">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 0px;">
                                                <div class="" style="width:33%;">
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                        Source</label>
                                                    <input type="text" placeholder="Client Source Narration"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width:33%;"><span style="color: red">*</span>
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                        Name</label>
                                                    <input type="text" placeholder="Client Name"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class="">
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                            Industry
                                                        </label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="gender" id="" required>
                                                            <option>Select Client Industry</option>
                                                            <option value="1">Construction</option>
                                                            <option value="2">Auto Mobile</option>
                                                            <option value="2">Hospital</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Practice
                                                        Area
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example"
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
                                                <div class="" style="width:33%;"><span style="color: red">*</span>
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                        Address</label>
                                                    <input type="text" placeholder="Postal Address "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="first_name" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class="">
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Pin
                                                            No</label>
                                                        <input type="text" placeholder="Pin No "
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="first_name" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width:50%;">
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                        Code</label>
                                                    <input type="text" placeholder="Postal Code"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
                                                </div>
                                                <div class="" style="width:49%;">
                                                    <label for="city"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Town
                                                    </label>
                                                    <input type="text" placeholder="Town"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        class="form-control" name="city" id=""
                                                        value="" required>
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
                                                    <div class="">
                                                        <label for="postal_addr"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes
                                                        </label>
                                                        <textarea class="outer" rows="4" style="width:100%;" cols="41" placeholder="Notes" name="postal_addr"
                                                            form="addemployee"></textarea>
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
            </div>
            <script>
            function changestatus(param) { // change individal status
                var status = $(param).prop('checked') == true ? 1 : 0;
                var user_id = $(param).data('id');
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('changestatus_individual') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'status': status,
                        'id': user_id
                    },
                    success: function(data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 1;
                        toastr.success(data.success);
                    }
                });
            }
            <script>
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
