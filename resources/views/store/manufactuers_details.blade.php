@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    {{-- <a type="button" href="{{url('view_manufacturers')}}"class="btn btn-outline-primary btn-width ">Back</a> --}}
</div>
<br>
<div class="container">
    <h3 style="text-align:center">Manufacturer Details</h3><br><br>
    <table class="table table-bordered" style="border: 1px solid">
        @foreach($manufacturer as $data)
        @csrf
        <tbody >
            <tr>
                <th style="width:30%" >Manufacturer Name</th>
                <td>{{$data->manufactuers_name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$data->email}}</td>
            </tr>
                <th>Phone</th>
                <td>{{$data->contact_no}}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                    <td>{{$data->mobile}}</td>
            </tr>
            <tr>
                <th>Fax</th>
                    <td>{{$data->fax}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                    <td>{{$data->contact_no}}</td>
            </tr>
            <tr>
                <th>Address</th>
                    <td>{{$data->address}}</td>
            </tr>
            <tr>
                 <th>City</th>
                     <td>{{$data->city}}</td>
            </tr>
            <tr>
                <th>State</th>
                    <td>{{$data->state}}</td>
            </tr>
            <tr>
                <th>Country</th>
                    <td>{{$data->country}}</td>
            </tr>
            <tr>
                <th>Postal Code</th>
                    <td>{{$data->zipcode}}</td>
            </tr>
            <tr>
                <th>Details</th>
                    <td>{{$data->details}}</td>
            </tr>


        </tbody>
    </table>
</div>
  @endforeach


@endsection
