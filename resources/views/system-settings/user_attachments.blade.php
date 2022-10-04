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
       .attachments
      {
        border: 2px solid rgb(13, 1, 56);
        margin: 20px;
        padding: 20px;

      }
   
 
</style>
</head>
<body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Attachments</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
    <form> 
      <div class="attachments">
    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Documents to Upload</h3><br>
    <i class="fa-solid fa-download"style="margin-left:50%;"></i>
    <p style="text-align:center;"> Select a file or drop it here</p>



    <!-- <button><input type="file" class="form-control" name="name" id="customFile" style="height:100px;width:100px;" >Select a File</button> -->
    <input type="file"value="Select a File" name="submit"style="background-color:rgb(13, 1, 56);color: white; margin-left:38%;"> 
      </div>
      </form>
   </body>
</html>
@endsection