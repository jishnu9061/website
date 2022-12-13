@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Criminal Law</b></h4>
               <br>

<form action="">
      <div class="row">
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="OH-Felony-ER">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant</label>
                    <input type="text" class="form-control" placeholder="Larry James">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Felony">
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prosecutor</label>
                    <textarea class="form-control" rows="2" placeholder="Cuyahoga Prosecutor's office"></textarea>
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2" placeholder="Cuyahoga Criminal 2015-F-123456"></textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Investigator Details</label>
                    <textarea class="form-control" rows="2" placeholder="Chris Investigator"></textarea>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Victim Details</label>
                    <textarea class="form-control" rows="2" placeholder="John"></textarea>
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