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
                    <input type="text" class="form-control" value="72G6585K" Disabled>
           </div>
           </div>
           </div>
        <div class="col-md-4">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="John" Disabled>
           </div>
           </div>
        </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Estate Planning" Disabled>
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
                    <textarea class="form-control" rows="2" value="Executor: George" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trust</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="John" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="4456 Kenya" Disabled></textarea>
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
                    <textarea class="form-control" rows="2" value="Chris" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="Smith Investments" Disabled></textarea>
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