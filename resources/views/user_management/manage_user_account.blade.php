
@extends('layouts.hmsmain')
@section('content')
<html>
  <div class="container">
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


          </style>
   </head>
   <body>
 <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage User Accounts</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
    <a href="{{('reg_new_user')}}"><button class="btn btn-primary add-btn" style="width=10%;height=100%;">Register New User</button></a> <br>
            <br>
    


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>List Of System Users</b></h3>
    <div class="table-responsive">    
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
                      <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="user_edit" class="dropdown-item" >Edit</a>
                                <!-- <a href="user_view" class="dropdown-item" >View</a> -->
                                <a href="user_attachments"class="dropdown-item" >Attachment</a>
                                <a href="user_comments" class="dropdown-item" >Comments</a>
                              
                             
                            </div>
                        </div> 

                       </td>
                     
                     </tr>
                     </tbody>
               
                    </table><br>
</div>        
        </body>
        </div>     
</html>

  @endsection
      














   