@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Estate Planning</b></h4>
               <br>

<form action="">

     <div class="row">
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <input type="text" class="form-control" placeholder="72G6585K	">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <input type="text" class="form-control" placeholder="John">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Estate Planning">
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <textarea class="form-control" rows="2" placeholder="Executor: George"></textarea>
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trust</label>
                    <textarea class="form-control" rows="2" placeholder="John"></textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <textarea class="form-control" rows="2" placeholder="4456 Kenya"></textarea>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                    <textarea class="form-control" rows="2" placeholder="Chris"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                    <textarea class="form-control" rows="2" placeholder="Smith Investments"></textarea>
                        </div>
    </div>
    <div class="col">
       
    </div>


 </form>  
 </div>  
    
   
      <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



@endsection