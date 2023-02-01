@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="{{url('Corporate')}}" style="color: #1D1D50;">Corporate Customers</a> /
    <a href="#" style="color: #1D1D50;">View Corporate Customers</a>
</nav>
<br><br>
<style>
th{
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b>Corporate Customer Details</b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th> Name :</th>
                        <td>{{$view_corporates->Name}}</td>
                    </tr>
                    <tr>
                        <th>GST Office :</th>
                        <td>{{$view_corporates->GST_Office}}</td>
                    </tr>
                    <tr>
                        <th>GST Number :</th>
                        <td>{{$view_corporates->GST_Number}}</td>
                    </tr>
                    <tr>
                        <th>Social Security Number :</th>
                        <td>{{$view_corporates->Social_Security_Number}}</td>
                    </tr>
                    <tr>
                        <th>Customer Authority :</th>
                        <td>{{$view_corporates->Customer_Authority}}</td>
                    </tr>
                    <tr>
                        <th>Phone :</th>
                        <td>{{$view_corporates->Phone}}</td>
                    </tr>
                    <tr>
                        <th>FAX :</th>
                        <td>{{$view_corporates->FAX}}</td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td>{{$view_corporates->Email}}</td>
                    </tr>
                    <tr>
                        <th>Web :</th>
                        <td>{{$view_corporates->Web}}</td>
                    </tr>
                    <tr>
                        <th>Address :</th>
                        <td>{{$view_corporates->Address}}</td>
                    </tr>
                    <tr>
                        <th>Post Code :</th>
                        <td>{{$view_corporates->Post_Code}}</td>
                    </tr>
                    <tr>
                        <th>Town :</th>
                        <td>{{$view_corporates->Town}}</td>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <td>{{$view_corporates->City}}</td>
                    </tr>
                    <tr>
                        <th>State :</th>
                        <td>{{$view_corporates->State}}</td>
                    </tr>
                    <tr>
                        <th>Country :</th>
                        <td>{{$view_corporates->Country}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
@endsection
