@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="{{url('attendance_sheet')}}" style="color: #1D1D50;">Attendance Sheet</a> /
    <a href="#" style="color: #1D1D50;">View Attendance</a>
</nav>
<br><br>
<div class="container">


    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>View Attendance</b></h4>
        <br><br>

    </div>

</div>

<form method="post" action="{{url('view_attendance')}}" id="form">
    <input type="hidden" name="id" value="{{}}">
    @csrf

    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">


    @csrf
    <tbody>


        <tr>
            <th>Status</th>
            <td></td>
        </tr>
        <tr>
            <th>Clock In</th>
            <td></td>
        </tr>
        <tr>
            <th>Clock Out</th>
            <td></td>
        </tr>
        <tr>
            <th>Late</th>
            <td></td>
        </tr>
        <tr>
            <th>Early Leaving</th>
            <td></td>
        </tr>
        <tr>
            <th>Over Time</th>
            <td></td>
        </tr>
        <tr>
            <th>Total Work</th>
            <td></td>
        </tr>
        <tr>
            <th>Total Rest</th>
            <td></td>
        </tr>
        

    </tbody>
</table>
</div>

</form>



</div>














        @endsection