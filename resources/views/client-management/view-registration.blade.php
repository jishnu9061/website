@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Individual Customers</a>
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

    <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->


    <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
    {{-- heading --}}
    <div class="container">
        <!-- <div>
            <button type="button" class="btn btn-primary complaint_btn btn " data-toggle="modal"
                data-target="#myModal">Register Customers</button></a>
        </div> -->
        <div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Register Customers</button>
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
                    <b style="font-size:18px;">Individual Customers</b>
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




            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="table-id">

                            <thead>
                                <tr>
                                    <!-- <th class="text-center">No</th> -->
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Email</th>


                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($view_registration as $registration)

                                <tr class="text-center" id="data">
                                    <!-- <td>{{$registration->id}}</td> -->
                                    <td>{{$registration->customer_name}}</td>
                                    <td>{{$registration->customer_address}}</td>
                                    <td>{{$registration->mobile_no}}</td>
                                    <td>{{$registration->email}}</td>


                                    <!-- <td scope="row"> <a href="{{url('show-registration',$registration->id)}}"><i
                                                style="color:black;" class="fa fa-eye" aria-hidden="true"></i></a>
                                        <span class="m-2"></span><a
                                            href="{{url('edit-registration',$registration->id)}}"><i
                                                style="color:black;" class="fa fa-edit" aria-hidden="true"></i>
                                            <span class="m-2"></span>
                                            <a onClick="return myFunction();"
                                                href="{{url('delete-registration',$registration->id)}}"
                                                style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                            <input type="hidden" value="" id="medicine_id_hidden" class="applicate"
                                                name="supplier_id_hidden"> -->

                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('show-registration',$registration->id)}}">View
                                                    Client
                                                    Details</a>
                                                {{-- <a class="dropdown-item" href="{{url('edit-registration',$registration->id)}}">Edit
                                                    Client
                                                    Details</a> --}}
                                                    <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_individual_customers" href="#">Edit
                                                    Client
                                                    Details</a>
                                                <a class="dropdown-item"
                                                  href="#"onclick=deleteindividual(this) data-id="{{ $registration->id}}"data-toggle="modal"
                                                    data-target="#deleteIndividual">Delete Client Details</a>

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
                                    <h2 class="text-center"><b>Register Individual Customers</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 order-md-1">
                                                <form method="post" action="{{url('add-registration')}}" id="form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="client_name" id="username" value=""
                                                                        placeholder="Name" required>

                                                                    <!-- <input type="text" class="form-control" name="name"
                                                                    id="username" value="" placeholder="Client name"
                                                                    required> -->
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Customer Name is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Postal Code</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="Code"
                                                                        id="username" value="" placeholder="Postal Code"
                                                                        required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Postal Code is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Town</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>

                                                                    <select name="town" id="username"
                                                                        style="width:100%;">
                                                                        <option>---select--- </option>
                                                                        <option>Nairobi </option>

                                                                    </select>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Town is required.
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Country</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="country" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>kenya</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Telephone No</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="telephone" id="username" value=""
                                                                        placeholder="Telephone" required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Telephone No is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Email Address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="email"
                                                                        id="username" value="" placeholder="Email"
                                                                        required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Email Address is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Mobile No</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="mobile" id="age" value=""
                                                                        placeholder="Mobile No" min="0" max="99">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Mobile No is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Website</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="website" value="" id="confirm_password"
                                                                        placeholder="Website">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Web site is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Registration Date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="date" class="form-control" name="Date"
                                                                        value="" id="confirm_password"
                                                                        placeholder="Web Site">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Registration Date
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Address</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="form7Example7"
                                                                        rows="2" name="caddress"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Physical Address</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="form7Example7"
                                                                        rows="2" name="paddress"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <!-- <h4 style="text-align:center">Contact Persons</h4> -->



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

{{-- Start Edit Individual Customers --}}
<div class="modal fade" id="edit_individual_customers" style="">
    <!-- edit individual customers -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Individual Customers:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;"> Name
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control"
                                                name="client_name" id="username" value=""
                                                placeholder="Name" required>

                                            <!-- <input type="text" class="form-control" name="name"
                                            id="username" value="" placeholder="Client name"
                                            required> -->
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Customer Name is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="postal_code"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal Code</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="Code"
                                                id="username" value="" placeholder="Postal Code"
                                                required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Postal Code is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="town"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Town</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>

                                            <select name="town" id="username"
                                                style="width:100%;">
                                                <option>---select--- </option>
                                                <option>Nairobi </option>

                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Town is required.
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="country"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Country</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="country" id="cars">
                                                <option>---select---</option>
                                                <option>kenya</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="telephone"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control"
                                            name="telephone" id="username" value=""
                                            placeholder="Telephone" required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Telephone No is required.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="email_address"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email Address
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="email"
                                            id="username" value="" placeholder="Email"
                                            required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email Address is required.
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="mobile_no"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile No
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control"
                                                name="mobile" id="age" value=""
                                                placeholder="Mobile No" min="0" max="99">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Mobile No is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="website"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Website</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control"
                                            name="website" value="" id="confirm_password"
                                            placeholder="Website">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Web site is required.
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="registration_date"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Registration Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="date" class="form-control" name="Date"
                                            value="" id="confirm_password"
                                            placeholder="Web Site">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Registration Date
                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="client-address"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="form7Example7"
                                            rows="2" name="caddress"></textarea>
                                        <div class="invalid-feedback" style="width: 100%;">

                                        </div>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="physical-address"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Physical Address</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="form7Example7"
                                            rows="2" name="paddress"></textarea>
                                        <div class="invalid-feedback" style="width: 100%;">

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
{{-- End edit individual customers --}}

            <!-- Delete  confirmation Message -->
            <div class="modal fade" id="deleteIndividual" style=""> <!-- delete corporate -->
                <div class="modal-dialog modal-lg" style="width:30%;">
                    <div class="modal-content">
                        <!---- Modal Header -->
                        <form method="post"  id="delete_individual" action="{{url('delete-registration',$registration->id)}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" value="id">
                            <div class="modal-header" style="padding:0rem 0rem;">
                                <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_individual"></span></b></h4></div>
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
