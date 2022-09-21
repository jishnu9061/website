@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/logo">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <h2 style="text-align:center; text-shadow: 2px 1px;">Other Configurations</h2>
    <hr class="mb-4">.
    <style>
     
      h2
    {
  
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    padding:15px;
    
    }
      </style>
</head>
<body>

<div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('configu_ration')}}"><button type="button" class="btn btn-primary btn_align_btn" > Configurations</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('company_branch')}}"><button type="button" class="btn btn-primary btn_align_btn" > Company Branch</button></a></div>
    <div class="col-sm-4 " > <a><button type="button" class="btn btn-primary btn_align_btn" >Template Category</button></a></div>

    <div class="col-sm-4 " > <a href="{{url('letter_types')}}"><button type="button" class="btn btn-primary btn_align_btn" > Letter Types</button></a></div>
    <div class="col-sm-4 " > <a><button type="button" class="btn btn-primary btn_align_btn" > Payment Items</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('courts')}}"><button type="button" class="btn btn-primary btn_align_btn" > Courts</button></a></div>

    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" > Description Selections</button></a></div>
    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" > Tax Tables</button></a></div>
    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" > Notifications</button></a></div><br><br>
   
  </div>
</div>

</body>
</html>
@endsection
