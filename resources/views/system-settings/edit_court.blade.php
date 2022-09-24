@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <style>
         /* h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            } */
            .container{
                border:1px solid black;
         margin-left:0px;
         width:auto;
         height:100%;
         width:40%;
         }

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
    <!-- <h2 >Edit Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Edit Court</h2>
    <hr class="mb-4">.
    <table class="table">
    <tbody>
                        <tr>
                            <td style="width:30%">Date:</td>
                            <td><input type="Date"  id="" name="date"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>

                        <tr>
                                <td style="width:30%">Court Category:</td>
                                <td> 
                                    <select type="text" value="" id="" name="category"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                    <option>select</option>
                                   
                    <option>Supreme Court</option>
                    <option>Court Of Appeal</option>
                    <option>High Court</option>
                    <option>Industrial Court</option>
                    <option>Magistrate Court</option>
                    <option>Islamic Court</option>
                    <option>Labour Court</option>
                    <option>East Africa Court</option>
                    <option>Small Claim Court</option>
                    <option>Others</option>
        </select>
                            </td>
                         </tr>


                         <tr>
                            <td style="width:30%">Court Name:</td>
                            <td><input type="text"  id="" name="name"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
            </table>
            <div class="class"style="text-align:center;">
            <input  type="submit"value="Save" name="submit"style="background-color:rgb(13, 1, 56);color: white; ">
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">
    </div>

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection