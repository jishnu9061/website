@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Client Management</a> /
    <a href="{{url('client_list')}}" style="color: #1D1D50;">Individual Client List</a> /
    <a href="#" style="color: #1D1D50;">Show Client Details</a>
</nav>
<br><br>
<style>
.btn-width {
    width: 10%;
}
</style>

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b> Individual Client Details</b></h4>
    <br><br>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

            @csrf
            <tbody>
                <tr>
                    <th style="width:30%">Client Number:</th>
                    <td>{{$client_individual->client_number}}</td>
                </tr>
                <tr>
                    <th>Client Type:</th>
                    <td>{{$client_individual->client_type}}</td>
                </tr>
                <th>Citizen Status:</th>
                <td>{{$client_individual->citizen_status}}</td>
                </tr>
                </tr>
                <th>Certificate of Incorporation:</th>
                <td>{{$client_individual->certificate_of_incorporation}}</td>
                </tr>
                </tr>
                <th>Country:</th>
                <td>{{$client_individual->country}}</td>
                </tr>
                <tr>
                    <th>Telephone No:</th>
                    <td>{{$client_individual->telephone_no}}</td>
                </tr>
                <tr>
                    <th>Fax No:</th>
                    <td>{{$client_individual->fax_no}}</td>
                </tr>
                <tr>
                    <th>Email Address:</th>
                    <td>{{$client_individual->email_address}}</td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td>{{$client_individual->website}}</td>
                </tr>
                <tr>
                    <th>Brought In By:</th>
                    <td>{{$client_individual->brought_in_by}}</td>
                </tr>
                <tr>
                    <th>Reporting Day:</th>
                    <td>{{$client_individual->reporting_day}}</td>
                </tr>
                <tr>
                    <th>Client Source:</th>
                    <td>{{$client_individual->client_source}}</td>
                </tr>
                <tr>
                    <th>Client Source Narration:</th>
                    <td>{{$client_individual->client_source_narration}}</td>
                </tr>
                <tr>
                    <th>Client Name:</th>
                    <td>{{$client_individual->client_name}}</td>
                </tr>
                <tr>
                    <th>Client Industry:</th>
                    <td>{{$client_individual->client_industry}}</td>
                </tr>
                <tr>
                    <th>Pin No:</th>
                    <td>{{$client_individual->pin_no}}</td>
                </tr>
                <tr>
                    <th>Postal Address:</th>
                    <td>{{$client_individual->postal_address}}</td>
                </tr>
                <tr>
                    <th>Postal Code:</th>
                    <td>{{$client_individual->postal_code}}</td>
                </tr>
                <tr>
                    <th>Town:</th>
                    <td>{{$client_individual->town}}</td>
                </tr>
                <tr>
                    <th>Physical Address:</th>
                    <td>{{$client_individual->physical_address}}</td>
                </tr>
                <tr>
                    <th>Notes:</th>
                    <td>{{$client_individual->notes}}</td>
                </tr>


            </tbody>
        </table>
    </div>
</div>



@endsection
