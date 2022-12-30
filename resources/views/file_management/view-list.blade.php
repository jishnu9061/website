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
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
            {{-- heading --}}
    <h4 id="hdtpa"><b>File List</b></h4>
    <br><br>
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <!-- <tr>
                    <th style="width:30%">File No:</th>
                    <td>{{$view_list ->id}}</td>
                </tr> -->
                
                <tr>
                    <th>Client:</th>
                    <td>{{$view_list ->client}}</td>
                </tr>
                <tr>
                    <th>Associative Handling:</th>
                    <td>{{$view_list ->assoc_handling}}</td>
                </tr>
                    <th>Email:</th>
                    <td>{{$view_list ->email}}</td>
                </tr>
                </tr>
                    <th>Telephone:</th>
                    <td>{{$view_list ->phone}}</td>
                </tr>
                </tr>
                    <th>Address:</th>
                    <td>{{$view_list ->address}}</td>
                </tr>
                <tr>
                    <th>File Name:</th>
                    <td>{{$view_list ->file_name}}</td>
                </tr>
                <tr>
                    <th>Responsible Advocate:</th>
                    <td>{{$view_list ->advocate}}</td>
                </tr>
                <tr>
                    <th>Recent Progress:</th>
                    <td>{{$view_list ->recent_progress}}</td>
                </tr>
                <tr>
                    <th>Work Flow:</th>
                    <td>{{$view_list ->work_flow}}</td>
                </tr>
                <tr>
                    <th>Opening Date:</th>
                    <td>{{$view_list ->open_date}}</td>
                </tr>
                <tr>
                    <th>Close Date:</th>
                    <td>{{$view_list ->close_date}}</td>
                </tr>
                <tr>
                    <th>Comments:</th>
                    <td>{{$view_list ->comments}}</td>
                </tr>
                <tr>
                    <th>Notifi-Email:</th>
                    <td>{{$view_list ->notifi_email}}</td>
                </tr>
                <tr>
                    <th>Contact No:</th>
                    <td>{{$view_list ->con_phone}}</td>
                </tr>
                <tr>
                    <th>Contact Email:</th>
                    <td>{{$view_list ->con_email}}</td>
                </tr>
                <tr>
                    <th>Amount:</th>
                    <td>{{$view_list ->amount}}</td>
                </tr>
                <!-- <tr>
                    <th>Task:</th>
                    <td>{{$view_list ->task}}</td>
                </tr> -->
                <tr>
                    <th>Status:</th>
                    <td></td>
                </tr>
              
                

            </tbody>
        </table>
    </div>
</div>



@endsection