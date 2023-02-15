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
                                <th class="text-center">Client No</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Email Address</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Service Offered</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Documents</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($corporate_list as $list)
                                <tr id="data">
                                    <td class="text-center">{{ $list->client_number }}</td>
                                    <td class="text-center" id="medicine_name_1">{{ $list->client_name }}</td>
                                    <td class="text-center">{{ $list->Email_address }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">{{ 'Active' }}</td>
                                    <td class="text-center"><a
                                            href="{{ url('corporate-document', $list->corporate_id) }}"><button
                                                style="font-size: 13px; min-width:120px" class="btn btn-primary ">Add
                                                Document</button></a>
                                        <a href="{{ url('corporate-document-details', $list->corporate_id) }}"><button
                                                style="font-size: 13px; min-width:120px" class="btn btn-primary ">View
                                                Document</button></a>
                                    </td>
                                    {{-- <td class="text-center">
                                        <a href="{{ url('edit_client', $list->corporate_id) }}"><i style="color:black;"
                                                class="fa fa-edit" aria-hidden="true"></i>
                                            <a onClick="return myFunction();"
                                                href="{{ url('delete_client', $list->corporate_id) }}"
                                                style="color:black;"><i class="fas fa-trash-alt"></i></a>
                                    </td> --}}
                                    <td scope="row"class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ url('edit_client', $list->corporate_id) }}">Edit Client
                                                    Details</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('delete_client', $list->corporate_id) }}">Delete Client
                                                    Details</a>
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
                                                value=""required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Client No is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="width:33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="username"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Type</label>
                                        <input type="text" placeholder="Enter client type " style="width=45%"
                                            class="form-control" name="type" id="" value=""required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            company Type is required.
                                        </div>
                                        {{-- </div> --}}
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
                                                style="width=45%" class="form-control" name="address" id=""
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
                                            class="form-control" name="country" id="" value="">
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
                                                class="form-control" name="postal_code" id="" value="">
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
                                                class="form-control" name="GSTin" id="" value="">
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
                                            class="form-control" name="country" id="" value="">
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
                                            class="form-control" name="country" id="" value="">
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
                                            style="width=45%" class="form-control" name="country" id=""
                                            value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Name:</label>
                                        <input type="text" placeholder="Enter Client Name" style="width=45%"
                                            class="form-control" name="country" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 33%">
                                        {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                            Industry:</label>
                                        <input type="text" placeholder="Enter Client Industry" style="width=45%"
                                            class="form-control" name="country" id="" value="">
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
                                            class="form-control" name="country" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                    </div>
                                    <div class="" style="width: 39%">
                                        <label for=""
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                            Address:</label>
                                        <input type="text" placeholder="Enter Postal Address" style="width=45%"
                                            class="form-control" name="country" id="" value="">
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
                                            class="form-control" name="country" id="" value="">
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
                                            class="form-control" name="country" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            City/State/Country is required.
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="width:50%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="postal_addr"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                Address</label>
                                            <textarea class="outer" rows="4" style="width:100%;"cols="41" placeholder="Postal Address"
                                                name="postal_addr" form="addemployee"></textarea>
                                        </div>
                                    </div>
                                    <div style="width:50%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="postal_addr"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                Address</label>
                                            <textarea class="outer" rows="4" style="width:100%;"cols="41" placeholder="Postal Address"
                                                name="postal_addr" form="addemployee"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                   
                    
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
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
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
