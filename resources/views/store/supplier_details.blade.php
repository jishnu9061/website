


@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>


</div>
<br>
<div class="container">
    <h3 style="text-align:center">Supplier Details</h3><br><br>
    <table class="table table-hover" style="border: 1px solid">
        @foreach($suppliers as $data)
        @csrf
        <tbody >
            <tr>
                <th style="width:30%" >Supplier Name</th>
                <td>{{$data->supplier_name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$data->email}}</td>
            </tr>
                <th>Phone No</th>
                <td>{{$data->contact_no}}</td>
            </tr>
            </tr>
                <th>Mobile No</th>
                <td>{{$data->mobile}}</td>
            </tr>
            </tr>
                <th>Fax</th>
                <td>{{$data->fax}}</td>
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
                 <th>Zipcode</th>
                     <td>{{$data->zipcode}}</td>
            </tr>
            <tr>
                <th>Supplier Details</th>
                    <td>{{$data->details}}</td>
            </tr>


        </tbody>
    </table>
</div>
  @endforeach


@endsection
