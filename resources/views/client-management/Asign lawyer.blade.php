@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="#" style="color: #1D1D50;">Assign Lawyer</a>
</nav>
<br><br>
{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}

    <h4 id="hdtpa"><b>Assign Lawyer</b></h4>
<br><br>
<button class="btn btn-primary add-btn" data-toggle="modal" data-target="#myModal">Add Client</button></a>

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
                            {{-- <!-- <th class="text-center"> No</th> --> --}}
                            <th class="text-center"> Client Number</th>
                            <th class="text-center">Client Type</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">File Number</th>
                            <th class="text-center">Lawyer Name</th>
                            <th class="text-center">Court Name</th>
                            <th class="text-center">Actions</th>

                            <!-- <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($asign_lawyer as $lawyer)

                        <tr class="text-center" id="">

                            <td scope="row" class="text-center" id="">{{$lawyer->client_number}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->client_type}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->client_name}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->file_number}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->lawyer_name}}</td>
                            <td scope="row" class="text-center" id="">{{$lawyer->court_name}}</td>


                            {{-- <td scope="row" class="text-center">
                                <a href="{{url('view-client')}}">

                            </td> --}}

                           
  <td scope="row"class="text-center">
    <div class="btn-group">
        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" style="border-color:none;"> ⋮ </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" data-toggle=""
                data-target=""
                href="{{url('view_lawyer',$lawyer->id)}}">View Lawyer
            </a>
            <a href="{{url('edit_lawyer',$lawyer->id)}}" class="dropdown-item" href=""data-toggle=""
                 onClick="return myFunction();"data-target="">Edit Lawyer</a>
<a class="dropdown-item" data-toggle=""
                data-target=""
                href="{{url('delete_lawyer',$lawyer->id)}}">Delete Layer
            </a>
        </div>
    </div>
</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="width: 110%">
                       
                        <!-- Modal Header -->
                        <h5><b>Add Individual Client:-</b></h5>
                        <!------------------------ Modal body ------------------------>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="{{url('add_lawyer')}}">
                                             @csrf
                                            <div class="row">
                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>Client Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="client_number" id="" value="" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>Client Type</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="client_type" id="" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <option value="Individual">Individual</option>
                                                                <option value="Corporate">Corporate</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>Client Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="client_name" id="" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <option value="residential">Select</option>
                                                                <option value="residential">Residential</option>
                                                                <option value="non-residential">Non-Residential
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>File Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="file_number" id="" value="" min="0"
                                                                max="99" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>Lawyer Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="lawyer_name" id="" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                                <option>Kenya</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 46%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label>Court Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control"
                                                                name="court_name" value="" id="" style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;">
                                                            <div class="invalid-feedback" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <br>
                                                        <button type="submit" class="btn btn-primary"
                                                            style="width:45%;">Save</button>
                                                        <button type="button" class="btn btn-primary"
                                                            data-dismiss="modal" style="width:45%;">Cancel</button>
                                                    </div>
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








@endsection
