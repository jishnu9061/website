@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Internal Memos</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Internal Memos </b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Memo</button>

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
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Date</th>
                    <th scope="col">Memo From</th>
                    <th scope="col">Memo To</th>
                    <th scope="col">Department</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        {{-- <a href="{{ url('view_memo') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-eye"></i><span
                                class="m-2"></span>
                            <a href="{{ url('edit_memo') }}"><i style="color:rgb(13, 1, 56);"
                                    class="fa fa-edit"></i><span class="m-2"></span>
                                <a href="{{ url('') }}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i> --}}
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                            href="#">View Memo</a>
                                            <a class="dropdown-item" data-toggle="modal"
                                            data-target="#edit_memo" href="#">Edit Memo</a>
                                            <a class="dropdown-item"
                                             href="#"onclick=deletememo(this) data-id=""data-toggle="modal"
                                                data-target="#delete_memo">Delete Memo</a>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-centre"><b>Add Memo</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="date" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Memo From</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder="" name="executor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Memo To</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_type">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Department</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="matter_info">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Supporting
                                                Details</label>
                                            <span class="m-2"></span>
                                            <input type="file" class="form-control" name="supporting_details">
                                        </div>
                                    </div>
                                    <br>

                                    <div>
                                        <button type="button" class="btn btn-primary float-right"
                                            data-dismiss="modal">Close</button>
                                        <span class="m-2"></span>
                                        <button type="submit" class="btn btn-primary float-right">Save</button>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>



</div>
{{-- Start Edit Memo --}}
<div class="modal fade" id="edit_memo" style="">
    <!-- edit memo -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Memo:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="date"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                        </label>
                                        <input class="form-control" type="date" placeholder="" aria-label="input example">
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="memo from"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Memo From</label>
                                        <input class="form-control" type="text" placeholder="" aria-label="input example">
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="memo_to"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Memo To</label>
                                        <input class="form-control" type="text" placeholder="" aria-label="input example">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="department"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Department</label>
                                        <input class="form-control" type="text" placeholder="" aria-label="input example">
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="subject"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Subject</label>
                                    <input class="form-control" type="text" placeholder="" aria-label="input example">
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="description"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description
                                    </label>
                                    <textarea class="form-control" rows="2" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="documents"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supporting Documents
                                        </label>
                                        <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row document_details " style="margin-bottom: 20px;">
                            {{-- Add More Document details:- javascript --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class style="width: 20%;">
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
</div>
{{-- End edit memo --}}
<div class="modal fade" id="delete_memo" style=""> <!-- delete memo -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_bank" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_bank"></span></b></h4></div>
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
@endsection
