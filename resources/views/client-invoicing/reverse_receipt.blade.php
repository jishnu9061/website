@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
</head>

<body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Reverse Receipt</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br> <br>
 
            <form method="post" action="" id="form">  
       @csrf
       <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Receipt No:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="rolename"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
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
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Submit</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
    </form>


</body>
</div>
</html>
@endsection