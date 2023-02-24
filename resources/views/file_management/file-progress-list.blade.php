@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">File Progress List</a>
</nav>
<br><br>

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
    <div class="container">

        <!-- <h3 class="text-center" style="color: #070344;"><b>List of File Progress</b></h3> -->
        <div>
            {{-- heading --}}
            <h4 id="hdtpa"><b>List of File Progress</b></h4>





        </div>

        <div style="display:flex;   margin-top: 3%;">
            <div class="dropdown" style="width:25%;">
                <div class="btn btn-primary add-btn" type="button"
                    style="width:97%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add New Progress
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="{{url('add-file-progress')}}">Add File Progress</a> -->

                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal">
                        Add File Progress</button>
                    <!-- <a class="dropdown-item" href="{{url('add-file-progress-action')}}">Add File Progress/Action</a> -->

                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-1">
                        Add File Progress/Action</button>
                    <!-- <a class="dropdown-item" href="{{url('add-file-bringup-reminder')}}">Add File Bringup/Reminder</a> -->

                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-2">
                        Add File Bringup/Reminder</button>
                    <!-- <a class="dropdown-item" href="{{url('book-court')}}">Book a Court Date</a> -->

                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-3">
                        Book A Court Date </button>

                </div>
            </div>

            <div class="dropdown" style="width:25%;" style="margin-left:10px;">
                <button class="btn btn-primary add-btn" type="button"
                    style="width:97%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px; margin-bottom:1px;" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dispute Resolution forms
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="{{url('court-attendance-sheet')}}">Fill Court Attendance Sheet</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-4">
                        Fill Court Attendance Sheet </button>
                    <!-- <a class="dropdown-item" href="{{url('arbiration-sheet')}}">Fill New Arbiration Form</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-5">
                        Fill New Arbiration Form </button>
                    <!-- <a class="dropdown-item" href="{{url('conveyance-sheet')}}">Fill Conveyance Sheet</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-6">
                        Fill New Conveyance Sheet </button>
                </div>
            </div>
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
                <div class="tab-pane fade show active" id=" " role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-class" id="">
                            <thead>
                                <tr>
                                    <!-- <th class="text-center">*</th> -->
                                    <!-- <th class="text-center">Action <br>Type</th> -->
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Client</th>
                                    <th class="text-center">File Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Time Taken</th>
                                    <th class="text-center">Charge Out Rate</th>
                                    <th class="text-center">Action Way</th>
                                    <th class="text-center">RGD</th>
                                    <th class="text-center">Action</th>
                                    <!-- <th class="text-center"><input type="checkbox" name="" id=""></th> -->
                                    <!-- <th class="text-center">Edit</th> -->
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($file_progress_list as $list)


                                <tr id="data">
                                    <!-- <td scope="row" class="text-center">{{$list->id}}</td>
                                    <td scope="row" class="text-center">{{$list->action_type}}</td> -->
                                    <td scope="row" class="text-center">{{$list->progress_date}}</td>

                                    <td scope="row" class="text-center">{{$list->client_name}}</td>



                                    <td scope="row" class="text-center">{{$list->file_name}}</td>
                                    <td scope="row" class="text-center">{{$list->action_description}}</td>
                                    <td scope="row" class="text-center">{{$list->time_taken_hours}}</td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center">{{$list->next_action}}</td>
                                    <td scope="row" class="text-center"></td>
                                    <!-- <td scope="row" class="text-center">{{$list->activity}}</td> -->
                                    <!-- <td scope="row" class="text-center"><input type="checkbox" name="" id=""></td> -->
                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View File
                                                </a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#edit_file_progress"
                                                    href="#">Edit File
                                                </a>
                                                <a onClick="return myFunction();" class="dropdown-item"
                                                    href="{{url('delete-file-progress',$list->id)}}">Delete
                                                    File</a>

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




                    <!-- ADD FILE PROGRESS -->

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4><b>Add File Progress:-</b></h4>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">

                                        <form method="post" action="{{ url('add-file-progress') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_name"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example"
                                                                    style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                    name="client_name" id="" required>
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
                                                                <label for="date_progress"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                                    of progress</label>
                                                                <input type="date" placeholder="Enter Email "
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="date_progress" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="bringup_date"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">New
                                                                    Bringup Date</label>
                                                                <input type="date" placeholder="Enter Email "
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="bringup_date" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div style="width:50%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="next_action"
                                                                    style="width: 113px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next
                                                                    Action(WayForward)</label>
                                                                <textarea class="outer" rows="4"
                                                                    style="width:205%;border-color: #1d1d50;border-radius: 7px;"
                                                                    cols="41" placeholder="Physical Address"
                                                                    name="next_action" form="addemployee"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="file_name"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="file_name" id="" required>
                                                            <option>---select---</option>
                                                            <option>File 1</option>
                                                            <option>File 2</option>
                                                            <option>File 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="reminder_period"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reminder
                                                            period(Days)</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="reminder_period" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="action_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="action_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>action_type 1</option>
                                                            <option>action_type 2</option>
                                                            <option>action_type 3</option>
                                                            <option>action_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="width:50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="action_description"
                                                            style="width: 113px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                            Description</label>
                                                        <textarea class="outer" rows="4"
                                                            style="width:205%;border-color: #1d1d50;border-radius: 7px;"
                                                            cols="41" placeholder="Physical Address"
                                                            name="action_description" form="addemployee"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="time_taken_hours"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                            Taken(Hours)</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="time_taken_hours" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="time_taken_hours"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                            Taken(Minutes)</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="time_taken_minutes" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="">
                                                <h6>Send Reminder To:</h6>
                                                <div>
                                                    <p>Florence</p>
                                                    <p>Princes</p>
                                                </div>
                                            </div>

                                            <h4 style="text-align:center;">Send Billing</h4>

                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="item_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="item_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>item_type 1</option>
                                                            <option>item_type 2</option>
                                                            <option>item_type 3</option>
                                                            <option>item_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="currency"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="currency" id="" required>
                                                            <option>---select---</option>
                                                            <option>KES</option>
                                                            <option>USD</option>
                                                            <option>EUR</option>
                                                            <option>GBP</option>
                                                            <option>AUD</option>
                                                            <option>CAD</option>
                                                            <option>SEK</option>
                                                            <option>DKK</option>
                                                            <option>JPY</option>
                                                            <option>CHF</option>
                                                            <option>HKD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="amount"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="amount" id="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="test" style="height:20px;"></div>

                                            <h4 style="text-align:center;">Send To Timesheet</h4>

                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="start_time"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                            Time</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="start_time" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="activity_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Activity
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="activity_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>action_type 1</option>
                                                            <option>action_type 2</option>
                                                            <option>action_type 3</option>
                                                            <option>action_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="activity"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Activity</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="activity" id="" value=""
                                                            required>
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
                <div class="modal" id="my1">
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
            <br>

            <!--END ADD FILE PROGRESS -->


            <!-- ADD FILE PROGRESS/ACTION -->


            <!-- The Modal -->
            <div class="modal fade" id="myModal-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="text-center"><b>Add File Progress/Action:-</b></h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" action="{{ url('add-file-progress-action') }}"
                                    enctype="multipart/form-data">


                                    <div class="row">

                                        <div class="col-md-12 order-md-1">

                                            <form method="post" action="" id="form">
                                                @csrf
                                                <div class="row">
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client_name"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="client_name" id="" required>
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
                                                            <label for="file_name"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="file_name" id="" required>
                                                                <option>---select---</option>
                                                                <option>File 1</option>
                                                                <option>File 2</option>
                                                                <option>File 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="progress_date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                                of Progress</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="progress_date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="time_taken_hours"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                                Taken(Hours)</label>
                                                            <input type="time" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="time_taken_hours" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="action_type"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                                Type</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="action_type" id="" required>
                                                                <option>---select---</option>
                                                                <option>action_type 1</option>
                                                                <option>action_type 2</option>
                                                                <option>action_type 3</option>
                                                                <option>action_type 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="time_taken_minutes"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                                Taken(Minutes)</label>
                                                            <input type="time" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="time_taken_minutes" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="sent_notification"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                                Noitification To</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="sent_notification" id="" required>
                                                                <option>---select---</option>
                                                                <option>action_type 1</option>
                                                                <option>action_type 2</option>
                                                                <option>action_type 3</option>
                                                                <option>action_type 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 style=" margin-left:0;">Action Description</h5>
                                                </div>
                                                <div>
                                                    <h4 style=" margin-left:0;">Send To Billing ?</h4>
                                                </div>
                                                <div>
                                                    <h4 style=" margin-left:0;">Send To Timesheet ?</h4>
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
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal" id="mymodal-1">
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
            <div class="modal" id="my-1">
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

        <!--END ADD FILE PROGRESS/ACTION -->




        <!-- ADD FILE BRINGUP REMINDER -->
        <!-- The Modal -->
        <div class="modal fade" id="myModal-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="text-center"><b>Add File Bringup/Reminder:-</b></h4>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                            <form method="post" action="{{ url('add-file-bringup-reminder') }}"
                                enctype="multipart/form-data">


                                <div class="row">

                                    <div class="col-md-12 order-md-1">

                                        <form method="post" action="" id="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="client_name"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="client_name" id="" required>
                                                            @if(count($client_list))
                                                            @foreach($client_list as $list_category)
                                                            <option>{{$list_category->client_name}}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="file_name"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Files</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="file_name" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="progress_date"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                            of Progress</label>
                                                        <input type="date" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="progress_date" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="next_bringup_days"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next
                                                            Bring Up Days</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="next_bringup_days" id="" required>
                                                            <option>.....select.....</option>
                                                            <option>day 1</option>
                                                            <option>day 2</option>
                                                            <option>day 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="remind_period_days"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reminder
                                                            Period (Days)</label>
                                                        <input type="date" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="remind_period_days" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="send_notification"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                            Noitification To</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="send_notification" id="" required>
                                                            <option>.....select.....</option>
                                                            <option>notification 1</option>
                                                            <option>notification 2</option>
                                                            <option>notification 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="width:50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="outer"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reason</label>
                                                        <textarea class="outer" rows="4"
                                                            style="width:205%;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            cols="41" placeholder="" name="reason"
                                                            form="addemployee"></textarea>
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
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:45%;">Save</button>
                                                    <button type="button" Style="width:45%;"
                                                        class="btn btn-primary float:right;"
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
                                        <input type="text" name="type" class="form-control" placeholder="Client Type">
                                        <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="my1">
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


    <br>

    <!-- END ADD FILE BRINGUP REMINDER -->


    <!-- BOOK A COURT DATE -->

    <!-- The Modal -->
    <div class="modal fade" id="myModal-3">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="text-center"><b>Book A Court:-</b></h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('book-court') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client_name" id="" required>
                                                        @if(count($client_list))
                                                        @foreach($client_list as $list_category)
                                                        <option>{{$list_category->client_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="court_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Court</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="court_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>court 1</option>
                                                        <option>court 2</option>
                                                        <option>court 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="court_event_type"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Court
                                                        Event Type</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="court_event_type" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>event 1</option>
                                                        <option>event 2</option>
                                                        <option>event 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="start_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                        Date</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="start_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="start_time"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time</label>
                                                    <input type="time" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="start_time" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="end_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                        Date</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="end_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="end_time"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time</label>
                                                    <input type="time" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="end_time" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="user_assigned"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User
                                                        Assigned</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="user_assigned" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>user 1</option>
                                                        <option>user 2</option>
                                                        <option>user 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="send_notification"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Sent
                                                        Notification To</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="send_notification" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>notification 1</option>
                                                        <option>notification 2</option>
                                                        <option>notification 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="set_reminder"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                        Reminder</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="set_reminder" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>reminder 1</option>
                                                        <option>reminder 2</option>
                                                        <option>reminder 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="width:50%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="notes"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes</label>
                                                    <textarea class="outer" rows="4"
                                                        style="width:205%;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        cols="41" placeholder="" name="notes"
                                                        form="addemployee"></textarea>
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
                                                <button type="submit" class="btn btn-primary float:right;"
                                                    Style="width:45%;">Save</button>
                                                <button type="button" Style="width:45%;"
                                                    class="btn btn-primary float:right;"
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
                                    <input type="text" name="type" class="form-control" placeholder="Client Type">
                                    <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="my1">
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

    <!--END BOOK A COURT DATE -->

    <!-- COURT ATTENDANCE SHEET -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal-4">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="text-center"><b>Court Attendance Sheet:-</b></h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('court-attendance-sheet') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="attendance_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                        Of Attendance</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="attendance_date" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client_name" id="" required>
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
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                        <option>file 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="other_file"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other
                                                        File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="other_file" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>other file 1</option>
                                                        <option>other file 2</option>
                                                        <option>other file 3</option>
                                                        <option>other file 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="court_name"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Court</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="court_name" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="judicial_officer"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Judical
                                                        Officer</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="judicial_officer" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="case_no"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Case
                                                        No</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="case_no" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="parties"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Parties</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="parties" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="acting_for"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Acting
                                                        For</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="acting_for" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="instructions"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Instructions</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="instructions" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="width:33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="transpired_in_court"
                                                        style="width: 111px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">What
                                                        Transpired In Court</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="Physical Address"
                                                        name="transpired_in_court" form="addemployee"></textarea>
                                                </div>
                                            </div>
                                            <div style="width:33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="remarks"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Remarks</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="Physical Address" name="remarks"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                            <div style="width:33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="notes"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color: #1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="Physical Address" name="notes"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="person_dealing"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Person
                                                        Dealing</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="person_dealing" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>person 1</option>
                                                        <option>person 2</option>
                                                        <option>person 3</option>
                                                        <option>person 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="time_taken_hours"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                        Taken(Hours)</label>
                                                    <input type="time" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="time_taken_hours" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="time_taken_minutes"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                        Taken(Minutes)</label>
                                                    <input type="time" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="time_taken_minutes" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="bring_up_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Bring
                                                        Up Date</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="bring_up_date" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="remind_period_days"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reminder
                                                        Period Days</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="remind_period_days" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="send_remind_to"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                        Reminder To</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="send_remind_to" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" Style="width:45%;" class="btn btn-primary float:right;"
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
                                <input type="text" name="type" class="form-control" placeholder="Client Type">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="my1">
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
    <!--END COURT ATTENDANCE SHEET -->



    <!-- NEW ARBIRATION FORM -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal-5">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="text-center"><b>New Arbiration Form:-</b></h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('arbiration-sheet') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="court_type"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Court
                                                        Event Type</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="court_type" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>court type 1</option>
                                                        <option>court type 2</option>
                                                        <option>court type 3</option>
                                                        <option>court type 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client_name" id="" required>
                                                        @if(count($client_list))
                                                        @foreach($client_list as $list_category)
                                                        <option>{{$list_category->client_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                        <option>file 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="court_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Court</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="court_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>court name 1</option>
                                                        <option>court name 2</option>
                                                        <option>court name 3</option>
                                                        <option>court name 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="start_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                        Date</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="start_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="start_time"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="start_time" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="end_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End
                                                        Date</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="end_date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="end_time"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="end_time" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="user_assigned"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">User
                                                        Assigned</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="user_assigned" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>user 1</option>
                                                        <option>user 2</option>
                                                        <option>user 3</option>
                                                        <option>user 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="sent_notification"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Sent
                                                        Notification To</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="sent_notification" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>notification 1</option>
                                                        <option>notification 2</option>
                                                        <option>notification 3</option>
                                                        <option>notification 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="set_reminder"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Set
                                                        Reminder</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="set_reminder" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>reminder 1</option>
                                                        <option>reminder 2</option>
                                                        <option>reminder 3</option>
                                                        <option>reminder 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="width:205%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="notes"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Notes</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="Physical Address" name="notes"
                                                        form="addemployee"></textarea>
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
                                                <button type="button" Style="width:45%;"
                                                    class="btn btn-primary float:right;"
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
                                    <input type="text" name="type" class="form-control" placeholder="Client Type">
                                    <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="my1">
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

    <!-- END ARBIRATION FORM -->

    <!-- CONVEYENCE SHEET -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal-6">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="text-center"><b>Conveyence Sheet:-</b></h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('conveyance-sheet') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="arbiration_date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                        Of Arbiration</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="arbiration_date" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client_name" id="" required>
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
                                                    <label for="file_name"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file_name" id="" required>
                                                        <option>.....select.....</option>
                                                        <option>file 1</option>
                                                        <option>file 2</option>
                                                        <option>file 3</option>
                                                        <option>file 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="seller_name"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Seller's
                                                        Name</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="seller_name" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="seller_id_no"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">ID.No/Passport
                                                        No</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="seller_id_no" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="seller_address"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                                        Address</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="seller_address" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="seller_contact"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile
                                                        No</label>
                                                    <input type="number" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="seller_contact" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="seller_email"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                                        Address</label>
                                                    <input type="email" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="seller_email" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="land_ref_no"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Property
                                                        / Land Ref No</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="land_ref_no" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="title_deed_no"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Title
                                                        Deed No</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="title_deed_no" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
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
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="property_size"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Property
                                                        / Land Description{size}</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="property_size" id="" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="buyer_name"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Buyer's
                                            Name</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="buyer_name" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="buyer_id_no"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">ID.No</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="buyer_id_no" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="buyer_address"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Postal
                                            Address</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="buyer_address" id="" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="buyer_contact"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Mobile
                                            Number</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="buyer_contact" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="buyer_email"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Email
                                            Address</label>
                                        <input type="email" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="buyer_email" id="" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="width:50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="solving_process"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Dispute
                                            Solving Process</label>
                                        <textarea class="outer" rows="4"
                                            style="border-color:#1d1d50;border-radius:7px;width:100%;" cols="41"
                                            placeholder="" name="solving_process" form="addemployee"></textarea>
                                    </div>
                                </div>
                                <div style="width:50%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="final_aggremnt"
                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Final
                                            Aggrement</label>
                                        <textarea class="outer" rows="4"
                                            style="border-color:#1d1d50;border-radius:7px;width:100%;" cols="41"
                                            placeholder="" name="final_aggremnt" form="addemployee"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="person_dealing"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Person
                                            Dealing</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="person_dealing" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="time_taken_hours"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                            Taken(Hours)</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="time_taken_hours" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="time_taken_hours"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                            Taken(Minutes)</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="time_taken_minutes" id="" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="bringup_date"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Bring
                                            Up Date</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="bringup_date" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="remind_period_days"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reminder
                                            Period Days</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="remind_period_days" id="" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4" style="width: 33%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="send_reminder_to"
                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                            Reminder To</label>
                                        <input type="text" placeholder=""
                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                            class="form-control" name="send_reminder_to" id="" value="" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div style="width:50%">
                                            <div class=""><span style="color: red">*</span>
                                                <label for="next_action"
                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next
                                                    Action</label>
                                                <textarea class="outer" rows="4"
                                                    style="border-color:#1d1d50;border-radius:7px;width:100%;" cols="41"
                                                    placeholder="" name="next_action" form="addemployee"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:60%;">Save</button>
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
                                <input type="text" name="type" class="form-control" placeholder="Client Type">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="my1">
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

    <!---------------------------------------------------- START EDIT FILE PROGRESS --------------------------------------------------------->
    <div class="modal fade" id="edit_file_progress">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4><b>Edit File Progress:-</b></h4>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">

                                        <form method="post" action="{{ url('') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <div class="row">
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="client_name"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example"
                                                                    style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                    name="client_name" id="" required>
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
                                                                <label for="date_progress"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date
                                                                    of progress</label>
                                                                <input type="date" placeholder="Enter Email "
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="date_progress" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="" style="width: 33%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="bringup_date"
                                                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">New
                                                                    Bringup Date</label>
                                                                <input type="date" placeholder="Enter Email "
                                                                    style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                    class="form-control" name="bringup_date" id=""
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div style="width:50%">
                                                            <div class=""><span style="color: red">*</span>
                                                                <label for="next_action"
                                                                    style="width: 113px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Next
                                                                    Action(WayForward)</label>
                                                                <textarea class="outer" rows="4"
                                                                    style="width:205%;border-color: #1d1d50;border-radius: 7px;"
                                                                    cols="41" placeholder="Physical Address"
                                                                    name="next_action" form="addemployee"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="file_name"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="file_name" id="" required>
                                                            <option>---select---</option>
                                                            <option>File 1</option>
                                                            <option>File 2</option>
                                                            <option>File 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="reminder_period"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Reminder
                                                            period(Days)</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="reminder_period" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="action_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="action_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>action_type 1</option>
                                                            <option>action_type 2</option>
                                                            <option>action_type 3</option>
                                                            <option>action_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="width:50%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="action_description"
                                                            style="width: 113px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Action
                                                            Description</label>
                                                        <textarea class="outer" rows="4"
                                                            style="width:205%;border-color: #1d1d50;border-radius: 7px;"
                                                            cols="41" placeholder="Physical Address"
                                                            name="action_description" form="addemployee"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="time_taken_hours"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                            Taken(Hours)</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="time_taken_hours" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="time_taken_hours"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Time
                                                            Taken(Minutes)</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="time_taken_minutes" id=""
                                                            value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="">
                                                <h6>Send Reminder To:</h6>
                                                <div>
                                                    <p>Florence</p>
                                                    <p>Princes</p>
                                                </div>
                                            </div>

                                            <h4 style="text-align:center;">Send Billing</h4>

                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="item_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Item
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="item_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>item_type 1</option>
                                                            <option>item_type 2</option>
                                                            <option>item_type 3</option>
                                                            <option>item_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="currency"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="currency" id="" required>
                                                            <option>---select---</option>
                                                            <option>KES</option>
                                                            <option>USD</option>
                                                            <option>EUR</option>
                                                            <option>GBP</option>
                                                            <option>AUD</option>
                                                            <option>CAD</option>
                                                            <option>SEK</option>
                                                            <option>DKK</option>
                                                            <option>JPY</option>
                                                            <option>CHF</option>
                                                            <option>HKD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="amount"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="amount" id="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="test" style="height:20px;"></div>

                                            <h4 style="text-align:center;">Send To Timesheet</h4>

                                            <div class="row">
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="start_time"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start
                                                            Time</label>
                                                        <input type="time" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="start_time" id="" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="activity_type"
                                                            style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Activity
                                                            Type</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                            name="activity_type" id="" required>
                                                            <option>---select---</option>
                                                            <option>action_type 1</option>
                                                            <option>action_type 2</option>
                                                            <option>action_type 3</option>
                                                            <option>action_type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="" style="width: 33%">
                                                    <div class=""><span style="color: red">*</span>
                                                        <label for="activity"
                                                            style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Activity</label>
                                                        <input type="text" placeholder=""
                                                            style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                            class="form-control" name="activity" id="" value=""
                                                            required>
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
                <div class="modal" id="my1">
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
    <!---------------------------------------------------- END EIT FILE PROGRESS ------------------------------------------------------------>


    @endsection