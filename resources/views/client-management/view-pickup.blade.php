@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="{{url('communication-list')}}" style="color: #1D1D50;">Communication Details</a> /
    <a href="{{url('client-pickup')}}" style="color: #1D1D50;">Client Pickup</a> /
    <a href="#" style="color: #1D1D50;">View Pickup</a>
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
                    Pickup Reception</u></b> -->
                    {{-- heading --}}
    <h4 id="hdtpa"><b>View Pickup Reception</b></h4>
    <br><br>
</div>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <!-- <tr>
                    <th style="width:30%">No:</th>
                    <td>{{$view_pickup->id}}</td>
                </tr> -->
                <tr>
                    <th>Client:</th>
                    <td>{{$view_pickup->client}}</td>
                </tr>
                    <th>File Name:</th>
                    <td>{{$view_pickup->file_name}}</td>
                </tr>
                </tr>
                    <th>Mobile:</th>
                    <td>{{$view_pickup->mobile}}</td>
                </tr>
                </tr>
                    <th>Persion Handling:</th>
                    <td>{{$view_pickup->persion_handling}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$view_pickup->email}}</td>
                </tr>
                <tr>
                    <th>Client Name:</th>
                    <td>{{$view_pickup->client_name}}</td>
                </tr>
                <tr>
                    <th>Persion Picking Handling:</th>
                    <td>{{$view_pickup->persion_picking_handling}}</td>
                </tr>
                <tr>
                    <th>Reason:</th>
                    <td>{{$view_pickup->reason}}</td>
                </tr>
                <tr>
                    <th>Visitors:</th>
                    <td>{{$view_pickup->visitors}}</td>
                </tr>
                <tr>
                    <th>Time In:</th>
                    <td>{{$view_pickup->time_in}}</td>
                </tr>
                <tr>
                    <th>Time Out:</th>
                    <td>{{$view_pickup->time_out}}</td>
                </tr>


            </tbody>
        </table>
    </div>
</div>

@endsection
