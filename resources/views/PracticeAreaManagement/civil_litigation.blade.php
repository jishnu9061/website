@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="#" style="color: #1D1D50;">Civil Litigation</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
<h4 id="hdtpa"><b>Civil Litigation</b></h4>
<br>


{{-- <input class="btn btn-primary" type="button" value="Add New Matter" data-toggle="modal" data-target="#myModal"> --}}
<button type="button" class="btn btn-primary" data-toggle="modal"
    data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
--outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New Matter</button>
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
    <table class="table text-center" id="table-id">
        <thead>
            <tr>

                <th scope="col">Matter Info</th>
                <th scope="col">Plaintiff</th>
                <th scope="col">Matter Type</th>
                <th scope="col">Defendent</th>
                <th scope="col">Attroney</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>

            @foreach($view_litigation as $list)
            <tr>

                <td>{{$list->matter_info}}</td>
                <td>{{$list->plaintiff}}</td>
                <td>{{$list->matter_type}}</td>
                <td>{{$list->defendent}}</td>
                <td>{{$list->attroney}}</td>
                {{-- <td><a href="{{ url('view_civil_litigation',$list->id) }}"><i style="color:rgb(13, 1, 56);"
                            class="fa fa-eye"></i><span class="m-1"></span>
                        <a href="{{ url('edit_civil_litigation',$list->id)}}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-edit"></i><span class="m-1"></span>
                            <a onClick="return myFunction();" href="{{ url('delete_civil_litigation',$list->id)}}"> <i
                                    style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td> --}}
                                    <td scope="row"class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                       <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ url('view_civil_litigation',$list->id) }}">View Civil Litigation</a>
                                        {{-- <a class="dropdown-item" data-toggle="modal"
                                                data-target="#edit_general_Practice" href="#">Edit General Practice</a> --}}
                                        <a class="dropdown-item" data-toggle="modal"
                                                data-target="#edit_civil_litigation" href="#">Edit Civil Litigation</a>
                                        <a class="dropdown-item"
                                            {{-- href="{{ url('delete_civil_litigation',$list->id)}}">Delete Civil Litigation</a> --}}
                                            <a href="#"onclick=deletelitigation(this) data-id="{{ $list->id }}"data-toggle="modal"
                                                data-target="#delete_civil_litigation">Delete Civil Litigation</a>
                                    </div>
                                        </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



{{-- <!--		Start Pagination -->
<div class='pagination-container'>
    <nav>
        <ul class="pagination">
            <!--	Here the JS Function Will Add the Rows -->
        </ul>
    </nav>
</div>
<div class="rows_count">Showing 11 to 20 of 100</div>

<!-- 		End of Container --> --}}

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
</div>
</div>
<!-- 		End of Container -->


{{-- <!-- The Modal --> Create New matter --}}
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="padding:0rem 0rem;">
                <div style="padding:1rem 1rem;">
                    <h4 class="text-centre"><b>Add Matter</b></h4>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">

                    <form method="post" action="{{url('add_civil_litigation')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 32%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="matter_info"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Info:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" value="" name="matter_info" required>
                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            File No is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 32%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="plaintiff"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" value="" name="plaintiff" required>
                                        </div>
                                        </div>
                                </div>
                                <div class="" style="width: 32%">
                                    <div class=""><span style="color: red">*</span>
                                    <label for="matter_type"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Type:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" value="" name="matter_type" required>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Client No is required.
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 99%">
                                     {{-- <div class=""><span style="color: red">*</span> --}}
                                        <label for="defendant"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" class="form-control" value="" name="defendent" required>
                                            </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="attorney"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Attorney:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="attroney" required></textarea>
                                        </div>

                                {{-- </div> --}}
                                </div>


                                <div class="" style="width: 49%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="case_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Case Details:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="case_detail" required></textarea>
                                        </div>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    </div>
                                {{-- </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 33%">
                                    <div class="plaintiff's_insurer">
                                        <label for="username"
                                            style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Insurer:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <textarea class="form-control" rows="2" name="insurer" required></textarea>
                                            </div>
                                    </div>
                                </div>

                                <div class="" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="plaintiff's_witness"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Witness:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <textarea class="form-control" rows="2" name="witness" required></textarea>
                                            </div>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 33%">
                                    <div class="">
                                        <label for="plaintiff's_expert"
                                            style="width: 200px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Expert:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <textarea class="form-control" rows="2" name="expert" required></textarea>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="width: 33%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="Defendant's Insurer"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant Insurer:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="def_insurer" required></textarea>
                                        </div>


                                 {{-- </div> --}}
                                </div>
                                <div class="" style="width: 33%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="Defendant's Witness"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant Witness:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="def_witness" required></textarea>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="" style="width: 33%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="Defendant's Expert"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant Expert:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="def_expert" required></textarea>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 99%">
                                    {{-- <div class=""><span style="color: red">*</span> --}}
                                    <label for="supporting_details"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supporting Details:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="file" class="form-control" name="support_detail" required>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                    </div>


                </div>
                <div class="row">
                    <div class="row">
                        <div class="" style="width: 50%;">
                        </div>
                        <div class="" style="width: 0%"></div>
                        <div class="col-sm" style="padding-right: 0px;width: 50%">
                            <br>
                            <button type="submit" onclick="return Validate()" class="btn btn-primary float:right;"
                                Style="width:45%;" value="submit">Save</button>
                            <button type="button" class="btn btn-primary float:left"
                                Style="width:45%;"data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
            <br>
        </div>
    </div>
</div>
{{-- Start Edit Civil Litigation --}}
<div class="modal fade" id="edit_civil_litigation" style="">
    <!-- edit   -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Civil Litigation:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Info</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="" name="matter_info"
                                                value="">
                                        </div>


                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="" name="plaintiff"
                                                value="">
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Matter Type</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="" name="matter_type"
                                                value="">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 100%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendant</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" placeholder="" name="defendent"
                                                value="">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Attorney</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="attroney"></textarea>
                                    </div>
                            </div>


                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Case Details</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="case_detail"></textarea>
                                    </div>
                            </div>


                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for=""
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Insurer</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" rows="2" name="insurer"></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Witness</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="witness"></textarea>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Plaintiff Expert</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="expert"></textarea>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendent Insurer</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="def_insurer"></textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width:50%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendent Witness</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="def_witness"></textarea>
                                    </div>
                            </div>
                            <div class="" style="width:50%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Defendent Expert</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" rows="2" name="def_expert"></textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width:100%;"><span style="color: red">*</span>
                                <label for=""
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Supporting Details</label>
                                    <span class="m-2"></span>
                                    <input type="file" class="form-control" >
                            </div>
                        </div>
                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}

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
{{-- End edit corporate client --}}
<div class="modal fade" id="delete_civil_litigation" style=""> <!-- delete  -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_civil_litigation" action="{{ url('delete_civil_litigation',$list->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_civil_litigation"></span></b></h4></div>
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
