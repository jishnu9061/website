
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
      <style >
          body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray ;
}
td:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        }
          
            </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Description Selections</h2>
        <a href="{{('add_desc_sel')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Description Selection</button></a>
        <hr class="mb-4">.
    <!-- <div class="container"> -->
      <div class="mydiv">
             <table class="table" >
                  
                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Description Selection Name</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Selection Description</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Edit</th>
                      
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('#')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                 

              
                
                   
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:white;font-size:small;background-color:rgb(13, 1, 56);"type="text" value="" name="type">
    <option>Active Category</option>
    <option>De-Active Category</option>
 
</select>
<input type="button"value="Go" name="close"style="background-color:rgb(13, 1, 56);color: white; ">
    </div>
    <br>
    <br>
    </div>

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
</html>
  @endsection
      














   