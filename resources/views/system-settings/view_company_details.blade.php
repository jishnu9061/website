@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
<style>
    .btn-width{
        width:10%;
    }
    /* body{
    background-color: #f0e7ce;
    } */

    
        td, th {
            border: 1px solid rgb(240, 205, 10);
            text-align: left;
            padding: 8px;
         }
        th{
           
         }
         td{
            color:rgb(13, 1, 56);
         }
</style>
        </head>
<div>


</div>
<br>
<body>
<div class="container">
    <h3 style="text-align:center">View Company Details</h3><br><br>
    <table class="table table-hover" style="border: 1px solid;  border-collapse: collapse;width: 95%;margin-left:25px;">
       
        @csrf
        <tbody >
            
            <tr>
                <th style="width:30%;  background-color:rgb(177, 127, 62);color:rgb(13, 1, 56);border: 1px solid rgb(240, 205, 10);
                text-align: left;padding: 8px;">Company Name:</th>
                <td></td>
            </tr>
                <th style="background-color:rgb(177, 127, 62);color:rgb(13, 1, 56);border: 1px solid rgb(240, 205, 10);
                text-align: left;padding: 8px;">Company Address:</th>
                <td></td>
            </tr>
            </tr>
                <th style="background-color:rgb(177, 127, 62);color:rgb(13, 1, 56);border: 1px solid rgb(240, 205, 10);
                text-align: left;padding: 8px;">Company Email:</th>
                <td></td>
            </tr>
            </tr>
                <th style="background-color:rgb(177, 127, 62);color:rgb(13, 1, 56);border: 1px solid rgb(240, 205, 10);
                text-align: left;padding: 8px;">VAT No:</th>
                <td></td>
            </tr>
             <tr>
                <th></th>
                    <td></td>
            </tr>
            <tr>
                <th></th>
                    <td></td>
            </tr>


        </tbody>
    </table>
</div>
        </body>
        <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form>

@endsection
