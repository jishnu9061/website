
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
      <div class="mydiv">
      <table class="table table-bordered" id="new-item">
        <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Template Category</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center" >  <input type="checkbox" ></th>
                    </tr>
     </thead>
     <tbody>
        <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Formation:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                   

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Operations:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                  
                   

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Property:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                   

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Employment:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                   
                    

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Financial:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                         <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
               
                    
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Personal & Family:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                 

                    
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Real Estate:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Will & Estate Planning:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
    </tbody>
                   
                  
                  
                    
                   
                </table>
               
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
      














   