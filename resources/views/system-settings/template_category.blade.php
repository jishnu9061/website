
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
      
      <style>
      th, td ,tr
      {
        border: 1px solid  gray ;
        border-collapse: collapse;
    }
    th
    {
        color:white;
    }
    table
    {
         outline: 1px solid  gray ;
        }

/* tr:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        } */
      
</style>
   </head>
   <body>

    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Template Category</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
        <a href="{{('add_template_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Template Category</button></a><br><br>

    <!-- <div class="container"> -->
      <div class="responsive">
      <table class="table table-bordered" id="new-item">
        <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Template Category</th>
                        <th class="text-center" >Category Type</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center" >  <input type="checkbox" ></th>
                    </tr>
     </thead>
     <tbody>
     @foreach($template_category as $category)
      <tr>
                        <td>  {{$category->id}}</td>
                        <td>{{$category->Template_Category}}</td>
                        <td>{{$category->Category_Type}}</td>
                        <td></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_template_category',$category->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_template_category',$category->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                      
                        @endforeach
                    </tr>
</tbody>
                   
 </table>
               
    <br>
    <br>
    <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
    <option></option>
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Template Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_template_category') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf

<div class="row">
       

        <div class="col-md-6">
            <div class="mb-1">
                <label>Template Category:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <select type="text" value="" id="" name="temcategory"style="width:100%;">
                  
                    <option>---Select---</option>
                    <option>Business Formation</option>
                    <option>Business Operations</option>
                    <option>Business Property</option>
                    <option>Employment</option>
                    <option>Financial</option>
                    <option>Personal & Family</option>
                    <option>Real Estate</option>
                    <option>Will & Estate Planning</option>
                </select>
                    <!-- <div class="col-md-1">
        <a href="{{url('document_template_category')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
    </div> -->
                   
                    <div class="invalid-feedback" style="width: 100%;">
                        Required Field.
                    </div>
                </div>
            </div>
         </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Category Type:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="cattype" id="" value="">
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
</div>
</div>
</div>
</form>
</div>
</div>
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
      














   