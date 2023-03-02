@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Client Management</a> /
        <a href="{{ url('communication-list') }}" style="color: #1D1D50;">Communication Details</a> /
        <a href="#" style="color: #1D1D50;">Client Service Details</a>
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
        <div class="container">
            <div>
                <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Client
                                Reception</u></b></span>-->
                {{-- heading --}}
                <h4 id="hdtpa"><b> Service Details</b></h4>
                <br>
            </div>
            <button class="btn btn-primary add-btn" data-toggle="modal" data-target="#myModal" style="width:21%">New Client
                Service</button></a>


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
                <!--
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>
                            <tr>
                                <th class="text-center" style="width:15%;">Branch</th>
                                <th class="text-center" style="width:15%;">Client</th>
                                <th class="text-center">Mobile</th>
                                <th class="text-center">Service</th>
                                <th class="text-center" style="width:15%;">Description</th>
                                <th class="text-center">Handling</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">RCPT</th>
                                <th class="text-center">Mode</th>
                                <th class="text-center">Registered</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $list_service)
                                <tr id="data" style="width:100%;">
                                    <td class="text-center">{{ $list_service->branch_name }}</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list_service->client_name }}</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list_service->mobile }}</td>

                                    <td class="text-center" id="medicine_name_1">test1</td>
                                    <td class="text-center" id="medicine_name_1">test2</td>
                                    <td class="text-center" id="medicine_name_1">test3</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list_service->amount_paid }}</td>

                                    <td class="text-center" id="medicine_name_1">{{ $list_service->receipt_no }}</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list_service->payment_method }}</td>
                                    <td class="text-center" id="medicine_name_1">test4</td>
                                    {{-- <td class="text-center" id="medicine_name_1">
                                        <a href="{{ url('edit-service', $list_service->id) }}"><i style="color:black;"
                                                class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a onClick="return myFunction();"
                                            href="{{ url('delete-service', $list_service->id) }}" style="color:black;"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td> --}}
                                    <td scope="row"class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#editmodal"
                                                    href="{{ url('edit-service', $list_service->id) }}">Edit
                                                    Service
                                                </a>
                                                <a href="{{ url('delete-service', $list_service->id) }}" class="dropdown-item" data-toggle="modal"
                                                    data-id="" data-name="" 
                                                    data-target="#deleteservice">Delete Service
                                                    </a>
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
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{ url('add-service') }}">
                                                <h5><b>Create New Client Details:-</b></h5>
                                                @csrf
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Receipt
                                                                No</label>
                                                            <input type="text" placeholder="Enter Client No "
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="receiptno" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                                name</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Name" id="" required>
                                                                <option>Select Client Name</option>
                                                                <option>Client 1</option>
                                                                <option>Client 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile
                                                                No</label>
                                                            <input type="text" placeholder="Enter mobile Number"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="Mobile" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount
                                                                Paid</label>
                                                            <input type="text" placeholder="Enter mobile Number"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="amount_paid" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                            <input type="date" placeholder="Country"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="date" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_no"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                                            <input type="email" placeholder="Enter the Email"
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="email" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="" style="width: 50%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Code
                                                            </label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="code" id="" required>
                                                                <option>Select Code</option>
                                                                <option>Code 1</option>
                                                                <option>Code 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 49%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="gender"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Payment
                                                                method</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Method" id="" required>
                                                                <option>Select Payment</option>
                                                                <option>By Cash</option>
                                                                <option>By cheque</option>
                                                                <option>Online Payment</option>
                                                            </select>
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
                                                                data-dismiss="modal" style="width:45%;">Cancel</button>
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
            <div class="modal fade" id="">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-center"><b>New Client Service</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="{{ url('add-service') }}" id="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Receipt No</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="Receipt"
                                                                id="username" value="">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Client Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="code" id="cars">
                                                                <option>select</option>
                                                                @if (count($get_items))
                                                                    @foreach ($get_items as $list_client)
                                                                        <option>{{ $list_client->client_name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <!-- <input type="text" class="form-control" name="Name"
                                                                                id="username" value=""> -->
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Mobile</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="Mobile"
                                                                id="username" value="">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Amount Paid</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="amount"
                                                                id="username" value="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Date</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="date" class="form-control" name="date"
                                                                id="username" value="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="email" class="form-control" name="email"
                                                                id="username" value="" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label for="username">Code</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="code" id="cars">
                                                                <option>select</option>
                                                                <option>Code1</option>
                                                                <option>Code2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label for="username">Payment Method</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <select name="Method" id="cars">
                                                                <option>Select</option>
                                                                <option>Cash</option>
                                                                <option>Checks</option>
                                                                <option>Debit cards</option>
                                                                <option>Credit cards</option>
                                                                <option>Mobile payments</option>
                                                                <option>Electronic bank transfers
                                                                </option>
                                                            </select>
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
                                                            Style="width:45%;" data-dismiss="modal">Close</button>
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
            <div class="modal fade" id="editmodal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="{{ url('add-service') }}">
                                            <h5><b>Create New Client Details:-</b></h5>
                                            @csrf
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Receipt
                                                            No</label>
                                                        <input type="text" placeholder="Enter Client No "
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="receiptno" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                            name</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="Name" id="" required>
                                                            <option>Select Client Name</option>
                                                            <option>Client 1</option>
                                                            <option>Client 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile
                                                            No</label>
                                                        <input type="text" placeholder="Enter mobile Number"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="Mobile" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount
                                                            Paid</label>
                                                        <input type="text" placeholder="Enter mobile Number"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="amount_paid" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                        <input type="date" placeholder="Country"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="date" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                                        <input type="email" placeholder="Enter the Email"
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="email" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Code
                                                        </label>
                                                        <select class="form-select"
                                                            aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="code" id="" required>
                                                            <option>Select Code</option>
                                                            <option>Code 1</option>
                                                            <option>Code 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 49%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Payment
                                                            method</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="Method" id="" required>
                                                            <option>Select Payment</option>
                                                            <option>By Cash</option>
                                                            <option>By cheque</option>
                                                            <option>Online Payment</option>
                                                        </select>
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
                                                            data-dismiss="modal" style="width:45%;">Cancel</button>
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

            <!-- The Modal -->
            
            <div class="modal fade" id="deleteservice" style="">
                <!-- delete company -->
                <div class="modal-dialog modal-lg" style="width:30%;">
                    <div class="modal-content">
                        <!---- Modal Header -->
                        <form method="post" id="delete_company" action="#" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="deleteuniqueid" value="uniqueid">
                            <div class="modal-header" style="padding:0rem 0rem;">
                                <div style="padding:1rem 1rem;">
                                    <h4 class="text-centre"><b>Delete <span id="deletcompany_name"></span></b></h4>
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

        <br>
        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

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
