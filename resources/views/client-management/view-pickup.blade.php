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
                <tr>
                    <th style="width:30%">No:</th>
                    <td>{{$view_pickup->id}}</td>
                </tr>
                <tr>
                    <th>Client:</th>
                    <td>{{$view_pickup->client}}</td>
                </tr>
                    <th>file_name:</th>
                    <td>{{$view_pickup->file_name}}</td>
                </tr>
                </tr>
                    <th>mobile:</th>
                    <td>{{$view_pickup->mobile}}</td>
                </tr>
                </tr>
                    <th>persion_handling:</th>
                    <td>{{$view_pickup->persion_handling}}</td>
                </tr>
                <tr>
                    <th>email:</th>
                    <td>{{$view_pickup->email}}</td>
                </tr>
                <tr>
                    <th>client_name:</th>
                    <td>{{$view_pickup->client_name}}</td>
                </tr>
                <tr>
                    <th>persion_picking_handling:</th>
                    <td>{{$view_pickup->persion_picking_handling}}</td>
                </tr>
                <tr>
                    <th>reason:</th>
                    <td>{{$view_pickup->reason}}</td>
                </tr>
                <tr>
                    <th>visitors:</th>
                    <td>{{$view_pickup->visitors}}</td>
                </tr>
                <tr>
                    <th>time_in:</th>
                    <td>{{$view_pickup->time_in}}</td>
                </tr>
                <tr>
                    <th>time_out:</th>
                    <td>{{$view_pickup->time_out}}</td>
                </tr>
               

            </tbody>
        </table>
    </div>
</div>



@endsection