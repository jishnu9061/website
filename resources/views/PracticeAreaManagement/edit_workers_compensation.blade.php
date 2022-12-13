@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Edit Workers Compensation</b></h4>
               <br>


               <form action="">
<div class="container">
  <div class="row">
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="604VL-0218-WR">
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                    <input type="text" class="form-control" placeholder="Victor">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Workers Compensation Claim">
                        </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Respondent</label>
                    <input type="text" class="form-control" placeholder="Tower Construction HR Manager Gina">
                        </div>
    </div>
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <input type="text" class="form-control" placeholder="McCarthy and Associates Managing Partner Adam McCarthy">
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Insurer</label>
                    <textarea class="form-control" rows="2">BCBs contact Smith</textarea>
                        </div>
    </div>
  </div>
</div> 

<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adjuster</label>
                    <input type="text" class="form-control" placeholder="Danial Lee">
                        </div>
    </div>
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Claim Number: 123546987 Accident Date: 12/01/2016 17 WC 6525 Court</textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                   <label for="exampleFormControlInput1" class="form-label">Employee Doctor</label>
                  <input type="text" class="form-control" placeholder="Northwestern Hospital">
                      </div>
    </div>
  </div>
</div>
 
<div class="container">
  <div class="row">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Employment & Benefit Details</label>
                    <input type="text" class="form-control" placeholder="Site Coordinator">
                        </div>
    </div>
    <div class="col">
    
    </div>
    <div class="col">
      
    </div>
  </div>
</div>


  <div class="conatainer" style="float:right;">
        <br>
                 <button type="button" class="btn btn-primary">Update</button>
                 <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

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