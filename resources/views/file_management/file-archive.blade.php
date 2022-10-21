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

   </head>
   <body>

<div>
        <button class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>File Archive </u></b></span></button><br>
       
 </div>
        <br> <br>
        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
       
{{-- <a href="{{('add-box-no')}}"><button class="btn btn-primary">Add Box No</button></a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Box No</button>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <br>
<!---------------------------------------------------- MODAL ---------------------------------------------------------------------->

    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
    <thead>
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Archive No</th>
                            <th class="text-center">Archive Date</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">File Number</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">File Closed</br>Number</th>
                            <th class="text-center">Date Closed</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"><a href=""><i style="color:black;" class="fa fa-eye"
                                        aria-hidden="true"></i>
                                    <input type="hidden" value="" id="medicine_id_hidden" class="applicate"
                                        name="supplier_id_hidden">
                                    <a href="{{url('edit-box-no')}}"><i style="color:black;" class="fa fa-edit"
                                            aria-hidden="true"></i>
                                        <a onClick="return myFunction();" href="" style="color:black;"><i
                                                class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
</div>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Box No</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-box-no') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf

<div class="row">
<div class="col-md-6">
<div class="mb-1">
<label for="username">Box Type</label>

<div class="input-group">
<div class="input-group-prepend">

</div>
<select name="box_type" id="cars" required>
<option>------select---</option>
            <option>demo 2</option>
            <option>demo 3</option>
</select>
<div class="invalid-feedback" style="width: 100%;">
Incorporation is required
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="mb-1">
<label for="username">Box No</label>
<div class="input-group">
<div class="input-group-prepend">

</div>
<input type="text" class="form-control" name="box_no" id=""required>
</div>
</div>
</div>


</div>
<br>

<div class="row">
<div class="col-sm">

</div>
<div class="col-sm">

</div>
<div class="col-sm">
<br>
<button type="submit" class="btn btn-primary float:right;" Style="width:45%;">View</button>
<button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>


@endsection









