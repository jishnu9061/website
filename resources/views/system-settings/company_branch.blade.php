@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
     body
        {
      
          /* font-family:  Arial, Helvetica, sans-serif; */
          margin-left:10px;
          margin-right:10px;
        }
        a.btn.btn-primary
        {
          background-color:rgb(29, 2, 129);
            color: rgb(238, 196, 105)
            margin-top:30px;
            margin-left:25px;
            border: 1px solid rgb(240, 205, 10);
            border-collapse: collapse;
    
        }
        /* h2
    {
  
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    padding:15px;
    
    } */
        p{
          margin-left:25px;
        }
        table {
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 95%;
            margin-left:25px;
     
            
        }
        td, th {
            border: 1px solid rgb(240, 205, 10);
            text-align: left;
            padding: 8px;
         }
        th{
             background-color:rgb(177, 127, 62);
             color:rgb(13, 1, 56);
         }
         td{
            color:rgb(13, 1, 56);
         }

        
       
</style>
    </head>
    <body>
  
        <!-- <h2 >Company Branch</h2> -->
        <h2 style="text-align:center; text-shadow: 2px 1px;">Company Branch</h2>
        <a href="{{('add_company_branch')}}"><button class="btn btn-primary add-btn">Add Branch </button></a>
  <hr class="mb-4">.

    <!-- <a href="{{url('add_company_branch')}}"  class="btn btn-primary"style="color:rgb(238, 196, 105);background-color:rgb(29, 2, 129);" >Add Branch</a><br><br> -->
    <p>Total Result: 2</p>
    <table>
   
  <tr>
    <th>Sl No</th>
    <th>Branch No</th>
    <th>Branch Code</th>
    <th>Branch Name</th>
    <th>Status</th>
    <th>Action</th>
  
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="color:green;font-weight:bold;"></td>
    <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_company_branch')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
   
    </tr>

  
  
</table><br><br>


</body>
    </html>
    @endsection