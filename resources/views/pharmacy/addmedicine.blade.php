@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('medicineadded'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('medicineadded')}}
   </div>
                          
@endif
  

    <h2>Add Medicines</h2>
     <hr class="mb-4">
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('addmedicinez')}}">
	     @csrf
       

<div class="row">
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
         
          <input type="text" class="form-control" name="medicinename" id="email" placeholder="Medicine Name">
          <div class="invalid-feedback">
            Please enter a Medicine Name
          </div>
        </div>
  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
         
          <input type="number" class="form-control" name="quantity" id="email" placeholder="Quantity">
          <div class="invalid-feedback">
            Enter quantity.
          </div>
        </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6">
    <label>
      Expiry Date
    </label>
  </div>
  <div class="col-md-6 col-lg-6">
     <div class="mb-3">
         
          <input type="date" class="form-control" name="expirydate" id="email" placeholder="Expirydate">
          <div class="invalid-feedback">
            Enter expirydate.
          </div>
        </div>
  </div>
</div> 
<div class="row">
  <div class="col-md-6 col-lg-6">
         <div class="mb-3">
          <input type="number" class="form-control" name="price" id="email" placeholder="Price">
          <div class="invalid-feedback">
            Please enter a Medicine price
          </div>
        </div>
  </div>
  <div class="col-md-6 col-lg-6">
     <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add Medicine</button>
  </div>
</div>  
        <hr class="mb-4">

        
     
    </div>
  </div>
  </form>
   {{ Session::forget('medicineadded')}}
</div>
@endsection