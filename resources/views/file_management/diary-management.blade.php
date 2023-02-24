@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">Diary Management</a>
</nav>
<br><br>
{{-- heading --}}
<html>

<head>
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
</head>

<body>

    <br>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Diary(Calender Events)</b></h3> -->
        <div>
            {{-- heading --}}
            <h4 id="hdtpa"><b>Diary (Calender Events)</b></h4>
            <br>






        </div>


        <!-- <a href="{{url('add-event')}}"><button class="btn btn-primary add-btn" style="width: 20%; ">Add
                Event</button></a> -->


        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
                    Event</button>
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
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">

                                <thead>
                                    <tr>
                                        <!-- <th class="text-center">*</th> -->
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Client</th>
                                        <th class="text-center">File No</th>
                                        <!-- <th class="text-center">File Name</th> -->
                                        <th class="text-center">Start Time</th>
                                        <th class="text-center">End Time</th>
                                        <th class="text-center">Submitted <br>By</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($event as $list)
                                    <tr id="data">

                                        <!-- <td scope="row" class="text-center">{{$list->id}}</td> -->
                                        <td scope="row" class="text-center">{{$list->Title}}</td>
                                        <td scope="row" class="text-center">{{$list->Client}}</td>
                                        <td scope="row" class="text-center">{{$list->id}}</td>
                                        <td scope="row" class="text-center">{{$list->Time}}</td>
                                        <td scope="row" class="text-center">{{$list->Time_End}}</td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        data-target="#edit_event" href="#">Edit Event
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="{{url('delete-box-no',$list->id)}}">Delete
                                                        File </a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <div> -->

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
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="text-center"><b>Add Event:-</b></h4>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-event') }}"
                                                enctype="multipart/form-data">

                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="event"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Event
                                                                Type</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="event" id="" required>
                                                                <option>---select---</option>
                                                                <option>event type 1</option>
                                                                <option>event type 2</option>
                                                                <option>event type 3</option>
                                                                <option>event type 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="title"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Title</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="title" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="room"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Meeting
                                                                Room</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="room" id="" required>
                                                                <option>.....select.....</option>
                                                                <option>Room 1</option>
                                                                <option>Room 2</option>
                                                                <option>Room 3</option>
                                                                <option>Room 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="mb-1">
                                                            <label for="username"></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <a href="{{url('meeting-rooms')}}"> <i
                                                                        class="fa fa-plus"
                                                                        style="font-size:24px"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="location"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Location</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="location" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="start_date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                                Date</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="start_date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="time"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                                Time</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="time" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="end_date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                                Date</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="end_date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="time_1"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                                Time</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="time_1" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="event"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Event
                                                                Booked For?</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="event" id="" required>
                                                                <option>---select---</option>
                                                                <option>event 1</option>
                                                                <option>event 2</option>
                                                                <option>event 3</option>
                                                                <option>event 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="user"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User
                                                                Invited</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="user" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div style="width:100%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="others"
                                                                style="width:244px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other
                                                                Invites[Email Addresses,Seperated By Commas(,)]</label>
                                                            <textarea class="outer" rows="4"
                                                                style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                cols="41" placeholder="" name="others"
                                                                form="addemployee"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="Client"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="Client" id="" required>
                                                                @if(count($client_list))
                                                                @foreach($client_list as $list_category)
                                                                <option>{{$list_category->client_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="file"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="file" id="" required>
                                                                <option>.....select.....</option>
                                                                <option>file 1</option>
                                                                <option>file 2</option>
                                                                <option>file 3</option>
                                                                <option>file 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="notes"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="notes" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="repetition"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                                Repetition</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="repetition" id="" required>
                                                                <option>---select---</option>
                                                                <option>Repetition 1</option>
                                                                <option>Repetition 2</option>
                                                                <option>Repetition 3</option>
                                                                <option>Repetition 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="repetition_end"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Repetition
                                                                End</label>
                                                            <input type="date" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="repetition_end" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="reminder"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                                Reminder</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="reminder" id="" required>
                                                                <option>---select---</option>
                                                                <option>Reminder 2</option>
                                                                <option>Reminder 3</option>
                                                                <option>Reminder 1</option>
                                                                <option>Reminder 4</option>
                                                            </select>
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
                                                        <button type="button" class="btn btn-primary float:right;"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal" id="mymodal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-body">
                                            <form action="">
                                                <div>
                                                    <input type="text" name="type" class="form-control"
                                                        placeholder="Client Type">
                                                    <button class="btn btn-primary sub_btnn"
                                                        type="submit">submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="my">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-body">
                                        <form action="">
                                            <div>
                                                <input type="text" name="type" class="form-control"
                                                    placeholder="Country">
                                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------ START EDIT EVENT ---------------------------------------------------------------->
                <div class="modal fade" id="edit_event">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="text-center"><b>Edit Event:-</b></h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{ url('') }}" enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="event"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Event
                                                        Type</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="event" id="" required>
                                                        <option>---select---</option>
                                                        <option>event type 1</option>
                                                        <option>event type 2</option>
                                                        <option>event type 3</option>
                                                        <option>event type 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="title"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Title</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="title" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="room"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Meeting
                                                        Room</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="room" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>Room 1</option>
                                                        <option>Room 2</option>
                                                        <option>Room 3</option>
                                                        <option>Room 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="mb-1">
                                                    <label for="username"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <a href="{{url('meeting-rooms')}}"> <i class="fa fa-plus"
                                                                style="font-size:24px"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="location"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Location</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="location" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="start_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                        Date</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="start_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="time"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                        Time</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="time" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="end_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                        Date</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="end_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="time_1"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                        Time</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="time_1" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="event"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Event
                                                        Booked For?</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="event" id="" required>
                                                        <option>---select---</option>
                                                        <option>event 1</option>
                                                        <option>event 2</option>
                                                        <option>event 3</option>
                                                        <option>event 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="user"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User
                                                        Invited</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="user" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="width:100%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="others"
                                                        style="width:244px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other
                                                        Invites[Email Addresses,Seperated By Commas(,)]</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="" name="others"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="Client"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="Client" id="" required>
                                                        @if(count($client_list))
                                                        @foreach($client_list as $list_category)
                                                        <option>{{$list_category->client_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                        <option>file 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="notes"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="notes" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="repetition"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                        Repetition</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="repetition" id="" required>
                                                        <option>---select---</option>
                                                        <option>Repetition 1</option>
                                                        <option>Repetition 2</option>
                                                        <option>Repetition 3</option>
                                                        <option>Repetition 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="repetition_end"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Repetition
                                                        End</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="repetition_end" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="reminder"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                        Reminder</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="reminder" id="" required>
                                                        <option>---select---</option>
                                                        <option>Reminder 2</option>
                                                        <option>Reminder 3</option>
                                                        <option>Reminder 1</option>
                                                        <option>Reminder 4</option>
                                                    </select>
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
                                                <button type="button" class="btn btn-primary float:right;"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal" id="mymodal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-body">
                                    <form action="">
                                        <div>
                                            <input type="text" name="type" class="form-control"
                                                placeholder="Client Type">
                                            <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="my">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-body">
                                <form action="">
                                    <div>
                                        <input type="text" name="type" class="form-control" placeholder="Country">
                                        <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------ END EDIT EVENT ------------------------------------------------------------------>
        <!-- Supplier modal Edit End -->

        <!-- Delete  confirmation Message -->

        <!-- End delete confirmation message -->
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
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
    </script>
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

    function openwindow() {
        var newwindow = window.open('', '', 'width=300, height=300');
        newwindow.document.write("<button onclick='window.close()'>Close Window</button>");
    }
    </script>
    {{-- Supplier Edit End --}}
    @endsection