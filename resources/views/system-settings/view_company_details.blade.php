@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
    <head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<body>

    <h3 style="text-align:center">Company Details</h3><br><br>
    <table class="table table-hover" style="border: 1px solid;  border-collapse: collapse;width: 95%;margin-left:25px;">
       
        @csrf
        <tbody>
        <tr>
                <th>LOGO:</th>
                <td></td>
            </tr>
            <tr>
                <th>Company Name:</th>
                <td></td>
            </tr>
                <th>Company Address:</th>
                <td></td>
            </tr>
            </tr>
                <th >Town/City:</th>
                <td></td>
            </tr>
    


        </tbody>
    </table>
</div>
        </body>
        <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

<tbody>
@foreach($company_details as $company)    
 

        <tr>
                <th>LOGO:</th>
                <td>{{$company->Add_Logo}}</td> 
            </tr>
            <tr>
                <th>Company Name:</th>
                <td>{{$company->company_name}}</td>
            </tr>
                <th>Company Address:</th>
                <td>{{$company->address}}</td>
            </tr>
            </tr>
                <th >Town/City:</th>
                <td>{{$company->town_city}}</td>
            </tr>
            </tr>
                <th >Edit:</th>
                <td  scope="row"class="text-center"><a href="{{url('edit_company_details',$company->id)}}">
<i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i></td>
            </tr>
    
            @endforeach

        </tbody>
@endsection