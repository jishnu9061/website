@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/logo">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>

<div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " > <a href="{{url('add_user')}}"><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Add New User</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('change_password')}}"><img class="logo_size" src="assets\image\4.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" > Change Password</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\5.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Edit User Details</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Add New User Group</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\3.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Manage User Group</button></a></div>


    
 

  </div>
</div>

</body>
</html>
@endsection