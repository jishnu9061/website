
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
    outline: 1px solid  gray;
}
 tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}            </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Manage User Accounts </h2>
    <hr class="mb-4">.
  <table class="table" >

                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">User Code</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Name</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">User Name</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">User Group</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">E mail</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Telephone</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Log Status</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">IP Address</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Last Logout Time</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                    </tr>
             
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>

                        <!-- <td  class="text-center">
                            <select name="" id=""> <option value=""> <a href="">Action</a> </option> 
                           <option value=""> <a href="user_edit">Edit</a> </option>
                           <option value=""> <a href="user_view">View</a> </option>
                           <option value=""> <a href="user_attachment">Attachment</a> </option>
                           <option value=""> <a href="user_comments">Comments</a> </option>
                        </select>
                            </td> -->


                        <td class="text-center"style="color:rgb(13, 1, 56);">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="user_edit" style="color:rgb(13, 1, 56);"class="dropdown-item" >Edit</a>
                                <a href="user_view" style="color:rgb(13, 1, 56);"class="dropdown-item" >View</a>
                                <a href="user_attachment" style="color:rgb(13, 1, 56);"class="dropdown-item" >Attachment</a>
                                <a href="user_comments" style="color:rgb(13, 1, 56);"class="dropdown-item" >Comments</a>
                             
                            </div>
                        </div> 

                       </td>
                     </tr>

                    

                     



                  

                    
                    
                    </table><br>
                           
        </body>
</html>

  @endsection
      














   