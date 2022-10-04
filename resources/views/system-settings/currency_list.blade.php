
@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <style >
          body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray ;
}
/* td:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        } */
          
            </style>
   </head>
   <body>
 <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Currency List</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
        <a href="{{('add_currency')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Currency</button></a> <br>
            <br>
    
        <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Currency List</h3>
    <!-- <div class="container"> -->
      <div class="mydiv">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Currency Name</th>
                        <th class="text-center" >Currency Symbol</th>
                        <th class="text-center">Exchange Rate </th>
                        <th class="text-center">Default Account</th>
                       <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
    </thead>
    <tbody>
                   

                   
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{('edit_currency')}}">Edit</td></a>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{('delete_invoice_items')}}">Delete</td></a>
                      
                      
                    </tr>
                 

                    
    </tbody>

                   
                </table>
      
        </body>
</html>
  @endsection
      














   