@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">File List</a>
</nav>
<br><br>


<h4 id="hdtpa"><b>File List</b></h4>
<br>
<div class="row" style="height:50px;">
    <div class="col-sm-4" style="padding-top:5px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">New
            File</button>
    </div>

    <!-- <div> -->
    <!-- <div class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Corporate Client List</u></b></span></div><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">

            </div> -->
    <div class="text-center">
        <input class="btn btn-primary" type="button" value="All">
        <input class="btn btn-primary" type="button" value="Open">
        <input class="btn btn-primary" type="button" value="Pending">
        <input class="btn btn-primary" type="button" value="Closed">
    </div>
    <br>

    <!-- <div id="" class=""> -->
    <!-- <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label> -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-1">Columns
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalb">Filter
                  </button>
                </div>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  File</button>


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalaa">temp
                    </button
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Filter
                  </button> -->
    <!-- </div>
                -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New -->
    <!-- File</button> -->


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
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <!-- <th class="text-center"> <input type="checkbox"></th> -->

                                <!-- <th class="text-center">*</th> -->
                                <!-- <th class="text-center">File No</th> -->
                                <th class="text-center">Client</th>
                                {{-- <th class="text-center">File Name</th> --}}
                                <th class="text-center">File Open</th>
                                <!-- <th class="text-center">Responsible<br>Advocate</th>
                                        <th class="text-center">Most Recent Progress</th> -->
                                <th class="text-center">Date Closed</th>
                                <th class="text-center">File & Fee Balances</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($file_list as $list)

                            <tr id="" class="text-center">

                                <!-- <td scope="row">{{$list->id}}</td> -->
                                <!-- <td scope="row">{{$list->id}}</td> -->
                                <td scope="row">{{$list->client}}</td>
                                {{-- <td scope="row">{{$list->file}}</td> --}}
                                <td scope="row">{{$list->open_date}}</td>

                                <!-- <td scope="row">{{$list->advocate}}</td> -->
                                <!-- <td scope="row">{{$list->recent_progress}}</td> -->

                                <td scope="row">{{$list->close_date}}</td>
                                <td scope="row">{{$list->amount}}</td>
                                <td scope="row">{{$list->status}}</td>
                                <td scope="row" class="text-center">
                                    <div class="btn-group">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="border-color:none;"> ⋮ </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{url('view-list',$list->id)}}">View File
                                                List</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editModal"
                                                href="#">Edit File
                                                List</a>
                                            <a class="dropdown-item" href="{{url('file_destroy',$list->id)}}">Delete
                                                File List</a>

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
                        <div class="modal-content">
                            <!-- Modal Header -->
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{ url('add-new-file') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h4 class="text-centre"><b>Add New File:-</b></h4>
                                        {{-- <div class="text-center">
                                            <h4><b> Matter </b></h4>
                                        </div> --}}
                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="assoc_handling"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Associative
                                                        Handling</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="assoc_handling" id="" required>
                                                        <option>Select</option>
                                                        <option value="1">Residensial</option>
                                                        <option value="2">Non Residensial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client" id="" required>
                                                        @if(count($client_list))
                                                        @foreach($client_list as $list_category)
                                                        <option>{{$list_category->client_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="email"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="email" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="phone"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="phone" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="address"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Address</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="address" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File
                                                        No</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>---select---</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="advocate"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Responsible
                                                        Advocate</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="advocate" id="" required>
                                                        <option>Select</option>
                                                        <option>Advocate 1</option>
                                                        <option>Advocate 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="recent_progress"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Most
                                                        Recent Progress</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="recent_progress" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="work_flow"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Work
                                                        Flow</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="work_flow" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="" style="width: 25%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for=""
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Practice
                                                        Area</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="" id="" required>
                                                        <option value="select">---select---</option>
                                                        <option value="Family Law">Family Law</option>
                                                        <option value="Personal Injury">Personal Injury</option>
                                                        <option value="General Practice">General Practice</option>
                                                        <option value="Estate Planning">Estate Planning</option>
                                                        <option value="Real Estate">Real Estate</option>
                                                        <option value="Criminal Law">Criminal Law</option>
                                                        <option value="Civil Litigation">Civil Litigation</option>
                                                        <option value="Business Law">Business Law</option>
                                                        <option value="Guardianship Law">Guardianship Law</option>
                                                        <option value="Probate Law">Probate Law</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="open_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Opening
                                                        Date</label>
                                                    <input type="date" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="open_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 25%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="close_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Closing
                                                        Date</label>
                                                    <input type="date" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="open_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 24%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="status"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="status" id="" required>
                                                        <option value="select">---select---</option>
                                                        <option value="Opened">Opened</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div style="width:100%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="outer"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comments</label>
                                                    <textarea class="outer" rows="4"
                                                        style="width:100%;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        cols="41" placeholder="Physical Address" name="comments"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="close_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notification</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="email" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="phone"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                        No.</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="phone" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="amount"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Billing</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="amount" id="" value="" required>
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
                                                <button type="submit" class="btn btn-primary float:right;"
                                                    Style="width:45%;">Save</button>
                                                <button type="button" class="btn btn-primary float:left"
                                                    Style="width:45%;" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!------------------------------------------------------------------- EDIT FILE START ---------------------------------------------------------->
                <div class="modal fade" id="editModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="" enctype="multipart/form-data">

                                        @csrf
                                        <h4 class="text-centre"><b>Add New File:-</b></h4>
                                        <div class="text-center">
                                            <h4><b> Matter </b></h4>
                                        </div>
                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="assoc_handling"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Associative
                                                        Handling</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="assoc_handling" id="" required>
                                                        <option>Select</option>
                                                        <option value="1">Residensial</option>
                                                        <option value="2">Non Residensial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client" id="" required>
                                                        @if(count($client_list))
                                                        @foreach($client_list as $list_category)
                                                        <option>{{$list_category->client_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="email"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="email" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="phone"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="phone" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="address"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Address</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="address" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File
                                                        No</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>---select---</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="advocate"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Responsible
                                                        Advocate</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="advocate" id="" required>
                                                        <option>Select</option>
                                                        <option>Advocate 1</option>
                                                        <option>Advocate 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="recent_progress"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Most
                                                        Recent Progress</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="recent_progress" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="work_flow"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Work
                                                        Flow</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="work_flow" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for=""
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Practice
                                                        Area</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="" id="" required>
                                                        <option value="select">---select---</option>
                                                        <option value="Family Law">Family Law</option>
                                                        <option value="Personal Injury">Personal Injury</option>
                                                        <option value="General Practice">General Practice
                                                        </option>
                                                        <option value="Estate Planning">Estate Planning</option>
                                                        <option value="Real Estate">Real Estate</option>
                                                        <option value="Criminal Law">Criminal Law</option>
                                                        <option value="Civil Litigation">Civil Litigation
                                                        </option>
                                                        <option value="Business Law">Business Law</option>
                                                        <option value="Guardianship Law">Guardianship Law
                                                        </option>
                                                        <option value="Probate Law">Probate Law</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="open_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Opening
                                                        Date</label>
                                                    <input type="date" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="open_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="close_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Closing
                                                        Date</label>
                                                    <input type="date" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="open_date" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="status"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Status</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="status" id="" required>
                                                        <option value="select">---select---</option>
                                                        <option value="Opened">Opened</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="width:50%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="outer"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Comments</label>
                                                    <textarea class="outer" rows="4"
                                                        style="width:100%;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        cols="41" placeholder="Physical Address" name="comments"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="close_date"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notification</label>
                                                    <input type="email" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="email" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="phone"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Telephone
                                                        No.</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="phone" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="amount"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Billing</label>
                                                    <input type="text" placeholder="Enter Email "
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="amount" id="" value="" required>
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
                                                <button type="submit" class="btn btn-primary float:right;"
                                                    Style="width:45%;">Save</button>
                                                <button type="button" class="btn btn-primary float:left"
                                                    Style="width:45%;" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------------------------- END EDIT FILE START ---------------------------------------------------------->




                    @endsection

                    <script>
                    function myFunction() {
                        if (!confirm("Are you sure to delete this"))
                            event.preventDefault();
                    }
                    </script>
                    <!-- <script>
                            $(function() {
                                $("#new-item").dataTable();
                            })
                        </script>

                        {{-- Search booking script --}}
                        <script>
                            $(document).ready(function() {
                                $('.searchingBook').select2();
                            });
                        </script> -->
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
                    <script type="text/javascript" charset="utf8"
                        src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
                    </script>
                    <!-- <script type="text/javascript" charset="utf8"
                            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->

                    {{-- Supplier Edit start --}}

                    <script>
                    $(document).on('click', '#edit_medicine_details', function() {

                        var medicine_id_hidden = $(this).closest('#data').find(
                            '#medicine_id_hidden').val();
                        var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
                        var medicine_brand_name = $(this).closest('#data').find(
                                '#medicine_brand_name')
                            .val();
                        var medicine_group = $(this).closest('#data').find('#medicine_group').val();
                        var medicicine_category_name = $(this).closest('#data').find(
                                '#medicine_category_name1')
                            .val();
                        var medicine_generic_name = $(this).closest('#data').find(
                                '#medicine_generic_name')
                            .val();
                        var medicine_manufactuure_name = $(this).closest('#data').find(
                            '#medicine_manufactuure_name').val();
                        var medicine_supplier_name = $(this).closest('#data').find(
                                '#medicine_supplier_name')
                            .val();
                        var medicine_minimum_level = $(this).closest('#data').find(
                                '#medicine_minimum_level')
                            .val();
                        var medicine_reorder_level = $(this).closest('#data').find(
                                '#medicine_reorder_level')
                            .val();
                        var medicine_unit_packing = $(this).closest('#data').find(
                                '#medicine_unit_packing')
                            .val();
                        var medicine_composition = $(this).closest('#data').find(
                                '#medicine_composition')
                            .val();
                        var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
                        var medicine_images = $(this).closest('#data').find('#medicine_images')
                            .val();



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