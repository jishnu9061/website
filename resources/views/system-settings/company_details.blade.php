@extends('layouts.hmsmain')
@section('content')

<html>
<div class="container">

<head>
    <title>Client</title>
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
<body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Company Details</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     
            </div>
            <br>
        <br>
      
  <!-- <a href="{{('add_company_details')}}"><button class="btn btn-primary"  style="background: #FFFBF4; color: #1D1D50;" >Add Company</button></a><br><br>
  <hr class="mb-4">. -->
  <a href="{{('add_company_details')}}"><button class="btn btn-primary add-btn" style="width:20%;">Edit Company </button></a><br><br>
  
  <table class="table table-bordered" id="new-item">
  <thead>
  <tr>
    <th>Sl No</th>
    <th>Company Name</th>
    <th>Company Address</th>
    <th>Town/City</th>
    <th>Logo</th>
    <th>Action</th>
  
  </tr>
  </thead>
        <tbody>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="color:green;font-weight:bold;"><img src=”https://www.pexels.com/photo/high-rise-buildings-443383/” ></td>
    <!-- <td><a href="{{url('edit_company_details')}}"style="color:blue;">Edit</a> -->
    <td  scope="row"class="text-center"><a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i>
                           <input type="hidden" value="" id="medicine_id_hidden" class="applicate" name="supplier_id_hidden">
                          
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
</td>
    <!-- <td><input type="checkbox"></td> -->
    </tr>
        </tbody>

  
  
</table>
<br><br>
</div>
 
</body>
</html>

@endsection