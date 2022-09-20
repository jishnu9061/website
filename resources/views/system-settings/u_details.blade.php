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
      
          body
        {
          background-color: #f0e7ce;
        }
      h2
      {
        font-size:large;
        font-weight:bold;
        color:rgb(13, 1, 56);
        background-color: #D5BD94;
        padding:15px;
      }
      table {
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 95%;
            margin-left:25px;
     
            
        }
        td, th {
            border: 1px solid rgb(255, 255, 255);
            text-align: left;
            padding: 8px;
         }
        th{
             background-color: #D5BD94; 
         }
         td{
            color:rgb(13, 1, 56);
         }


         
      </style>






        
   
<div class="py-5 text-center">
                    <h2>Add New User</h2>
    <hr class="mb-4">
</div>
<h6>User Details</h6>
<hr class="mb-4">
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="http://localhost/CRA/public/addthestaffs" id="form">
              <input type="hidden" name="_token" value="ddpMUOg3SUr8CszFAIwbkc9qzJ5kC1beAhSW3XhM">                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="name" id="username" placeholder="Name" required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Name is required.
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">User Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                            <input type="email" class="form-control" name="email" id="username" placeholder="Email" required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Email is required.
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Staff Phone number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                                <input type="number" class="form-control" name="phoneno" id="username" placeholder="Phone no" required min="0" max="9999999999">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Phone No: is required.
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Age</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <input type="number" class="form-control" name="age" id="age" placeholder="Age" min="0" max="99">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Age is required.
                                                        </div>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-1">
                                            <label for="username">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="staff Password" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Passeord is required.
                                                            </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-1">
                                                <label for="username">Confirm Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                            <input type="password" class="form-control" name="password" id="confirm_password" placeholder="Confirm Password" required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                        Password is required.
                                                        </div>
                                                    </div>
                                            </div>
                                           <div id="test" style="height:20px;"></div>
                                        </div>
                                </div>
                                <label for="username">Address</label>
                                    <textarea class="form-control" name="address"></textarea>
                                        <div id="test" style="height:20px;"></div>
                                        <div class="row">
                                        
                                            
                                               
</body>

</body>
</html>
@endsection