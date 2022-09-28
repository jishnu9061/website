
@extends('layouts.hmsmain')
@section('content')
<html>
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
    <h2 style="text-align:center; text-shadow: 2px 1px;">Court List</h2>
        <a href="{{('add_court')}}"><button class="btn btn-primary add-btn">Add Court</button></a>
        <a href="{{('add_court_category')}}"><button class="btn btn-primary add-btn">Add New Court Category</button></a>
  <hr class="mb-4">.
  
    <!-- <div class="container"> -->
      <div class="mydiv">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Court Name</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center"><input type="radio"></th>
                    </tr>
    </thead>
    <tbody>
                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Supreme Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></td>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Court Of Appeal :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                 

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">High Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                   
                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Industrial Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    
                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Magistrate Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                   

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Labours Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                   
                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">East Africa Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"></th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                   

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
</html>
  @endsection
      














   