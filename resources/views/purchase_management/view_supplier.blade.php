@extends('layouts.hmsmain')
@section('content')



<div class="container">
    <h4 id="hdtpa"><b>View Supplier Details</b></h4>
    <br>
    

       <div class="text-center">
      <table class="table">
  <thead>
    <tr>
      <th colspan="2">Supplier Details</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Supplier Name</td>
      <td><input class="form-control" type="text" placeholder="Bin"  aria-label="Disabled input example" disabled></td>
 
    </tr>
    <tr>
      <td scope="row">Email ID</td>
      <td><input class="form-control" type="email" placeholder="bin@gmail.com" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">Phone Number</td>
      <td><input class="form-control" type="text" placeholder="1234567891" aria-label="Disabled input example" disabled></td>
      
    </tr>
    <tr>
      <td scope="row">Fax</td>
      <td><input class="form-control" type="text" placeholder="102" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">Address</td>
      <td><input class="form-control" type="text" placeholder="abcdefgh" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">City</td>
      <td><input class="form-control" type="text" placeholder="abcde" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">State</td>
      <td><input class="form-control" type="text" placeholder="fghij" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">Pincode</td>
      <td><input class="form-control" type="text" placeholder="123 456" aria-label="Disabled input example" disabled></td>
    
    </tr>
    <tr>
      <td scope="row">Supplier Detials</td>
      <td><input class="form-control" type="text" placeholder="qwertyuioplkjhgfdsazxcvbnm" aria-label="Disabled input example" disabled></td>
    
    </tr>
  
  </tbody>
</table>
<br>
            <button type="button" class="btn btn-primary">Print</button>
               <span class="m-2"></span>
            <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>

</div>
<br>








@endsection