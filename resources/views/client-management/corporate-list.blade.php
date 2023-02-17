@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
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

        th {
            width: 30%;
        }

        .outer {
            border-color: #1d1d50;
            width=45%;
            border-radius: 7px;
        }

        .add_doc {
            text-decoration: none;
            display: inline-block;
            */width: 30px;
            height: 30px;
            background: #8bc34a;
            font-size: 2rem;
            font-weight: bold;
            color: #1d1d50;
            align-items: center;
            line-height: 0.7;
            */display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .exdocdelete {
            text-decoration: none;
            display: inline-block;
            background: #f44336;
            color: #1d1d50;
            font-size: 1.5rem;
            font-weight: bold;
            width: 30px;
            height: 30px;
            margin-left: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .docflex {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 15px;
        }

        .doc_warp {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e4e1e1;
        }

        .doc_contanier {
            max-width: 1000px;
            background: white;
            border-radius: 5px;
            padding: 20px;
            */box-shadow: 0 2px 2px 43px black;
        }

        .doc_input {
            padding: 8px 10px;
            width: 50%;
            border-radius: 5px;
            border-color: #1d1d50;
        }

        .doc_input:focus {
            outline: 1px solid #efefef;
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

    <div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    Corporate Client</button>
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
                    <b style="font-size:18px;">Corporate Client List</b>
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
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:4%;">*</th>
                                <th class="text-center" style="width:15%;">Client No</th>
                                <th class="text-center" style="width:30%;">Client Name</th>
                                <th class="text-center">Email Address</th>
                                <th class="text-center">File Status</th>
                                <th class="text-center">Service Offered</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($corporate_list as $list)
                                <tr id="data">
                                    <td class="text-center">{{ $list->corporate_id }}</td>
                                    <td class="text-center">{{ $list->client_number }}</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list->client_name }}</td>
                                    <td class="text-center">{{ $list->Email_address }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
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
                                                <a class="dropdown-item"
                                                    href="{{ url('edit_client', $list->corporate_id) }}">Edit Client
                                                    Details</a>
                                                <a class="dropdown-item" href=""data-toggle="modal" data-id=""
                                                    data-name=""onclick="deletecompany(this)"
                                                    data-target="#deletecompany">Delete Client
                                                    Details</a>

                                                <a class="dropdown-item"
                                                    href="{{ url('corporate-document', $list->corporate_id) }}">Add
                                                    Documents</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('corporate-document-details', $list->corporate_id) }}">View
                                                    Document Details</a>
                                                <a class="dropdown-item" href="#">Engagement Letter</a>
                                                <a class="dropdown-item" href="#">Send Mail</a>
                                                <a class="dropdown-item" href="#">Post Important Date</a>
                                                <a class="dropdown-item" href="#">Post Status Summary</a>
                                                <a class="dropdown-item" href="#">Send Message</a>
                                                <a class="dropdown-item" href="#">Post Comment</a>
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
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;">
                        <h4 class="text-centre"><b>Create New Corporate Client</b></h4>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">

                        <form method="post" action="{{ url('add_corporate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="client_no"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                No</label>
                                            <input type="text" placeholder="Enter Client No " style="width=45%"
                                                class="form-control" name="number" id=""
                                                style="border-color:#1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                value=""required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Client No is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Type:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="type" id="cars">
                                                <option>Select Client Type</option>
                                                <option>Corporate</option>
                                                <option>Individual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="cityzen"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Cityzen
                                            Status</label>
                                        <input type="text" placeholder="Enter Client No " style="width=45%"
                                            class="form-control" name="cityzen" id="" value=""required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Client No is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class="">
                                            <label for="company_name"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Certificate</label>
                                            <input type="text" placeholder="Enter Certificate Of Incorporation "
                                                style="width=45%" class="form-control" name="certificate" id=""
                                                value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country:</label>
                                        <input type="text" placeholder="Enter Country" style="width=45%"
                                            class="form-control" name="country" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                            No:</label>
                                        <input type="text" placeholder="Enter Telephone No" style="width=45%"
                                            class="form-control" name="telephone" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <div class="">
                                            <label for="username"
                                                style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Fax
                                                No</label>
                                            <input type="text" placeholder="Enter Fax No " style="width=45%"
                                                class="form-control" name="faxno" id="" value="">
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="username"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                            </label>
                                            <input type="email" placeholder="Enter Email " style="width=45%"
                                                class="form-control" name="email">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Email is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        <div class="">
                                            <label for="company_name"
                                                style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Website</label>
                                            <input type="text" placeholder="Enter Website " style="width=45%"
                                                class="form-control" name="website" id="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Brought
                                            In By:</label>
                                        <input type="text" placeholder="Enter Brought In By" style="width=45%"
                                            class="form-control" name="brought" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status
                                            Reporting Day:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="status" id="cars">
                                                <option>Select Reporting Day</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option>Sunday</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Source:</label>
                                        <input type="text" placeholder="Enter Client Source" style="width=45%"
                                            class="form-control" name="source" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 33%">
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Naration:</label>
                                        <input type="text" placeholder="Enter Client Source Naration"
                                            style="width=45%" class="form-control" name="naration" id=""
                                            value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for=""
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                Name:</label>
                                            <input type="text" placeholder="Enter Client Name" style="width=45%"
                                                class="form-control" name="name" id="" value="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                City/State/Country is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Industry:</label>
                                        <input type="text" placeholder="Enter Client Industry" style="width=45%"
                                            class="form-control" name="industry" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="" style="width: 20%">
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Pin
                                            No:</label>
                                        <input type="text" placeholder="Enter Pin No" style="width=45%"
                                            class="form-control" name="pin" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 39%">
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                            Address:</label>
                                        <input type="text" placeholder="Enter Postal Address" style="width=45%"
                                            class="form-control" name="address" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 15%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                            Code:</label>
                                        <input type="text" placeholder="Enter Postal Code" style="width=45%"
                                            class="form-control" name="code" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="" style="width: 25%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Town:</label>
                                        <input type="text" placeholder="Enter Town" style="width=45%"
                                            class="form-control" name="town" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="width:50%">
                                        <label for="postal_addr"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Physcical
                                            Address</label>
                                        <textarea class="outer" rows="4" style="width:100%;"cols="41" placeholder="Enter Physical Address"
                                            name="physicaladdress" form="addemployee"></textarea>
                                    </div>
                                    <div style="width:49%">
                                        <label for="postal_addr"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes
                                        </label>
                                        <textarea class="outer" rows="4" style="width:100%;"cols="41" placeholder="Enter Notes" name="notes"
                                            form="addemployee"></textarea>

                                    </div>
                                </diV>

                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-4">
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
                                        <b style="font-size:18px;">Contact Person</b>
                                    </h4>
                                </div>
                                <div class="col-sm-4">
                                </div>
                            </div>
                            <div class="doc_contanier"style="*/background-color:orange;">
                                <div class="doc_warp">
                                    <h6>Add Contact Person details:-</h6>
                                    <a class="add_doc">&plus;</a>
                                </div>
                                <div class="row document_details " style="margin-bottom: 20px;">
                                    {{-- Add More Document details:- javascript --}}
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="" style="width: 50%;">
                            </div>
                            <div lass="" style="width: 0%"></div>
                            <div class="col-sm" style="padding-right: 0px;width: 50%">
                                <br>
                                <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                    Style="width:45%;">Create</button>
                                <button type="button" class="btn btn-primary float:left"
                                    Style="width:45%;"data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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
    <script>
        function exdocremoveinput() { // Add More Document details author@udayan --start
            this.parentElement.remove();
        }
        const adddoc = document.querySelector(" .add_doc ");
        const exdocinput = document.querySelector(" .document_details ");
        let m = 0;

        function exdocaddinput() {
            const exdocname = document.createElement("input");
            exdocname.type = "text";
            exdocname.className = "doc_input";
            exdocname.placeholder = "Enter Persion Name";
            exdocname.name = "exdoc[" + m + "][0]";

            const docidnumber = document.createElement("input");
            docidnumber.type = "text";
            docidnumber.className = "doc_input";
            docidnumber.placeholder = "Enter Designation";
            docidnumber.name = "exdoc[" + m + "][1]";

            const docidmobile = document.createElement("input");
            docidmobile.type = "text";
            docidmobile.className = "doc_input";
            docidmobile.placeholder = "Enter Mobile No";
            docidmobile.name = "exdoc[" + m + "][2]";

            const docidemail = document.createElement("input");
            docidemail.type = "text";
            docidemail.className = "doc_input";
            docidemail.placeholder = "Enter Email";
            docidemail.name = "exdoc[" + m + "][3]";

            const btndele = document.createElement("a");
            btndele.className = "exdocdelete";
            btndele.innerHTML = "&times;"

            const exdocflex = document.createElement("div");
            exdocflex.className = "docflex";

            btndele.addEventListener("click", exdocremoveinput);

            exdocinput.appendChild(exdocflex);
            exdocflex.appendChild(exdocname);
            exdocflex.appendChild(docidnumber);
            exdocflex.appendChild(docidmobile);
            exdocflex.appendChild(docidemail);
            exdocflex.appendChild(btndele);
            ++i;
        }
        adddoc.addEventListener("click", exdocaddinput); // Add More Document details author@udayan --end



        function decductremoveinput() { // Add More Decduction percentage author@udayan --start
            this.parentElement.remove();
        }
        const add_decduct = document.querySelector(" .add_decduct  ");
        const decduct_details = document.querySelector(" .decduct_details ");
        let p = 0;

        function add_decduct_input() {
            const decductname = document.createElement("input");
            decductname.type = "text";
            decductname.className = "doc_input";
            decductname.placeholder = "Enter Decduction Name";
            decductname.name = "decduct[" + p + "][0]"

            const decductnumber = document.createElement("input");
            decductnumber.type = "number";
            decductnumber.className = "decduct_input";
            decductnumber.placeholder = "%";
            decductnumber.name = "decduct[" + p + "][1]"

            const decductdele = document.createElement("a");
            decductdele.className = "exdocdelete";
            decductdele.innerHTML = "&times;"

            const decductflex = document.createElement("div");
            decductflex.className = "docflex";

            decductdele.addEventListener("click", decductremoveinput);

            decduct_details.appendChild(decductflex);
            decductflex.appendChild(decductname);
            decductflex.appendChild(decductnumber);
            decductflex.appendChild(decductdele);
            ++p;

        }
        add_decduct.addEventListener("click", add_decduct_input); // Add More Decduction percentage author@udayan --end
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

    {{-- Supplier Edit start --}}
@endsection
