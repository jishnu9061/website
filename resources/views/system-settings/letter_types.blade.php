
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
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Letter Category</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
   
        <a href="{{('add_letter_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Letter Category</button></a><br><br>
    
    <!-- <div class="container"> -->
      <div class="table-responsive">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Letter Category</th>
                        <th class="text-center">Letter types</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                      
                    </tr>
<thead>
    <tbody>
    @foreach($letter_types as $letter)
        <tr>
                        <td >{{$letter->id}}</td>
                        <td>{{$letter->letter_category}}</td>
                        <td>{{$letter->letter_type}}</td>
                        <td></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                       
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Financial :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td class="text-center"  style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td class="text-center"  style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Personal & Family:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Real Estate:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Will & Estate Planning :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Procurement Documents:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Human Resource :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Administration:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
    </tbody>
    @endforeach
                    
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
  
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
    <br>
    <br>
    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Letter Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{url('add_letter_category')}}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Letter Category:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                            <select type="text" value="" id="" name="lettercat"style="width:100%;">
                                <option>---Select---</option>
                                <option>Client</option>
                            <option>Supplier</option>
                            <option>Staff</option>
                            <option>Office</option>
                            <option>Customers</option>
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1">
                    <a href="{{url('document_letter_category')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
                </div> -->
            </div>
            
            <div class="row">
                <div class="col-md-11">
                <label >Letter Types:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertype" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
       
                <div class="col-md-11">
                <label >Letter Type Name:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertypname" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
    </div>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
    </div>
</html>
  @endsection
      














   