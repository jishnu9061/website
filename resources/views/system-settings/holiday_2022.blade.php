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
  </head>
  <style>
     body
        {
     
          /* font-family:  Arial, Helvetica, sans-serif; */
        }
        /* h2
        {
           
            font-size:large;
            font-weight:bold;
            color:rgb(13, 1, 56); 
            background-color:rgb(177, 127, 62);
            padding:15px;
         } */
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
<!-- <h2>Weekend and Holidays</h2><br><br> -->
<h3 class="text-center" style="color:rgb(13, 1, 56);"><b><u>Weekend and Holidays</u></b></h3><br>
  <a href="{{url('add_new_holiday')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Holiday / Weekend Date</button></a>
<p><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a><br><br>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Weekend & Holiday Dates - 2022</h3>
<table class="table table-bordered" id="new-item">
  <thead>
    <tr>
    <th>Sl No:</th>
    <th>Date</th>
    <th>Day</th>
    <th>Delete</th>
    </thead>
</table><br><br>
</form>

<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
    </body>
</html>
@endsection