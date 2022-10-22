@extends('layouts.hmsmain')
@section('content')


<body>
    <div class="container">

        <!-- <h3 class="text-center" style="color: #070344;"><b>List of File Progress</b></h3> -->
        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>List of File Progress</u></b></span></div><br>
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->


        </div>
        <br>
        <div style="display:flex; margin-bottom: 2%;  margin-top: 3%;">
            <div class="dropdown" style="width:20%;">
                <div class="btn btn-primary add-btn" type="button" style="width:97%;" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add New Progress
</div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="{{url('add-file-progress')}}">Add File Progress</a> -->
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal">
                        Add File Progress</button>
                    <!-- <a class="dropdown-item" href="{{url('add-file-progress-action')}}">Add File Progress/Action</a> -->
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-1">
                        Add File Progress/Action</button>
                    <!-- <a class="dropdown-item" href="{{url('add-file-bringup-reminder')}}">Add File Bringup/Reminder</a> -->
                   
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-2">
                        Add File Bringup/Reminder</button>
                    <!-- <a class="dropdown-item" href="{{url('book-court')}}">Book a Court Date</a> -->
                   
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-3">
                    Book A Court Date </button>

                </div>
            </div>

            <div class="dropdown" style="width:25%;" style="margin-left:10px;">
                <button class="btn btn-primary add-btn" type="button" style="width:97%;" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dispute Resolution forms
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="{{url('court-attendance-sheet')}}">Fill Court Attendance Sheet</a> -->
                    {{-- <a href="{{('court-attendance-sheet')}}"><button class="btn btn-primary">
                        </button></a> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-4">
                    Fill Court Attendance Sheet </button>
                    <!-- <a class="dropdown-item" href="{{url('arbiration-sheet')}}">Fill New Arbiration Form</a> -->
                    {{-- <a href="{{('arbiration-sheet')}}"><button class="btn btn-primary">
                        </button></a> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-5">
                    Fill New Arbiration Form </button>
                    <!-- <a class="dropdown-item" href="{{url('conveyance-sheet')}}">Fill Conveyance Sheet</a> -->
                    {{-- <a href="{{('conveyance-sheet')}}"><button class="btn btn-primary">
                        </button></a> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-6">
                    Fill New Conveyance Sheet </button>
                </div>
            </div>
        </div>




        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-bordered" id="new-item">
                        <thead>
                            <tr>
                                <th class="text-center">*</th>
                                <th class="text-center">Action </br>Type</th>
                                <th class="text-center">Progress </br>Date</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">FileName</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Time</br>Taken</th>
                                <th class="text-center">Charge</br>Out</br>Rate</th>
                                <th class="text-center">Way Action</br>(Way Forward)</th>
                                <th class="text-center">RGD</br>By</th>
                                <th class="text-center">Action</th>
                                <th class="text-center"><input type="checkbox" name="" id=""></th>
                                <th class="text-center">Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($file_progress_list as $list)
                            <tr id="data">
                                <td scope="row" class="text-center">{{$list->id}}</td>
                                <td scope="row" class="text-center">{{$list->action_type}}</td>
                                <td scope="row" class="text-center">{{$list->progress_date}}</td>
                                <td scope="row" class="text-center">{{$list->client_name}}</td>
                                <td scope="row" class="text-center">{{$list->file_name}}</td>
                                <td scope="row" class="text-center">{{$list->action_description}}</td>
                                <td scope="row" class="text-center">{{$list->time_taken_hours}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{$list->next_action}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{$list->activity}}</td>
                                <td scope="row" class="text-center"><input type="checkbox" name="" id=""></td>
                                <td scope="row" class="text-center">
                                    <a href="{{url('edit-file-progress',$list->id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>



                                    <!-- ADD FILE PROGRESS -->

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>Add File Progress</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-file-progress') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Client</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <select name="client_name" id="cars"><br>
                                                                            <option>select</option>
                                                                            <option>demo1</option>
                                                                            <option>demo2</option>
                                                                        </select>

                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Incorporation is required
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">Date of progress</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input type="date" class="form-control"
                                                                            name="date_progress" id="age">
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Incorporation is required
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-4">
                                                                <div class="mb-1">
                                                                    <label for="username">New Bringup Date</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <input type="date" class="form-control"
                                                                            name="bringup_date" id="age">
                                                                        <div class="invalid-feedback"
                                                                            style="width: 100%;">
                                                                            Number is required.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- </div>
<br>
<div class="row"> -->

                                                            <div class="col-md-12">
                                                                <div class="mb-1">
                                                                    <label for="username">Next Action(Way
                                                                        Forward)</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">

                                                                        </div>
                                                                        <textarea class="form-control"
                                                                            id="form7Example7" rows="3"
                                                                            name="next_action"></textarea>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>


                                            </div>
                                            <br>
                                            <div class="row">



                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">File</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="file_name" id="cars">
                                                                <option></option>
                                                            </select>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Incorporation is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Reminder period(Days)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="reminder_period"
                                                                id="age">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Incorporation is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- </div>
<br>
<div class="row"> -->
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Action Type</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="action_type" id="cars">
                                                            <option>select</option>
                                                                            <option>demo1</option>
                                                                            <option>demo2</option>
                                                            </select>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Telephone Number is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                <div id="test" style="height:20px;"></div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-1">
                                                <label for="username">Action Description</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <textarea class="form-control" id="form7Example7" rows="3"
                                                        name="action_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-1">
                                                <label for="username">Time Taken(Hours)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="time" class="form-control" name="time_taken_hours"
                                                        id="age">

                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Incorporation is required
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-1">
                                                <label for="username">Time Taken(Minutes)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="time" class="form-control" name="time_taken_minutes"
                                                        id="" required>

                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Telephone Number is required.
                                                    </div>
                                                </div>
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

                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Item Type</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <select name="item_type" id="cars">
                                                    <option>select</option>
                                                                            <option>demo1</option>
                                                                            <option>demo2</option>

                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Number is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Currency</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <select name="currency" id="cars">
                                                    <option>select</option>
                                                                            <option>demo1</option>
                                                                            <option>demo2</option>
                                                    </select>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Number is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="text" class="form-control" name="amount" id="username"
                                                        required>
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Number is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="test" style="height:20px;"></div>

                                    <h4 style="text-align:center;">Send To Timesheet</h4>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Start Time</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="time" class="form-control" name="start_time"
                                                        id="username" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Activity Type</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>

                                                    <select name="activity_type" id="cars">
                                                    <option>select</option>
                                                                            <option>demo1</option>
                                                                            <option>demo2</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Activity</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="text" class="form-control" name="activity" id="username"
                                                        required>
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


    <br>

                            <!--END ADD FILE PROGRESS -->


                        <!-- ADD FILE PROGRESS/ACTION -->


    <!-- The Modal -->
    <div class="modal fade" id="myModal-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color:#d6ba8a">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color:#d6ba8a">
                    <h2 class="text-center"><b>Add File Progress/Action</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body" style="background-color:white">
                    <div class="container">
                        <form method="post" action="{{ url('add-file-progress-action') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Client</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="client_name" id="cars">
                                                            <option>select</option>
                                                            <option>client 1</option>
                                                            <option>client 2</option>
                                                        </select>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Incorporation is required
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">File</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="file_name" id="cars">
                                                            <option>select</option>
                                                            <option>demo 1</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                            <option>demo 4</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Date of Progress</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="date" class="form-control" name="progress_date"
                                                            id="age">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Incorporation is required
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="username">Time Taken(Hours)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="time" class="form-control" name="time_taken_hours"
                                                            id="age">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Incorporation is required
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="username">Action Type</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="action_type" id="cars">
                                                            <option>select</option>
                                                            <option>action 1</option>
                                                            <option>action 2</option>
                                                            <option>action 3</option>
                                                            <option>action 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>




                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="username">Time Taken(Minutes)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="text" class="form-control" name="time_taken_minutes"
                                                            id="age">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Incorporation is required
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="username">Send Noitification To</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="sent_notification" id="cars">
                                                        <option>select</option>
                                                            <option>notification 1</option>
                                                            <option>notification 2</option>
                                                            <option>notification 3</option>
                                                            <option>notification 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>

                                            <div>
                                                <h5 style=" margin-left:0;">Action Description</h5>


                                            </div>


                                        </div>
                                        <br>

                                        <div>
                                            <h4 style=" margin-left:0;">Send To Billing ?</h4>


                                        </div>


                                        <div>
                                            <h4 style=" margin-left:0;">Send To Timesheet ?</h4>


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
                                            Style="width:60%;">Add File Progress</button>
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
        <div class="modal" id="mymodal-1">
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
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>Add File Bringup/Reminder</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-file-bringup-reminder') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                       <div class="row">

                         <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="client_name" id="cars">
                                    <option>select....</option>
                                    <option>client 1</option>
                                    <option>client 2</option>
                                    <option>client 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                          
                   
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Files</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="file_name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                   
                   
</div>
<br>
<div class="row">
                 
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Date of Progress</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="progress_date" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Next Bring Up Days</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="next_bringup_days" id="cars">
                                    <option>select....</option>
                                    <option>day 1</option>
                                    <option>day 2</option>
                                    <option>day 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
</div>
<br>
                <div class="row">
                   

                   <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Reminder Period (Days)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>

                                <input type="date" class="form-control" name="remind_period_days" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Send Noitification To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="send_notification" id="cars">
                                <option>select....</option>
                                    <option>notification 1</option>
                                    <option>notification 2</option>
                                    <option>notification 3</option>
                                </select>
                                <!-- <textarea class="form-control" id="form7Example7" rows="3"></textarea> -->
                                <!-- <select name="country" id="cars">
                <option value="volvo"></option>
            </select> -->
                            </div>
                        </div>
                    </div>
</div>
<br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Reason</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>

                                <textarea class="form-control" id="form7Example7" rows="3" name="reason"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
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


    <br>

                              <!-- END ADD FILE BRINGUP REMINDER -->


                            <!-- BOOK A COURT DATE -->
                            
                      <!-- The Modal -->
                    <div class="modal fade" id="myModal-3">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>Book A Court</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('book-court') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                    
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="client_name" id="cars">
                                    <option >select....</option>
                                    <option >client 1</option>
                                    <option >client 2</option>
                                    <option >client 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="file_name" id="cars">
                                <option >select....</option>
                                    <option >file 1</option>
                                    <option >file 2</option>
                                    <option >file 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Court</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="court_name" id="cars">
                                <option >select....</option>
                                    <option >court 1</option>
                                    <option >court 2</option>
                                    <option >court 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Court Event Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="court_event_type" id="cars">
                                <option >select....</option>
                                    <option >event 1</option>
                                    <option >event 2</option>
                                    <option >event 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Start Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="start_date" id="confirm_password" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="start_time" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">End Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="end_date" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="end_time" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Assigned</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="user_assigned" id="cars">
                                <option >select....</option>
                                    <option >user 1</option>
                                    <option >user 2</option>
                                    <option >user 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Sent Notification To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="send_notification" id="cars">
                                <option >select....</option>
                                    <option >notification 1</option>
                                    <option >notification 2</option>
                                    <option >notification 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Set Reminder</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="set_reminder" id="cars">
                                <option >select....</option>
                                    <option >reminder 1</option>
                                    <option >reminder 2</option>
                                    <option >reminder 3</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Notes</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3" name="notes"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
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

                               <!--END BOOK A COURT DATE -->

                               <!-- COURT ATTENDANCE SHEET -->
                     <!-- The Modal -->
                     <div class="modal fade" id="myModal-4">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>Court Attendance Sheet</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('court-attendance-sheet') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date Of Attendance</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="attendance_date" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="client_name" id="cars">
                                    <option>select...</option>
                                    <option>client 1</option>
                                    <option>client 2</option>
                                    <option>client 3</option>
                                    <option>client 4</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="file_name" id="cars">
                                <option>select...</option>
                                    <option>file 1</option>
                                    <option>file 2</option>
                                    <option>file 3</option>
                                    <option>file 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
</div>
<br>
         <div class="row">
                <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Other File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="other_file" id="cars">
                                <option>select...</option>
                                    <option>other file 1</option>
                                    <option>other file 2</option>
                                    <option>other file 3</option>
                                    <option>other file 4</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Court</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="court_name" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Judical Officer</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="judicial_officer" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Case No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="case_no" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
</div>
<br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Parties</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="parties" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Acting For</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="acting_for" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Person Dealing</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="person_dealing" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div> -->


                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Instructions</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="instructions" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">What Transpired In Court</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3" name="transpired_in_court"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Remarks</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3" name="remarks"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Notes</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3" name="notes"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<br>
                    <div class="row">
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Person Dealing</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="person_dealing" id="cars">
                                <option>select...</option>
                                    <option>person 1</option>
                                    <option>person 2</option>
                                    <option>person 3</option>
                                    <option>person 4</option>                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Time Taken(Hours)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="website" id="time_taken_hours" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Time Taken(Minutes)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="website" id="time_taken_minutes" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bring Up Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="website" id="bring_up_date" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Reminder Period Days</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="remind_period_days" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Send Reminder To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="send_remind_to" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
</div>
 <br>

                </div>
        </div>


    </div>
    <br>

                               
                                <br>
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <br>
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
                                  <!--END COURT ATTENDANCE SHEET -->

                                  <!-- NEW ARBIRATION FORM -->
                                   <!-- The Modal -->
                    <div class="modal fade" id="myModal-5">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>New Arbiration Form</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-file-progress') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Court Event Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Court</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Start Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="website" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">End Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="website" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Assigned</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Sent Notification To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Set Reminder</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Notes</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
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

                                  <!-- END ARBIRATION FORM -->

                                  <!-- CONVEYENCE SHEET -->
                         <!-- The Modal -->
                         <div class="modal fade" id="myModal-6">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background-color:#d6ba8a">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#d6ba8a">
                                    <h2 class="text-center"><b>Conveyence Sheet</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" style="background-color:white">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-file-progress') }}" enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date Of Arbiration</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </br>
                <!--  -->


                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Seller's Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">ID.No/Passport No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Postal Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
</div>
<br>
<div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mobile No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
               

                </br>







                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Property / Land Ref No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Title Deed No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Location</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
</div>
<br>
<div class="row">

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Property / Land Description{size}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                </div>


        </div>
    </div>
    <hr class="mb-4">
    <br>


    <div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Buyer's Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">ID.No</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Postal Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                </div>
            </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Mobile Number</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Email Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>


        </div>
    </div>

    </br>



    <div class="row">

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Dispute Solving Process</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Final Aggrement</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
<div class="row">


        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Person Dealing</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Time Taken(Hours)</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Time Taken(Minutes)</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Bring Up Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Reminder Period Days</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Send Reminder To</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
        <div>
            <br>
            <div class="row">

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Next Action</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
        <div id="test" style="height:20px;"></div>
    </div>
</div>


<br>






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

                                  <!-- END CONVEYENCE SHEET -->

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
        var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name').val();
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
    </script>
    {{-- Supplier Edit End --}}
    @endsection