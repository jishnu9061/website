@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    </head>
    <body>
  
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Company Branch</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>

        <a href="{{('add_company_branch')}}"><button class="btn btn-primary add-btn">Add Branch </button></a><br><br>

    <table class="table table-bordered" id="new-item">
   <thead>
  <tr>
    <th>Sl No</th>
    <th>Branch No</th>
    <th>Branch Code</th>
    <th>Branch Name</th>
    <th>Status</th>
    <th>Action</th>
        </thead>
  </tr>
  <tbody>
  @foreach($branch_details as $branch)
  <tr>
  <td>{{$branch->id}}</td>
    <td>{{$branch->branch_no}}</td>
    <td>{{$branch->branch_code}}</td>
    <td>{{$branch->branch_name}}</td>
    <td style="color:green;font-weight:bold;"></td>
    <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_company_branch',$branch->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
    @endforeach
    </tr>
        </tbody>
 
  
</table><br><br>
<div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
    <option>Delete Category</option>
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
    <br>
    <br>
    </div>

</body>
    </html>
    @endsection