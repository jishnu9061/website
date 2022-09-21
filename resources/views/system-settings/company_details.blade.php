@extends('layouts.hmsmain')
@section('content')
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

      <title>Company Details</title>
      <!-- <link rel="stylesheet" href="assets/css/cstyle.css">  -->
      <style>
/*       
          body
        {
          background-color: #f0e7ce;
        } */
      /* h2
      {
        font-size:large;
        font-weight:bold;
        color:rgb(13, 1, 56);
        background-color:rgb(177, 127, 62);
        padding:15px;
      } */
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

<h2 class="text-center" style="color: #070344; text-shadow: 1px 2px;"><b>Company Details</b></h2>
<a href="{{('add_company_details')}}"><button class="btn btn-primary add-btn">Add Company </button></a>
  <hr class="mb-4">.
  <table>
   
  <tr>
    <th>Sl No</th>
    <th>Company Name</th>
    <th>Company Address</th>
    <th>Town/City</th>
    <th>Logo</th>
    <th>Action</th>
  
  </tr>
  <tr>
    <td>1</td>
    <td>CRA</td>
    <td>Stima Investment Plaza,3rd floor,Mushembi Rd,Parklands</td>
    <td>Nairobi,Keniya</td>
    <td style="color:green;font-weight:bold;"><img src=”https://www.pexels.com/photo/high-rise-buildings-443383/” ></td>
    <!-- <td><a href="{{url('edit_company_details')}}"style="color:blue;">Edit</a> -->
    <td  scope="row"class="text-center"><a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i>
                           <input type="hidden" value="" id="medicine_id_hidden" class="applicate" name="supplier_id_hidden">
                            <a href="{{url('edit_company_details')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
</td>
    <!-- <td><input type="checkbox"></td> -->
    </tr>

  
  
</table><br><br>

  <!-- <a href="{{url('edit_company_details')}}"  class="btn btn-primary"style="color:rgb(238, 196, 105);background-color:rgb(29, 2, 129);" >Edit</a><br><br> -->
   
</body>
</html>
@endsection