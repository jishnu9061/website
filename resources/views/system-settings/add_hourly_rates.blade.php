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
    <h2 style="text-align:center; text-shadow: 2px 1px;">Set Hourly Rate</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                        <tr>
                            <td style="width:30%"> User / Staff</td>
                            <td><select type="text" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option>--Select---</option>
                                <option>Alekeen W Benson</option>
                                <option>Cedric Opara</option>
                                <option>Corrine Auma</option>
                                <option>Evans Munene</option>
                                <option>Florance Muthama</option>
                                <option>George Njoroge</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Jackline Ogwemo</option>
                                <option>John Wachira</option>
                                <option>Jukius Mburu</option>
                                <option>Kevin Kavila</option>
                                <option>Martin Kyalo</option>
                                <option>Mike Ogutu </option>
                                <option>Owino PH Onyango</option>
                                <option>Princess Caroline</option>
                                <option>Sarah Gladys</option>
                                <option>Thagichu Nyaga</option>
                                <option>Wambua Musyoka</option>
                          
                         

                        </select></td>
                           
                        </tr>
                        <tr>
                            <td style="width:30%">Currency</td>
                            <td><select type="text" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option>---Select---</option>
                            <option>KES</option>
                            <option>USD</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>AUD</option>
                            <option>CAD</option>
                            <option>SEK</option>
                            <option>DKK</option>
                            <option>JPY</option>
                            <option>CHF</option>
                            <option>HKD</option>
                          
                        </select></td>
                          
                        </tr>
                        <tr>
                        <td style="width:30%"> Hourly Rate:</td>
                        <td><input type="number"  id="" name="date"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td> 
                           
                        </tr>
                       
        </tbody>
              </table>
            <div class="class"style="text-align:center;">
            <a href="something"><input type="submit"value="Save" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>


    <form>
</body>
</html>
@endsection