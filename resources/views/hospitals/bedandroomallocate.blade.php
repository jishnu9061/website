@extends('layouts.hmsmain')
@section('content')
<div class="container">
  <div class="py-5 text-center">
 @if(Session::has('bednrooms'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('bednrooms')}}
   </div>
                          
@endif
  

    <h2>Allocate beds and rooms</h2>
   
  </div>

  <div class="row">

    <div class="col-md-12 order-md-1">
    
     <form method="post" action="{{url('allocatebedsnrooms')}}">
	      @csrf
      
          <div class="row">
          <div class="col-md-6"> 
           <div class="mb-1">
          <label for="username">Rooms</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="rooms" id="username" placeholder="How many rooms you have" >
            <div class="invalid-feedback" style="width: 100%;">
              Rooms is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-6"> 
        		<div class="mb-1">
          <label for="username">Room charge</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="roomcharge" id="username" placeholder="Room charge per day" required>
            <div class="invalid-feedback" style="width: 100%;">
              Room charge is required.
            </div>
          </div>
        </div>
        	</div>
        	

        </div>
          <div class="row">
          <div class="col-md-6"> 
           <div class="mb-1">
          <label for="username">A/c Rooms</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="acrooms" id="username" placeholder="How many A/c rooms you have">
            <div class="invalid-feedback" style="width: 100%;">
              Group no is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-6"> 
        		<div class="mb-1">
          <label for="username">Room charge</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="acroomcharge" id="username" placeholder="Room charge per day">
            <div class="invalid-feedback" style="width: 100%;">
              Room charge is required.
            </div>
          </div>
        </div>
        	</div>
        	

        </div>
          <div class="row">
          <div class="col-md-6"> 
           <div class="mb-1">
          <label for="username">Rooms</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="categoryrooms" id="username" placeholder="How many other category rooms you have">
            <div class="invalid-feedback" style="width: 100%;">
              Group no is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-6"> 
        		<div class="mb-1">
          <label for="username">Room charge</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="categoryroomcharge" id="username" placeholder="Room charge per day">
            <div class="invalid-feedback" style="width: 100%;">
              Room charge is required.
            </div>
          </div>
        </div>
        	</div>
        	

        </div>
          <div class="row">
          <div class="col-md-6"> 
           <div class="mb-1">
          <label for="username">Ward beds</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="wardbeds" id="username" placeholder="How many Ward beds you have">
            <div class="invalid-feedback" style="width: 100%;">
              Group no is required.
            </div>
          </div>
        </div>
        	</div>
        
        	<div class="col-md-6"> 
        		<div class="mb-1">
          <label for="username">Bed charge</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" name="wardbedcharge" id="username" placeholder="Bed charge per day">
            <div class="invalid-feedback" style="width: 100%;">
              Room charge is required.
            </div>
          </div>
        </div>
        </div>
        </div>





          <div id="allocatebeds">
            @foreach($departments as $department)
          <div class="row" >
          <div class="col-md-4"> 
          <div class="mb-1">
          <h6> {{$department->depname}}</h6>
        </div>
          </div>
              <div class="col-md-4"> 
          <div class="mb-1">
          <label for="username">How many beds available</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="hidden" name="{{'d'.$department->id}}" value="{{$department->depname}}">
            <input type="number" class="form-control" name="{{'c'.$department->id}}" id="username" placeholder="beds available">
            <div class="invalid-feedback" style="width: 100%;">
              Count is required.
            </div>
          </div>
        </div>
          </div>
        
          <div class="col-md-4"> 
            <div class="mb-1">
          <label for="username">Bed charge</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="number" class="form-control" value="{{'b'.$department->id}}" name="{{'b'.$department->id}}" id="username" placeholder="Bed charge per day">
            <div class="invalid-feedback" style="width: 100%;">
              Bed charge is required.
            </div>
          </div>
        </div>
        </div>
        </div>
        @endforeach
        </div>





       <br>
         <hr class="mb-4">
        <div class="row">
        	<div class="col-md-6">
        		 <button type="submit" class="btn btn-primary btn-block" >Add Bed and rooms</button>
        	</div>
           </form>
        	<div class="col-md-6">
        		 <button class="btn btn-primarymain btn-block" id="wardbeds">Add departmentwise beds</button>
        	</div>
        </div>
        {{ Session::forget('bednrooms')}}    
     </div>
     </div>
  
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>

$(document).ready(function(){

    $("#allocatebeds").hide();
    $('#wardbeds').click(function() {
    $("#allocatebeds").show();
    });
});
</script>
@endsection