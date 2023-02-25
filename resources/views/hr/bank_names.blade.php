@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Add Bank</a>
</nav>
<br><br>

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Banks</b></h4>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Bank</button></a>

    <br>
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

                    <th scope="col">Bank Name</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($bank_list as $list)
                <tr>
                    <td>{{$list->bank_name}}</td>
                    <td>{{$list->branch}}</td>
                    <td>

                        {{-- <a href="{{url('edit_bank_name',$list->id)}}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i>
                            <span class="m-2"></span>
                            <a href="{{url('delete_bank',$list->id)}}"> <i style="color:rgb(13, 1, 56);"
                                    class="fas fa-trash-alt"></i> --}}
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="modal"
                                            data-target="#edit_bank" href="#">Edit Bank</a>
                                            <a class="dropdown-item"
                                             href="#"onclick=deletebank(this) data-id="{{$list->id}}"data-toggle="modal"
                                                data-target="#delete_bank">Delete Bank</a>
                                                </div>

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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Add Bank</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="{{url('add_bank_names')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Branch</label>
                            <input type="text" class="form-control" placeholder="" name="branch">
                        </div>
                        <br>

                        <div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
{{-- Start Edit Bank--}}
<div class="modal fade" id="edit_bank" style="">
    <!-- edit bank -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Bank:-</b></h5>

                <div class="row">

                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="bank_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Bank Name
                                        </label>
                                        <input type="text" class="form-control" id="w3review" value=""
                                name="bank_name" id="username">
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="branch"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Branch</label>
                                        <input type="text" class="form-control" id="inputEmail4" value=""
                                        name="branch" id="username">
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
{{-- End edit bank --}}

<div class="modal fade" id="delete_bank" style=""> <!-- delete bank -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_bank" action="{{url('delete_bank',$list->id)}}" enctype="multipart/form-data">
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
