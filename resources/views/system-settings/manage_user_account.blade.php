
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
 /* tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}   */
          </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Manage User Accounts </h2>
    <hr class="mb-4">.



    <table class="table table-bordered" id="new-item">
      <thead>

                        <tr>
                        <th class="text-center" >User Code</th>
                        <th class="text-center" >Name</th>
                        <th class="text-center" >User Name</th>
                        <th class="text-center" >User Group</th>
                        <th class="text-center" >E mail</th>
                        <th class="text-center" >Telephone</th>
                        <th class="text-center" >Log Status</th>
                        <th class="text-center" >IP Address</th>
                        <th class="text-center" >Last Logout Time</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                        <th class="text-center"><input type="checkbox"></th>
                    </tr>
</thead>
             <tbody>
            
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
                        <td class="text-center"style="color:rgb(13, 1, 56);">
                        <!-- <td  class="text-center">
                            <select name="" id=""> <option value=""> <a href="">Action</a> </option> 
                           <option value=""> <a href="user_edit">Edit</a> </option>
                           <option value=""> <a href="user_view">View</a> </option>
                           <option value=""> <a href="user_attachment">Attachment</a> </option>
                           <option value=""> <a href="user_comments">Comments</a> </option>
                        </select>
                            </td> -->


                        <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                       <td class="text-center"><input type="checkbox"></td>
                     </tr>
                     </tbody>
                    

                     



                  

                    
                    
                    </table><br>
                           
        </body>
</html>

  @endsection
      














   