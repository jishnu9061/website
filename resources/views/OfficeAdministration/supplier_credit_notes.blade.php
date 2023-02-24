@extends('layouts.hmsmain')
@section('content')
    <nav style="font-size:15px;">
        <a href="{{ url('home') }}" style="color: #1D1D50;">Home</a> /
        <a href="#" style="color: #1D1D50;">Office Administration</a> /
        <a href="#" style="color: #1D1D50;">Supplier Credit Notes</a>
    </nav>
    <br><br>
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Supplier Credit Notes</b></h4>
        <br>

        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                    style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">New
                    Credit
                    Notes</button>
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
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Doc No.</th>
                                        <th class="text-center">Supplier</th>
                                        <th class="text-center">Invoice No.</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Approval</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal"
                                                        href="{{ url('view_supplier_credit') }}">View Supplier Credit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editModal" href="{{ url('edit_supplier_credit') }}">Edit
                                                        Supplier Credit</a>
                                                    <a class="dropdown-item" href="#">Delete Supplier Credit</a>

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





                    </div>
                </div>
            </div>




            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="text-centre"><b>Add Credit Notes</b></h2>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" enctype="multipart/form-data" action="{{ url('') }}">
                                    @csrf
                                    <div class="container">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Date</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Branch</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Nairobi</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Credit Note No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Supplier</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>choose a supplier</option>
                                                        <option value="1">supplier 1</option>
                                                        <option value="2">supplier 2</option>
                                                        <option value="3">supplier 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Attach to Invoice</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>None</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Currency</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>KES</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Exchange Rate </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Client</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">client 1</option>
                                                        <option value="2">client 2</option>
                                                        <option value="3">client 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">File</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">file 1</option>
                                                        <option value="2">file 2</option>
                                                        <option value="3">file 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Financial Account</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">Acc 1</option>
                                                        <option value="2">Acc 2</option>
                                                        <option value="3">Acc 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Partner Drawings Account</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">Acc 1</option>
                                                        <option value="2">Acc 2</option>
                                                        <option value="3">Acc 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Partner Drawings Item</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">item 1</option>
                                                        <option value="2">item 2</option>
                                                        <option value="3">item 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Amount</label>
                                                    <input type="text" class="form-control">
                                                    <div class="form-text">(inclusive of VAT & Excise Duty)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">Description</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class="mb-3">
                                                    <label for="inputEmail4">VAT Tax</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>VAT (@0%)</option>
                                                        <option value="1">VAT (@5%)</option>
                                                        <option value="2">VAT (@10%)</option>
                                                        <option value="3">VAT (@15%)</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" class="btn btn-primary">Add Entry</button>


                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm">

                                            </div>
                                            <div class="col-sm">
                                                <button type="submit" class="btn btn-primary " Style="width:50%;">Post
                                                    Credit
                                                    Note</button>
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
            </div>

            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog modal-xl" style="width: 60%">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;">
                                <h4 class="text-centre"><b>View Supplier Credit Note</b></h4>
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
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                    <input type="text" placeholder="Enter Client No "
                                                        style="width=45%" class="form-control" name="number"
                                                        id=""
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
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected>Nairobi</option>
                                                        <option value="1">jack</option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for="creditno"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Credit Note No.</label>
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
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">supplier</label>
                                                        <select class="form-select" aria-label="Default select example" Disabled> 
                                                            <option selected>choose a supplier</option>
                                                            <option value="1">supplier 1</option>
                                                            <option value="2">supplier 2</option>
                                                            <option value="3">supplier 3</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for="inputEmail4"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Attach to Invoice</label>
                                                    <select class="form-select" aria-label="Default select example" Disabled>
                                                        <option selected>None</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Exchange Rate</label>
                                                    <input type="text" class="form-control" Disabled>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class="">
                                                    <label for="username"
                                                        style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                        <select class="form-select" aria-label="Default select example" >
                                                            <option selected>--- select ---</option>
                                                            <option value="1">client 1</option>
                                                            <option value="2">client 2</option>
                                                            <option value="3">client 3</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="username"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example" Disabled>
                                                        <option selected>--- select ---</option>
                                                        <option value="1">file 1</option>
                                                        <option value="2">file 2</option>
                                                        <option value="3">file 3</option>
                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Email is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class="">
                                                    <label for="company_name"
                                                        style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Financial Account</label>
                                                    <select class="form-select" aria-label="Default select example" Disabled>
                            <option selected>--- select ---</option>
                            <option value="1">Acc 1</option>
                            <option value="2">Acc 2</option>
                            <option value="3">Acc 3</option>
                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partner Drawings Account</label>
                                                <input type="text" placeholder="Enter Brought In By" style="width=45%"
                                                    class="form-control" name="brought" id="" value="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partner Drawings Item</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected>--- select ---</option>
                                                        <option value="1">item 1</option>
                                                        <option value="2">item 2</option>
                                                        <option value="3">item 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partner Drawings Item</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected>--- select ---</option>
                                                        <option value="1">item 1</option>
                                                        <option value="2">item 2</option>
                                                        <option value="3">item 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                    <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">VAT Tax</label>
                                                    <input type="text" class="form-control" Disabled>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 100%">
                                                <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                                    <textarea class="form-control" rows="3" Disabled></textarea>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
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
            <div class="modal fade" id="editModal">
                <div class="modal-dialog modal-xl" style="width: 60%">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="padding:0rem 0rem;">
                            <div style="padding:1rem 1rem;">
                                <h4 class="text-centre"><b>Edit Supplier Credit Note</b></h4>
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
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date</label>
                                                    <input type="text" placeholder="Enter The Date"
                                                        style="width=45%" class="form-control" name="number"
                                                        id=""
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
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Branch</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected>Nairobi</option>
                                                        <option value="1">jack</option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for="creditno"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Credit Note No.</label>
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
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">supplier</label>
                                                        <select class="form-select" aria-label="Default select example" Disabled> 
                                                            <option selected>choose a supplier</option>
                                                            <option value="1">supplier 1</option>
                                                            <option value="2">supplier 2</option>
                                                            <option value="3">supplier 3</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for="inputEmail4"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Attach to Invoice</label>
                                                    <select class="form-select" aria-label="Default select example" Disabled>
                                                        <option selected>None</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            <div class="" style="width: 33%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>KES</option>
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option value="3"></option>
                                                    </select>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 25%">
                                                <div class="">
                                                    <label for="username"
                                                        style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Exchange Rate</label>
                                                        <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="username"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client
                                                    </label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">client 1</option>
                                                        <option value="2">client 2</option>
                                                        <option value="3">client 3</option>
                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Email is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                <div class="">
                                                    <label for="company_name"
                                                        style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>--- select ---</option>
                                                            <option value="1">file 1</option>
                                                            <option value="2">file 2</option>
                                                            <option value="3">file 3</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Financial Account</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">Acc 1</option>
                                                        <option value="2">Acc 2</option>
                                                        <option value="3">Acc 3</option>
                                                    </select>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- </div> --}}
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partner Drawings Account</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>--- select ---</option>
                                                        <option value="1">Acc 1</option>
                                                        <option value="2">Acc 2</option>
                                                        <option value="3">Acc 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                <label for=""
                                                    style="width: 150px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Partner Drawings Item</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" >
                                                        <option selected>--- select ---</option>
                                                        <option value="1">item 1</option>
                                                        <option value="2">item 2</option>
                                                        <option value="3">item 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                    <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount</label>
                                                    <input type="text" class="form-control">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="" style="width: 25%">
                                                {{-- <div class=""><span style="color: red">*</span> --}}
                                                    <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">VAT Tax</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>VAT (@0%)</option>
                                                        <option value="1">VAT (@5%)</option>
                                                        <option value="2">VAT (@10%)</option>
                                                        <option value="3">VAT (@15%)</option>
                                                    </select>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 100%">
                                                <label for=""
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                                    <textarea class="form-control" rows="3" Disabled></textarea>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    City/State/Country is required.
                                                </div>
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

        </div>
    @endsection
