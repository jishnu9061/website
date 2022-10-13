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
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View individual Client</u></b></div><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
        </div>
        <div class="table-responsive"> 
    <table class="table table-hover" style="border: 1px solid">

        @csrf
        <tbody>
            <tr>
                <th style="width:30%">client_number:</th>
                <td>{{$client_individual->client_number}}</td>
            </tr>
            <tr>
                <th>client_type:</th>
                <td>{{$client_individual->client_type}}</td>
            </tr>
            <th>citizen_status:</th>
            <td>{{$client_individual->citizen_status}}</td>
            </tr>
            </tr>
            <th>certificate_of_incorporation:</th>
            <td>{{$client_individual->certificate_of_incorporation}}</td>
            </tr>
            </tr>
            <th>country:</th>
            <td>{{$client_individual->country}}</td>
            </tr>
            <tr>
                <th>telephone_no:</th>
                <td>{{$client_individual->telephone_no}}</td>
            </tr>
            <tr>
                <th>fax_no:</th>
                <td>{{$client_individual->fax_no}}</td>
            </tr>
            <tr>
                <th>email_address:</th>
                <td>{{$client_individual->email_address}}</td>
            </tr>
            <tr>
                <th>website:</th>
                <td>{{$client_individual->website}}</td>
            </tr>
            <tr>
                <th>brought_in_by:</th>
                <td>{{$client_individual->brought_in_by}}</td>
            </tr>
            <tr>
                <th>reporting_day:</th>
                <td>{{$client_individual->reporting_day}}</td>
            </tr>
            <tr>
                <th>client_source:</th>
                <td>{{$client_individual->client_source}}</td>
            </tr>
            <tr>
                <th>client_source_narration:</th>
                <td>{{$client_individual->client_source_narration}}</td>
            </tr>
            <tr>
                <th>client_name:</th>
                <td>{{$client_individual->client_name}}</td>
            </tr>
            <tr>
                <th>client_industry:</th>
                <td>{{$client_individual->client_industry}}</td>
            </tr>
            <tr>
                <th>pin_no:</th>
                <td>{{$client_individual->pin_no}}</td>
            </tr>
            <tr>
                <th>postal_address:</th>
                <td>{{$client_individual->postal_address}}</td>
            </tr>
            <tr>
                <th>postal_code:</th>
                <td>{{$client_individual->postal_code}}</td>
            </tr>
            <tr>
                <th>town:</th>
                <td>{{$client_individual->town}}</td>
            </tr>
            <tr>
                <th>physical_address:</th>
                <td>{{$client_individual->physical_address}}</td>
            </tr>
            <tr>
                <th>notes:</th>
                <td>{{$client_individual->notes}}</td>
            </tr>


        </tbody>
    </table>
</div>
</div>



@endsection