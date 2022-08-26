@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('adminregistered'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('adminregistered')}}
   </div>

@endif

    <h2>Add admins</h2>

  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">

     <form method="post" action="{{url('addadmins')}}">
	      @csrf
        <div class="mb-3">
            <input type="hidden" name="uniqueid" value="{{uniqid()}}">
          <label for="username">Admins Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" name="name" id="username" placeholder="admins Name" required>
            <div class="invalid-feedback" style="width: 100%;">
              Name is required.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="username">Admins Email</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
            <input type="email" class="form-control" name="email" id="username" placeholder="admins Email" required>
            <div class="invalid-feedback" style="width: 100%;">
              Email is required.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="username">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
            <input type="password" class="form-control" name="password" id="username" placeholder="admins Password" required>
            <div class="invalid-feedback" style="width: 100%;">
              Password is required.
            </div>
          </div>
        </div>





<div class="row">






            <div class="form-group col-md-3">

         <select class="custom-select my-1 mr-sm-2 btn btn-secondary dropdown-toggle me-2" name="hospitalname" id="inlineFormCustomSelectPref">
    <option selected>Hospitals</option>
     @foreach($hospitals as $hospital)
    <option  class="dropdown-item" value="{{$hospital->name}}">{{$hospital->name}}</option>

      @endforeach
         </select>

          </div>
           <div class="col-md-4">

      </div>

     </div>


                               {{ Session::forget('adminregistered')}}


        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Add admins</button>

    </div>
  </div>
  </form>
</div>
@endsection
