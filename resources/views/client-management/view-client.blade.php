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
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View Pickup Reception</u></b></div><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
        </div>
        <div class="table-responsive"> 
    <table class="table table-hover" style="border: 1px solid">

        @csrf
        <tbody>
            <tr>
                <th style="width:30%">No</th>
                <td></td>
            </tr>
            <tr>
                <th>Date</th>
                <td></td>
            </tr>
            <th>Client</th>
            <td></td>
            </tr>
            </tr>
            <th>File</th>
            <td></td>
            </tr>
            </tr>
            <th>Visitor</th>
            <td></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td></td>
            </tr>
            <tr>
                <th>Time In</th>
                <td></td>
            </tr>
            <tr>
                <th>Time Picked</th>
                <td></td>
            </tr>
            <tr>
                <th>Time Taken</th>
                <td></td>
            </tr>
            <tr>
                <th>Persion Picking Client</th>
                <td></td>
            </tr>
            <tr>
                <th>Time Out</th>
                <td></td>
            </tr>
            <tr>
                <th>Persion Handling</th>
                <td></td>
            </tr>


        </tbody>
    </table>
</div>
</div>



@endsection