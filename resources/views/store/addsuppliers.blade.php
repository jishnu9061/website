@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('depsregistered'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('depsregistered')}}
   </div>
                          
@endif
  

    <h2>Add Suppliers</h2>
   
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('suppliers_save')}}">
	      @csrf
        <div class="row">
          <div class="col-md-4"> 
           <div class="mb-1">
          <label for="username">Supplier Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
              <input type="text" class="form-control" name="name" id="username" placeholder="Supplier Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Supplier Name is required.
            </div>
          </div>
        </div>
          </div>
          <div class="mb-1">
          <label for="username">Medicine Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
              <input type="text" class="form-control" name="med_name" id="username" placeholder="Medicine Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Medicine Name is required.
            </div>
          </div>
        </div>
          </div>
        
          <div class="col-md-4"> 
            <div class="mb-1">
          <label for="username">Address</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
             <input type="text" class="form-control" name="address" id="username" placeholder="Address" required>
            <div class="invalid-feedback" style="width: 100%;">
              Address is required.
            </div>
          </div>
        </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6"> 
           <div class="mb-1">
          <label for="username">Phone</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
              <input type="number" class="form-control" name="phone" id="username" placeholder="mobile" required>
            <div class="invalid-feedback" style="width: 100%;">
              Phone No is required.
            </div>
          </div>
        </div>
          </div>
        
          <div class="col-md-6"> 
            <div class="mb-1">
          <label for="username">Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
             <input type="email" class="form-control" name="email" id="username" placeholder="Email" required>
            <div class="invalid-feedback" style="width: 100%;">
             Email Id is required.
            </div>
          </div>
        </div>
          </div>

        </div>
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add Suppliers</button>
     
    </div>
  </div>
  </form>
</div>
@endsection