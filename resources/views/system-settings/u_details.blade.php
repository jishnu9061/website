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





<body>
  {{-- <div class="container">
    <h2>Dropdowns</h2>
    <p>The .dropdown class is used to indicate a dropdown menu.</p>
    <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
    <p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".</p>                                          
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>
  </div> --}}

  <ul class='nav'>
    <li class='active'>Home</li>
    <li class='dropdown'>
      <a class="dropdown-toggle" data-toggle="dropdown" href='#'>Personal asset loans</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">asds</a></li>
        <li class="divider"></li>
      </ul>
    </li>
    <li>Payday loans</li>
    <li>About</li>
    <li>Contact</li>
  </ul>

  <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
        
   
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
                                    <label for="username">Phone number</label>
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
                                        <label for="username">User Code</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div>
                                                    <input type="number" class="form-control" name="Code" id="age" placeholder="Enter Your User Code" min="0" max="99">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            User Code is required.
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



                                        <div class="col-md-4">
                                          <div class="mb-1">
                                              <label for="username">Department</label>
                                                  <div class="input-group">
                                                      <div class="input-group-prepend"></div>




                                                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>


 


    

                                                          {{-- <input type="password" class="form-control" name="Department" id="confirm_password" placeholder="Enter Department" required> --}}
                                                      <div class="invalid-feedback" style="width: 100%;">
                                                        Department
                                                      </div>
                                                  </div>
                                          </div>
                                         <div id="test" style="height:20px;"></div>
                                      </div>
                              
        
        
                                        <div class="col-md-4">
                                          <div class="mb-1">
                                              <label for="username">Postal Code</label>
                                                  <div class="input-group">
                                                      <div class="input-group-prepend"></div>
                                                          <input type="password" class="form-control" name="Post" id="confirm_password" placeholder="Enter Postal Code" required>
                                                      <div class="invalid-feedback" style="width: 100%;">
                                                      Postal Code.
                                                      </div>
                                                  </div>
                                          </div>
                                         <div id="test" style="height:20px;"></div>
                                        </div>
                              
        
        
                              <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="username">Town</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                                <input type="password" class="form-control" name="Town" id="confirm_password" placeholder="Enter Town" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                              Town
                                            </div>
                                        </div>
                                </div>
                               <div id="test" style="height:20px;"></div>
                            </div>
                   
        
                    <div class="col-md-4">
                      <div class="mb-1">
                          <label for="username">User Group</label>
                              <div class="input-group">
                                  <div class="input-group-prepend"></div>
                                      <input type="password" class="form-control" name="group" id="confirm_password" placeholder="User Group" required>
                                  <div class="invalid-feedback" style="width: 100%;">
                                    User Group
                                  </div>
                              </div>
                      </div>
                     <div id="test" style="height:20px;"></div>
                  </div>


                  <div class="btn-group pt-3 " role="group" aria-label="Basic example" >
      
                    <button type="submit" class="btn  submit_btn">Add</button>
                    <button type="button" class="btn btn-primary submit_btn">Cancel</button>
                    
                  </div>

          </div>


                                </div></div>


                                
                                




{{--                                 
                                <label for="username">Address</label>
                                    <textarea class="form-control" name="address"></textarea>
                                        <div id="test" style="height:20px;"></div>
                                        <div class="row"> --}}
                                        
                                            
                                               


</body>
</html>
@endsection