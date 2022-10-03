
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
    </form>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Hourly Rates</h2>
        <a href="{{('add_hourly_rates')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add User Hourly Rate</button></a>
        <hr class="mb-4">.
        
    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Hourly Rates</h3>
    <!-- <div class="container"> -->
    <div class="table-responsive"> 
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >*</th>
                        <th class="text-center">User / Staff</th>
                        <th class="text-center" >Currency</th>
                        <th class="text-center" >Amount</th>
                        <th class="text-center" >Edit</th>
                        <th class="text-center" ><input type="checkbox"></th>
                    </tr>
<thead>
    <tbody>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_hourly_rates')}}">Edit</a></td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>

    </tbody>
                    
                </table>
                <div class="class"style="text-align:right;">
                <label>Action:</label>
                <select style="width:20%;height:100%;color:white;font-size:small;background-color:rgb(13, 1, 56);"type="text" value="" name="type">
    <option>Delete entry</option>


</select>
<input type="button"value="Go" name="close"style="background-color:rgb(13, 1, 56);color: white; ">
    </div>
    <br>
    <br>
    </div>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">-->
</form> 
        </body>
</html>
  @endsection
      














   