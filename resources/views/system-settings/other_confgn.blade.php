@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <div class="container">
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

    
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Other Configurations</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
    <style>
     
   
      </style>
</head>
<body>

<div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('configu_ration')}}"><img class="logo_size"src="assets\image\Configuration.png" alt=""><button type="button"  style="width:70%;" class="btn btn-primary btn_align_btn" > Configurations</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('company_branch')}}"><img class="logo_size"src="assets\image\Company branch.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Company Branch</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('template_category')}}"><img class="logo_size"src="assets\image\Template category.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Template Category</button></a></div>

    <div class="col-sm-4 " > <a href="{{url('letter_types')}}"><img class="logo_size"src="assets\image\letter type.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Letter Types</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('payment_items')}}"><img class="logo_size"src="assets\image\Payment items.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Payment Items</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('courts')}}"><img class="logo_size"src="assets\image\Courts.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Courts</button></a></div>

    <div class="col-sm-4" > <a href="{{url('description_selectn')}}"><img class="logo_size"src="assets\image\Description selection.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Description Selections</button></a></div>
    <div class="col-sm-4" > <a href="{{url('tax_chart')}}"><img class="logo_size"src="assets\image\Taxchart.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Tax Chart</button></a></div>
    <div class="col-sm-4" > <a href="{{url('notifications')}}"><img class="logo_size"src="assets\image\Notification.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Notifications</button></a></div>
  </div>
</div>
<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
</body>
</div>
</html>
@endsection
