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

                    <tr>
                        <th style="width:30%">Client :</th>
<<<<<<< Updated upstream
                        <td>{{$view_list->client_name}}</td>
                    </tr>
                    <tr>
                        <th>File No & Name :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Date Opened :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Responsible Advocate:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Most Recent Progress:</th>
                        <td></td>
=======
                        <td>{{$view_list->Client_name}}</td>
                    </tr>
                    <tr>
                        <th>File No & Name :</th>
                        <td>{{$view_list->file_name}}</td>
                    </tr>
                    <tr>
                        <th>Date Opened :</th>
                        <td>{{$view_list->progress_date}}</td>
                    </tr>
                    <tr>
                        <th>Responsible Advocate:</th>
                        <td>{{$view_list->advocate}}</td>
                    </tr>
                    <tr>
                        <th>Most Recent Progress:</th>
                        <td>{{$view_list->recent_progress}}</td>
>>>>>>> Stashed changes
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



    @endsection