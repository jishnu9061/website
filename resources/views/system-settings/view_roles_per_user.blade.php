
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
    <h2 style="text-align:center; text-shadow: 2px 1px;">View Roles per User </h2>
    <!-- <a href="{{('add_new_user_grp')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add New User Group</button></a> -->
    <hr class="mb-4">


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Roles per User</h3>
    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >User ID</th>
                        <th class="text-center" >Full Name</th>
                        <th class="text-center" >User Group</th>
                        <th class="text-center" >User Roles</th>
                        <th class="text-center" >Edit</th>
                        
                    </tr>
</thead>
             <tbody>
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_view_roles')}}">Edit</a></td>
                    
                     </tr>
                     </tbody>
        
                    
                    </table><br>
</div >   
        </body>
</html>

  @endsection
      














   