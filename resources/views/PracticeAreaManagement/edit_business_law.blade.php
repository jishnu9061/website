@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Edit Business Law</b></h4>
               <br>

<form action="">

               <div class="row align-items-start">
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="2017-10-279">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Client</label>
                    <input type="text" class="form-control" placeholder="Hank Wiliams">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
       <input type="text" class="form-control" placeholder="Corporation">
        </div>
    </div>
  </div>
  <div class="row align-items-start">
    <div class="col">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Corporation</label>
                    <textarea class="form-control" rows="2">Country Roads Albums</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Purpose: Producer of county music</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    
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

  <div class="conatainer" style="float:right;">
        <br>
                 <button type="button" class="btn btn-primary">Update</button>
                 <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

    </div>
</form>


@endsection