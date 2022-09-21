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
        /* body
        {
          background-color: #f0e7ce;
         } */
        label
      {
       
        font-size:medium;
        width:200px;
        display:inline-block;
        color: rgb(13, 1, 56); 
        margin-left:50px;
        font-family:"Nunito";
        }
        input
        {
          width: 450px;
          height:30px;
          color:black;

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
  /* h2
    {
    
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    padding:15px;
    } */
  /* form{
    background-color: #f0e7ce;
    padding-left:1px;
    margin-bottom:30px;

  } */
        
</style>
</head>
<body>
<!-- <h2>Edit Company Details</h2> -->
<h2 style="text-align:center; text-shadow: 2px 1px;">Edit Company Details</h2>
    <hr class="mb-4">.
  <form >
  
  	<!-- <div class="container">
    <form class="form-horizontal" action="/action_page.php"> -->
<a href="#"  class="btn btn-seconday" style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105);margin-bottom:25px;float:right;margin-right:100px;">ADD LOGO</a><br><br><br>
  
<div class = "company">
   <label> Company Name </label>
  <input type="text" id="name" name="name" value=""size="50"> <br><br>
  <label>Company Address</label>
  <input type="text" id="address" name="address" value=""size="50">
  <br><br>
  <label>Town/City</label>
  <input type="text" id="city" name="city" value=""size="50"><br><br>
  <label>Company Website</label>
  <input type="text" id="website" name="website" value=""size="50"><br><br>
  <label>Company Email</label>
  <input type="text" id="email" name="email" value=""size="50"><br><br>
  <label>Company Type</label>
  
 <select style="width:450px;height: 30px;color:black"type="text" value="" name="type">
    <option>   select        </option>
    <option>Partnership</option>
    <option>Sole partership</option>
    <option>LLP</option>
    <option>LTD</option>
    <option>LLC</option>
    <option>Others</option>
</select><br><br>
  <label>PIN No</label>
  <input type="number" id="pin" name="pin" value=""size="50"><br><br>
  <label>VAT No</label>
  <input type="number" id="vatno" name="vatno" value=""size="50"><br><br>
  <label>NHIF Code</label>
  <input type="text" id="ncode" name="ncode" value=""size="50"><br><br>
  <label>NSSF Number</label>
  <input type="number" id="nnum" name="nnum" value=""size="50"><br><br> <br>

  <input  type="submit"value="Save" name="Submit"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">
  
  <input type="button"value="Cancel" name="cancel"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">
<!-- <a href="something" class="button1"style="margin-left:50px;">Save</a>
<a href="something" class="button2">Cancel</a><br><br> -->

    </div>
</form>
<!-- </div> -->

   </body>
</html>
@endsection