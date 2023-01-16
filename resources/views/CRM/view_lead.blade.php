@extends('layouts.hmsmain')
@section('content')

<style>
th {
    width: 30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b>Details</b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Name :</th>
                        <td>{{ $view_leads->Name}}</td>
                    </tr>
                    <tr>
                        <th>GST Office :</th>
                        <td>{{ $view_leads->GST_Office}}</td>
                    </tr>
                    <tr>
                        <th>GST Number :</th>
                        <td>{{$view_leads->GST_Number}}</td>
                    </tr>
                    <tr>
                        <th>Social Security Number :</th>
                        <td>{{$view_leads->Social_Security_Number}}</td>
                    </tr>
                    <tr>
                        <th>Customer Authority :</th>
                        <td>{{$view_leads->Customer_Authority}}</td>
                    </tr>
                    <tr>
                        <th>Phone :</th>
                        <td>{{$view_leads->Phone}}</td>
                    </tr>
                    <tr>
                        <th>FAX :</th>
                        <td>{{$view_leads->FAX}}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td>{{$view_leads->Email}}</td>
                    </tr>
                    <tr>
                        <th>Web :</th>
                        <td>{{$view_leads->Web}}</td>
                    </tr>
                    <tr>
                        <th>Country :</th>
                        <td>{{ $view_leads->Country}}</td>
                    </tr>
                    <tr>
                        <th>State :</th>
                        <td>{{$view_leads->State}}</td>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <td>{{$view_leads->City}}</td>
                    </tr>
                    <tr>
                        <th>Town :</th>
                        <td>{{$view_leads->Town}}</td>
                    </tr>
                    <tr>
                        <th>Post Code :</th>
                        <td>{{$view_leads->Name}}</td>
                    </tr>
                    <tr>
                        <th>Address :</th>
                        <td>{{$view_leads->Name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </form>
</div>
@endsection