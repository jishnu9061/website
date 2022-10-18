@extends('layouts.hmsmain')
@section('content')
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
        <div class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <tr>
                    <th style="width:30%">No:</th>
                    <td>{{$view_complaint ->id}}</td>
                </tr>
                <tr>
                    <th>date:</th>
                    <td>{{$view_complaint ->date}}</td>
                </tr>
                    <th>client_type:</th>
                    <td>{{$view_complaint ->client_type}}</td>
                </tr>
                </tr>
                    <th>files:</th>
                    <td>{{$view_complaint ->files}}</td>
                </tr>
                </tr>
                    <th>customer_name:</th>
                    <td>{{$view_complaint ->customer_name}}</td>
                </tr>
                <tr>
                    <th>staff_handling:</th>
                    <td>{{$view_complaint ->staff_handling}}</td>
                </tr>
                <tr>
                    <th>complaint_about:</th>
                    <td>{{$view_complaint ->complaint_about}}</td>
                </tr>
                <tr>
                    <th>telephone_no:</th>
                    <td>{{$view_complaint ->telephone_no}}</td>
                </tr>
                <tr>
                    <th>email:</th>
                    <td>{{$view_complaint ->email}}</td>
                </tr>
                <tr>
                    <th>others:</th>
                    <td>{{$view_complaint ->others}}</td>
                </tr>
                <tr>
                    <th>action_plan:</th>
                    <td>{{$view_complaint ->action_plan}}</td>
                </tr>
                <tr>
                    <th>complaint_description:</th>
                    <td>{{$view_complaint ->complaint_description}}</td>
                </tr>
               

            </tbody>
        </table>
    </div>
</div>



@endsection