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
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Advocate Target - Monthly</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                       
                        <tr>
                                <td style="width:30%">Advocate:</td>
                                <td> 
                                <select type="text" value="" id="" name="department"style="width:100%;color:rgb(13, 1, 56);background-color:white;">
                                <option>--Select---</option>
                                <option>Alekeen W Benson</option>
                                <option>Corrine Auma</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Princess Caroline</option>
                          
                            </select>
                            </td>

                         <tr>
                            <td style="width:30%">Year:</td>
                            <td> 
                                <select type="text" value="" id="" name="department"style="width:50%;color:rgb(13, 1, 56);background-color:white;">
                                <option>--Select---</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                            
                            </select>
                            </td>
                         
                         </tr>
                        
                        <tr>
                            <td style="width:30%">January:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">February:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">March:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">April:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">May:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">June:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">July:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">August:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">September:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">October:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">November:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                        <tr>
                            <td style="width:30%">December:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>

                        </tr>
                  
            </table>
            <div class="class"style="text-align:center;">
    
            <a href="something"><input type="submit"value="Save" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>
        </form>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection