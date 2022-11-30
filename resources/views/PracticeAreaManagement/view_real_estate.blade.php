@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Real Estate</b></h4>
               <br>



               <div class="row align-items-start">
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <input type="text" class="form-control" placeholder="62G5585W">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Sell">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Buyer</label>
                    <input type="text" class="form-control" placeholder="Patrick">
        </div>
    </div>
  </div>
  
  <div class="row align-items-cener">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <input type="text" class="form-control" placeholder="Dewey Cheatum">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <textarea class="form-control" rows="2" placeholder="1522, Los Angles pin:123 456"></textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Closing Statement</label>
                    <textarea class="form-control" rows="2" placeholder="Total Payable:$233,025.15"></textarea>
                        </div>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Listing Realtor</label>
                    <textarea class="form-control" rows="2" placeholder="Chris Doe"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                    <textarea class="form-control" rows="2" placeholder="John Smith"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Company Title</label>
                    <textarea class="form-control" rows="2" placeholder="Fidelity National"></textarea>
                        </div>
    </div>
</div>

   
   
    
   
      <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



@endsection