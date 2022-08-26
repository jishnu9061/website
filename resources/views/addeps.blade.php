@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('depsregistered'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('depsregistered')}}
   </div>
                          
@endif
  

    <h2>Add deps</h2>
   
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('addit')}}">
	      @csrf
        <div class="mb-3">
          <label for="username">deps Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="name" id="username" placeholder="deps Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
        </div>


       

        
        

        <!--
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" name="country" id="country" required>
              <option value="">Choose...</option>
              <option value="india">India</option>
              <option value="other">other</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" name="state" id="state" required>
              <option value="">Choose...</option>
              <option value="kerala">Kerala</option>
              <option value="tamilnadu">Tamilnadu</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

      -->
        <hr class="mb-4">
        
        <hr class="mb-4">

       

      
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add deps</button>
     
    </div>
  </div>
  </form>
</div>
{{ Session::forget('depsregistered')}}
@endsection