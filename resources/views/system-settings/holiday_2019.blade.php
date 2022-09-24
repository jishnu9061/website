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
<h2 style="text-align:center; text-shadow: 2px 1px;">Weekend and Holidays</h2>
  <hr class="mb-4">.
<a href="{{url('add_new_holiday')}}"  class="btn btn-primary" style="margin-top:0px;">Add New Holiday / Weekend Date</a>
<p style="color:black;"><a href="{{url('holiday_2017')}}"style="color:blue; font-size:x-small;">2017</a> | <a href="{{url('holiday_2018')}}"style="color:blue;font-size:x-small;">2018</a> | <a href="{{url('holiday_2019')}}"style="color:blue;font-size:x-small;">2019</a> | <a href="{{url('holiday_2020')}}"style="color:blue;font-size:x-small;">2020</a> | <a href="{{url('holiday_2021')}}"style="color:blue;font-size:x-small;">2021</a> | <a href="{{url('holiday_2022')}}"style="color:blue;font-size:x-small;">2022</a><br><br>
<h3 style="color:rgb(177, 127, 62);font-size:large;font-weight:bold;text-align:center;">Weekend & Holiday Dates - 2019</h3>
<table>
    <tr>
    <th>Sl No:</th>
    <th>Date</th>
    <th>Day</th>
    <th>Delete</th>
</tr>
  <tr>
    <td>    </td>
    <td>    </td>
    <td>     </td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>

</table><br><br>
</form>
<form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form>
    </body>
</html>
@endsection