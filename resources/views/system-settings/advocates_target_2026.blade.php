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
   <style>
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



<h3 class="text-center" style="color:rgb(13, 1, 56);"><b><u>Advocate Targets</u></b></h3><br>

 <a href="{{url('add_new_entry')}}"><button type="button" class="btn btn-primary add-btn" style="width:30%" > Add New Entry</button></a>
<p>
<a href="{{url('advocates_target_2026')}}"style="color:blue;font-size:small;">2026</a> |
<a href="{{url('advocates_target_2025')}}"style="color:blue;font-size:small;">2025</a> |
<a href="{{url('advocates_target_2024')}}"style="color:blue;font-size:small;">2024</a> |
<a href="{{url('advocates_target_2023')}}"style="color:blue;font-size:small;">2023</a> |
<a href="{{url('advocates_target_2022')}}"style="color:blue; font-size:small;">2022</a> | 
<a href="{{url('advocates_target_2021')}}"style="color:blue; font-size:small;">2021</a> <br><br>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Advocate Targets - 2026</h3>

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
    <th>Total</th>
    <th>Action</th>
  
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
    <td class="text-center"style="color:rgb(13, 1, 56);">
    
    <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="edit_advocate_target" class="dropdown-item" >Edit</a>
                                <a href="" class="dropdown-item" >View</a>
                               
                             
                            </div>
                        </div> 

                       </td>
     
</tr>
        </tbody>




</table><br><br>



    </body>
</html>
@endsection