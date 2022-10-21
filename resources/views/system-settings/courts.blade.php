
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
      <style >
          body
        {
          background-color: white;
        }
      
      
             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray ;
}
/* td:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        } */
          
            </style>
   </head>
   <body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Court List</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_court')}}"><button class="btn btn-primary">Add Court</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Court</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
                        {{-- <a href="{{('add_court_category')}}"><button class="btn btn-primary">Add New Court Category</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Add New Court Category</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_court')}}"><button class="btn btn-primary add-btn">Add Court</button></a> -->
        <!-- <a href="{{('add_court_category')}}"><button class="btn btn-primary add-btn">Add New Court Category</button></a><br><br> -->
 <div class="table-responsive"> 
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Court Category</th>
                        <th class="text-center" >Court Name</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center"><input type="radio"></th>
                    </tr>
    </thead>
    <tbody>
                    
                    <tr>
                        <td ></td>
                        <td></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_court')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('')}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                    </tr>

                    
    </tbody>
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" name="type">
    <option>Delete Court</option>
    <option>Active Category</option>
</select>
<input type="button"value="Go" name="close"style="color:rgb(13, 1, 56);background-color:#FFFBF4; ">
    </div>
    <br>
    <br>
      <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add court</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_court') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    

    @csrf
            <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="Date" class="form-control" id="" name="date"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="category">
                                    <option>Select</option>
                                   
                    <option>Supreme Court</option>
                    <option>Court Of Appeal</option>
                    <option>High Court</option>
                    <option>Industrial Court</option>
                    <option>Magistrate Court</option>
                    <option>Islamic Court</option>
                    <option>Labour Court</option>
                    <option>East Africa Court</option>
                    <option>Small Claim Court</option>
                    <option>Others</option>
                                </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="courtname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>    
                    <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
</form>
</div>
</div>
</div>
</div>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="Modal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New Court Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_court_category') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Category No:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" id="" name="catnum"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Category Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="catname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>    
                    <div class="row">
         <div class="col-sm">

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Others :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                   
                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Small Claims Court:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
    </tbody>
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:white;font-size:small;background-color:rgb(13, 1, 56);"type="text" value="" name="type">
    <option>Delete Court</option>
    <option>Active Category</option>
</select>
<input type="button"value="Go" name="close"style="background-color:rgb(13, 1, 56);color: white; ">
    </div>
    <br>
    <br>
    </div>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
        </div>
</html>
  @endsection
      














   