
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
   <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage User Roles</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br> <br>
    
    <a href="{{('add_user_roles')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add User Role</button></a>
 


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">User Roles</h3>
    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Role Name</th>
                        <th class="text-center" >Users</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center"><input type="checkbox"></th>
                   
                    </tr>
</thead>
             <tbody>
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"><a href="{{url('edit_user_roles')}}"><i style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>
                        <td class="text-center"><input type="checkbox"></td>
                     </tr>
                     </tbody>
        
                    
                    </table><br>
</div >   
        </body>
</div >
</html>

  @endsection
      














   