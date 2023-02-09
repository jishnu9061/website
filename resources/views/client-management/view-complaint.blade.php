@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="{{url('complaint-list')}}" style="color: #1D1D50;">Complaint Register Details</a> /
    <a href="#" style="color: #1D1D50;">View Complaint</a>
</nav>
<br><br>
<style>
.btn-width {
    width: 10%;
}
</style>
<div>

</div>
<br>
<div class="container">
    <!-- <h3 style="text-align:center">View Pickup Reception</h3><br><br> -->
    <div>
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
            {{-- heading --}}
    <h4 id="hdtpa"><b> Complaint Details</b></h4>
    <br><br>
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <!-- <tr>
                    <th style="width:10%";>No:</th>
                    <td style="width:20%";>{{$view_complaint ->id}}</td>
                </tr> -->
                <tr>
                    <th>Date:</th>
                    <td>{{$view_complaint ->date}}</td>
                </tr>
                    <th>Client Type:</th>
                    <td>{{$view_complaint ->client_type}}</td>
                </tr>
                </tr>
                    <th>Files:</th>
                    <td>{{$view_complaint ->files}}</td>
                </tr>
                </tr>
                    <th>Customer Name:</th>
                    <td>{{$view_complaint ->customer_name}}</td>
                </tr>
                <tr>
                    <th>Staff Handling:</th>
                    <td>{{$view_complaint ->staff_handling}}</td>
                </tr>
                <tr>
                    <th>Complaint About:</th>
                    <td>{{$view_complaint ->complaint_about}}</td>
                </tr>
                <tr>
                    <th>Telephone No:</th>
                    <td>{{$view_complaint ->telephone_no}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$view_complaint ->email}}</td>
                </tr>
                <tr>
                    <th>Others:</th>
                    <td>{{$view_complaint ->others}}</td>
                </tr>
                <tr>
                    <th>Action Plan:</th>
                    <td>{{$view_complaint ->action_plan}}</td>
                </tr>
                <tr>
                    <th>Complaint Description:</th>
                    <td>{{$view_complaint ->complaint_description}}</td>
                </tr>


            </tbody>
        </table>
    </div>
</div>



@endsection
