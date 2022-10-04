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
         /* h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            } */
         

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
 <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Change User Password</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
    <p style="color:red;text-align:center;"> Password must be atleast 8 character long, Contain atleast 1 capital letter,<br> atleast 1 numeric character and atleast 1 special character</p>

   
    <form>
    <table class="table">
    <tbody>
                       
                        <tr>
                                <td style="width:30%;text-align:center;">User's Name:</td>
                                <td>
                                <select type="text" value="" id="" name="name"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                <option>Princess Caroline(caroline)</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                            </td>

                         <tr>
                            <td style="width:30%;text-align:center;">Old Password:</td>
                            <td><input type="password"  id="" name="password"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                     
                        <tr>
                            <td style="width:30%;text-align:center;">New Password:</td>
                            <td><input type="password"  id="" name="password"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%;text-align:center;">Confirm Password:</td>
                            <td><input type="password"  id="" name="password"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                          
                        </tr>
            </table>
            <div class="class"style="text-align:center;">
    
            <a href="something"><input type="submit"value="Submit" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
     

            
    </div>
        </form>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection