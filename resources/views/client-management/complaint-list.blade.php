@extends('layouts.hmsmain')
@section('content')


{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
    <div class="container">
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;">
            <b><u>Complaint Register</u></b> -->
            {{-- heading --}}
    <h4 id="hdtpa"><b>Complaint Register</b></h4>
    <br><br>
        </div>
     
        <div id="mydatatable_filter" class="dataTables_filter">
            <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
        </div>
        <button class="btn btn-primary add-btn" Style="width:20%" data-toggle="modal" data-target="#myModal">Add New
                Complaint</button>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-bordered" id="new-item">
                        <thead>
                            <tr>
                                <th class="text-center"> No</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Files</th>
                                <th class="text-center">Customer Institution</th>
                                <th class="text-center">Contact</th>
                                <th class="text-center">Complaint Description</th>
                                <th class="text-center">VIew</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $complaint_list as $list)
                            <tr id="data">
                                <td scope="row" class="text-center">{{$list->id}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->client_type}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->files}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->customer_name}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->telephone_no}}</td>
                                <td scope="row" class="text-center">{{$list->complaint_description}}</td>
                                <td><a href="{{url('view-Complaint',$list->id)}}"><i style="color:black;"
                                            class="fa fa-eye" aria-hidden="true"></i></td></a>
                                <td><a href="{{url('edit_complaint',$list->id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i></td>
                                <td><a href="{{url('delete-Complaint',$list->id)}}"><i style="color:black;"
                                            class="fa fa-trash" aria-hidden="true"></i></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background-color:#d6ba8a">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color:#d6ba8a">
                                <h2 class="text-center"><b>Add New Complaint</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="background-color:white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{url('add-Complaint')}}" id="form">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="date"
                                                                    id="username" value="">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Name is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Type</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <select name="type" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Files</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="files" id="cars">
                                                                    <option>Select</option>
                                                                    <option>File 1</option>
                                                                    <option>File 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Staff Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Staff" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Staff 1</option>
                                                                    <option>Staff 2</option>
                                                                    <option>Staff 3</option>
                                                                    <option>Staff 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Complaint About</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="Complaint" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Person</option>
                                                                    <option>Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Telephone No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Telephone"
                                                                    id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Email Address</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="" id="password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Others</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="Others"
                                                                    value="" id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Action Plan</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="plan"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Action Plan is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Complaint Description</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="form7Example7"
                                                                    rows="3" name="Description"></textarea>
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Complaint Description is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Submit</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;">Cancel</button>
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

                <!-- The Modal -->


                <!-- Modal body -->



                <script src="{{ url('assets/js') }}/jquery.min.js"></script>
                <script type="text/javascript" charset="utf8"
                    src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
                <script type="text/javascript" charset="utf8"
                    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
                </script>


                @endsection