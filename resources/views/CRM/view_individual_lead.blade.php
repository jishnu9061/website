@extends('layouts.hmsmain')
@section('content')

<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b>Detail</b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Name :</th>
                        <td>{{$view_individual_leads->customer_name}}</td>
                    </tr>
                    <tr>
                        <th> Postal Code :</th>
                        <td>{{$view_individual_leads->postal_code}}</td>
                    </tr>
                    <tr>
                        <th> Town :</th>
                        <td>{{$view_individual_leads->town}}</td>
                    </tr>
                    <tr>
                        <th> Country :</th>
                        <td>{{$view_individual_leads->country}}</td>
                    </tr>
                    <tr>
                        <th> Telephone No :</th>
                        <td>{{$view_individual_leads->telephone_no}}</td>
                    </tr>
                    <tr>
                        <th> Email Address :</th>
                        <td>{{$view_individual_leads->email}}</td>
                    </tr>
                    <tr>
                        <th> Mobile No :</th>
                        <td>{{$view_individual_leads->mobile_no}}</td>
                    </tr>
                    <tr>
                        <th> Website :</th>
                        <td>{{$view_individual_leads->web_site}}</td>
                    </tr>
                    <tr>
                        <th> Registration Date :</th>
                        <td>{{$view_individual_leads->registration_date}}</td>
                    </tr>
                    <tr>
                        <th> Address :</th>
                        <td>{{$view_individual_leads->customer_address}}</td>
                    </tr>
                    <tr>
                        <th> Physical Address :</th>
                        <td>{{$view_individual_leads->physical_address}}</td>
                    </tr>
                   
                   
                    


                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection