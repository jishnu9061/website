@extends('layouts.hmsmain')
@section('content')


<div class="container">
<h4 id="hdtpa"><b>Edit Purchase Order</b></h4>
<br>



<div class="text-center">
      <table class="table">
  <thead>
    <tr>
      <th colspan="2">Purchase Details</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Purchase Date</td>
      <td><input class="form-control" type="text" placeholder="25-11-2022"  aria-label="Disabled input example" ></td>
 
    </tr>
    <tr>
      <td scope="row">Purchase Number</td>
      <td><input class="form-control" type="email" placeholder="C12D56G89" aria-label="Disabled input example" ></td>
    
    </tr>
    <tr>
      <td scope="row">Payment Type</td>
      <td><input class="form-control" type="text" placeholder="Bank Transfer" aria-label="Disabled input example" ></td>
      
    </tr>
    <tr>
      <td scope="row">Suppier</td>
      <td><input class="form-control" type="text" placeholder="Supplier1" aria-label="Disabled input example" ></td>
    
    </tr>
    <tr>
      <td scope="row">Status</td>
      <td><input class="form-control" type="text" placeholder="Order-Placed" aria-label="Disabled input example" ></td>
    
    </tr>
    
  
  </tbody>
</table>



<br>

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item No</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input class="form-control" type="text" value="Paper" aria-label="Disabled input example"  ></td>
      <td><input class="form-control" type="text" value="C15P125" aria-label="Disabled input example" ></td>
      <td><input class="form-control" type="text" value="40" aria-label="Disabled input example" ></td>
      <td><input class="form-control" type="text" value="200" aria-label="Disabled input example" ></td>
      <td><input class="form-control" type="text" value="200" aria-label="Disabled input example" ></td>
    </tr>
   
    <tr>  
            <td colspan="3"></td>
            <td><input type="text"  placeholder="Grand Total" class="form-control" ></td>
            <td><input type="text"  placeholder="200" class="form-control" ></td>
          </tr>
        
          <tr>
           
           
            <td colspan="3"></td>
            <td><input type="text"  placeholder="Advance Amount" class="form-control" ></td>
            <td><input type="text"  placeholder="50" class="form-control" ></td>
          </tr>
        
          <tr>
           
            
            <td colspan="3"></td>
            <td><input type="text"  placeholder="Payment Amount" class="form-control" ></td>
            <td><input type="text"  placeholder="150" class="form-control" ></td>
          </tr>
  </tbody>
</table>

<br>
            <button type="button" class="btn btn-primary">Update</button>
               <span class="m-2"></span>
            <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>




</div>





@endsection