@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
      <meta charset="UTF-8">
      <title>Company Details</title>
      <link rel="stylesheet" href="{{asset('/') }}assets/css/cstyle.css">
</head>
<body>
  	
<button type="button" class="btn btn-primary" style="background-color:rgb(13, 1, 56);Width: 73%;">Add company</button><br><br>

<div class = "company">
    <div>
<a href="#"  class="btn btn-primary" style="margin-bottom:25px;float:right;margin-right:40px;">ADD LOGO</a>

</div> 


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
  <!-- <input type="text" id="type" name="type" value=""size="50"><br><br> -->
  <select style="width:372px;height: 25px;">
    <option>   select        </option>
    <option>Partnership</option>
    <option>Sole partership</option>
    <option>LLP</option>
    <option>LTD</option>
    <option>LLC</option>
    <option>Others</option>
</select><br><br>
  <label>PIN No</label>
  <input type="text" id="pin" name="pin" value=""size="50"><br><br>
  <label>VAT No</label>
  <input type="text" id="vatno" name="vatno" value=""size="50"><br><br>
  <label>NHIF Code</label>
  <input type="text" id="ncode" name="ncode" value=""size="50"><br><br>
  <label>NSSF Number</label>
  <input type="text" id="nnum" name="nnum" value=""size="50"><br><br>


<!-- <button class="btn1">Save</button>
<button class="btn2">Cancel</button>  -->

<a href="something" class="button1">Save</a>
<a href="something" class="button2">Cancel</a>


<!-- <a href="something" class="button3">add</a> -->
<!-- <button class="button3 btn btn-secondary"><a href="something">Add</a></button> -->


      </div>
   </body>
</html>
@endsection