@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Tender Management</a> /
        <a href="#" style="color: #1D1D50;">Tender Details</a>
    </nav>
    <br><br>

    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Tender Details</b></h4>

        <br><br>

        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                    style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    New Tender</button>
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



            <div class="table-responsive">
                <table class="table text-center" id="table-id">
                    <thead>
                        <tr>

                            <th scope="col">From Date</th>
                            <th scope="col">To Date</th>
                            <th scope="col">Item</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tender_details as $list)
                            <tr>
                                <td>{{ $list->from_date }}</td>
                                <td>{{ $list->to_date }}</td>
                                <td>{{ $list->item }}</td>
                                <td>{{ $list->description }}</td>
                                <td><span class="badge bg-success">Opened</span></td>
                                <td scope="row" class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('view_tender_details', $list->id) }}">View
                                                Tender Details</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editModal"
                                                href="{{ url('edit_tender_details', $list->id) }}">Edit Tender Details</a>
                                            <a class="dropdown-item"
                                                href="{{ url('delete_tender_details', $list->id) }}">Delete Tender
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


        </div>







        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-default">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="text-centre"><b>Add Tender</b></h2>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" enctype="multipart/form-data" action="{{ url('store_tender') }}">
                                @csrf
                                <div class="container">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">From Date</label>
                                            <input type="date" class="form-control" name="from_date">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">To Date</label>
                                            <input type="date" class="form-control" name="to_date">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Item</label>
                                            <input type="text" class="form-control" name="item">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Category</label>
                                            <select class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example" name="Category">
                                                <option selected>--- select ---</option>
                                                <option>Furniture</option>
                                                <option>Stationary</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Quantity</label>
                                            <input type="text" class="form-control" name="Quantity">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress">Description</label>
                                            <textarea class="form-control" rows="3" name="Description"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="inputZip">Status</label>
                                            <div class="alert alert-success text-center" role="alert">
                                                Opened
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
                                            <button type="submit" class="btn btn-primary "
                                                Style="width:50%;">Save</button>
                                            <button type="button" class="btn btn-primary " Style="width:45%;"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-xl" style="width: 60%">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <h5><b>Edit Tender Details:-</b></h5>
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
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">From
                                                    Date</label>
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
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                To </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="date" class="form-control" value=""
                                                    name="to_date">
                                            </div>
                                        </div>
                                        <div class="" style="width: 33%">
                                            {{-- <div class=""><span style="color: red">*</span> --}}
                                            <label for="creditno"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item</label>
                                            <input type="text" placeholder="Enter Client Note No " style="width=45%"
                                                class="form-control" name="creditno" id=""
                                                value=""required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Client No is required.
                                            </div>
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="" style="width: 33%">
                                            <div class="">
                                                <label for="inputEmail4"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Category</label>
                                                <input type="text" class="form-control" value=""
                                                    name="Category">
                                            </div>
                                        </div>
                                        <div class="" style="width: 33%">
                                            {{-- <div class=""><span style="color: red">*</span> --}}
                                            <label for="inputEmail4"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Quantity</label>
                                            <input type="text" class="form-control" value="" name="Quantity">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                City/State/Country is required.
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                        <div class="" style="width: 33%">
                                            {{-- <div class=""><span style="color: red">*</span> --}}
                                            <label for=""
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status</label>
                                            <input type="text" class="form-control alert alert-success" role="alert"
                                                placeholder="Opened">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="" style="width: 100%">
                                            <div class="">
                                                <label for="username"
                                                    style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                                <textarea class="form-control" rows="3" name="Description"></textarea>
                                            </div>
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
                                            <button type="submit" onclick="return Validate()"
                                                class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
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
        @endsection
