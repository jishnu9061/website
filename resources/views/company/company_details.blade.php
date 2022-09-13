@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <title>Company Details</title>
      <link rel="stylesheet" href="{{asset('/') }}assets/css/cstyle.css">
      <style>
        body
        {
          background-color: #f0e7ce;
        }
        label
      {
       
        font-size:large;
        width:200px;
        display:inline-block;
        font-family: monospace;
        color: rgb(13, 1, 56); 
        }
        input
        {
          width: 450px;
          height:30px;

        }
        
</style>
</head>
<body>
  <form>
  	<!-- <div class="container">
    <form class="form-horizontal" action="/action_page.php"> -->

    <a href="#" class="btn btn-primary" style="background-color:white;color:rgb(13, 1, 56);  font-weight: bold;Width: 73%;">Add company</a><br><br>

 <div class = "company">
   
<a href="#"  class="btn btn-primary" style="margin-bottom:25px;float:right;margin-right:335px;">ADD LOGO</a>

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
  
 <select style="width:450px;height: 30px;">
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
  <input type="number" id="nnum" name="nnum" value=""size="50"><br><br> 


<!-- <button class="btn1">Save</button>
<button class="btn2">Cancel</button>  -->

<a href="something" class="button1">Save</a>
<a href="something" class="button2">Cancel</a>


<!-- <a href="something" class="button3">add</a> -->
<!-- <button class="button3 btn btn-secondary"><a href="something">Add</a></button> -->


      </div>
</form>
<!-- </div> -->
   </body>
</html>
@endsection