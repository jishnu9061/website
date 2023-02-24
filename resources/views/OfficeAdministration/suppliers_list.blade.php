@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Office Administration</a> /
        <a href="#" style="color: #1D1D50;">Suppliers List</a>
    </nav>
    <br><br>
    {{-- heading --}}
    <div class="container">

        <h4 id="hdtpa"><b>Supplier List</b></h4>
        <br>

        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                    style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    Supplier</button>
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

                            <th scope="col">Supplier</th>
                            <th scope="col">PIN No.</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">G/L Account</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>ABC CONSULT</td>
                            <td>P051462895P</td>
                            <td>0713515179</td>
                            <td>2consultabc@gmail.com</td>
                            <td>9010</td>
                            <td><span class="badge bg-success">ACTIVE</span> </td>
                            <td scope="row" class="text-center">
                                <div class="btn-group">
                                    <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="border-color:none;"> ⋮ </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('view_supplier_list') }}">View
                                            Supplier List</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#editModal"
                                            href="{{ url('edit_supplier_list') }}">Edit
                                            Supplier List</a>
                                        <a class="dropdown-item" href="#">Delete Supplier List</a>

                                    </div>
                                </div>
                            </td>

                        </tr>

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




            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-centre"><b>Add New Supplier</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" enctype="multipart/form-data" action="{{ url('') }}">
                                    @csrf
                                    <div class="container">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Category</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Information Technology</option>
                                                        <option value="1">tech 1</option>
                                                        <option value="2">tech 2</option>
                                                        <option value="3">tech 3</option>
                                                    </select>
                                                    <button type="button" class="btn btn-primary"
                                                        style="margin-top:8px;">Add</button>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Supplier Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">PIN Number</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Postal Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Town / City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Telephone No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Fax No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Physical Address</label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Website</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Payment Terms</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>20 Days</option>
                                                        <option value="1">30 Days</option>
                                                        <option value="2">60 Days</option>
                                                        <option value="3">90 Days</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Contact Person</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Designation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Extension No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Mobile No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-2">
                                                    <label for="inputEmail4">Notes</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">
                                            <button type="submit" class="btn btn-primary "
                                                Style="width:50%;">Save</button>
                                            <button type="button" class="btn btn-primary " Style="width:45%;"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-sm">

                                        </div>
                                    </div>

                            </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal fade" id="editModal">
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
                                            <h5><b>Edit Supplier List:-</b></h5>
                                            @csrf
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Category</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Information Technology</option>
                                                            <option value="1">tech 1</option>
                                                            <option value="2">tech 2</option>
                                                            <option value="3">tech 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supplier</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="ABC CONSULT">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">PIN
                                                        Number</label>
                                                    <input type="text" class="form-control" placeholder="P051462895P">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                            Address</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="136-00621, Nairobi">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                            Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Town
                                                            / City</label>
                                                        <input type="text" class="form-control"
                                                            placeholder=" Nairobi">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                            No.
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="0713515179">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Fax
                                                            No.
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                            Address
                                                        </label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">website
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Payment
                                                            Terms</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>20 Days</option>
                                                            <option value="1">30 Days</option>
                                                            <option value="2">60 Days</option>
                                                            <option value="3">90 Days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                            Contact Person</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="" style="width: 25%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                            Designation</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 25%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_no"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                                            Extension No.</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="" style="width: 25%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="gender"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile
                                                            No.
                                                        </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                           

                                            <div class="" style="width: 25%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="gender"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                        Address
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="" style="width: 50%">
                                        <div class=""><span style="color: red">*</span>
                                        <label for="client_no"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">
                                            Notes</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="" style="width: 50%">
                                        <div class=""><span style="color: red">*</span>
                                            <label for="gender"
                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Physical
                                                Address</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
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
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"
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
@endsection
