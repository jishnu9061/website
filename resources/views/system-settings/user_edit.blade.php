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
    outline: 1px solid  gray;
}
 tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}            </style>
   </head>
   <body>
   
    <h2 style="text-align:center; text-shadow: 2px 1px;">Edit User Details </h2>
    <hr class="mb-4">.

    


    <div class="container-fluid">
        <div class="row sm">
            <div class="col-sm-4 " >
                <label>User Code:</label>
                 <input type="text" id="code" name="code" value=""size="40">
                </div><br><br>
                <div class="col-sm-4 " > 
                    <label>Name:</label> 
                    <input type="text" id="code" name="code" value=""size="40">
                </div>
            </div>
        </div>


    




    </body>
</html>

  @endsection
      