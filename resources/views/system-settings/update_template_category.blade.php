@extends('layouts.hmsmain')
@section('content')
<html>
   <head>

    <style>
         /* h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            } */
            /* .container{
                border:1px solid black;
         margin-left:0px;
         width:auto;
         height:100%;
         width:40%;
         } */

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
    <h2 style="text-align:center; text-shadow: 2px 1px;">Update Template Category</h2>
    <hr class="mb-4">.
    <table class="table">
    <tbody>
                        <tr>
                            <td style="width:30%"> Template Category:</td>
                            <td><select type="text" value="" name="type"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                            <option></option>
                            <option>Business Formation</option>
                            <option>Business Operations</option>
                            <option>Business Property</option>
                            <option>Employment</option>
                            <option>Financial</option>
                            <option>Personal & Family</option>
                            <option>Real Estate</option>
                            <option>Will & Estate Planning</option>

                        </select><a href="{{('document_template_category')}}">  <i style="color:rgb(13, 1, 56);"class="bi bi-plus-circle-fill"> </i></a></td>
                           
                        </tr>
                        <tr>
                            <td style="width:30%">Category Type:</td>
                           <td><input type="number"  id="" name="date"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td> 
                          
                        </tr>
                        
        </tbody>
              </table>
            <div class="class"style="text-align:center;">
            <a href="something"><input type="submit"value="Submit" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>


            
</body>
</html>
@endsection