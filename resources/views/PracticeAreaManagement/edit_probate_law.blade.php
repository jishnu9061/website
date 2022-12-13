@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Edit Probate Law</b></h4>
               <br>

<form action="">

<div class="row">
    <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="602V-0218-GR/RW">
                        </div>
    </div>
    <div class="col">
        <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Executor / Administator</label>
                    <input type="text" class="form-control" placeholder="Isabel Collier">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Decedent's Estate">
                        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deceased</label>
                    <input type="text" class="form-control" placeholder="Ken Collier">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Cook 2018-PR-2038 will filed Date: 3/05/2014</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <textarea class="form-control" rows="2">EIN: 3201-2032 will Date: 10/23/2013</textarea>
                        </div>
    </div>
  </div>
  <div class="conatainer" style="float:right;">
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

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