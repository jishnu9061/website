@extends('layouts.hmsmain')
@section('content')

<html>
  <head>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
    <title>Company Details</title>
      <!-- <link rel="stylesheet" href="assets/css/cstyle.css">  -->

 
</head>
<body>
  <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-width:150%"><span class="font-size-lg"><b>Edit Company Details</b></span></button><br><br>
  {{-- <h3 style="text-align:center"><b><u>Company Details</u></b></h3> --}}
  <!-- <a href=""><button class="btn btn-primary"  style="background: #FFFBF4; color: #1D1D50;" >Add Company</button></a><br><br>
  <hr class="mb-4">. -->
  <a href="{{('add_company_details')}}"><button class="btn btn-primary add-btn">Edit Company </button></a><br><br>
  
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
                            <a href="{{url('edit_company_details')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
</td>
    <!-- <td><input type="checkbox"></td> -->
    </tr>
        </tbody>

  
  
</table>
<br><br>

 
</body>
</html>

@endsection