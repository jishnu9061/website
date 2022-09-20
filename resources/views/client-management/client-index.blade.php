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
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-7.png" alt=""><a href="{{url('client_list')}}"><button type="button" class="btn btn-primary btn_align_btn" > Client List</button></a></div>
  <div class="col-sm-4 " ><a><img class="logo_size" src="image\logo\icon-1.png" alt=""><button type="button" class="btn btn-primary btn_align_btn" >Client Search</button></a></div>
  <div class="col-sm-4 " ><a><img class="logo_size" src="image\logo\icon-3.png" alt=""><button type="button" class="btn btn-primary btn_align_btn" > Client Services Communication</button></a></div>
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-3.png" alt=""> <a href="complaint-list"><button type="button" class="btn btn-primary btn_align_btn" > Complaint Registration</button></a></div>
  <div class="col-sm-4 " ><a><img class="logo_size" src="image\logo\icon-4.png" alt=""><button type="button" class="btn btn-primary btn_align_btn" > CRM</button></a></div>
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-8.png" alt=""><a href="{{url('client-pickup')}}"><button type="button" class="btn btn-primary btn_align_btn" >New Client Pickup</button></a></div>
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-2.png" alt=""><button type="button" class="btn btn-primary btn_align_btn" > New Quoation</button></a></div>
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-2.png" alt=""><a href="{{url('follow-up')}}"><button type="button" class="btn btn-primary btn_align_btn" >Follow up</button></a></div>
  <div class="col-sm-4 " ><img class="logo_size" src="image\logo\icon-6.png" alt=""> <a href="{{url('client-document')}}"><button type="button" class="btn btn-primary btn_align_btn" > Document Detials</button></a></div>
  
    

  </div>
</div>

</body>
</html>
@endsection
