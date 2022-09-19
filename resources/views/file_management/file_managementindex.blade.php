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
    <div class="col-sm-4 " > <a href="{{url('file-list')}}"><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Manage Files</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Status Report</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\3.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Archive</button></a></div>

    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\4.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" > File Reports</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\5.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Notes</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\6.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Instructions</button></a></div>
 
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\7.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Outcomming/Incomming Letters</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\8.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Document Templates</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\9.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Manage Documents</button></a></div>

    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\10.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Appointment</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Update</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\12.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Bring Up</button></a></div>

    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Client Meeting</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Notes</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\15.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Workflow Management</button></a></div>
   
  </div>
</div>

</body>
</html>
@endsection