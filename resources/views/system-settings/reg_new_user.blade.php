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
        .container{
            padding-top:20px;
            margin-top: 50px;
            
        } 
        label
      {
       
        font-size:medium;
        width:200px;
        display:inline-block;
        /* font-family: monospace; */
      
        }
        input
        {
          width: 400px;
          height:30px;

        }
        a.button1{
          margin-left:50px;
  display : inline-block;
  padding:0.35em 1.2em;
  background-color:rgb(13, 1, 56); 
  margin:0 0.3em 0.3em 0;
  border-radius:0.12em;
  box-sizing: border-box;
  text-decoration:none;
  font-weight:300;
  color:rgb(240, 205, 10);
  text-align:center;
  transition: all 0.2s;
 
  }
 

  a.button2{
    margin-left:50px;
    display : inline-block;
    padding:0.35em 1.2em;
    background-color:#f0e7ce; 
    margin:0 0.3em 0.3em 0;
    border-radius:0.12em;
    border-color: rgb(13, 1, 56); 
    box-sizing: border-box;
    text-decoration:none;
    font-weight:300;
    color:rgb(13, 1, 56);
    text-align:center;
    transition: all 0.2s;
    outline: auto;
  }
 
</style>
</head>
<body>
    <!-- <h2>Add Company Details</h2> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">New User Registration</h2>
    <hr class="mb-4">.
    
  <form > 
  
  	<!-- <div class="container">
    <form class="form-horizontal" action="/action_page.php"> -->

    <!-- <a href="#" class="btn btn-primary" style="margin-left:50px;background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); font-weight: bold;width: 90%;">Add Company</a><br><br> -->


   
  <div class = "container">
  <div class="form-group">
   <label style="color:rgb(13, 1, 56);"> User Code:</label>
  <input type="text" id="name" name="name" value=""size="50"> <br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">First Name:</label>
  <input type="text" id="address" name="address" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Last Name:</label>
  <input type="text" id="city" name="city" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Initials:</label>
  <input type="text" id="website" name="website" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">User Name:</label>
  <input type="text" id="email" name="email" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Password:</label>
  <input type="password" id="pin" name="pin" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Re-type Password:</label>
  <input type="password" id="pin" name="pin" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Postal Address:</label>
  <input type="text" id="vatno" name="vatno" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Town/City:</label>
  <input type="text" id="ncode" name="ncode" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Telephone No:</label>
  <input type="number" id="nnum" name="nnum" value=""size="50"><br><br>
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Mobile No:</label>
  <input type="number" id="nnum" name="nnum" value=""size="50"><br><br> 
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">E mail Address:</label>
  <input type="email" id="nnum" name="nnum" value=""size="50"><br><br> 
  </div>
  <div class="form-group">
  <label style="color:rgb(13, 1, 56);">Department:</label>
  
  <select style="width:400px;height: 30px;color:black"type="text" value="" name="type">
     <option>---Select---  </option>
     <option>Administration</option>
     <option>Business & Commercial Law Services</option>
     <option>Clerical & Related Works</option>
     <option>Family Law Sevices</option>
     <option>Finance Department</option>
     <option>HRM & Admin</option>
     <option>Human Resources</option>
     <option>ICT & Data Management</option>
     <option>Immigration Law Sevices</option>
     <option>Intellectual Property Law Services</option>
     <option>Litigation</option>
     <option>Marketing & Business Development</option>
     <option>Propery & Conveyancing Law Services</option>
 </select><br><br>
 </div>
 <div class="form-group">
 <label style="color:rgb(13, 1, 56);">Signature to Upload:</label>
 <input type="file"  id="customFile" size="50"><br><br>
 </div>
 <div class="form-group">
  <label style="color:rgb(13, 1, 56);">User Group:</label>
  
  <select style="width:400px;height: 30px;color:black"type="text" value="" name="type">
     <option>  </option>
     <option>Administrator</option>
     <option>Partner</option>
     <option>Advocate</option>
     <option>Accountant</option>
     <option>Director Business Development & Marketing</option>
     <option>HRM & ADMIN Assistant</option>
     <option>Secretary</option>
     <option>Pupil</option>
     <option>Intern</option>
     <option>Clerk</option>
     <option>Legal Assistant</option>
     <option>Senior Associate</option>
     <option>Associate Advocate</option>
     <option>Receptionist</option>
     <option>Support</option>
     <option>Personal Assistant</option>
     <option>ICT & Data Management</option>
     <option>Office Admin</option>
 </select><br><br>
 </div>
 <div class="form-group">
 <label style="color:rgb(13, 1, 56);">User Role:</label>
  <input type="text" id="nnum" name="nnum" value=""size="50"><br><br>
  </div>
 
  <input  type="submit"value="Save" name="Submit"style="background-color:rgb(13, 1, 56);color: white ">
  
  <input type="button"value="Cancel" name="cancel"style="background-color:rgb(13, 1, 56);color: white ">

 

    </div>
</form>
<!-- </div> -->
<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
   </body>
</html>
@endsection