@extends('layouts.hmsmain')
@section('content')



<div class="container">
    <h4 id="hdtpa"><b>Edit Vendor Details</b></h4>
    <br>
    

       <div class="text-center">
      <table class="table">
  
  <tbody>
    <tr>
      <td scope="row">Vendor Name</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bin"></td>
 
    </tr>
    <tr>
      <td scope="row">Email ID</td>
      <td><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="bin@gmail.com"></td>
    
    </tr>
    <tr>
      <td scope="row">Phone Number</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1234567891"></td>
      
    </tr>
    <tr>
      <td scope="row">Fax</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="102"></td>
    
    </tr>
    <tr>
      <td scope="row">Address</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="abcdefgh"></td>
    
    </tr>
    <tr>
      <td scope="row">City</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="abcde"></td>
    
    </tr>
    <tr>
      <td scope="row">State</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="fghij"></td>
    
    </tr>
    <tr>
      <td scope="row">Pincode</td>
      <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="123 456"></td>
    
    </tr>
  
  </tbody>
</table>
<br>
            <button type="button" class="btn btn-primary">Update</button>
               <span class="m-2"></span>
            <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>

</div>
<br>












@endsection