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
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Edit Currency</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
    <form>
    <table class="table">
    <tbody>
                       
                        <tr>
                                <td style="width:30%">Currency Name:</td>
                                <td><input type="text"  id="" name="currency"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>


                         <tr>
                            <td style="width:30%">Currency Symbol:</td>
                            <td><input type="text"  id="" name="csymbol"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Exchange Rate:</td>
                            <td><input type="number"  id="" name="exchangerate"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Default Account:</td>
                            <td> 
                                <select type="text" value="" id="" name="account"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                <option>---Select---</option>
                                <option>8000====Client Account- Cooperative Bank</option>
                                <option>8003====Client Account- DTB Bank</option>
                                <option>8004====Client Account- Sidian Bank</option>
                                <option>8006====Client Account- Equity Bank</option>
                                <option>8008====Client Account- Coperative Bank (USD)</option>
                                <option>8009====Client Account- PayPal</option>
                            </select>
                            </td>
                        </tr>
            </table>
            <div class="class"style="text-align:center;">
    
            <a href="something"><input type="submit"value="Update" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>
        </form>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection