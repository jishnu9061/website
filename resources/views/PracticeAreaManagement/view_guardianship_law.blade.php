@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Guardianship Law</b></h4>
               <br>


<form action="">
     <div class="row">
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="679VL-0618">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                    <input type="text" class="form-control" placeholder="Jessica Robinson">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Guardinship of a Disabled Person">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Disabled Person</label>
                    <input type="text" class="form-control" placeholder="Charles Newman">
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <textarea class="form-control" rows="2">Law Office of Greg Peters Attorney Greg Peters</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Disability Details</label>
                    <textarea class="form-control" rows="2">Dementia</textarea>
                        </div>  
    </div>
    </div>
    <div class="row">
    <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Brown 666-333</textarea>
                        </div>
    </div>
    <div class="col">
        <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian</label>
                    <input type="text" class="form-control" placeholder="Janet Newman">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <textarea class="form-control" rows="2">Law Office of Glenn Evans contact Glenn Evans</textarea>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian Details</label>
                    <textarea class="form-control" rows="2">Guardian of the Person Petition Field: 8/07/2018</textarea>
                        </div>
    </div>
    <div class="col">
        
             
    </div>
    <div class="col">
   
    </div>
  </div>

</form>
   
   
      <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



@endsection