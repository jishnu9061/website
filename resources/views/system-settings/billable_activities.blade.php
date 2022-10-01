
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
   <style>

          body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}

 /* tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}   */
          </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Billable Activities </h2>
    <a href="{{('add_billable_activities')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Activity</button></a>
    <hr class="mb-4">.


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List Of Billable / Non Billable Activities</h3>
    <div class="table-responsive">    
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Type</th>
                        <th class="text-center" >Code</th>
                        <th class="text-center" >Activity Name</th>
                        <th class="text-center" >Cost(Kshs)</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Edit</th>
                        
                        <th class="text-center"><input type="checkbox"></th>
                    </tr>
</thead>
             <tbody>
            
                    <tr>
                       
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_billable_activities')}}">Edit</a></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <!-- <td  class="text-center">
                            <select name="" id=""> <option value=""> <a href="">Action</a> </option> 
                           <option value=""> <a href="user_edit">Edit</a> </option>
                           <option value=""> <a href="user_view">View</a> </option>
                           <option value=""> <a href="user_attachment">Attachment</a> </option>
                           <option value=""> <a href="user_comments">Comments</a> </option>
                        </select>
                            </td> -->


                       

                     </tr>
                     </tbody>
               
                    </table><br>
</div>        
        </body>
</html>

  @endsection
      














   