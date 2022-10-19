@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<div class="container">
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css"
                href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <link rel="stylesheet" href="public/assets/css/logo">
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

   </head>
   <body>
   <div>
        
        <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>User Management</u></b></button><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
    </div>
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
    <button class="btn btn-primary float-left"

style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">User Account</button><br><br><br>
    
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('manage_user_account')}}"><img class="logo_size"src="assets\image\Manage User Accounts.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Manage User Accounts</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('change_user_password')}}"><img class="logo_size"src="assets\image\Change user password.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Change User Password</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_group')}}"><img class="logo_size"src="assets\image\Manage user group.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Manage User Groups</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('view_roles_per_user')}}"><img class="logo_size"src="assets\image\View roles per user.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > View Roles per User</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_roles')}}"><img class="logo_size"src="assets\image\Manage user role.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Manage User Roles</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_department')}}"><img class="logo_size"src="assets\image\Manage user Department.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Manage User Departments</button></a></div>
    <!-- <div class="col-sm-4" > <a href="{{url('advocates_target')}}"><img class="logo_size"src="assets\image\Advocate target.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Advocates Targets</button></a></div> -->
    

</div>
<br>
</body>
</div>
</html>
  @endsection
      

