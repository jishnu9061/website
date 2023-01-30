@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="{{url('asign-lawyer')}}" style="color: #1D1D50;">Assign Lawyer</a> /
    <a href="#" style="color: #1D1D50;">View Lawyer</a>
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

    {{-- heading --}}
    <h4 id="hdtpa"><b>Lawyer Details</b></h4>
    <br><br>

    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <tr>
                    <th style="width:30%">Client Number</th>
                    <td>{{$asign_lawyer ->client_number}}</td>
                </tr>
                <tr>
                    <th>Client Type</th>
                    <td>{{$asign_lawyer ->client_type}}</td>
                </tr>
                <tr>
                    <th>Client Name</th>
                    <td>{{$asign_lawyer ->client_name}}</td>
                </tr>
                <tr>
                    <th>File Number</th>
                    <td>{{$asign_lawyer ->file_number}}</td>
                </tr>
                <tr>
                    <th>Lawyer Name</th>
                    <td>{{$asign_lawyer ->lawyer_name}}</td>
                </tr>
                <tr>
                    <th>Court Name</th>
                    <td>{{$asign_lawyer ->court_name}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>















@endsection
