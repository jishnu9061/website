@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('hospitalregistered'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('hospitalregistered')}}
   </div>
                          
@endif
  

    <h2>Add hospital</h2>
      <hr class="mb-4">
   
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('addhospital')}}">
	      @csrf
        <div class="mb-3">
          <label for="username">Hospital Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="name" id="username" placeholder="Hospital Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
        </div>


       

        <div class="mb-3">
          <label for="email">Location <span class="text-muted"></span></label>
          <input type="text" class="form-control" name="location" id="email" placeholder="Location">
          <div class="invalid-feedback">
            Please enter a valid phone no.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Category</label>
          <input type="textarea" class="form-control" name="category" id="address" placeholder="Category" required>
          <div class="invalid-feedback">
            Please enter  category.
          </div>
        </div>
              
{{ Session::forget('hospitalregistered')}}
      
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add hospital</button>
     
    </div>
  </div>
  </form>
</div>
@endsection