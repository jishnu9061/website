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
            color:black;

           }
        </style>
    </head>
    <body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Add New User Group</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                       
                        <tr>
                                <td style="width:30%">Group Code:</td>
                                <td><input type="text"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>


                         <tr>
                            <td style="width:30%">Group Name:</td>
                            <td><input type="text"  id="" name="name"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Default Menu:</td>
                            <td> 
                                <select type="text" value="" id="" name="menu"style="width:50%;color:rgb(13, 1, 56);background-color:white;">
                                <option>---select---</option>
                                <option>Dashboard</option>
                                <option>Client Management</option>
                                <option>File Management</option>
                                <option>Client Invoicing</option>
                                <option>Office Administration</option>
                                <option>Accounting and Finance</option>
                                <option>HR & Payroll</option>
                                <option>Tools & Addons</option>
                                <option>System Setup</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30%">Group Roles:</td>
                           
                            <td> 
                                <select type="text" value="" id="" name="menu"style="width:50%;color:rgb(13, 1, 56);background-color:white;">
                                <option>select group roles</option>
                                <option></option>
                                <option></option>
                                <option></option>
                      
                            </select>
                            </td>
                             
                        </tr>
                       
            </table>
            <div class="class"style="text-align:center;">
    
            <a href="something"><input type="submit"value="Add" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>
        </form>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection