@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="{{url('manage_tasks')}}" style="color: #1D1D50;">Manage Tasks</a> /
    <a href="#" style="color: #1D1D50;">Edit Tasks</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Edit Task Details </b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_manage_task')}}" enctype="multipart/form-data">

                @csrf
                <input type="hidden" class="form-control" name="id" value="{{$edit_manage_task->id}}" id="username" required>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Task Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="task" value="{{$edit_manage_task->task_name}}" id="username" required>
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
                                <input type="text" class="form-control"  value="{{$edit_manage_task->milestone}}" name="milestone" id="username" required>
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
                                    <option>{{$edit_manage_task->task_assigned_by}}</option>
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
                                <input type="date" class="form-control" name="start" value="{{$edit_manage_task->start_date}}" id="username" required>
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
                                <input type="date" class="form-control" name="end"  value="{{$edit_manage_task->end_date}}" id="username" required>
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
                                    <option>{{$edit_manage_task->task_priority}}</option>
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
                                <option>{{$edit_manage_task->task_status}}</option>
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
                                <textarea class="form-control" name="description" value="" rows="2">{{$edit_manage_task->task_description}}</textarea>
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                            onclick="history.back()">Close</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

@endsection