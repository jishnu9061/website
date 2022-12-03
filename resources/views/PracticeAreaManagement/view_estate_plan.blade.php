@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Estate Planning</b></h4>
               <br>

<form action="">

     <div class="row">
        <div class="col-md-4">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" placeholder="72G6585K	">
           </div>
           </div>
           </div>
        <div class="col-md-4">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" placeholder="John">
           </div>
           </div>
        </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" placeholder="Estate Planning">
        </div>
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" placeholder="Executor: George"></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trust</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" placeholder="John"></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" placeholder="4456 Kenya"></textarea>
                        </div>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" placeholder="Chris"></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" placeholder="Smith Investments"></textarea>
                        </div>
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