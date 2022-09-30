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

      <title></title>
      <!-- <link rel="stylesheet" href="assets/css/cstyle.css">  -->
      <style>
       
        label
      {
       
        font-size:medium;
        width:200px;
        display:inline-block;
        color: rgb(13, 1, 56); 
        margin-left:50px;
     
        }
        input
        {
          width: 450px;
          height:30px;
          color:black;

        }
   
 
</style>
</head>
<body>
    <!-- <h2>Add Company Details</h2> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">New User Registration</h2>
    <hr class="mb-4">.
    
  <form > 
  
  	
   </body>
</html>
@endsection