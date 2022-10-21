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
   
    </head>
    <body>
 <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Change User Password</u></b></span></button><br>
          
     </div>
            <br>
            <br>
    <p style="color:red;text-align:center;"> Password must be atleast 8 character long, Contain atleast 1 capital letter,<br> atleast 1 numeric character and atleast 1 special character</p>

    <form method="post" action="" id="form">  
       @csrf
       <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >User's Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="name"style="width:100%;">
                                <option>Princess Caroline(caroline)</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Old Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >New Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
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
                            <div class="class"style="text-align:center;">
                    <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Submit</button>
</div > 
                           
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