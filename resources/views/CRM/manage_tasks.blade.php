@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Manage Tasks</a>
</nav>
<br><br>
<div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add
        Task</button>
            </div>
            <div class="col-sm-4" style="">
                <h4
                    style="border: 0.5px solid #f1d9b0;
                    border-radius: 25px;
                    background-color: #f1d9b0;
                    padding: 2%;
                    width: 100%;
                    height:90%;
                    text-align:center;
                    box-shadow: inset 0 0 3px #d3d0ca;
                    opacity: .9;">
                    <b style="font-size:18px;">Manage Tasks</b>
                </h4>
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



        <!-- table -->

        <div class="table-responsive">
        <table class="table table-striped table-class" id="table-id">
                <thead>
                    <tr>
                        <th scope="col">Task Name </th>
                        <th scope="col">Start Date </th>
                        <th scope="col">End Date </th>
                        <th scope="col">Status </th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($task_list as $list)
                    <tr>

                        <td>{{$list->task_name}}</td>
                        <td>{{$list->start_date}}</td>
                        <td>{{$list->end_date}}</td>
                        <td>{{$list->task_status}}</td>
                        <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{url('view_manage_task',$list->id)}}">View Task</a>
                                                {{-- <a class="dropdown-item" href="{{url('edit_manage_task',$list->id)}}">Edit Task</a> --}}
                                                <a class="dropdown-item" data-toggle="modal"
                                                data-target="#edit_task" href="#">Edit Task</a>
                                                {{-- <a class="dropdown-item" href="{{url('drop_manage_task',$list->id)}}">Delete Task</a> --}}
                                                <a href="#"onclick=deletetask(this) data-id="{{ $list->id }}"data-toggle="modal"
                                                data-target="#deleteTask">Delete Task </a>
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

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Task </b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="add_manage_task" enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="task" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Milestone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="milestone" id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Assigned By</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="assigned" id="cars">
                                                <option>select</option>
                                                <option>HR</option>
                                                <option>Advocate</option>
                                            </select>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" class="form-control" name="start" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" class="form-control" name="end" id="username" required>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Priority</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="priority" id="cars">
                                                <option>select</option>
                                                <option>Low</option>
                                                <option>Mediun</option>
                                                <option>High</option>
                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Status</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="status" id="cars">
                                                <option>Open</option>
                                                <option>In progress</option>
                                                <option>Pending</option>
                                                <option>Complete</option>
                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Task Description</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" name="description" rows="2"></textarea>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">

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
                                        Style="width:45%;">Save</button>
                                    <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Start Edit Task --}}
 <div class="modal fade" id="edit_task" style="">
    <!-- edit task -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Task:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="task_name"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Name
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="task" id="username" required>
                                            <br>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="milestone"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Milestone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="milestone" id="username" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="task_assigned_by"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Assigned By</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="assigned" id="cars">
                                                <option>select</option>
                                                <option>HR</option>
                                                <option>Advocate</option>
                                            </select>
                                            <br>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="start_date"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" class="form-control" name="start" id="username" required>
                                            <br>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="end_date"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="date" class="form-control" name="end" id="username" required>
                                        <br>
                                    </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="task_priority"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Priority
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <select name="priority" id="cars">
                                            <option>select</option>
                                            <option>Low</option>
                                            <option>Mediun</option>
                                            <option>High</option>
                                        </select>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Number is required.
                                        </div>
                                        <br>
                                    </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                    <label for="task_status"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Status
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="status" id="cars">
                                                <option>Open</option>
                                                <option>In progress</option>
                                                <option>Pending</option>
                                                <option>Complete</option>
                                            </select>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Number is required.
                                            </div>
                                            <br>
                                        </div>
                                </div>
                            </div>
                            <div class="" style="width:33%;"><span style="color: red">*</span>
                                <label for="task_description"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Task Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea class="form-control" name="description" rows="2"></textarea>
                                        <br>
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
{{-- End edit task --}}

</div>
<div class="modal fade" id="deleteTask" style=""> <!-- delete task -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_task" action="{{url('drop_manage_task',$list->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_task"></span></b></h4></div>
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
