@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="{{url('manage_tasks')}}" style="color: #1D1D50;">Manage Tasks</a> /
    <a href="#" style="color: #1D1D50;">View Tasks</a>
</nav>
<br><br>
<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b> Task Details </b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Task Name :</th>
                        <td>{{ $task_list->task_name}}</td>
                    </tr>
                    <tr>
                        <th>Milestone :</th>
                        <td>{{ $task_list->milestone}}</td>
                    </tr>
                    <tr>
                        <th>Task Assigned By :</th>
                        <td>{{ $task_list->task_assigned_by}}</td>
                    </tr>
                    <tr>
                        <th>Start Date :</th>
                        <td>{{ $task_list->start_date}}</td>
                    </tr>
                    <tr>
                        <th>End Date :</th>
                        <td>{{ $task_list->end_date}}</td>
                    </tr>
                    <tr>
                        <th>Task Priority :</th>
                        <td>{{ $task_list->task_priority}}</td>
                    </tr>
                    <tr>
                        <th>Task Status :</th>
                        <td>{{ $task_list->task_status}}</td>
                    </tr>
                    <tr>
                        <th>Task Description :</th>
                        <td>{{ $task_list->task_description}}</td>
                    </tr>

                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection