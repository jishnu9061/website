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
        

         table{
              
                border:hidden;
                font-size:medium;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:rgb(13, 1, 56);

           }
           
        </style>
    </head>
    <body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Leave Days Per Year</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                        <tr>
                            <td style="width:30%"> Year:</td>
                            <td><select type="year" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option>---Select---</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                         

                        </select></td>
                           
                        </tr>
                        <tr>
                            <td style="width:30%">Annual Leave Days:</td>
                           <td><input type="number"  id="" name="date"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td> 
                          
                        </tr>
                        <tr>
                        <td style="width:30%"> Saturday Working Day:</td>
                            <td><select type="year" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option>---Select---</option>
                            <option>Not a Working Day</option>
                            <option>Yes (Half Day)</option>
                            <option>Yes (Full Day)</option>
                          
                        </select></td>
                        </tr>
                        <tr>
                        <td style="width:30%">Performance Duration:</td>
                            <td><select type="year" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option>---Select---</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Bi Annual</option>
                            <option>Annual</option>
                        </select></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Pay Personal Relief:</td>
                           <td><input type="number"  id="" name="date"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td> 
                          
                        </tr>
        </tbody>
              </table>
            <div class="class"style="text-align:center;">
            <a href="something"><input type="submit"value="Update" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>


    <form>
</body>
</html>
@endsection