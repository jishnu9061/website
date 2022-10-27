@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
    <head>
<style>
    .btn-width{
        width:10%;
    }
    /* body{
    background-color: #f0e7ce;
    } */

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