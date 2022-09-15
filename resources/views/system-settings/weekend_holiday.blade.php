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
          background-color: #f0e7ce;
          /* font-family:  Arial, Helvetica, sans-serif; */
        }
        h2
        {
            /* font-family:  Arial, Helvetica, sans-serif; */
            font-size:large;
            font-weight:bold;
            color:rgb(13, 1, 56); 
            background-color:rgb(177, 127, 62);
            padding:15px;
         }
         table{
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 50%;
            margin-left:300px;
     
            
        }
        td, th {
            border: 1px solid rgb(13, 1, 56);
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
         tr:nth-child(even) {
  background-color: white;
}
         </style>
</head>
<body>
  <form>
<h2>Weekend and Holidays</h2><br><br>
<a href="#" class="btn btn-primary" style="margin-top:0px;">Add New Holiday / Weekend Date</a>
<p style="color:black;"><a href="#"style="color:blue; font-size:x-small;">2017</a> | <a href="#"style="color:blue;font-size:x-small;">2018</a> | <a href="#"style="color:blue;font-size:x-small;">2019</a> | <a href="#"style="color:blue;font-size:x-small;">2020</a> | <a href="#"style="color:blue;font-size:x-small;">2021</a> | <a href="#"style="color:blue;font-size:x-small;">2022</a><br><br>
<h3 style="color:rgb(177, 127, 62);font-size:large;font-weight:bold;text-align:center;">Weekend & Holiday Dates - 2022</h3>



<table>

   
  <tr>
    <th>Sl No:</th>
    <th>Date</th>
    <th>Day</th>
    <th>Delete</th>
</tr>
  <tr>
    <td>1</td>
    <td>01-01-2022</td>
    <td>Saturday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>2</td>
    <td>02-01-2022</td>
    <td>Sunday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>3</td>
    <td>08-01-2022</td>
    <td>Saturday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>4</td>
    <td>09-01-2022</td>
    <td>Sunday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>5</td>
    <td>15-01-2022</td>
    <td>Saturday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>6</td>
    <td>16-01-2022</td>
    <td>Sunday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
<tr>
    <td>7</td>
    <td>22-01-2022</td>
    <td>Saturday</td>
    <td><a href="del_db" target="_blank"style="color:blue;">Delete</a></td>
</tr>
</table><br><br>
</form>

    </body>
</html>
@endsection