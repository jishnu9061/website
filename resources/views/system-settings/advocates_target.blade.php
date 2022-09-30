@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="table.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
  </head>
  <style>
 
      
         table {
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 95%;
            margin-left:25px;
        }
        td, th {
            border: 1px solid rgb(240, 205, 10);
            text-align: left;
            padding: 8px;
         }
        th{
             background-color:rgb(177, 127, 62);
             color:rgb(13, 1, 56);
         }
         td{
            color:rgb(13, 1, 56);
         }
         </style>
</head>
<body>
  <form>


<h3 class="text-center" style="color:rgb(13, 1, 56);"><b><u>Advocate Targets</u></b></h3><br>

 <a href="{{url('add_new_entry')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Entry</button></a>
<p><a href="{{url('')}}"style="color:blue;font-size:small;">2022</a> |
<a href="{{url('')}}"style="color:blue; font-size:small;">2021</a> | 
<a href="{{url('')}}"style="color:blue;font-size:small;">2020</a> | 
<a href="{{url('')}}"style="color:blue;font-size:small;">2019</a> |
 <a href="{{url('')}}"style="color:blue;font-size:small;">2018</a> |
  <a href="{{url('')}}"style="color:blue;font-size:small;">2017</a><br><br>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Advocate Targets - 2022</h3>
<table class="table table-bordered" id="new-item">
  <thead>
    <tr>

    <th>No</th>
    <th>Staff Member</th>
    <th>Jan</th>
    <th>Feb</th>
    <th>Mar</th>
    <th>Apr</th>
    <th>May</th>
    <th>Jun</th>
    <th>Jul</th>
    <th>Aug</th>
    <th>Sep</th>
    <th>Oct</th>
    <th>Nov</th>
    <th>Dec</th>
    <th>Edit</th>
    <th class="text-center"><input type="checkbox"></th>
</tr>
        </thead>
        <tbody>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
     
</tr>
        </tbody>




</table><br><br>
</form>

    </body>
</html>
@endsection